<?php
#DEBUG
function print_read($input, $print = 1){
	$ret = print_r($input, 1);
	
	if ($print) print '<pre>'. $ret .'</pre>';
	else return $print;
}

#DB
function sql_connect(){
	global $MYSQL;
	
	$MYSQL = mysqli_connect(MYSQL_server, MYSQL_login, MYSQL_password, MYSQL_db) or die('FAIL');
	mysqli_options($MYSQL, MYSQLI_OPT_INT_AND_FLOAT_NATIVE, true);
	mysqli_set_charset($MYSQL, 'utf8');
}

function sql_close(){
	global $MYSQL;
	
	mysqli_close($MYSQL);
}

function sql($query, $debug = false){
	global $MYSQL;
	
	if ($debug) print_read($query);
	
	return mysqli_query($MYSQL, $query);
}

function sql_obj($sql_object){
	return mysqli_fetch_object($sql_object);
}

function sql_count($query){
	return mysqli_num_rows($query);
}

function sql_lastid(){
	global $MYSQL;

	return mysqli_insert_id($MYSQL);
}

function sql_esc($string){
	global $MYSQL;
	
	return mysqli_real_escape_string($MYSQL, $string);
}

#GET/POST
function g_get($get, $default = false){
	return $_GET[$get] ?? $default;
}

function g_post($post, $default = false){
	return $_POST[$post] ?? $default;
}

function ob2arr($ob){
	return json_decode(json_encode($ob), true, 2147483647);
}

function g_arg($n){
	global $ARGS;
	
	return $ARGS[$n] ?? false;
}

function get_page($url){
	global $DEFINED_PAGES, $TITLE, $ARGS;
	
	$ret_arr = array();
	$ret = 'domu';
	
	$url = preg_replace('#([^a-zA-Z0-9/_])#i', '', $url);
	
	$url_arr = array_values(array_filter(explode('/', $url)));
	unset($url_arr[0]);
	
	$pages_arr = $DEFINED_PAGES;
	
	foreach ($url_arr as $n => $page){
		if (isset($pages_arr[$page])) {
			$TITLE = $pages_arr[$page][1];
			$ret_arr[] = $page;
			if (isset($pages_arr[$page][2])) $pages_arr = $pages_arr[$page][2];
			else break;
		} else break;
	}
	if (isset($n)) $ARGS = array_slice($url_arr, $n);
	
	if (count($ret_arr)) $ret = implode('/', $ret_arr);
	
	//$ret = $ret_arr[1] ?? false;	
	//if (!isset($DEFINED_PAGES[$ret])) $ret = 'domu';
	
	return $ret;
}

#SUGGEST
function suggest_list($array = array()){
	$ret = '';
	
	if (count($array)) {
		$ret .= '<ul>';
		foreach ($array as $k => $v) {
			if (mb_stripos($k, '#') === 0) $ret .= '<li data-value="" class="no_pointer" tabindex="-1">'. $v .'</li>'; 
			else $ret .= '<li data-value="'. $k .'" tabindex="-1">'. $v .'</li>';
		}
		$ret .= '</ul>';
	}
	
	return $ret;
}

function empty_suggest_list($add = false){
	if ($add) return array('+' => 'Přidat: '. $add);
	else return array('#' => 'Nenalezeny žádné výsledky');
}

function save(){
	return '<div class="cols"><div class="col fg1 f-right"><button name="save" class="save">Uložit</button></div></div>';
}

#FORMS
function fill_sql($prefix = '', $cols_arr = array()){
	$ret_arr = array();
	foreach ($cols_arr as $k) $ret_arr[] = ($prefix ? $prefix ."_" : "") . $k ." = '". sql_esc(data($k)) ."'";
	return implode(', ', $ret_arr);
}

function listen_events($field, $array, $limit = array()){
	$ret = '';
	
	$event_arr = array("click" => "", "keyup" => "", "keydown" => "", "focus" => "", "change" => "");
	if (count($limit)) foreach($event_arr as $k => $v) if (!in_array($k, $limit)) unset($event_arr[$k]);
	foreach ($array as $k => $v) if (isset($event_arr[$k])) $event_arr[$k] .= $v;
	
	foreach($event_arr as $k => $v) if ($v) $ret .= 'id("'. $field .'").addEventListener("'. $k .'", function(){'. $v .'});'. PHP_EOL;

	return $ret;
}

function dd_value($dd, $value){
	$ret = '';
	
	$dd_json = file_get_contents('http://'. SERVER .'/ajicek.php?args='. $dd .'/dd_value/'. $value);
	$value = json_decode($dd_json, true)['data'];
	if (stripos($value, 'data-value="+"') === false && stripos($value, 'data-value="#"') === false) $ret = strip_tags($value);
	
	return $ret;
}

function row_dd($field, $name, $dd, $info = '', $additional = array(), $placeholder = false){
	//$additional_default = array("onchange" => "");
	
	if ($placeholder === false) $placeholder = $name;
	$value = data($field) ? dd_value($dd, data($field)) : '';
	
	return '<div id="row_'. $field .'" class="row w100 p10 row_dd'. is_hidden($field) .'">
		<input type="hidden" name="'. $field .'" id="data_'. $field .'" value="'. data($field) .'" data-dd="'. $dd .'" />
		<label for="field_'. $field .'" class="p3">'. $name .'</label>
		<i class="up hide_suggest_box hidden" title="Zavřít nabídku"></i>
		<input type="text" id="field_'. $field .'" name="field_'. $field .'" class="p10 w100" placeholder="'. $placeholder .'" value="'. $value .'" />
		<div class="suggest_box hidden"></div>
		<div id="info_'. $field .'" class="info">'. $info .'</div>
		<script type="text/javascript" id="script_'. $field .'">
			id("field_'. $field .'").addEventListener("keyup", function(){suggest_words(id("field_'. $field .'"), "'. $dd .'");});
			id("field_'. $field .'").addEventListener("focusout", function(){reset_dd();});
			id("field_'. $field .'").addEventListener("focus", function(){hide_suggestion_box(id("field_'. $field .'"));});
			id("field_'. $field .'").parentNode.getElementsByClassName("hide_suggest_box")[0].addEventListener("click", function(){hide_suggestion_box(id("field_'. $field .'").parentNode.getElementsByClassName("hide_suggest_box")[0]);});
			'. listen_events('data_'. $field, $additional, array('change')) .'
			del_el(id("script_'. $field .'"));
		</script>
	</div>';
}

function row_input($field, $name, $unit = '', $info = '', $additional = array(), $placeholder = false){
	if ($placeholder === false) $placeholder = $name;
	
	return '<div id="row_'. $field .'" class="row w100 p10 row_input'. is_hidden($field) .'">
		<label for="'. $field .'" class="p3">'. $name .'</label>
		<span class="units">'. $unit .'</span>
		<input type="text" id="data_'. $field .'" name="'. $field .'" class="p10 w100" placeholder="'. $name .'" value="'. data($field) .'" />
		<div id="info_'. $field .'" class="info">'. $info .'</div>
		<script type="text/javascript" id="script_'. $field .'">
			id("data_'. $field .'").addEventListener("focus", function(){hide_suggestion_box();});
			id("data_'. $field .'").parentNode.getElementsByClassName("units")[0].addEventListener("click", function(){id("'. $field .'").focus();})
			'. listen_events('data_'. $field, $additional) .'
			del_el(id("script_'. $field .'"));
		</script>
	</div>';
}

function row_list($field, $name, $list, $info = '', $empty = true, $additional = array()){
	global $_DATA;
	
	if ($empty) $list = array("" => "&nbsp;") + $list;
	if (!$empty && !data($field)) $_DATA[$field] = key($list);
	
	return '<div id="row_'. $field .'" class="row w100 p10 row_select'. is_hidden($field) .'">
		<input type="hidden" name="'. $field .'" id="data_'. $field .'" value="'. data($field) .'" />
		<label for="field_'. $field .'" class="p3">'. $name .'</label>
		<i class="down hide_suggest_box" title="Otevřít nabídku"></i>
		<div id="field_'. $field .'" class="field_select'. (data($field) ? '' : ' empty_select') .'" tabindex="0">'. ($list[data($field)] ?? 'Vyberte možnost') .'</div>
		<div class="suggest_box hidden">
			'. suggest_list($list) .'
		</div>
		<div id="info_'. $field .'" class="info">'. $info .'</div>
		<script type="text/javascript" id="script_'. $field .'">
			id("field_'. $field .'").addEventListener("focus", function(){select_focus(id("field_'. $field .'"));});
			id("field_'. $field .'").addEventListener("keydown", function(){select_keydown();});
			id("field_'. $field .'").parentNode.getElementsByClassName("hide_suggest_box")[0].addEventListener("click", function(){
				let arrow = id("field_'. $field .'").parentNode.getElementsByClassName("hide_suggest_box")[0];
				if (has_class(arrow, "up")) hide_suggestion_box();
				else id("field_'. $field .'").focus();
			});
			'. listen_events('data_'. $field, $additional, array('change')) .'
			del_el(id("script_'. $field .'"));
		</script>
	</div>'; 
}

function row_info($field, $name, $value, $info = '', $unit = ''){
	return '<div id="row_'. $field .'" class="row w100 p10 row_info'. is_hidden($field) .'">
		<label for="'. $field .'" class="p3 locked">'. $name .'</label>
		<span class="units">'. $unit .'</span>
		<div id="field_'. $field .'" class="locked">'. $value .'</div>
		<div id="info_'. $field .'" class="info">'. $info .'</div>
	</div>';
}

function row_switch($field, $name, $info = '', $additional = array()){
	global $_DATA;
	
	$switch_class = data($field) == 'Y' ? 'switch_on' : 'switch_off';
	
	return '<div id="row_'. $field .'" class="row row_switch w100 p15">
		<input type="hidden" id="data_'. $field .'" name="'. $field .'" value="'. (data($field) ?: 'N') .'" />
		<div class="switch_area '. $switch_class .'" id="field_'. $field .'">
			<div tabindex="0" class="switch_knob_enabled"></div>
		</div>
		<label for="field_'. $field .'">'. $name .'</label>
		<div id="info_'. $field .'" class="info">'. $info .'</div>
		<script type="text/javascript" id="script_'. $field .'">
			id("field_'. $field .'").addEventListener("click", function(){switch_change(id("field_'. $field .'"));});
			id("field_'. $field .'").addEventListener("keydown", function(){switch_change(id("field_'. $field .'"));});
			id("field_'. $field .'").firstElementChild.addEventListener("focus", function(){hide_suggestion_box();});
			'. listen_events('data_'. $field, $additional, array('change')) .'
			del_el(id("script_'. $field .'"));
		</script>
	</div>';
}

function row_slider($field, $name, $start = 0, $end = 100, $info = '', $additional = array(), $step = 1){
	global $_DATA;

	if ((($end - $start) / $step + 1) < 2) return false;
	//Kontrola
	if (data($field) === false) $_DATA[$field] = $start;
	if (data($field) < $start) $_DATA[$field] = $start;
	if (data($field) > $end) $_DATA[$field] = $end;
	
	$default_width = round(((data($field) - $start) / ($end - $start) * 100), 2);
	
	$ret = '<div id="row_'. $field .'" class="row row_slider w100 p10">
		<input type="hidden" name="'. $field .'" id="data_'. $field .'" value="'. data($field) .'" />
		<label for="knob_'. $field .'">'. $name .'</label>
		<div id="slider_'. $field .'" class="slider_range">
			<div id="knob_'. $field .'" tabindex="0" class="slider_knob" style="left: '. $default_width .'%;"></div>
			<div id="range_'. $field .'" class="slider_used" style="width: '. $default_width .'%;"></div>
			<datalist id="datalist_'. $field .'">';
			
	for ($n = $start; $n <= $end; $n += $step) {
		if (is_float($step)) $n = round($n * 1000) / 1000;
		
		$ret .= '<option value="'. $n .'">'. $n .'</option>';
	}
	
	$ret .= '</datalist>
		</div>
		<input type="text" id="field_'. $field .'" class="slider_field" value="'. data($field) .'" />
		<div id="info_'. $field .'" class="info">'. $info .'</div>
		<script type="text/javascript" id="script_'. $field .'">
			id("knob_'. $field .'").addEventListener("pointerdown", function(evt){
				tahoun_pressed = true;
				datalist_slider("'. $field .'");
				
				const move = function(evt) {
					let pozice = slider_knob.offsetLeft + evt.movementX + 10;
					let sirka100 = slider_knob.parentNode.offsetWidth - 2;
					if (pozice < 0) pozice = 0;
					if (pozice > sirka100) pozice = sirka100;

					let offset = Math.round((pozice / sirka100) * 10000)/100;
					slider_range.style.width = slider_knob.style.left = offset +"%";
					slider_field.value = get_slider_field(offset);
					
					evt.preventDefault();
				};
				
				const unregister = function() {
					tahoun_pressed = false;
					
					slider_range.style.width = slider_knob.style.left = get_slider_percentage(slider_knob.style.left) +"%";
					removeEventListener("pointermove", move);
					removeEventListener("pointerup", unregister);
				};
				
				addEventListener("pointermove", move);
				addEventListener("pointerup", unregister);
				
				evt.preventDefault();
			});
			
			id("knob_'. $field .'").parentNode.addEventListener("pointerdown", function(evt){
				hide_suggestion_box();
				datalist_slider("'. $field .'");
				
				let is_pressed = true;
				const knob_boundaries = slider_knob.getBoundingClientRect();
				const knob_middle = (knob_boundaries.right + knob_boundaries.left)/2;
				
				function pressed_slide(){
					if (tahoun_pressed == true) return false;
					
					if (is_pressed == true){
						const slider_position = slider_knob.getBoundingClientRect();
						if (evt.clientX < slider_position.left && evt.clientX < knob_middle) slider_step_minus();
						else if (evt.clientX > slider_position.right && evt.clientX > knob_middle) slider_step_plus();
						
						timeout = setTimeout(pressed_slide, 50);
					}
				}
				
				addEventListener("pointerup", function(){is_pressed = false;});
				
				pressed_slide();
			});
			
			id("knob_'. $field .'").addEventListener("focus", function(evt){hide_suggestion_box();datalist_slider("'. $field .'");});						
			id("knob_'. $field .'").addEventListener("keydown", function(evt){
				evt = evt || window.event;
				
				if([37, 40].includes(evt.keyCode)){
					slider_step_minus();
					evt.preventDefault();
				} else if ([39, 38].includes(evt.keyCode)) {
					slider_step_plus();
					evt.preventDefault();
				}
			});
			
			id("field_'. $field .'").addEventListener("focus", function(){hide_suggestion_box();datalist_slider("'. $field .'");});
			id("field_'. $field .'").addEventListener("change", function(){
				if (tahoun_pressed == true) return false;
				
				let index = slider_values.indexOf(slider_field.value);
				if (index == -1) index = slider_closest_index(slider_field.value);
				
				slider_data.value = slider_field.value = slider_values[index];
				slider_data.dispatchEvent(new Event("change"));
				slider_range.style.width = slider_knob.style.left = Math.round((100 / (slider_length - 1)) * 100)/100 * index +"%";
			});
			
			'. listen_events('data_'. $field, $additional, array('change')) .'
			
			del_el(id("script_'. $field .'"));
		</script>
	</div>';
	
	return $ret;
}

function row_date($field, $name, $info = '', $additional = array()){
	return '<div id="row_'. $field .'" class="row row_date w100 p10">
		<label for="'. $field .'" class="p3">'. $name .'</label>
		<i class="up hide_calendar hidden" title="Zavřít kalendář"></i>
		<input type="text" id="'. $field .'" name="'. $field .'" class="p10 w100" placeholder="DD.MM.RRRR" value="'. date_out(data($field)) .'" />
		<div class="calendar hidden"></div>
		<div id="info_'. $field .'" class="info">'. $info .'</div>
		<script type="text/javascript" id="script_'. $field .'">
			calendar_field = id("'. $field .'");
			calendar_field.addEventListener("focus", function(){
				hide_suggestion_box();
				
				calendar_field = id("'. $field .'");
				calendar_parent = calendar_field.parentNode.getElementsByClassName("calendar")[0];
				fill_calendar_date(calendar_field.value);
				calendar_default = [calendar_year, calendar_month, calendar_day];
				calendar_arrow = calendar_field.parentNode.getElementsByClassName("hide_calendar")[0];
				remove_class(calendar_arrow, "hidden");
				build_calendar();
			});
			
			calendar_field.parentNode.getElementsByClassName("hide_calendar")[0].addEventListener("click", function(){hide_suggestion_box();});
			calendar_field.addEventListener("change", function(){verify_date(calendar_field);});
			calendar_field.addEventListener("keyup", function(){verify_date(calendar_field);});
			calendar_field.addEventListener("focusout", function(){calendar_out(calendar_field);});
			
			'. listen_events($field, $additional, array('change')) .'
			
			del_el(id("script_'. $field .'"));
		</script>
	</div>';
}

function row_checkbox($field, $name, $info){
	
}

function row_text($field, $name, $info){
	
}

function row_radio($field, $name, $info){
	
}

function is_hidden($field){
	global $HIDDEN;
	
	$ret = '';
	if (isset($HIDDEN[$field])) $ret = ' hidden';
	
	return $ret;
}

function hide(){
	global $HIDDEN;
	
	$hide_arr = func_get_args();
	
	foreach ($hide_arr as $hide){
		if (is_array($hide)) foreach($hide as $v) $HIDDEN[$v] = $v;
		else $HIDDEN[$hide] = $hide;
	}
}

#SYSTEM
function location($where = ""){	
	if (!$where) $where = $_SERVER['HTTP_ORIGIN'] . $_SERVER['REQUEST_URI'];
		
	header('Location: '. $where);
	exit;
}

function p2d($post, $default = '', $type = false){
	global $_DATA;
	
	if (isset($_POST[$post])) {
		if ($type == "date") $_DATA[$post] = date_in(g_post($post));
		if ($type == "int") $_DATA[$post] = (int) g_post($post);
		else $_DATA[$post] = g_post($post);
	}
	elseif (data($post)) data($post);
	else $_DATA[$post] = $default;
}

function data($val){
	global $_DATA;
	
	return $_DATA[$val] ?? false;
}

function fill_select($prefix = "", $cols = array()){
	$ret = "";
	
	if ($prefix) foreach ($cols as &$col) $col = $prefix .'_'. $col;
	
	$ret = implode(', ', $cols);
	
	return $ret;
}

function fill_data($row, $cols = array(), $prefix = "", $old = true){
	global $_DATA;
	
	foreach ($cols as $col) {
		$full_col = $col;
		if ($prefix) $full_col = $prefix .'_'. $col;
		$_DATA[$col] = $row->$full_col;
		if ($old) $_DATA['old_'. $col] = $row->$full_col;
	}
}

function post(){
	return count($_POST);
}

#TEMPLATE
function template($vars = array()){
	$ret = file_get_contents('templates/template.tpl');
	foreach ($vars as $k => $v) $ret = str_replace('{%'. $k .'%}', $v, $ret);
	
	return $ret;
}

function columns_start(){
	print '<div class="cols">';
}

function column_start($size = 1){
	$size = 'fg'. valid_range($size, 1, 10);
	print '<div class="col '. $size .'">';
}

function columns_end(){
	print '</div>';
}

function column_end(){
	print '</div>';
}

function blok_start($name){
	print '<div class="blok">';
	print '<h3>'. $name .'</h3>';
}

function blok_end(){
	print '</div>';
}

function row_multi_start(){
	print '<div class="row_multi">';
}

function row_multi_end(){
	print '</div>';
}

function valid_range($number, $min, $max) {
	if ($number > $max) $number = $max;
	if ($number < $min) $number = $min;
	
	return $number;
}

function date_out($date){
	if (!$date) return false;
	
	return date('d.m.Y', strtotime($date));
}

function date_in($date){
	if (!$date) return false;
	
	return date('Y-m-d', strtotime($date));
}

function menu($menu, $link = '', $level = 0){
	$ret = '<ul'. ($level ? ' class="sub_menu"' : '') .'>';
	
	foreach ($menu as $k => $v){
		if (!$v[0]) continue;
		
		if ($link) $k = $link .'/'. $k;
		
		$drop = isset($v[2]) && count($v[2]);
		$ret .= ($drop) ? '<li class="menu_dropdown">' : '<li>';
		$ret .= '<a href="./'. $k .'/">';
		if ($level) $ret .= '<span>';
		$ret .= $v[1];
		if ($level) $ret .= '</span>';
		$ret .= '</a>';
		if ($drop) {
			$ret .= '<i class="menu_dd_down"></i>';
			$ret .= menu($v[2], $k, ++$level);
		}
		$ret .= '</li>';
	}
	
	$ret .= '</ul>';
	
	return $ret;
}

function breadcrumb_navigation($navigation){
	global $DEFINED_PAGES;
	
	$ret = '';
	$link = './';
	
	$nav_arr = explode('/', $navigation);		
	$arr = $DEFINED_PAGES;
	
	foreach ($nav_arr as $key){
		$link .= $key .'/';
		
		$ret .= ' <i> </i> ';
		$ret .= '<a href="./'. $link .'">'. $arr[$key][1] .'</a>';
		
		$arr = $arr[$key][2] ?? false;
	}
	
	return $ret;
}

function info($message){
	print '<div class="info_message">'. $message .'</div>';
}
?>