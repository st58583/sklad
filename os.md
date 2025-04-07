# Otázky
test
<details>
  <summary>Obsah</summary>

## Obsah
1) _[Definice OS: typy OS; design OS: abstrakce a operace nad nimi – služby, systémová volání.](#definice-os-typy-os-design-os-abstrakce-a-operace-nad-nimi-–-služby-systémová-volání)_
    1. [Dvě základní funkce OS (s vysvětlením).](#dvě-základní-funkce-os-s-vysvětlením) [2]
    2. [Vlastnosti moderního OS.](#vlastnosti-moderního-os) [4]
    3. [Typy OS podle účelu (alespoň šest).](#typy-os-podle-účelu-alespoň-šest) [3]
    4. [Reprezentace abstrakcí (koncepcí) v OS a definice systémového volání.](#reprezentace-abstrakcí-koncepcí-v-os-a-definice-systémového-volání) [2]
    5. [Průběh systémového volání.](#průběh-systémového-volání) [3]
    6. [Příklady systémových volání a co obstarvají (alespoň tři).](#příklady-systémových-volání-a-co-obstarvají-alespoň-tři) [1]

2) _[Architektura jádra OS: monolitický systém, vrstvený systém, virtualizace na úrovni jádra OS, mikrojádro.](#architektura-jádra-os-monolitický-systém-vrstvený-systém-virtualizace-na-úrovni-jádra-os-mikrojádro)_

    1. [Definice monolitického jádra OS.](#definice-monolitického-jádra-os) [2]
    2. [Definice vrstveného jádra OS a čím se liší od monolitického s vnitřní strukturou vrstev.](#definice-vrstveného-jádra-os-a-čím-se-liší-od-monolitického-s-vnitřní-strukturou-vrstev) [2]
    3. [Definice mikrojádra OS a které funkce zajišťuje.](#definice-mikrojádra-os-a-které-funkce-zajišťuje) [3]
    4. [Jak jsou v OS s mikrojádrem zajištěny ostatní funkcionality (které nejsou v mikrojádru).](#jak-jsou-v-os-s-mikrojádrem-zajištěny-ostatní-funkcionality-které-nejsou-v-mikrojádru) [2]
    5. [Definice virtualizace na úrovni jádra OS s příkladem.](#definice-virtualizace-na-úrovni-jádra-os-s-příkladem) [3]
    6. [Příklady OS různých architektur jádra (monolitické, vrstvené, mikrojádro).](#příklady-os-různých-architektur-jádra-monolitické-vrstvené-mikrojádro) [3]

3) _[Návrh OS a jeho bezpečnost: důvody náročnosti implementace OS, principy jeho vývoje; zabezpečení systému, uživatelských dat a procesů.](#návrh-os-a-jeho-bezpečnost-důvody-náročnosti-implementace-os-principy-jeho-vývoje-zabezpečení-systému-uživatelských-dat-a-procesů)_

    1. [Hlavní obecné cíle návrhu OS.](#hlavní-obecné-cíle-návrhu-os) [4]
    2. [Důvody náročnosti návrhu OS.](#důvody-náročnosti-návrhu-os) [5]
    3. [Principy vývoje OS.](#principy-vývoje-os) [3]
    4. [Způsoby zabezpečení procesů, dat na médiu a přenášených dat.](#způsoby-zabezpečení-procesů-dat-na-médiu-a-přenášených-dat) [3]

4) _[CPU: provádění instrukce, pipeline, atomicita a přerušitelnost procesu a průběhu zpracování instrukce, přerušovací systém, průběh zpracování přerušení, časovač, sdílení času.](#cpu-provádění-instrukce-pipeline-atomicita-a-přerušitelnost-procesu-a-průběhu-zpracování-instrukce-přerušovací-systém-průběh-zpracování-přerušení-časovač-sdílení-času)_

    1. [Popis fází provádění instrukce.](#popis-fází-provádění-instrukce) [4]
    2. [Definice pipeline a další možnosti zvyšování výkonu CPU.](#definice-pipeline-a-další-možnosti-zvyšování-výkonu-cpu) [4]
    3. [Přerušitelnost procesu, průběhu zpracování instrukce.](#přerušitelnost-procesu-průběhu-zpracování-instrukce) [2]
    4. [Přerušovací systém: účel, průběh přerušení.](#přerušovací-systém-účel-průběh-přerušení) [5]

5) _[Vstupně‑výstupní zařízení: ovladače a techniky programování vstupu a výstupu, DMA. Paměť cache, procesorová cache a střední přístupová doba do paměti.](#vstupně‑výstupní-zařízení-ovladače-a-techniky-programování-vstupu-a-výstupu-dma-paměť-cache-procesorová-cache-a-střední-přístupová-doba-do-paměti)_

    1. [Popis metod komunikace se vstupně‑výstupním zařízením:](#popis-metod-komunikace-se-vstupněvýstupním-zařízením)
    2. [Metoda 1 (neefektivní).](#metoda-1-neefektivní) [2]
    3. [Metoda 2 (efektivnější).](#metoda-2-efektivnější) [2]
    4. [Metoda 3 (nejefektivnější).](#metoda-3-nejefektivnější) [3]
    5. [Definice paměti cache.](#definice-paměti-cache) [2]
    6. [Důvod existence konceptu paměti cache.](#důvod-existence-konceptu-paměti-cache) [1]
    7. [Důvod efektivity cache i při její relativně malé velikosti.](#důvod-efektivity-cache-i-při-její-relativně-malé-velikosti) [2]
    8. [Výpočet střední přístupové doby do paměti.](#výpočet-střední-přístupové-doby-do-paměti) [3]

6) _[Požadavky OS na HW nutný pro jeho implementaci: zejména na procesor, správu a adresování paměti. Registry CPU.](#požadavky-os-na-hw-nutný-pro-jeho-implementaci-zejména-na-procesor-správu-a-adresování-paměti-registry-cpu)_

    1. [Nutné vlastnosti CPU a paměti pro implementaci OS a jejich účel.](#nutné-vlastnosti-cpu-a-paměti-pro-implementaci-os-a-jejich-účel) [2 + 3]
    2. [Nutné subsystémy HW pro implementaci OS (kromě CPU a paměti) a jejich účel.](#nutné-subsystémy-hw-pro-implementaci-os-kromě-cpu-a-paměti-a-jejich-účel) [2 + 2]
    3. [Definice registrů CPU, jejich druhy.](#definice-registrů-cpu-jejich-druhy) [1 + 2]
    4. [Stavový registr CPU a zahrnuté příznaky (alespoň tři).](#stavový-registr-cpu-a-zahrnuté-příznaky-alespoň-tři) [3]

7) _[Implementace procesu v OS: proces a program, tabulka procesů, přepínání kontextu, stav procesu, třístavový model, příčiny změn stavů.](#implementace-procesu-v-os-proces-a-program-tabulka-procesů-přepínání-kontextu-stav-procesu-třístavový-model-příčiny-změn-stavů_)_

    1. [Proces a program: definice.](#proces-a-program-definice) [2]
    2. [Metadata procesu (alespoň šest).](#metadata-procesu-alespoň-šest) [3]
    3. [Průběh přepnutí kontextu.](#průběh-přepnutí-kontextu) [3]
    4. [Třístavový model: popis stavů.](#třístavový-model-popis-stavů) [3]
    5. [Třístavový model: příčiny přechodů mezi stavy.](#třístavový-model-příčiny-přechodů-mezi-stavy) [4]

8) _[Procesy v OS UNIX/Linux: vznik a zánik procesu, systémová volání fork(2), exec(3), exit(3), wait(2), kill(2); hierarchie procesů, stavy procesů v Linuxu (podle příkazu ps); posixové signály a jejich zpracování.](#procesy-v-os-unixlinux-vznik-a-zánik-procesu-systémová-volání-fork2-exec3-exit3-wait2-kill2-hierarchie-procesů-stavy-procesů-v-linuxu-podle-příkazu-ps-posixové-signály-a-jejich-zpracování)_

    1. [Příčiny vzniku procesu a spuštění nového programu v posixových systémech, související systémová volání, hierarchie procesů.](#příčiny-vzniku-procesu-a-spuštění-nového-programu-v-posixových-systémech-související-systémová-volání-hierarchie-procesů) [4]
    2. [Příčiny zániku procesu a čekání na potomka v posixových systémech, související systémová volání.](#příčiny-zániku-procesu-a-čekání-na-potomka-v-posixových-systémech-související-systémová-volání) [4]
    3. [Stavy procesů v Linuxu.](#stavy-procesů-v-linuxu) [4]
    4. [Posixové signály, možnosti jejich zpracování a příklady.](#posixové-signály-možnosti-jejich-zpracování-a-příklady) [3]

9) _[Vlákna: motivace zavedení vláken, proces × vlákno, možné implementace vláken, obecné problémy při implementaci a používání vláken; knihovna posixových vláken: mutex, bariéra, podmínková proměnná a jejich použití.](#vlákna-motivace-zavedení-vláken-proces-×-vlákno-možné-implementace-vláken-obecné-problémy-při-implementaci-a-používání-vláken-knihovna-posixových-vláken-mutex-bariéra-podmínková-proměnná-a-jejich-použití)_

    1. [Motivace zavedení vláken.](#motivace-zavedení-vláken) [1]
    2. [Společné a samostatné položky metadat procesů/vláken.](#společné-a-samostatné-položky-metadat-procesůvláken) [3]
    3. [Důvody vyhrazené části paměti pro každé vlákno.](#důvody-vyhrazené-části-paměti-pro-každé-vlákno) [2]
    4. [Implementace vláken s podporou OS a bez ní, výhody a nevýhody.](#implementace-vláken-s-podporou-os-a-bez-ní-výhody-a-nevýhody) [4]
    5. [Komplikace při zavádění vláken.](#komplikace-při-zavádění-vláken) [2]
    6. [Posixová knihovna vláken: nástroje pro řešení problémů souběhu a jejich účel.](#posixová-knihovna-vláken-nástroje-pro-řešení-problémů-souběhu-a-jejich-účel) [3]

10) _[Plánovač. Cíle plánování, režimy plánování, plánovací kriteria (cíle) pro plánovací algoritmy, plánovací algoritmy.](#plánovač-cíle-plánování-režimy-plánování-plánovací-kriteria-cíle-pro-plánovací-algoritmy-plánovací-algoritmy)_

    1. [Úloha plánovače, režimy plánování procesů.](#úloha-plánovače-režimy-plánování-procesů) [3]
    2. [Cíle plánování (obecně a dle určení OS).](#cíle-plánování-obecně-a-dle-určení-os) [3]
    3. [Popis plánovacích algoritmů: historické.](#popis-plánovacích-algoritmů-historické) [3]
    4. [Popis plánovacích algoritmů: moderní a specifické.](#popis-plánovacích-algoritmů-moderní-a-specifické) [6]

11) [_Požadavky na plánování v systémech reálného času. Možnosti plánování vláken na víceprocesorových systémech (SMP). Časové a periodické plánování úloh uživatelem – příkazy at a crontab._](#požadavky-na-plánování-v-systémech-reálného-času-možnosti-plánování-vláken-na-víceprocesorových-systémech-smp-časové-a-periodické-plánování-úloh-uživatelem-–-příkazy-at-a-crontab)

    1. [Specifické požadavky na plánování procesů v systémech reálného času, plánovatelnost.](#specifické-požadavky-na-plánování-procesů-v-systémech-reálného-času-plánovatelnost) [4]
    2. [Plánování vláken na systémech SMP a možné optimalizace.](#plánování-vláken-na-systémech-smp-a-možné-optimalizace) [4×2]
    3. [Příkazy pro nastavení spouštění úloh v daném čase a démony, které to obstarávají. Orientačně možnosti konfigurace.](#příkazy-pro-nastavení-spouštění-úloh-v-daném-čase-a-démony-které-to-obstarávají-orientačně-možnosti-konfigurace) [3]

12) _[Požadavky na paměť, alokace, adresování, pevné (statické) a proměnné (dynamické) dělení paměti (fixed partitioning, variable partitioning), fragmentace paměti, typy fragmentace, umisťovací algoritmy.](#požadavky-na-paměť-alokace-adresování-pevné-statické-a-proměnné-dynamické-dělení-paměti-fixed-partitioning-variable-partitioning-fragmentace-paměti-typy-fragmentace-umisťovací-algoritmy)_

    1. [Požadavky na operační paměť (na její vlastnosti).](#požadavky-na-operační-paměť-na-její-vlastnosti) [3]
    2. [Pevné dělení paměti, nevýhody, umisťování procesů.](#pevné-dělení-paměti-nevýhody-umisťování-procesů) [4]
    3. [Dynamické dělení paměti, nevýhody.](#dynamické-dělení-paměti-nevýhody) [4]
    4. [Umisťovací algoritmy pro dynamické dělení paměti (s popisem).](#umisťovací-algoritmy-pro-dynamické-dělení-paměti-s-popisem) [4]

13) _[Problém nedostatku operační paměti, odkládání obsahu paměti na disk, virtuální paměť, motivace k zavedení virtuální paměti, výhody virtualizace paměti, princip lokality odkazů, thrashing.](#problém-nedostatku-operační-paměti-odkládání-obsahu-paměti-na-disk-virtuální-paměť-motivace-k-zavedení-virtuální-paměti-výhody-virtualizace-paměti-princip-lokality-odkazů-thrashing)_

    1. [Možná řešení nedostatku RAM (s vysvětlením principu).](#možná-řešení-nedostatku-ram-s-vysvětlením-principu) [2+2]
    2. [Virtualizace paměti: definice a HW podpora.](#virtualizace-paměti-definice-a-hw-podpora) [3]
    3. [Virtualizace paměti: motivace a důsledky zavedení, princip fungování (proč může fungovat efektivně, přestože je sekundární paměť řádově pomalejší).](#virtualizace-paměti-motivace-a-důsledky-zavedení-princip-fungování-proč-může-fungovat-efektivně-přestože-je-sekundární-paměť-řádově-pomalejší) [2]
    4. [Virtualizace paměti: pojmy (RS, S).](#virtualizace-paměti-pojmy-rs-s) [1]
    5. [Princip lokality odkazů.](#princip-lokality-odkazů) [2]
    6. [Thrashing – definice a příčiny.](#thrashing-–-definice-a-příčiny) [3]

14) _[Stránkování paměti, převod adresy, vlastnosti stránkování, sdílení stránek, volba velikosti stránky, řešení problému rozsáhlých stránkových tabulek, TLB.](#stránkování-paměti-převod-adresy-vlastnosti-stránkování-sdílení-stránek-volba-velikosti-stránky-řešení-problému-rozsáhlých-stránkových-tabulek-tlb)_

    1. [Princip, vlastnosti (spojitost, fragmentace, sdílení).](#princip-vlastnosti-spojitost-fragmentace-sdílení) [5]
    2. [Stránkové tabulky, převod adresy.](#stránkové-tabulky-převod-adresy) [4]
    3. [Volba velikosti stránky a důsledky.](#volba-velikosti-stránky-a-důsledky) [3]
    4. [Řešení rozsáhlosti stránkových tabulek, TLB.](#řešení-rozsáhlosti-stránkových-tabulek-tlb) [3]

15) _[Řídicí bity ve stránkových tabulkách, strategie zavádění, umisťování, nahrazování a uklízení (čištění) stránek paměti, vliv velikosti resident‑set na běh procesů.](#řídicí-bity-ve-stránkových-tabulkách-strategie-zavádění-umisťování-nahrazování-a-uklízení-čištění-stránek-paměti-vliv-velikosti-resident‑set-na-běh-procesů)_

    1. [Důležité řídicí bity ve stránkové tabulce (z hlediska využívání algoritmy nahrazování) a jejich význam.](#důležité-řídicí-bity-ve-stránkové-tabulce-z-hlediska-využívání-algoritmy-nahrazování-a-jejich-význam) [3]
    2. [Strategie zavádění stránek: účel, algoritmy.](#strategie-zavádění-stránek-účel-algoritmy) [3]
    3. [Strategie umisťování stránek: účel, algoritmy.](#strategie-umisťování-stránek-účel-algoritmy) [1]
    4. [Strategie nahrazování stránek: účel, algoritmy.](#strategie-nahrazování-stránek-účel-algoritmy) [4]
    5. [Strategie uklízení (čištění) stránek: účel, algoritmy.](#strategie-uklízení-čištění-stránek-účel-algoritmy) [3]
    6. [Volba velikosti resident‑set.](#volba-velikosti-resident‑set) [1]

16) [_Požadavky na OS pro práci v reálném čase, rozdělení RT OS, pojmy latence a odezva (na úrovni přerušení); vestavěné systémy, OS pro ně a typické požadavky na ně._](#požadavky-na-os-pro-práci-v-reálném-čase-rozdělení-rt-os-pojmy-latence-a-odezva-na-úrovni-přerušení-vestavěné-systémy-os-pro-ně-a-typické-požadavky-na-ně)

    1. [Definice systémů RT (pracujících v reálném čase) a jejich správná funkce.](#definice-systémů-rt-pracujících-v-reálném-čase-a-jejich-správná-funkce) [1]
    2. [Rozdělení systémů RT dle dodržování termínů (s popisem).](#rozdělení-systémů-rt-dle-dodržování-termínů-s-popisem) [3]
    3. [Charakteristické vlastnosti RTOS.](#charakteristické-vlastnosti-rtos) [4]
    4. [Příklady RTOS (alespoň dva).](#příklady-rtos-alespoň-dva) [1]
    5. [Definice pojmů latence a odezva (na úrovni přerušovacího systému).](#definice-pojmů-latence-a-odezva-na-úrovni-přerušovacího-systému) [2]
    6. [Definice vestavěných systémů.](#definice-vestavěných-systémů) [1]
    7. [Typické vlastnosti vestavěných systémů (alespoň šest).](#typické-vlastnosti-vestavěných-systémů-alespoň-šest) [3]

17) [_Víceprocesorové systémy, rozdělení dle vazby a dle symetrie, granulovatelnost úlohy, souvislost s vazbou (víceprocesorových systémů) a stupně paralelismu, distribuované (rozptýlené, clusterové) OS._](#víceprocesorové-systémy-rozdělení-dle-vazby-a-dle-symetrie-granulovatelnost-úlohy-souvislost-s-vazbou-víceprocesorových-systémů-a-stupně-paralelismu-distribuované-rozptýlené-clusterové-os)

    1. [Kategorie počítačových systémů z hlediska paralelizace zpracování dat.](#kategorie-počítačových-systémů-z-hlediska-paralelizace-zpracování-dat) [4]
    2. [Rozdělení víceprocesorových systémů dle vazby.](#rozdělení-víceprocesorových-systémů-dle-vazby) [2]
    3. [Rozdělení víceprocesorových systémů dle symetrie.](#rozdělení-víceprocesorových-systémů-dle-symetrie) [2]
    4. [Granularita úlohy: účel, jak se pozná, že úloha je/není granulovatelná.](#granularita-úlohy-účel-jak-se-pozná-že-úloha-jenení-granulovatelná) [4]
    5. [Vhodné stupně vazby pro různou granularitu.](#vhodné-stupně-vazby-pro-různou-granularitu) [3]

18) [_Soupeření procesů (o prostředky), obecné problémy souběhu, vzájemné vylučování, kritická sekce, předpoklady pro řešení KS, požadované vlastnosti řešení KS, typy řešení._](#soupeření-procesů-o-prostředky-obecné-problémy-souběhu-vzájemné-vylučování-kritická-sekce-předpoklady-pro-řešení-ks-požadované-vlastnosti-řešení-ks-typy-řešení_)

    1. [Definice kritické sekce v programu.](#definice-kritické-sekce-v-programu) [4]
    2. [Předpoklady pro řešení přístupu do kritické sekce. (Co se předpokládá, že platí, a co se nesmí předpokládat.)](#předpoklady-pro-řešení-přístupu-do-kritické-sekce-co-se-předpokládá-že-platí-a-co-se-nesmí-předpokládat) [4]
    3. [Požadované vlastnosti řešení přístupu do kritické sekce (s vysvětlením).](#požadované-vlastnosti-řešení-přístupu-do-kritické-sekce-s-vysvětlením) [3]
    4. [Typy řešení přístupu do kritické sekce (s příklady).](#typy-řešení-přístupu-do-kritické-sekce-s-příklady) [4]

19) [_Řízení přístupu do kritické sekce pomocí SW metod, příklady nevhodných (obecně nefunkčních) SW řešení, SW algoritmy, vlastnosti (nedostatky) SW metod._](#řízení-přístupu-do-kritické-sekce-pomocí-sw-metod-příklady-nevhodných-obecně-nefunkčních-sw-řešení-sw-algoritmy-vlastnosti-nedostatky-sw-metod)

    1. [SW algoritmus pro KS s proměnnou locked, důvod nefunkčnosti.](#sw-algoritmus-pro-ks-s-proměnnou-locked-důvod-nefunkčnosti) [1+1]
    2. [SW algoritmus pro KS s proměnnou turn, důvod nefunkčnosti.](#sw-algoritmus-pro-ks-s-proměnnou-turn-důvod-nefunkčnosti) [1+1]
    3. [SW algoritmus pro KS s proměnnými flag[i], důvod nefunkčnosti.](#sw-algoritmus-pro-ks-s-proměnnými-flagi-důvod-nefunkčnosti) [1+1]
    4. [Funkční SW algoritmy pro řízení přístupu do KS, krátká charakteristika.](#funkční-sw-algoritmy-pro-řízení-přístupu-do-ks-krátká-charakteristika) [2+2]
    5. [Specifické nevýhody SW algoritmů pro řízení přístupu do KS (včetně vysvětlení, bez všeobecných nevýhod všech typů algoritmů).](#specifické-nevýhody-sw-algoritmů-pro-řízení-přístupu-do-ks-včetně-vysvětlení-bez-všeobecných-nevýhod-všech-typů-algoritmů) [5]

20) [_Řízení přístupu do kritické sekce pomocí HW metod, výchozí předpoklady pro HW řešení, algoritmy využívající HW instrukce, vlastnosti (nedostatky) HW metod._](#řízení-přístupu-do-kritické-sekce-pomocí-hw-metod-výchozí-předpoklady-pro-hw-řešení-algoritmy-využívající-hw-instrukce-vlastnosti-nedostatky-hw-metod)

    1. [Hardwarové předpoklady pro řízení přístupu do KS.](#hardwarové-předpoklady-pro-řízení-přístupu-do-ks) [3]
    2. [HW podpora pro řízení přístupu do KS, popis řešení.](#hw-podpora-pro-řízení-přístupu-do-ks-popis-řešení) [2+3]
    3. [Vlastností (nedostatky) HW řešení.](#vlastností-nedostatky-hw-řešení) [4+3]

21) [_Nástroj OS: semafor, jeho popis včetně systémových volání, použití semaforu pro řízení přístupu do KS a pro synchronizaci, problém obědvajících filozofů._](#nástroj-os-semafor-jeho-popis-včetně-systémových-volání-použití-semaforu-pro-řízení-přístupu-do-ks-a-pro-synchronizaci-problém-obědvajících-filozofů)

    1. [Popis nástroje OS: semafor.](#popis-nástroje-os-semafor) [2]
    2. [Popis systémových volání semaforu.](#popis-systémových-volání-semaforu) [1+2+2]
    3. [Popis řešení přístupu do KS používajícího semafor.](#popis-řešení-přístupu-do-ks-používajícího-semafor) [3]
    4. [Popis řešení synchronizace vláken pomocí semaforu.](#popis-řešení-synchronizace-vláken-pomocí-semaforu) [3]
    5. [Definice problému obědvajících filozofů a jeho řešení pomocí semaforů.](#definice-problému-obědvajících-filozofů-a-jeho-řešení-pomocí-semaforů) [2]

22) [_Nástroj OS: předávání zpráv, popis systémových volání a možností blokování, použití fronty zpráv pro řízení přístupu do KS a pro synchronizaci, problém svázaných producentů a konzumentů._](#nástroj-os-předávání-zpráv-popis-systémových-volání-a-možností-blokování-použití-fronty-zpráv-pro-řízení-přístupu-do-ks-a-pro-synchronizaci-problém-svázaných-producentů-a-konzumentů)

    1. [Popis nástroje OS: předávání zpráv.](#popis-nástroje-os-předávání-zpráv) [3]
    2. [Popis typické implementace (ne)blokování systémových volání pro předávání zpráv.](#popis-typické-implementace-neblokování-systémových-volání-pro-předávání-zpráv) [3]
    3. [Popis řešení KS používajícího frontu zpráv.](#popis-řešení-ks-používajícího-frontu-zpráv) [3]
    4. [Popis řešení synchronizace vláken pomocí fronty zpráv.](#popis-řešení-synchronizace-vláken-pomocí-fronty-zpráv) [3]
    5. [Definice problému svázaných producentů a konzumentů a jeho řešení pomocí fronty zpráv.](#definice-problému-svázaných-producentů-a-konzumentů-a-jeho-řešení-pomocí-fronty-zpráv) [3]

23) [_Nástroj programovacích jazyků: koncept monitoru, problém producentů a konzumentů a jeho řešení pomocí monitoru._](#nástroj-programovacích-jazyků-koncept-monitoru-problém-producentů-a-konzumentů-a-jeho-řešení-pomocí-monitoru)

    1. [Popis konceptu monitoru: jeho účel, struktura a základní vlastnosti.](#popis-konceptu-monitoru-jeho-účel-struktura-a-základní-vlastnosti) [2+2]
    2. [Popis řešení KS pomocí monitoru.](#popis-řešení-ks-pomocí-monitoru) [2]
    3. [Popis řešení synchronizace vláken pomocí monitoru.](#popis-řešení-synchronizace-vláken-pomocí-monitoru) [3]
    4. [Definice problému svázaných producentů a konzumentů a jeho řešení pomocí monitoru, podmínky použité u synchronizace a zdůvodnění jejich použití.](#definice-problému-svázaných-producentů-a-konzumentů-a-jeho-řešení-pomocí-monitoru-podmínky-použité-u-synchronizace-a-zdůvodnění-jejich-použití) [6]

24) [_Nástroje knihovny posixových vláken: mutex, bariéra, podmínková proměnná._](#nástroje-knihovny-posixových-vláken-mutex-bariéra-podmínková-proměnná)

    1. [Popis mutexu, účel a vlastnosti, popis funkcí.](#popis-mutexu-účel-a-vlastnosti-popis-funkcí) [3]
    2. [Způsob použití mutexu.](#způsob-použití-mutexu) [2]
    3. [Bariéra: účel, použití a popis funkcí (včetně návratové hodnoty funkce čekání).](#bariéra-účel-použití-a-popis-funkcí-včetně-návratové-hodnoty-funkce-čekání) [1+4]
    4. [Podmínková proměnná: účel, způsob použití a vlastnosti.](#podmínková-proměnná-účel-způsob-použití-a-vlastnosti) [1+4]

25) [_Stav uváznutí (deadlock) a vyhladovění (definice a rozdíl), nutné podmínky pro vznik stavu uváznutí, předcházení a řešení problému stavu uváznutí, algoritmus bankéře._](#stav-uváznutí-deadlock-a-vyhladovění-definice-a-rozdíl-nutné-podmínky-pro-vznik-stavu-uváznutí-předcházení-a-řešení-problému-stavu-uváznutí-algoritmus-bankéře)

    1. [Definice stavu uváznutí (deadlock).](#definice-stavu-uváznutí-deadlock) [2]
    2. [Definice stavu vyhladovění (starvation), příklad.](#definice-stavu-vyhladovění-starvation-příklad) [1]
    3. [Vysvětlení podmínek pro vznik stavu uváznutí.](#vysvětlení-podmínek-pro-vznik-stavu-uváznutí) [4]
    4. [Přístupy k řešení odstranění vzniklého stavu uváznutí.](#přístupy-k-řešení-odstranění-vzniklého-stavu-uváznutí) [3]
    5. [Způsoby prevence vzniku stavu uváznutí.](#způsoby-prevence-vzniku-stavu-uváznutí) [3]
    6. [Popis bankéřova algoritmu aplikovaného na procesy (s popisem stavů).](#popis-bankéřova-algoritmu-aplikovaného-na-procesy-s-popisem-stavů) [2]

26) [_IPC: komunikace procesů a vláken, možné prostředky komunikace._](#ipc-komunikace-procesů-a-vláken-možné-prostředky-komunikace)

    1. [Možné prostředky pro komunikaci procesů / vláken.](#možné-prostředky-pro-komunikaci-procesů--vláken) [5]
    2. [Krátká charakteristika prostředků pro komunikaci procesů / vláken.](#krátká-charakteristika-prostředků-pro-komunikaci-procesů--vláken) [5]
    3. [Popis funkcí pro sokety (alespoň pěti typů).](#popis-funkcí-pro-sokety-alespoň-pěti-typů) [5]

27) [_Dělení disku na oddíly, zavaděč OS, důvody dělení, MBR, GPT, swap._](#dělení-disku-na-oddíly-zavaděč-os-důvody-dělení-mbr-gpt-swap)

    1. [Popis důvodů pro rozdělení disku na oddíly.](#popis-důvodů-pro-rozdělení-disku-na-oddíly) [4]
    2. [Popis MBR a způsob dělení disku na oddíly.](#popis-mbr-a-způsob-dělení-disku-na-oddíly) [3]
    3. [Popis typů oddílů (pro dělení MBR).](#popis-typů-oddílů-pro-dělení-mbr) [3]
    4. [Charakterizace GPT.](#charakterizace-gpt) [3]
    5. [Vysvětlení rozdílů mezi odkládacím prostorem (swap) na samostatném diskovém oddíle a v souboru.](#vysvětlení-rozdílů-mezi-odkládacím-prostorem-swap-na-samostatném-diskovém-oddíle-a-v-souboru) [2]

28) [_Souborový systém, metadata, speciální soubory._](#souborový-systém-metadata-speciální-soubory)

    1. [Popis obecné struktury souborových systémů a jejich metadat.](#popis-obecné-struktury-souborových-systémů-a-jejich-metadat) [3]
    2. [Metadata souborů vyjma oprávnění (alespoň šest).](#metadata-souborů-vyjma-oprávnění-alespoň-šest) [3]
    3. [Možná oprávnění na soubor (alespoň šest).](#možná-oprávnění-na-soubor-alespoň-šest) [3]
    4. [Popis zvláštních typů souborů (alespoň čtyř).](#popis-zvláštních-typů-souborů-alespoň-čtyř) [2]
    5. [Charakteristika typů odkazů a jejich reprezentace na souborovém systému.](#charakteristika-typů-odkazů-a-jejich-reprezentace-na-souborovém-systému) [2+2]

29) [_Konzistence metadat souborových systémů: příčiny vzniku nekonzistencí, metody zachování konzistence, vlastnosti metod, příklady souborových systémů._](#konzistence-metadat-souborových-systémů-příčiny-vzniku-nekonzistencí-metody-zachování-konzistence-vlastnosti-metod-příklady-souborových-systémů)

    1. [Popis příčiny vzniku nekonzistence metadat souborového systému.](#popis-příčiny-vzniku-nekonzistence-metadat-souborového-systému) [3]
    2. [Popis principu žurnálování (včetně nevýhod) a činnost obnovy konzistence po pádu.](#popis-principu-žurnálování-včetně-nevýhod-a-činnost-obnovy-konzistence-po-pádu) [5]
    3. [Popis principu metody copy‑on‑write (včetně nevýhod) a činnost obnovy konzistence po pádu.](#popis-principu-metody-copyonwrite-včetně-nevýhod-a-činnost-obnovy-konzistence-po-pádu) [4]
    4. [Příklady souborových systémů ve vztahu k metodě zachování konzistence, alespoň dva různé pro každou metodu (nikoliv různé verze téhož), pro žurnálování zvlášť po dvou příkladech pro dvojí způsob.](#příklady-souborových-systémů-ve-vztahu-k-metodě-zachování-konzistence-alespoň-dva-různé-pro-každou-metodu-nikoliv-různé-verze-téhož-pro-žurnálování-zvlášť-po-dvou-příkladech-pro-dvojí-způsob) [3]

30) [_Typy úložišť, RAID, způsob alokace dat souborů._](#typy-úložišť-raid-způsob-alokace-dat-souborů)

    1. [Popis typů úložišť (DAS, NAS, SAN) s příklady.](#popis-typů-úložišť-das-nas-san-s-příklady) [3]
    2. [Charakteristika RAID (způsob zapojení včetně minimálního počtu disků a principu ukládání dat, odolnost, rychlost R/W).](#charakteristika-raid-způsob-zapojení-včetně-minimálního-počtu-disků-a-principu-ukládání-dat-odolnost-rychlost-rw)
    3. [RAID 0.](#raid-0) [3]
    4. [RAID 1.](#raid-1) [3]
    5. [RAID 5.](#raid-5) [3]
    6. [Charakteristika možných způsobů alokace dat pro soubory.](#charakteristika-možných-způsobů-alokace-dat-pro-soubory) [3]

31) _Vzdálený přístup k OS, telnet, SSH, autentizace, autorizace, zásady tvorby hesla, typy útoků na systém a prevence._

    1. Definice pojmů autentizace a autorizace. [2]
    2. Možné metody autentizace (alespoň čtyři). [2]
    3. Popis principu zabezpečení přihlašování pomocí protokolu SSH. [3]
    4. Riziko přihlašování pomocí protokolu SSH a jak mu předcházet. [2+2]
    5. Zásady tvorby hesla (čtyři nejdůležitější). [2]
    6. Popis alespoň čtyř typů útoků na systém. [2]

</details>

1. ## Definice OS: typy OS; design OS: abstrakce a operace nad nimi – služby, systémová volání.
    1. ### Dvě základní funkce OS (s vysvětlením).
        Bodové ohodnocení: **2**

        - Zjednodušení přístupu k HW
            
            Poskytuje abstrakce nad HW, aby se programy nemusely zabývat přímou interakcí s konkrétní komponentou. Např. čtení a zápis na disk. Programátor pracuje na úrovni souborů nad souborovým systémem, OS pracuje s blokovým zařízením a jeho ovladač pak zajistí čtení z flash‑disku, pevného disku, optické mechaniky apod.

        - Spravování prostředků

            Prostředky jsou omezené a je nutné je sdílet (multiplexing) mezi procesy, a to buď v čase (CPU, tiskárna) nebo v prostoru (operační paměť, úložiště). Např. tisk na tiskárnu. Pokud by přístup k tiskárně nebyl řízen, mohlo by dojít ke kolizi požadavků různých procesů a tiskárna by mohla vytisknout jen část textu, případně by stránka byla mixem výstupů.

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-1--whatsOS)

    2. ### Vlastnosti moderního OS.
        Bodové ohodnocení: **4**

        - Preemptivní plánování procesů/vláken
        - Izolace procesů
        - Správa paměti (RAM - virtualizace, úložiště - souborové systémy)
        - Izolace uživatelů (oprávnění na procesy i souborů)
        - Podpora IPC (předchází deadlock)

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-6--features)

    3. ### Typy OS podle účelu (alespoň šest).
        Bodové ohodnocení: **3**

        - Mainframe OS
        - Serverové OS
        - OS pro osobní počítače
        - Realtime OS
        - Vestavěné OS
        - Smart card OS
        
        Zdroj: [Moodle](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-3--zoo)
        
    4. ### Reprezentace abstrakcí (koncepcí) v OS a definice systémového volání.
        Bodové ohodnocení: **2**

        - Koncepce jsou reprezentovány datovými strukturami a operacemi nad nimi
            + Např. procesy - Process Control Block, tabulka procesů
        - Systémové volání volá služby jádra OS.

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2001%20%E2%80%93%20definice%20OS,%20generace,%20d%C4%9Blen%C3%AD,%20syscalls,%20koncepce,%20struktura.pdf#page=14), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-4--concepts)
        
    5. ### Průběh systémového volání.
        Bodové ohodnocení: **3**

        1. Uložení parametrů na stack (zásobník, část paměti procesu pro tento účel).
        2. Program volá systémovou funkci v knihovně.
        3. Knihovna nastaví registr (procesoru) na typ volání.
        4. Provede se se skok do jádra OS, obvykle pomocí instrukce TRAP.
        5. Jádro OS provede vyhodnocení služby (dispatch) a následně volá příslušný ovladač nebo funkci.
        6. Po dokončení operace může následovat návrat do knihovny a zpět do procesu. Volání ale může být blokující (proces nemůže pokračovat, dokud nemá výsledky), takže OS mezitím může aktivovat jiný proces.

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-4-5--syscalls)

    6. ### Příklady systémových volání a co obstarvají (alespoň tři).
        Bodové ohodnocení: **1**

        - Procesy
            + Vznik
            + Nahrazení
            + Ukončení
        - Soubory (a operace V/V) 
            + Otevření
            + Zavření
            + Čtení
            + Zápis

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-4-5--syscalls)

2) ## Architektura jádra OS: monolitický systém, vrstvený systém, virtualizace na úrovni jádra OS, mikrojádro.

    1. ### Definice monolitického jádra OS.
        Bodové ohodnocení: **2**

        - Z hlediska hierarchie volání procedur je jádro OS vnitřně nečleněné
        - Každá funkce (procedura) může volat libovolnou jinou
        - Mohou mít i strukturu
            + Hlavní program (obsahuje dispatcher)
            + Obslužné procedury (pro systémová volání, ovladače)
            + Užitkové procedury (pro použití ostatními procedurami)
        - Procedury mají pevně definované rozhraní

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-5-1--monolithic)

    2. ### Definice vrstveného jádra OS a čím se liší od monolitického s vnitřní strukturou vrstev.
        Bodové ohodnocení: **2**

        - Jádro OS je rozděleno na oddělené vrstvy
        - Jedna vrstva smí volat jen procedury stejné nebo nejbližší nižší vrstvy (na rozdíl od monolitického jádra)

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-5-2--layered)

    3. ### Definice mikrojádra OS a které funkce zajišťuje.
        Bodové ohodnocení: **3**

        - Poskytuje pouze nejnutnější funkce
            + Plánování procesů (alokace CPU)
            + Komunikaci mezi procesy (IPC)
            + Ochranu a virtualizaci paměti

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-5-5--microkernels)

    4. ### Jak jsou v OS s mikrojádrem zajištěny ostatní funkcionality (které nejsou v mikrojádru).
        Bodové ohodnocení: **2**

        - Jsou implementovány v klientských (neprivilegovaných) procesech
        - Komunikují s jádrem v modelu klient-server

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2001%20%E2%80%93%20definice%20OS,%20generace,%20d%C4%9Blen%C3%AD,%20syscalls,%20koncepce,%20struktura.pdf#page=26), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-5-5--microkernels)

    5. ### Definice virtualizace na úrovni jádra OS s příkladem.
        Bodové ohodnocení: **3**

        - VM monitor se stará o alokaci procesoru pro jednotlivé instance systému (multiprogramming)
        - Izoluje izolace skupin procesů, uživatelů (vč. správce), sítě i souborového systému
        - Jádro běží pouze jedenkrát

        Zdroje: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-5-3--virtualized), [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2001%20%E2%80%93%20definice%20OS,%20generace,%20d%C4%9Blen%C3%AD,%20syscalls,%20koncepce,%20struktura.pdf#%5B%7B%22num%22%3A437%2C%22gen%22%3A0%7D%2C%7B%22name%22%3A%22XYZ%22%7D%2C0%2C595.2%2C0%5D)

    6. ### Příklady OS různých architektur jádra (monolitické, vrstvené, mikrojádro).
        Bodové ohodnocení: **3**

        - Monolitické
            + Linux
            + Windows
        - Vrstvené
            + MULTICS
            + THE
        - Mikrojádro
            + QNX
            + MINIX

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908#OS-1-5--structure)

3) ## Návrh OS a jeho bezpečnost: důvody náročnosti implementace OS, principy jeho vývoje; zabezpečení systému, uživatelských dat a procesů.

    1. ### Hlavní obecné cíle návrhu OS.
        Bodové ohodnocení: **4**

        - Definovat abstrakce
        - Poskytnout základní (primitivní) operace
        - Zajistit izolaci
        - Spravovat hardware

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2010%20%E2%80%93%20design%20a%20bezpe%C4%8Dnost.pdf#page=3), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7749#OS-13-1--essence-problem-design)

    2. ### Důvody náročnosti návrhu OS.
        Bodové ohodnocení: **5**

        - Rozsáhlost, komplexnost, složitost
        - Konkurence – uživatelé, procesy, prostředky
        - Ochrana – nepřátelské prostředí
        - Sdílení dat a prostředků
        - Životnost
        - Obecnost použití
        - Přenositelnost
        - Zpětná kompatibilita

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2010%20%E2%80%93%20design%20a%20bezpe%C4%8Dnost.pdf#page=8), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7749#OS-13-2-1--complexities)

    3. ### Principy vývoje OS.
        Bodové ohodnocení: **3**

        - Jednoduchost
        - Úplnost
        - Efektivita implementace

        Zdroje: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7749#OS-13-3--principles), [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2010%20%E2%80%93%20design%20a%20bezpe%C4%8Dnost.pdf#page=9)

        <!-- TODO: Je nutné to nějak rozvést? -->

    4. ### Způsoby zabezpečení procesů, dat na médiu a přenášených dat.
        Bodové ohodnocení: **3**

        - Izolace procesů (jejich alokované zdrojů, např. paměť)
        - Řízení ochrany (přístupová práva)
            + Dat, souborů, ale i dalších prostředků a operací nad nimi
        - Šifrování
            + Symetrická kryptografie
            + Asymetrická kryptografie
            + Jednosměrné (hash) funkce
            + Digitální podpisy

        Zdroje: [Moodle (prezentace, snímek 5)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2010%20%E2%80%93%20design%20a%20bezpe%C4%8Dnost.pdf#page=5), [Moodle (prezentace, snímek 24)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2010%20%E2%80%93%20design%20a%20bezpe%C4%8Dnost.pdf#page=24), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7749#OS-13-1-2--insulation)

        <!-- TODO: Je toto vše? -->

4) ## CPU: provádění instrukce, pipeline, atomicita a přerušitelnost procesu a průběhu zpracování instrukce, přerušovací systém, průběh zpracování přerušení, časovač, sdílení času.

    1. ### Popis fází provádění instrukce.
        Bodové ohodnocení: **4**

        - Fetch (načtení instrukce)
        - Decode (dekódování; zjištění, co má instrukce udělat)
        - Execute (provedení)
        - Write-back (zápis výsledků)

        Zdroje: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-1-1--instruction-processing), [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=2)

    2. ### Definice pipeline a další možnosti zvyšování výkonu CPU.
        Bodové ohodnocení: **4**

        - Spekulativní provádění instrukcí (některé instrukce jsou prováděny mimo pořadí)
        - Použití pipeline (paralelní zpracování instrukcí na základě rozdělení zpracování instrukce na nezávislé kroky)
        - Hyperthreading (sdílení částí CPU mezi vlákny)
        - Více jader (duplicitní CPU v jednom pouzdře)

        Zdroje: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-1-2--performance-increasing), [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=3)

    3. ### Přerušitelnost procesu, průběhu zpracování instrukce.
        Bodové ohodnocení: **2**

        - Proces lze přerušit mezi instrukcemi
        - Instrukci nelze přerušit 

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=11)

    4. ### Přerušovací systém: účel, průběh přerušení.
        Bodové ohodnocení: **5**

        - Umožní efektivní využití CPU (preemptivní plánování), nutné pro DMA
        - Průběh
            1. _CPU_: dokončení rozpracované instrukce
            2. _CPU_: uloží adresa návratu (na systémový stack)
            3. _CPU_: skok na obslužnou rutinu přerušení
            4. _Rutina_: uloží se kontext (registry z CPU) do tabulky procesů (nebo na systémový stack)
            5. _Rutina_: obsluha přerušení (IRQ časovače: plánovač)
            6. _Rutina_: vrátí se kontext (do CPU), návrat do procesu
            7. Plánovač může naplánovat také jiný proces

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=12)

5) ## Vstupně‑výstupní zařízení: ovladače a techniky programování vstupu a výstupu, DMA. Paměť cache, procesorová cache a střední přístupová doba do paměti.

    1. ### Popis metod komunikace se vstupně‑výstupním zařízením:
        2. #### Metoda 1 (neefektivní).
            Bodové ohodnocení: **2**
            
            - Přístup pomocí instrukcí CPU 
                1. Zápis na V/V
                2. Kontrola stavu (čekání)
                3. Pokračování zápisu

        3. #### Metoda 2 (efektivnější).
            Bodové ohodnocení: **2**
            
            - Přístup s využitím přerušení
                1. Zápis na V/V
                2. Provádění jiných operací
                3. Po dokončení: přerušení jiných operací – pokračování zápisu

        4. #### Metoda 3 (nejefektivnější).
            Bodové ohodnocení: **3**
            
            - DMA (Direct Memory Access) a IRQ
                1. Zápis adresy dat, množství dat a příkazu do registru V/V zařízení
                2. Provádění jiných operací
                3. Po dokončení: přerušení jiných operací – dokončení zápisu

        Zdroje: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-3-1--IOprogramming), [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=10)

    5. ### Definice paměti cache.
        Bodové ohodnocení: **2**
        
        - Rychlá paměť mezi rychlým a pomalejším zařízením

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=8), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-2-1--cache)

    6. ### Důvod existence konceptu paměti cache.
        Bodové ohodnocení: **1**
        
        - Čím rychlejší paměť, tím dražší
        - Pomalejší paměť (např. RAM) zdržuje rychlejší zařízení (např. CPU)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=8), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-2-1--cache)

    7. ### Důvod efektivity cache i při její relativně malé velikosti.
        Bodové ohodnocení: **2**
        
        - Princip lokality odkazů (tendence odkazovat se do omezené oblasti paměti)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=8), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-2-1--cache)

    8. ### Výpočet střední přístupové doby do paměti.
        Bodové ohodnocení: **3**
        
        $$
            T_S = T_C + (1 - \mathrm{HR}) ⋅ T_{OP}
        $$


        $T_S$ je střední přístupová doba.

        $T_C$ je přístupová doba do paměti cache.
        
        $T_{OP}$ je přístupová doba do operační paměti, přičemž $T_C \ll T_{OP}$ ($T_C$ je mnohem menší než $T_{OP}$).

        $\mathrm{HR}$ je činitel úspěšnosti cache, blízko 1.

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=8), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-2-1--cache)

6) ## Požadavky OS na HW nutný pro jeho implementaci: zejména na procesor, správu a adresování paměti. Registry CPU.

    1. ### Nutné vlastnosti CPU a paměti pro implementaci OS a jejich účel
        Bodové ohodnocení: **2 + 3**

        - Přerušovací systém
            + Umožní efektivní využití CPU, nutné pro DMA
        - CPU s podporou režimů kernel a user
            + Ochrana paměti – měnit přístup jen v režimu kernel
            + Neprivilegovaná operace v režimu user – TRAP
        - CPU s podporou virtualizace paměti
            + Logické adresování
                * Umožnění relokace (zavedení a přenos procesu na libovolnou adresu)
                * Virtuální adresa (CPU) vs fyzická adresa (RAM)
                    - MMU (Memory Management Unit) provádí převod

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=14), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-6--summary)

    2. ### Nutné subsystémy HW pro implementaci OS (kromě CPU a paměti) a jejich účel
        Bodové ohodnocení: **2 + 2**

        - Sběrnice
            + Komunikace částí počítače mezi sebou
            + Příklady
                * FSB (interní lokální)
                * PCI-E (interní)
                * USB (externí)
        - Časovač 
            + Pravidelně generované přerušení
            + Umožní preempci

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=13), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-5--bus)

        _Poznámka: Subsystém je zde míněn jako část HW_

    3. ### Definice registrů CPU, jejich druhy
        Bodové ohodnocení: **1 + 2**

        - Paměťová místa v procesoru
        - Druhy
            + Program counter (instruction pointer)
                * Obsahuje adresu následující instrukce
            + Instruction register
                * Interní registr (nepřístupný programátorovi) obsahující právě prováděnou instrukci
            + Stack pointer
                * Obsahuje adresu vrcholu zásobníku.
            + PSW (Program Status Word, případně flags; stavový registr)
                * Obsahuje příznaky, které informují o výsledku předchozí instrukce; jednotlivé příznaky:
            + Obecné
                * Libovolné použití
            + Bázové adresní
                * Obsahují počáteční adresy
            + Ofsetové
                * Obsahují relativní adresy
            + Privátní
                * Interně pro CPU

        Zdroje: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-1--CPU), [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=3)

    4. ### Stavový registr CPU a zahrnuté příznaky (alespoň tři)
        Bodové ohodnocení: **3**

        - C (carry)
            + Příznak o přenosu nejvyššího bitu při počítání s čísly skládajícími se z více slov
        - N (negative)
            + Výsledek předchozí operace je záporný
        - Z (zero)
            + Výsledek předchozí operace je nulový
        - V (overflow)
            + Výsledek předchozí znaménkové operace se nevejde do registru (při použití dvojkového doplňku reprezentuje výsledek záporné číslo)

        Zdroje: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7738#OS-2-1--CPU), [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2002%20%E2%80%93%20p%C5%99ehled%20HW.pdf#page=3)

7) ## Implementace procesu v OS: proces a program, tabulka procesů, přepínání kontextu, stav procesu, třístavový model, příčiny změn stavů._

    1. ### Proces a program: definice. 
        Bodové ohodnocení: **2**

        - Proces je instancí programu v operační paměti systému
            + Program = recept
            + Proces = provedení receptu

        Zdroje: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-1--process), [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=3)

    2. ### Metadata procesu (alespoň šest). 
        Bodové ohodnocení: **3**

        - Identifikace
        - Vlastník
        - Práva
        - Údaje plánovače
        - Čas vzniku procesu
        - Dobu strávenou prováděním na CPU

        Zdroje: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-1-2--process-implementation), [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=9)

    3. ### Průběh přepnutí kontextu. 
        Bodové ohodnocení: **3**

        1. Uložení kontextu (stavu) procesu
        2. Obsluha ovladačem v jádře
        3. Plánovač rozhodne, který proces poběží poté

        Zdroje: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-1-2--process-implementation), [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=9)

    4. ### Třístavový model: popis stavů. 
        Bodové ohodnocení: **3**

        - Běžící (running; používá CPU)
        - Připravený (ready; pozastaven jádrem OS)
        - Blokovaný (blocked; čekající na vnější událost)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=6), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-1-1--process-states)

    5. ### Třístavový model: příčiny přechodů mezi stavy. 
        Bodové ohodnocení: **4**

        - Běžící do
            * Připravený = preempce
            * Blokovaný = blokující systémová volání
        - Blokovaný do
            * Připravený = nastala událost
        - Připravený do
            * Běžící = aktivace

        ```mermaid
          graph TD;
              Běžící -- Preempce --> Připravený -- Aktivace --> Běžící;
              Běžící -- Blokující systémová volání --> Blokovaný -- Nastala událost --> Připravený;
        ```

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=8), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-1-1-1--extended-process-states)

8) ## Procesy v OS UNIX/Linux: vznik a zánik procesu, systémová volání fork(2), exec(3), exit(3), wait(2), kill(2); hierarchie procesů, stavy procesů v Linuxu (podle příkazu ps); posixové signály a jejich zpracování.

    1. ### Příčiny vzniku procesu a spuštění nového programu v posixových systémech, související systémová volání, hierarchie procesů.
        Bodové ohodnocení: **4**

        - Příčina vzniku procesu
            + Při inicializaci systému
                * Původcem je jádro
            + Systémové volání
                * Původcem je proces
        - `fork(2)`
            + Vytvoření procesu
        - Vztah rodič-potomek (strom)

        Zdroje: [Moodle (prezentace, snímek 3)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=3), [Moodle (prezentace, snímek 16)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=16), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-1--process)

    2. ### Příčiny zániku procesu a čekání na potomka v posixových systémech, související systémová volání.
        Bodové ohodnocení: **4**

        - Příčina zániku procesu
            + Dobrovolné ukončení (úloha dokončena, při detekování chyby)
            + Nedobrovolné ukončení (neošetřená chyba, zabití jiným procesem)
        - `kill(2)`, `raise(3)`
            + Zaslání signálu / zabití procesu
        - `_exit(2)`, `exit(3)` 
            + Ukončení procesu
            + `_exit` ukončí proces okamžitě, raději použít `exit`

        Zdroje: [Moodle (prezentace, snímek 5)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=5), [Moodle (prezentace, snímek 16)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=16), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-1--process)

    3. ### Stavy procesů v Linuxu.
        Bodové ohodnocení: **4**

        - R = Připravený nebo běžící (runnable / running)
        - S = Blokovaný (sleep)
        - Z = Ukončený (defunct, zombie)
        - T = Pozastavený nebo krokovaný (stopped, traced; "preempce uživatelem")
        - D = Nepřerušitelný spánek (proces zavolal blokující systémové volání)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=14), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-1-5--process-states-Linux)

    4. ### Posixové signály, možnosti jejich zpracování a příklady.
        Bodové ohodnocení: **3**

        - Jednoduché zprávy (SW obdoba HW přerušení)
        - Zpracování
            + Ukončení (s eventuálním coredump)
            + Pozastavení
            + Pokračování procesu
            + Ignorování
        - Příklady
            | č.  | signál 	| akce	  | popis                                              |
            |-----|---------|---------|----------------------------------------------------|
            | 2   | SIGINT 	| exit 	  | ukončení procesu, generuje se při stisku CTRL+C    |
            | 9   | SIGKILL | exit 	  | ukončení, nelze zachytit ani ignorovat             |
            |     | SIGTSTP | stop 	  | pozastavení procesu, generuje se při stisku CTRL+Z |

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=22), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-2--signals)

9) ## Vlákna: motivace zavedení vláken, proces × vlákno, možné implementace vláken, obecné problémy při implementaci a používání vláken; knihovna posixových vláken: mutex, bariéra, podmínková proměnná a jejich použití.

    1. ### Motivace zavedení vláken.
        Bodové ohodnocení: **1**

        - Kvaziparalelismus
        - Rychlejší správa (např. vznik)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=32), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-3--threads)

    2. ### Společné a samostatné položky metadat procesů/vláken.
        Bodové ohodnocení: **3**

        - Samostatné
            + Kontext (uložené registry CPU)
            + Stav (připraveno/blokováno/běží)
            + Stack (lokální data podprogramů)
        - Společné
            + Všechno ostatní (adresní prostor, prostředky atd.)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=31), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-3--threads)

    3. ### Důvody vyhrazené části paměti pro každé vlákno.
        Bodové ohodnocení: **2**

        - Nezasahování si vláken do svých výpočtů
            + Různá vlákna by si při jediném zásobníku posouvala jeho vrchol

        Zdroj: [Moodle](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-3--threads)

    4. ### Implementace vláken s podporou OS a bez ní, výhody a nevýhody.
        Bodové ohodnocení: **4**

        - Implementace bez podpory jádra OS
            + knihovna - plánovač
            + ✳️ Lepší režie – rychlejší vznik, přepnutí kontextu
            + ✳️ Nevyžaduje se přechod do režimu jádra
            + ✳️ Strategie plánovače se dá přizpůsobit aplikaci
            + ❌ Složitá implementace (převedení volání na neblokující, plánovač)
            + ❌ Page-fault zastaví všechna vlákna
        - Implementace v jádře OS
            + ✳️ Lze provádět i vlákno procesu, jehož jiné vlákno způsobilo page-fault
            + ✳️ Není třeba neblokujících volání
            + ❌ Horší režie – přechod do režimu jádra
            + ❌ Pevná strategie plánovače vláken

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=35), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-3-2--threads-implementations)
        
    5. ### Komplikace při zavádění vláken.
        Bodové ohodnocení: **2**

        - Některé původně zcela globální proměnné je nutné alokovat pro každé vlákno samostatně (např. `errno`)
        - Nereentrantní volání některých knih. funkcí (např. `malloc`)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2003%20%E2%80%93%20procesy%20a%20vl%C3%A1kna.pdf#page=37), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7739#OS-3-3-1--threads-problems)

    6. ### Posixová knihovna vláken: nástroje pro řešení problémů souběhu a jejich účel.
        Bodové ohodnocení: **3**

        - Mutex
            + Zajištění atomicity a vzájemného vylučování
            + Neaktivní čekání
            + Metody
                * `pthread_mutex_init`
                    - Deklarace a inicializace
                * `pthread_mutex_lock`
                    - Zamkne mutex
                        + Je-li už zamčený, blokuje vlákno
                * `pthread_mutex_unlock`
                    - Odemkne mutex zamčený tímto vláknem
                        + Čeká-li jiné vlákno na odemčení, je odblokováno
                * `pthread_mutex_destroy`
                    - Zruší odemčený mutex
        - Podmínková proměnná
            + Pro synchronizaci vláken
            + Nezaručuje exkluzivitu přístupu
            + Neaktivní čekání na událost
            + Událost oznamuje některé vlákno signálem
                - Nečeká-li žádné vlákno, je signál ztracen
        - Bariéra
            + Pro synchronizaci vláken
            + Neaktivní čekání na ostatní vlákna
            + Jakmile k bariéře dospěje daný počet vláken, propustí je
            + Metody
                * `pthread_barrier_init`
                    - Deklarace a inicializace
                * `pthread_barrier_wait`
                    - Blokuje volající vlákno
                    - Po dosažení stanoveného počtu vláken, propustí všechny
                * `pthread_barrier_destroy`
                    - Zruší bariéru

        Zdroj: [Moodle (prezentace, snímek 68)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=68), [Moodle (prezentace, snímek 93)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=93), [Moodle (text, Komunikace procesů)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-3-3--IPC-binary-semaphore), [Moodle (text, Prostředky programovacích jazyků pro IPC)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7743#OS-7-2--IPC-barrier), 

10) ## Plánovač. Cíle plánování, režimy plánování, plánovací kriteria (cíle) pro plánovací algoritmy, plánovací algoritmy.

    1. ### Úloha plánovače, režimy plánování procesů.
        Bodové ohodnocení: **3**

        - Rozhoduje, který proces (vlákno) má CPU
        - Režimy plánování
            + Nepreemptivní
                * Proces se musí sám vzdát CPU
            + Preemptivní
                * Plánovač rozhoduje, kdy který proces má CPU
                * Potřeba přerušovací systém a časovač
        
        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2004%20%E2%80%93%20pl%C3%A1nov%C3%A1n%C3%AD%20proces%C5%AF.pdf#page=6), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7740#OS-4-3--scheduling-alorithms)

    2. ### Cíle plánování (obecně a dle určení OS).
        Bodové ohodnocení: **3**

        - Obecně
            + Každý proces stejně času
            + Dodržování strategie (priorit)
            + Efektivní využití zdrojů, rovnováha zatížení
        - Interaktivní systémy
            + Minimalizace odezvy
            + Vyhovět očekáváním uživatelů
        - Dávkové systémy
            + Maximalizovat propustnost
            + Minimalizovat obrat
            + Využívat maximálně CPU
        - Systémy real-time
            + Dokončení úlohy ve stanoveném termínu
            + Předvídatelnost
        
        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2004%20%E2%80%93%20pl%C3%A1nov%C3%A1n%C3%AD%20proces%C5%AF.pdf#page=5), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7740#OS-4-2--scheduling-goals)

    3. ### Popis plánovacích algoritmů: historické.
        Bodové ohodnocení: **3**

        - First-Come First-Served (FIFO)
            + Nepreemptivní
            + Fronta (procesy se vykonávají postupně)
            + Krátké procesy musejí zbytečně dlouho čekat
            + Zvýhodňuje výpočtově orientované procesy
        - Shortest Job First
            + Nepreemptivní
            + Nejkratší proces má přednost
            + Závislé na dobrém odhadu délky běhu procesu
            + Hrozí vyhladovění (nedostání se k CPU) dlouhodobých procesů
        - Shortest Remaining Time Next
            + Preemptivní varianta SJF

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2004%20%E2%80%93%20pl%C3%A1nov%C3%A1n%C3%AD%20proces%C5%AF.pdf#page=9), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7740#OS-4-3-1--FCFS)

    4. ### Popis plánovacích algoritmů: moderní a specifické.
        Bodové ohodnocení: **6**

        - Round-Robin
            + Preemptivní
            + Procesy se střídají po určité době (kvantu) nebo po volání blokujícího systémového volání
            + Je třeba optimalizovat délku kvanta
        - Priority based scheduling
            + Dává se přednost procesu s vyšší prioritou
            + Obvykle více front pro připravené procesy
            + Nízká priorita může mít za následek vyhladovění procesu
        - Guaranteed Scheduling (Fair-Share)
            + Zaručuje každému uživateli stejné podmínky
            + Každý uživatel dostane stejně velké kvantum
        - Termínové
            + Pro systémy real-time
            + Důležité dokončení ve stanoveném termínu
            + Statické plánování
                * Pouze pro periodické události
                * Systém je plánovatelný, je‑li suma časů potřebných na obsloužení událostí dělená jejich periodami menší nebo rovna jedné $ \sum_{i=1}^{n} \frac{C_i}{T_i} \le 1 $
                * Tabulky stanoví, kdy která úloha má být spuštěna
            + Dynamické plánování
                * Pro aperiodické události

        
        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2004%20%E2%80%93%20pl%C3%A1nov%C3%A1n%C3%AD%20proces%C5%AF.pdf#page=12), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7740#OS-4-3-4--RR)

11) ## Požadavky na plánování v systémech reálného času. Možnosti plánování vláken na víceprocesorových systémech (SMP). Časové a periodické plánování úloh uživatelem – příkazy at a crontab.

    1. ### Specifické požadavky na plánování procesů v systémech reálného času, plánovatelnost.
        Bodové ohodnocení: **4**

        - Některé procesy musí být trvale v RAM pro nízký čas odezvy
        - Práva a priority procesů závisí na jejich důležitosti pro správné chování a bezpečnost systému
        - Minimalizace intervalů se zákazem přerušení
        - Systém musí být plánovatelný
            - Systém je plánovatelný, je‑li suma časů potřebných na obsloužení událostí dělená jejich periodami menší nebo rovna jedné $ \sum_{i=1}^{n} \frac{C_i}{T_i} \le 1 $

        Zdroje: [Moodle (prezentace, plánování procesů)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2004%20%E2%80%93%20pl%C3%A1nov%C3%A1n%C3%AD%20proces%C5%AF.pdf#page=5), [Moodle (prezentace, MP, RT a vestavěné systémy)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=32), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-2-1-2--RTOS-features), 

    2. ### Plánování vláken na systémech SMP a možné optimalizace.
        Bodové ohodnocení: **4×2**

        - Load sharing
            + Zátěž se rozděluje mezi procesory náhodně
                * Procesu je přiřazen libovolný volný procesor
                * ✳️ Zátěž se rozděluje rovnoměrně
                * ✳️ Není potřebný centralizovaný plánovač
                * ❌ Globální fronta vyžaduje výlučný přístup
                * ❌ Snižuje se efektivita použití cache
        - Gang scheduling
            + Všem vláknům tvořícím jeden proces se přidělují procesory současně
                * ✳️ Užitečné pro případy, kdy vlákna vyžadují vzájemnou synchronizaci
                * ❌ Některé procesory mohou zůstávat nevyužity
        - Dedicated processor assignment
            + Vláknům jedné aplikace jsou napevno přiřazeny procesory
                * ✳️ Vyšší efektivita cache na jednotlivých procesorech
                * ❌ Některé procesory mohou zůstávat nevyužity
        - Dynamic scheduling
            + Počet vláken procesu se může dynamicky měnit
            + ✳️ Obsazují se volné procesory

        
        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=13), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-1-2--MP-scheduling)

    3. ### Příkazy pro nastavení spouštění úloh v daném čase a démony, které to obstarávají. Orientačně možnosti konfigurace.
        Bodové ohodnocení: **3**

        - Cron
            + Démon pravidelně spouštějící příkazy
            + Čte instrukce ze crontab souborů
        - Crontab
            + Soubor instrukcí pro cron
            + Formát
                * Řádek může obsahovat buď
                    - Komentář `# Komentář`
                    - Nastavení proměnné prostředí `PROMENNA=hodnota`
                    - Cron příkaz, který se skládá z sloupců pro:
                        1. Minutu (0-59)
                        2. Hodinu (0-23)
                        3. Den v měsíci (1-31)
                        4. Měsíc (1-12; příp. JAN, FEB atd)
                        5. Den v týdnu (0-7, 0 a 7 značí neděli; příp. MON, TUE atd)
                        6. Jméno uživatele (pokud je crontab soubor systémový)
                        7. Příkaz na spuštění
                        + `*` značí "opakovat každou X"
            ```crontab
                # Spusť skript každou hodinu v pondělí
                NODE_ENV=consumption
                0 * * * MON npm install is-odd
            ```
        - At
            + Program pro jednorázové spuštění příkazů v daný čas pomocí atd
        - Atd
            + Démon jednorázově spouštějící příkazy v daný čas

        Zdroje: [Manpage at(1)](https://manpages.debian.org/bookworm/at/at.1.en.html), [Manpage atd(8)](https://manpages.debian.org/bookworm/manpages-cs/atd.8.cs.html), [Manpage crontab(5)](https://manpages.debian.org/crontab.5.cs.html), [Manpage cron(8)](https://manpages.debian.org/cron.8.cs.html)

12) ## Požadavky na paměť, alokace, adresování, pevné (statické) a proměnné (dynamické) dělení paměti (fixed partitioning, variable partitioning), fragmentace paměti, typy fragmentace, umisťovací algoritmy.

    1. ### Požadavky na operační paměť (na její vlastnosti).
        Bodové ohodnocení: **3**
        
        - Relokace paměti procesu (přemístění paměti procesu na jiné adresy)
            + Program nesmí pracovat s fyzickými adresami operační paměti
            + Proces musí pracovat s logickými adresami
                * Za běhu se převedou na fyzické adresy
        - Ochrana paměti (procesy nesmějí přímo přistupovat k paměti)
        - Možnost sdílení paměti mezi procesy
            + Soubory nebo jiné mechanismy výměny dat mohou být pomalé
            + Efektivnější provádění procesů
        
        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=3), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7745#OS-9--memory)

    2. ### Pevné dělení paměti, nevýhody, umisťování procesů.
        Bodové ohodnocení: **4**
        
        - Dostupná paměť je rozdělena do oblastí s pevnými hranicemi
        - Druhy
            + Stejná velikost oblastí
                * Proces je zaveden do libovolné volné oblasti
                * Jakýkoli malý proces zabere celou oblast
                    - Vnitřní fragmentace (proces nevyužije veškerou přidělenou paměť)
            + Nestejná velikost oblastí
                * Částečně se snižuje vnitřní fragmentace
                * Procesy čekající na přidělení paměti tvoří frontu
                    - Fronta samostatná pro každou velikost oblasti
                        + Pomalejší
                        + Menší vnitřní fragmentace
                    - Fronta jediná
                        + Rychlejší
                        + Větší vnitřní fragmentace
        
        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=10), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7745#OS-9-1-1--fixed-partitioning)

    3. ### Dynamické dělení paměti, nevýhody.
        Bodové ohodnocení: **4**
        
        - Proměnný počet oblastí i jejich velikost
        - Odstraněna vnitřní fragmentace
        - Po ukončení procesu vznikají v paměti mezery (vnější fragmentace)
            + Odstranit lze relokací paměti procesů tak, aby vznikla souvislá volná oblast (setřesení)
        
        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=14), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7745#OS-9-1-2--dynamic-allocation)

    4. ### Umisťovací algoritmy pro dynamické dělení paměti (s popisem).
        Bodové ohodnocení: **4**
        
        - Best-fit
            + Vybere stejnou nebo nejmenší volnou oblast, do které se proces vejde
            + Nejméně výkonná metoda
            + Nejmenší možná fragmentace
        - First-fit
            + Vybere první volnou (od začátku) oblast, do které se proces vejde
            + Rychlejší než best-fit
            + Prohledávání zpomaluje výskyt velkého počtu obsazených oblastí na začátku paměti
        - Next-fit
            + Vybere první volnou (od oblasti, do které se naposledy umisťovalo) oblast, do které se proces vejde
            + Nejrychlejší metoda
            + Tendence dělit velké oblasti paměti na menší
        - Exact-or-worst-fit
            + Vybere stejně velkou volnou oblast jako proces, pokud existuje, jinak největší volnou oblast
            + Nejhorší využití paměti
            + Tendence dělit velké oblasti paměti na menší

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=16), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7745#OS-9-1-2-1--dynamic-allocation-fit)

13) ## Problém nedostatku operační paměti, odkládání obsahu paměti na disk, virtuální paměť, motivace k zavedení virtuální paměti, výhody virtualizace paměti, princip lokality odkazů, thrashing.

    1. ### Možná řešení nedostatku RAM (s vysvětlením principu).
        Bodové ohodnocení: **2+2**

        - Překrývání (overlaying)
            + Různé moduly programu nejsou vyžadovány současně
            + Moduly používají stejnou fyzickou oblast paměti
        - Odkládání (swapping)
            + Využití levné sekundární paměti (disku)
            + Odkládání procesu z operační paměti na sekundární

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=8), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7745)

    2. ### Virtualizace paměti: definice a HW podpora.
        Bodové ohodnocení: **3**

        - RAM + swap
        - Procesor musí umět pracovat s logickou adresou
        - Nutnost Memory Management Unit (MMU)
            + Převádí virtuální adresu na adresu skutečnou

        Zdroje: [Moodle (prezentace, snímek 23)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=23), [Moodle (prezentace, snímek 28)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=28), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7745#OS-9-2--virtual-memory)

    3. ### Virtualizace paměti: motivace a důsledky zavedení, princip fungování (proč může fungovat efektivně, přestože je sekundární paměť řádově pomalejší).
        Bodové ohodnocení: **2**

        - Motivace
            + Využití levné sekundární paměti (disku)
            + Adresový prostor procesu může být větší než RAM
                * Lze provádět více procesů současně
        - Princip fungování
            + Proces může běžet, i když nemá v RAM celý svůj adresový prostor
            + Virtuální paměť funguje efektivně díky principu lokality odkazů

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=24), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7745#OS-9-2--virtual-memory)

        <!-- TODO: Je nutné přesně proč je může paměť fungovat efektivně, když přespříští otázka se na to přímo ptá (princip lokality odkazů)? -->

    4. ### Virtualizace paměti: pojmy (RS, S).
        Bodové ohodnocení: **1**

        - Resident set
            + Část adresového prostoru procesu, která je v RAM
        - Swap
            + Sekundární paměť (disk), kam lze odložit nepoužívané části adresového prostoru procesu

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=25), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7745#OS-9-2--virtual-memory)

    5. ### Princip lokality odkazů.
        Bodové ohodnocení: **2**

        - Tendence procesu se odkazovat do okolí svého adresového prostoru, kam přistupoval nedávno
        - Z disku se může dopředu načíst do RAM více částí paměti procesu z okolí právě vyžadované oblasti

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=26), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7745#OS-9-2--virtual-memory)

    6. ### Thrashing – definice a příčiny.
        Bodové ohodnocení: **3**

        - Část paměti procesu je odložena na disk předčasně
            + Proces pak zbytečně čeká v blokovaném stavu na nahrání zpátky do RAM
        - Příčiny
            + Neoptimalizovaný překlad
            + Neefektivní programování

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=27), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7745#OS-9-2--virtual-memory)

14) ## Stránkování paměti, převod adresy, vlastnosti stránkování, sdílení stránek, volba velikosti stránky, řešení problému rozsáhlých stránkových tabulek, TLB.

    1. ### Princip, vlastnosti (spojitost, fragmentace, sdílení).
        Bodové ohodnocení: **5**

        - Umožňuje procesu přidělovat nespojité úseky, které se procesu jeví jako lineární adresový prostor
            + Řeší problémy s vnější fragmentací
        - Princip
            + Fyzická paměť je rozdělena na rámce
            + Logický adresový prostor je rozdělen na stránky
            + Rámce a stránky jsou stejně velké
            + OS udržuje pro každý proces tabulku přiřazení stránek k rámcům
        - Stejné stránky různých procesů (např. knihovny) mohou sdílet rámec

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=29), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7746#OS-10-1--paging)

    2. ### Stránkové tabulky, převod adresy.
        Bodové ohodnocení: **4**

        - Obsahuje
            + Číslo stránky
            + Číslo rámce
            + Řídicí bity
                * Přítomnost stránky v RAM
                * Stránka je používaná
                * Modifikovaný obsah
        - Převod
            + Adresa je složena z čísla stránky a offsetu
            + Rámec a stránka jsou stejně veliké (stejné offsety)

            1. Nalezneme číslo rámce podle čísla stránky v stránkové tabulce
            2. Fyzickou adresu lze získat z čísla rámce v tabulce a offsetu

            ![Proces převodu adresy z logické na fyzickou](https://moodle.upce.cz/moodle/tohu0051/courses/OS/images/cs/paging-linear2physical_with_example.svg)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=35), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7746#OS-10-1-1--paging-address-translation)

    3. ### Volba velikosti stránky a důsledky.
        Bodové ohodnocení: **3**

        - Paměť se alokuje po stránkách pevné velikosti
            + Vzniká vnitřní fragmentace
        - Menší
            + Menší vnitřní fragmentace
            + Více stránek na proces
                * Větší stránková tabulka
                    - Zabírá další paměť
                * Více rámců v RAM
                    - Lepší hospodaření s RAM (princip lokality)
        - Větší
            + Větší vnitřní fragmentace
            + Méně stránek na proces
                * Menší stránková tabulka
                    - Zabírá méně místa
                * Méně rámců v RAM
                    - Horší hospodaření s RAM (hrozí thrashing)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=39), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7746#OS-10-1-3--paging-page-size)

    4. ### Řešení rozsáhlosti stránkových tabulek, TLB.
        Bodové ohodnocení: **3**

        - Část tabulky může být na swapu (disk)
            + Zpomalení překladu
            + Ani stránka nemusí být v RAM (page fault)
                * Zpomalení běhu procesu
        - Translation Lookaside Buffer (TLB)
            + Cache pro několik posledních použitých položek stránkové tabulky
        - Víceúrovňové stránkové tabulky
            + Virtuální adresa se rozdělí na offset a dva indexy do stránkových tabulek dvou úrovní
                1. První index v stránkové tabulce první úrovně (adresář) najde adresu stránkové tabulky druhé úrovně
                2. Druhý index v stránkové tabulce druhé úrovně najde číslo rámce
            + Adresář zůstává v RAM
            + Tabulky druhé úrovně jsou ve virtuální paměti
                * Mohou být odloženy na swap
                * Mohou být vytvářeny dynamicky za běhu procesu

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=43), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7746#OS-10-1-3--paging-page-size)

15) ## Řídicí bity ve stránkových tabulkách, strategie zavádění, umisťování, nahrazování a uklízení (čištění) stránek paměti, vliv velikosti resident‑set na běh procesů.

    1. ### Důležité řídicí bity ve stránkové tabulce (z hlediska využívání algoritmy nahrazování) a jejich význam.
        Bodové ohodnocení: **3**

        - Přítomnost stránky v RAM
        - Stránka je používaná (referenced)
            - Používá se v Clock policy
        - Modifikovaný obsah
            + Nebyla-li stránka v RAM modifikovaná a je již na disku, není třeba ji znovu zapisovat při uvolňování rámce

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=32), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7746#OS-10-1--paging)

    2. ### Strategie zavádění stránek: účel, algoritmy.
        Bodové ohodnocení: **3**

        - Které stránky a kdy se zavedou do paměti
        - Algoritmy
            + Demand paging
                - Zavádění stránek jen tehdy, jsou-li potřeba
                    * Vyskytne-li se odkaz na paměťové místo v dané stránce
            + Lookahead paging
                - Zavádění stránek předem
                    * Zavedou se stránky z okolí té právě vyžadované (princip lokality odkazů)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=56), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7746#OS-10-1-4-1--paging-policy-fetch)

    3. ### Strategie umisťování stránek: účel, algoritmy.
        Bodové ohodnocení: **1**

        - Placement policy
            + Do kterého rámce se stránky umístí
        - OS vybírá obvykle libovolný volný rámec

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=57), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7746#OS-10-1-4-2--paging-policy-placement)

    4. ### Strategie nahrazování stránek: účel, algoritmy.
        Bodové ohodnocení: **4**

        - Stránková tabulka obsahuje řídicí bity
            * Přítomnost stránky v RAM
            * Stránka je používaná
            * Modifikovaný obsah
        - Replacement policy
            + Které stránky se odloží na swap
        - Algoritmy
            + Odstranění stránky, která bude nejdelší dobu nevyužitá
                * Ideální algoritmus
                * Nelze předem přesně určit; pouze se odhaduje
            + Clock policy
                * Rámce jsou v kruhovém seznamu
                    - Index určuje poslední položku
                    - Není-li volný rámec a nastane page fault, zvyšuje se index tak dlouho, dokud se nenajde stránka s bitem použití (referenced) R = 0
                    - Tato stránka se nahradí stránkou novou
                    - Při procházení seznamu se bit R nuluje
                    ```
                        var Rámce
                        var Index

                        on PageFault do
                            loop
                                var Stránka = Rámce[Index]
                                if Rámec[R] == 0
                                    Stránka = NováStránka
                                    Stránka[R] = 1
                                    Index++
                                    end loop
                                else
                                    Stránka[R] = 0
                                    Index++
                            
                    ```
        - Zamykání rámců
            + Pro stránky, které nesmí být odstraněny z RAM (jádro OS, V/V buffery)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=58), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7746#OS-10-1-4-3--paging-policy-replacement)


    5. ### Strategie uklízení (čištění) stránek: účel, algoritmy.
        Bodové ohodnocení: **3**

        - Cleaning policy
            + Kdy se uloží stránky na swap
        - Algoritmy
            + Demand cleaning
                * Ukládání stránky z rámce vybraného pro nahrazení
            + Precleaning
                * Periodické ukládání stránek v dávce

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=68), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7746#OS-10-1-4-4--paging-policy-cleaning)

    6. ### Volba velikosti resident‑set.
        Bodové ohodnocení: **1**

        - Fixed-allocation policy
            + Procesu je při nahrávání vyhrazen pevný počet rámců RAM
                * Rovné či proporcionální rozdělení rámců mezi procesy
                * Při page fault, se musí uvolnit rámec stejného procesu
        - Variable-allocation policy
            + Počet rámců procesu se průběžně může měnit
                * Zvětšuje/snižuje se pří vysoké/nízké frekvenci výskytů page fault
            * Vyžaduje režii OS při odhadu chování procesů

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2007%20%E2%80%93%20spr%C3%A1va%20pam%C4%9Bti.pdf#page=71)

16) ## Požadavky na OS pro práci v reálném čase, rozdělení RT OS, pojmy latence a odezva (na úrovni přerušení); vestavěné systémy, OS pro ně a typické požadavky na ně.

    1. ### Definice systémů RT (pracujících v reálném čase) a jejich správná funkce.
        Bodové ohodnocení: **1**

        - Oblast technických kybernetických systémů
        - Výstupy systémů mohou být závislé na:
            + Aktuálních hodnotách vstupů (kombinační automat)
            + Aktuálních hodnotách a historii vstupů (sekvenční automat, systém s pamětí)
        - Správná funkce systému závisí také na tom, kdy jsou výsledky k dispozici

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=20), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-2--RT)

    2. ### Rozdělení systémů RT dle dodržování termínů (s popisem).
        Bodové ohodnocení: **3**

        - Hard real time
            + Systém selže po překročení časových limitů
        - Firm real time
            + Systém může snést pouze málo překročení časových limitů
        - Soft real time
            + Systému se pouze sníží účinnost po překročení časových limitů

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=28), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-2-1-1--RTOS-types)

    3. ### Charakteristické vlastnosti RTOS.
        Bodové ohodnocení: **4**

        - Rychlé přepínání kontextu
        - Prioritní plánování, preempce procesů i jádra
        - Malá velikost, mikrojádrová architektura
        - Rychlý souborový systém
        - Podpora speciálních systémových služeb
        - Spolehlivost
        - Multitasking s komunikací procesů

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=30), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-2-1-2--RTOS-features)

    4. ### Příklady RTOS (alespoň dva).
        Bodové ohodnocení: **1**

        - QNIX
        - RTLinux

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=33), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-2-1-4--RTOS-examples)

    5. ### Definice pojmů latence a odezva (na úrovni přerušovacího systému).
        Bodové ohodnocení: **2**

        - Odezva
            + Za jak dlouho operační systém reaguje na požadavek přerušení
        - Latence
            + Doba mezi okamžikem příchodu požadavku na přerušení a okamžikem, kdy se začne provádět odpovídající obslužný program

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=27), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-2-1--RTOS)

    6. ### Definice vestavěných systémů.
        Bodové ohodnocení: **1**

        - Počítačové systémy, které jsou součástí jiných systémů

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=34), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-3--embedded-systems)

    7. ### Typické vlastnosti vestavěných systémů (alespoň šest).
        Bodové ohodnocení: **3**

        - Malá spotřeba
        - Odolnost
        - Malé rozměry a váha
        - Cenová citlivost
        - Funkce v reálném čase
        - Spolehlivost a bezpečnost

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=44), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-3-1--embeded-systems-features)

17) ## Víceprocesorové systémy, rozdělení dle vazby a dle symetrie, granulovatelnost úlohy, souvislost s vazbou (víceprocesorových systémů) a stupně paralelismu, distribuované (rozptýlené, clusterové) OS.

    1. ### Kategorie počítačových systémů z hlediska paralelizace zpracování dat.
        Bodové ohodnocení: **4**

        - SISD (single instruction, single data)
        - SIMD (single instruction, multiple data)
        - MISD (multiple instruction, single data)
        - MIMD (multiple instruction, multiple data)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=3), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12--MP-RT-embedded)

        <!-- TODO: Je nutné uvést popis kategorií? -->

    2. ### Rozdělení víceprocesorových systémů dle vazby.
        Bodové ohodnocení: **2**

        - Loosely coupled (volná vazba)
        - Tightly coupled (těsná vazba)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=5), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-1--MP)

        <!-- TODO: Je nutné uvést popis kategorií? -->

    3. ### Rozdělení víceprocesorových systémů dle symetrie.
        Bodové ohodnocení: **2**

        - Symetrický (SMP)
        - Asymetrický

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=6), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-1--MP)

        <!-- TODO: Je nutné uvést popis kategorií? -->

    4. ### Granularita úlohy: účel, jak se pozná, že úloha je/není granulovatelná.
        Bodové ohodnocení: **4**

        - Každou úlohu můžeme rozdělit na úseky, které lze ve víceprocesorovém systému provádět paralelně na různých procesorech
        - Dělení
            + Hrubě granulovatelná úloha
            + Jemněji granulovatelná úloha
                * Požadavky na komunikaci a synchronizaci častější

        Zdroje: [Moodle (prezentace)](), [Moodle (text)]()

        <!-- TODO: Jak se pozná, že úloha je/není granulovatelná? -->

    5. ### Vhodné stupně vazby pro různou granularitu.
        Bodové ohodnocení: **3**

        - Hrubě granulovatelná úloha
            + Volná vazba
        - Jemněji granulovatelná úloha
            + Těsná vazba

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2009%20%E2%80%93%20MP,%20RT%20a%20vestav%C4%9Bn%C3%A9%20syst%C3%A9my.pdf#page=9), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7748#OS-12-1-1--granularity)

        <!-- TODO: Je nutné uvést proč? -->

18) ## Soupeření procesů (o prostředky), obecné problémy souběhu, vzájemné vylučování, kritická sekce, předpoklady pro řešení KS, požadované vlastnosti řešení KS, typy řešení._

    1. ### Definice kritické sekce v programu.
        Bodové ohodnocení: **4**

        - Část kódu, kde proces manipuluje se sdíleným prostředkem a současná manipulace jiným procesem by vedla k problému

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=7), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-1--critical-section)

    2. ### Předpoklady pro řešení přístupu do kritické sekce. (Co se předpokládá, že platí, a co se nesmí předpokládat.)
        Bodové ohodnocení: **4**

        - Předpokládá se
            + Procesy se provádějí nenulovou rychlostí  
            + Paměťové místo smí v jednom okamžiku zpřístupnit vždy pouze jediný procesor
        - Nesmí se předpokládat
            + O relativní rychlosti procesů
            + O prokládaném provádění

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=9), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-2--critical-section-solutions)

    3. ### Požadované vlastnosti řešení přístupu do kritické sekce (s vysvětlením).
        Bodové ohodnocení: **3**

        - Vzájemné vylučování
            + vždy jediný proces v kritické sekci
        - Pokrok v přidělování
            + Rozhodování musí proběhnout v konečném čase
            + Do rozhodování nesmějí zasahovat procesy ve zbytkové sekci
            + Při volné kritické sekci musí být požadavku vyhověno
        - Omezené čekání
            + Mezi požadavkem na vstup do do kritické sekce a vyhověním smí vstoupit pouze omezený počet jiných procesů

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=10), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-2--critical-section-solutions)

    4. ### Typy řešení přístupu do kritické sekce (s příklady).
        Bodové ohodnocení: **4**

        - SW řešení
            + Petersonův algoritmus
                ```
                    var Flag = false, false
                    var Turn = 0
                ```
                ```
                    -- Proces 0
                    loop
                        Flag[0] = true
                        Turn = 1

                        -- Čekání
                        loop
                        while Flag[1] == true and Turn == 1

                        KritickáSekce()

                        Flag[0] = false

                        ZbytkováSekce()
                ```
                ```
                    -- Proces 1
                    loop
                        Flag[1] = true
                        Turn = 0

                        -- Čekání
                        loop
                        while Flag[0] == true and Turn == 0

                        KritickáSekce()

                        Flag[1] = false

                        ZbytkováSekce()    
                ```
        - HW řešení
            + Speciální instrukce pro čtení a zápis jako nedělitelnou operaci
                ```
                    var Locked = 0
                ```
                ```
                    -- Proces i
                    loop
                        loop
                        -- Speciální instrukce TestAndSet vrátí hodnotu proměnné Locked
                        -- Pokud je rovna 0, nastaví ji po vrácení na 1 
                        while TestAndSet(Locked)

                        KritickáSekce()

                        Locked = 0

                        ZbytkováSekce()
                ```
        - Řešení OS
            + Semafor
                * Datová struktura
                * Položky
                    - Celočíselný čítač
                    - Fronta procesů
                * Atomické operace
                    - init
                        + Inicializuje čítač
                    - wait 
                        + Snižuje čítač
                        + Je li čítač záporný zařadí volající vlákno do fronty a blokuje je
                    - signal
                        + Zvyšuje čítač
                        + je-li fronta neprázdná vybere vlákno z fronty a zařadí je do seznamu připravených vláken
            ```
                object Semafor
                    var Čítač
                    var Fronta

                    Init(PočátečníHodnota) do
                        Čítač = PočátečníHodnota
                    Wait() do
                        Čítač--
                        if Čítač < 0
                            Fronta.Push(VolajícíVlákno)
                            block VolajícíVlákno
                    Signal() do
                        Čítač++
                        if Fronta != empty
                            var Vlákno = Fronta.Pop()
                            activate Vlákno
            ```
            ```
                var Sem = Semafor.Init(1)
            ```
            ```
                -- Proces i
                loop
                    Sem.Wait()

                    KritickáSekce()

                    Sem.Signal()

                    ZbytkováSekce()
            ```
        - Řešení programovacího jazyka
            + Monitor
                * SW modul
                * Obsahuje
                    - Lokální data
                    - Funkce zpřístupňující lokální data
                    - Inicializační část
                * V monitoru (jeho funkci) smí být v daném okamžiku pouze jediné vlákno
        
        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=11), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-3--critical-section-solutions-SW)

19) ## Řízení přístupu do kritické sekce pomocí SW metod, příklady nevhodných (obecně nefunkčních) SW řešení, SW algoritmy, vlastnosti (nedostatky) SW metod.

    1. ### SW algoritmus pro KS s proměnnou locked, důvod nefunkčnosti.
        Bodové ohodnocení: **1+1**

        ```
            -- Proces i
            loop
                loop
                while Locked != 0

                Locked = 1
                KritickáSekce()
                Locked = 0
                ZbytkováSekce()
        ```
        - Sdílená proměnná locked
            + Udává obsazenost kritické sekce
            + Inicializovaná na 0
        - Požadavek vzájemného vylučování není splněn
            + Pokud oba procesy současně zjistí volnou kritickou sekci, oba nastaví obsazeno a vstoupí do ní


        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=14), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-3-1--critical-section-SW-proposal1)

    2. ### SW algoritmus pro KS s proměnnou turn, důvod nefunkčnosti.
        Bodové ohodnocení: **1+1**

        ```
            -- Proces i
            loop
                -- Pokud není řada na proces i, proces i čeká
                loop
                while Turn != i

                KritickáSekce()

                -- Na řadě je proces j
                Turn = j
                ZbytkováSekce()
        ```
        - Sdílená proměnná turn
            + Inicializovaná na 0 nebo 1
        - Požadavek vzájemného vylučování je splněn
            + Proces $P_i$ čeká, když je $P_j$ v kritické sekci
        - Požadavek pokroku není splněn
            + Proces $P_i$ musí čekat, dokud $P_j$ nedokončí zbytkovou sekci

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=15), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-3-2--critical-section-SW-proposal2)

    3. ### SW algoritmus pro KS s proměnnými flag[i], důvod nefunkčnosti.
        Bodové ohodnocení: **1+1**

        ```
            -- Proces i
            loop
                Flag[i] = true

                loop
                while Flag[j] == true

                KritickáSekce()

                Flag[i] = false;

                ZbytkováSekce()
                
        ```
        - Sdílená proměnná Flag
        - Požadavek vzájemného vylučování je splněn
        - Požadavek pokroku není splněn
            + Příklad
                1. Proces i: `Flag[i] = true`
                2. Proces j: `Flag[j] = true`
                3. Deadlock

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=17), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-3-3--critical-section-SW-proposal3)

    4. ### Funkční SW algoritmy pro řízení přístupu do KS, krátká charakteristika.
        Bodové ohodnocení: **2+2**

        - Petersonův algoritmus
            ```
                var Flag = false, false
                var Turn = 0
            ```
            ```
                -- Proces 0
                loop
                    Flag[0] = true
                    Turn = 1

                    -- Čekání
                    loop
                    while Flag[1] == true and Turn == 1

                    KritickáSekce()

                    Flag[0] = false

                    ZbytkováSekce()
            ```
            ```
                -- Proces 1
                loop
                    Flag[1] = true
                    Turn = 0

                    -- Čekání
                    loop
                    while Flag[0] == true and Turn == 0

                    KritickáSekce()

                    Flag[1] = false

                    ZbytkováSekce()    
            ```
            + Pro dva procesy
            + Sdílená proměnná Flag a Turn
            + Požadavek vzájemného vylučování je splněn
                * Nemůže nastat `Turn == i` a `Flag[i] == true` pro každý proces $P_i$
            + Požadavek pokroku a omezenosti čekání je splněn
                * Pokud $P_1$ nepožaduje vstup do kritické sekce, je `Flag[1] == false` a $P_0$ tedy může vstoupit do kritické sekce
                * $P_0$ nemůže vstoupit do kritické sekce dokud $P_1$ požaduje kritické sekce `Flag[1] == true` a současně je $P_1$ na řadě `Turn == 1`
        - Bakery algoritmus
            ```
                var Choosing[0 to PočetProcesů] = false
                var Number[0 to PočetProcesů] = 0
            ```
            ```
                -- Proces i
                loop
                    Choosing[i] = true
                    Number[i] = Max(Number[0] to Number[PočetProcesů-1]) + 1
                    Choosing[i] = false

                    var j = 0
                    loop
                        loop
                        while Choosing[j] == true

                        loop
                        while Number[j] != 0 and (Number[j], j) < (Number[i], i)

                        j++
                    while j < PočetProcesů
                    
                    KritickáSekce()

                    Number[i] = 0

                    ZbytkováSekce()
            ```
            + Pro více procesů
            + Sdílená proměnná Choosing a Number
            + Každý proces dostane před vstupem do kritické sekce číslo `Number[i]`
                * Držitel nejmenšího čísla smí vstoupit
                * Dostanou-li $P_i$ a $P_j$ stejná čísla, přednost má $P_{min(i, j)}$ 
                * Ve výstupní sekci nastaví proces přidělené číslo na 0

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=18), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-3-4--critical-section-SW-Peterson)

    5. ### Specifické nevýhody SW algoritmů pro řízení přístupu do KS (včetně vysvětlení, bez všeobecných nevýhod všech typů algoritmů).
        Bodové ohodnocení: **5**

        - Aktivní čekání (spin lock)
            + Procesy čekající na vstup do KS spotřebovávají čas procesoru
                * Vhodné pouze, když je kritická sekce velmi krátká ve srovnání s délkou časového kvanta (doba, po které se procesy střídají) běhu na CPU
                    - Pokud proces 1 v kritické sekci přerušen uběhnutím kvanta, musí proces 2 celé své kvantum čekat
        - Nefungují na multiprocessing systémech s cache
            + Cache jednotlivých procesorů nejsou vždy synchronizované 

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=24), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-3-6--critical-section-solutions-SW-characteristics)

20) ## Řízení přístupu do kritické sekce pomocí HW metod, výchozí předpoklady pro HW řešení, algoritmy využívající HW instrukce, vlastnosti (nedostatky) HW metod.

    1. ### Hardwarové předpoklady pro řízení přístupu do KS.
        Bodové ohodnocení: **3**

        - Procesy se provádějí v procesoru nepřerušeně, dokud nevyvolají službu OS nebo nejsou přerušeny
        - K přerušení procesu může dojít pouze mezi dokončením jedné instrukce a zahájením další
        - Přístup k paměti je obvykle výlučný

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=25), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-4--critical-section-solutions-HW)

    2. ### HW podpora pro řízení přístupu do KS, popis řešení.
        Bodové ohodnocení: **2+3**

        - Zákaz přerušení procesu
            + Proces nemůže být přerušen, tudíž žádný jiný proces nemůže vstoupit do kritické sekce
            ```
                disable IRQ
                KritickáSekce()
                enable IRQ
                ZbytkováSekce()
            ```
        - Speciální instrukce
            + Čtení a zápis jako nedělitelná operace
                * Vzájemné vylučování i na systémech SMP
                    ```
                        var Locked = 0
                    ```
                    ```
                        -- Proces i
                        loop
                            loop
                            -- Speciální instrukce TestAndSet vrátí hodnotu proměnné Locked
                            -- Pokud je rovna 0, nastaví ji po vrácení na 1 
                            while TestAndSet(Locked)

                            KritickáSekce()

                            Locked = 0

                            ZbytkováSekce()
                    ```
            + Např. `xchg` na Intel x86
                * Vymění obsah dvou proměnných

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=26), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-4--critical-section-solutions-HW)

    3. ### Vlastností (nedostatky) HW řešení.
        Bodové ohodnocení: **4+3**
        - Zákaz přerušení procesu
            * Vzájemné vylučování na systémech SMP není zaručeno
            * Zvyšuje latenci
            * V kritické sekci se nesmí volat služba OS
            * Privilegovaná instrukce
        - Speciální instrukce
            * Může dojít k vyhladovění
            * Může vzniknout deadlock

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=26), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7741#OS-5-4--critical-section-solutions-HW)

21) ## Nástroj OS: semafor, jeho popis včetně systémových volání, použití semaforu pro řízení přístupu do KS a pro synchronizaci, problém obědvajících filozofů.

    1. ### Popis nástroje OS: semafor.
        Bodové ohodnocení: **2**

        - Datová struktura pro synchronizaci
        - Nevyžaduje aktivní čekání
            + Dokud je kritická sekce obsazená čekající proces je blokován a zařazen do fronty procesů čekajících na uvolnění kritické sekce
        - Položky
           + Celočíselný čítač
           + Fronta procesů
        - Atomické operace

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=39), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-3--IPC-semaphore)

    2. ### Popis systémových volání semaforu. 
        Bodové ohodnocení: **1+2+2**

        - init
            + Inicializuje čítač
        - wait 
            + Snižuje čítač
            + Je li čítač záporný, zařadí volající vlákno do fronty a blokuje je
        - signal
            + Zvyšuje čítač
            + Je li fronta neprázdná vybere vlákno z fronty a zařadí je do seznamu připravených vláken

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=41), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-3--IPC-semaphore)
        
    3. ### Popis řešení přístupu do KS používajícího semafor.
        Bodové ohodnocení: **3**

        ```
            var Sem = Semafor.Init(1)
        ```
        ```
            -- Proces i
            loop
                Sem.Wait()

                KritickáSekce()

                Sem.Signal()

                ZbytkováSekce()
        ```
        1. Sdílený semafor Sem se inicializuje na počet procesů smějících vstoupit do kritické sekce
        2. Vstupní sekce volá `Wait` 
        2. Výstupní sekce volá `Signal` 

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=44), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-3-1--IPC-semaphore-critical-section)

    4. ### Popis řešení synchronizace vláken pomocí semaforu.
        Bodové ohodnocení: **3**

        ```
            var Sem = Semafor.Init(1)
        ```
        ```
            -- Proces i
            Vypočti(x)
            Sem.Signal()
        ```
        ```
            -- Proces j
            Sem.Wait()
            Použij(x)
        ```
        - Příkaz `Použij(x)` v procesu $P_j$ musí být proveden až po provedení `Vypočti(x)` v $P_i$
        1. Sdílený semafor Sem se inicializuje na 0
        2. Proces $P_j$ před provedením `Použij(x)` počká na `Signal` v $P_i$
            + Provede-li se nejprve `Signal`, pak `Wait` neblokuje


        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=45), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-3-2--IPC-semaphore-sync)

    5. ### Definice problému obědvajících filozofů a jeho řešení pomocí semaforů.
        Bodové ohodnocení: **2**

        - Problém
            + U stolu sedí pět filosofů
                * Každý buď přemýšlí nebo jí
            + Při jídle každý potřebuje dvě vidličky
                * K dispozici je pouze pět vidliček
        - Řešení
            + Je třeba dovolit zvedat vidličky nejvýše čtyřem (počet filosofů − 1) filosofům
            ```
                var PočetFilosofů = 5
                var SemVidličky[0 to PočetFilosofů - 1] = Semafor.Init(1)
                var Sem = Semafor.Init(PočetFilosofů - 1)
            ```
            ```
                -- Proces i (filozof)
                loop
                    Mysli()

                    Sem.Wait()
                    SemVidličky[i].Wait()
                    SemVidličky[(i+1) % PočetFilosofů].Wait()

                    Pojídej()
                    
                    SemVidličky[(i+1) % PočetFilosofů].Signal()
                    SemVidličky[i].Signal()
                    Sem.Signal()
            ```

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=52), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-3-5-1--IPC-dining-philosophers-semaphores)

22) ## Nástroj OS: předávání zpráv, popis systémových volání a možností blokování, použití fronty zpráv pro řízení přístupu do KS a pro synchronizaci, problém svázaných producentů a konzumentů.

    1. ### Popis nástroje OS: předávání zpráv.
        Bodové ohodnocení: **3**

        - Komunikační prostředek OS pro procesy
        - Systémová volání
            + `Send(cíl, zpráva)`
            + `Receive(zdroj, zpráva)`

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=107), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-4--IPC-message-queue)

    2. ### Popis typické implementace (ne)blokování systémových volání pro předávání zpráv.
        Bodové ohodnocení: **3**

        - Fronta s omezenou velikostí
        - Neblokující send
            + Blokuje pouze při zaplnění fronty zpráv
        - Blokující receive
            + Příjemce je blokován, není-li dostupná žádná zpráva

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=111), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-4--IPC-message-queue)

    3. ### Popis řešení KS používajícího frontu zpráv.
        Bodové ohodnocení: **3**

        ```
            -- Inicializace
            Fronta.Send("go")
        ```
        ```
            loop
                Fronta.Receive(Zpráva)
                KritickáSekce()
                Fronta.Send(Zpráva)
                ZbytkováSekce()
        ```
        - Sdílená fronta se inicializuje zasláním jedné zprávy
        - Vstupní sekce volá blokující `Receive`
        - Výstupní sekce volá neblokující `Send`
        - První proces, který provede `Receive`, se dostane do kritické sekce, ostatní jsou blokovány

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=112), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-4-1--IPC-mq-critical-section)

    4. ### Popis řešení synchronizace vláken pomocí fronty zpráv.
        Bodové ohodnocení: **3**

        ```
            -- Inicializace
            VyprázdniFrontu()
        ```
        ```
            -- Proces i
            Vypočti(x)
            Fronta.Send(Zpráva)
        ```
        ```
            -- Proces j
            Fronta.Send(Zpráva)
            Použij(x)
        ```
        - Příkaz `Použij(x)` v procesu $P_j$ musí být proveden až po provedení `Vypočti(x)` v $P_i$
            1. Sdílená fronta se vyprázdní
            2. Proces $P_j$ před provedením `Použij(x)` volá blokující `Receive`
                + Provede-li se nejprve `Send`, `Receive` neblokuje
            3. $P_i$ po provedení `Vypočti(x)` volá neblokující `Send`

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=113), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-4-2--IPC-semaphore-sync)

    5. ### Definice problému svázaných producentů a konzumentů a jeho řešení pomocí fronty zpráv.
        Bodové ohodnocení: **3**

        - Problém
            + Dva typy procesů
                * Producenti
                    - Produkují data
                * Konzumenti
                    - Spotřebovávají data
            + Pro lepší efektivitu je třeba zavést mezisklad
                * Nevzniknou tak zbytečné čekací doby
            + Při přístupu do meziskladu je nutné:
                * Producenti musí ukládat data pouze na volná místa
                * Konzumenti musí vybírat každý jiná data z obsazených mást
                * Producenti musí čekat, pokud je sklad plný
                * Konzumenti musí čekat, pokud je sklad prázdný
        - Řešení
            ```
                -- Producent
                loop
                    var Msg = ProduceItem();
                    Mezisklad.Send(Msg)
            ```
            ```
                -- Konzument
                loop
                    Mezisklad.Receive(Msg)
                    ConsumeItem(Msg)
            ```
            + Sdílená fronta zpráv Mezisklad
            + Kapacita skladu je daná kapacitou fronty
            + Do fronty zasílají producenti data pomocí `Send`
                * Zaplní-li sklad, bude `Send` blokovat
            + Konzumenti vybírají data pomocí blokujícího `Receive`

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=114), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-4-3-1--IPC-producer-consumer-mq)


23) ## Nástroj programovacích jazyků: koncept monitoru, problém producentů a konzumentů a jeho řešení pomocí monitoru.

    1. ### Popis konceptu monitoru: jeho účel, struktura a základní vlastnosti.
        Bodové ohodnocení: **2+2**

        - SW modul
        - Obsahuje
            + Lokální data
            + Funkce zpřístupňující lokální data
            + Inicializační část
        - V monitoru (jeho funkci) smí být v daném okamžiku pouze jediné vlákno
        - Zajišťuje vzájemné vylučování
        - Zajišťuje synchronizaci pomocí podmínkových proměnných
            + Dostupné pouze funkcím monitoru
            + Lze je měnit pouze pomocí:
                * `Cwait(cv)` blokuje vlákno
                * `Csignal(cv)` obnoví provádění jednoho vlákna blokovaného podmínkovou proměnnou cv, pokud nějaké existuje

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=131), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7743#OS-7-1--IPC-monitor)

    2. ### Popis řešení KS pomocí monitoru.
        Bodové ohodnocení: **2**

        ```
            monitor Mon
                -- Deklarace sdílených proměnných

                Fun() do
                    KritickáSekce()

            loop
                Mon.Fun()
                ZbytkováSekce()
        ```
        - V monitoru (jeho funkci) smí být v daném okamžiku pouze jediné vlákno
            + Stačí umístit kritickou sekci do jeho funkce

        Zdroj: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7743#OS-7-1-1--IPC-monitor-critical-section)

    3. ### Popis řešení synchronizace vláken pomocí monitoru.
        Bodové ohodnocení: **3**

        ```
            monitor Sync
                var Hotovo = false
                var PodmínkováProměnná

                Dokončeno() do
                    Hotovo = true
                    Csignal(PodmínkováProměnná)
                
                Počkej() do
                    if Hotovo == false
                        Cwait(PodmínkováProměnná)
        ```
        ```
            -- Vlákno i
            SdílenáProměnná = Vypočti()
            Sync.Dokončeno()
        ```
        ```
            -- Vlákno j
            Sync.Počkej()
            Použij(SdílenáProměnná)
        ```
        - Pro synchronizaci lze použít podmínkové proměnné monitoru v kombinaci s proměnnou vypovídající o stavu dokončení akce

        Zdroj: [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7743#OS-7-1-1--IPC-monitor-critical-section)

    4. ### Definice problému svázaných producentů a konzumentů a jeho řešení pomocí monitoru, podmínky použité u synchronizace a zdůvodnění jejich použití.
        Bodové ohodnocení: **6**

        - Problém
            + Dva typy procesů
                * Producenti
                    - Produkují data
                * Konzumenti
                    - Spotřebovávají data
            + Pro lepší efektivitu je třeba zavést mezisklad
                * Nevzniknou tak zbytečné čekací doby
            + Při přístupu do meziskladu je nutné:
                * Producenti musí ukládat data pouze na volná místa
                * Konzumenti musí vybírat každý jiná data z obsazených míst
                * Producenti musí čekat, pokud je sklad plný
                * Konzumenti musí čekat, pokud je sklad prázdný
        - Řešení
            ```
                monitor Mon
                    var Mezisklad[0 to MaxKapacita];
                    var VolnáPozice = 0
                    var ObsazenáPozice = 0
                    var PočetPoložek = 0

                    -- Podmínkové proměnné
                    var Neplný
                    var Neprázdný

                    Ulož(Položka) do
                        -- Synchronize, čekání
                        loop
                            Cwait(Neplný)
                        while PočetPoložek == MaxKapacita

                        -- Kritická sekce
                        Mezisklad[VolnáPozice] = Položka
                        VolnáPozice = (VolnáPozice + 1) % MaxKapacita
                        PočetPoložek++

                        -- Synchronize, signalizace
                        Csignal(Neprázdný)

                    Vyzvedni() do
                        -- Synchronize, čekání
                        loop 
                            Cwait(Neprázdný)
                        while PočetPoložek == 0

                        -- Kritická sekce
                        Položka = Mezisklad[ObsazenáPozice]
                        ObsazenáPozice = (ObsazenáPozice + 1) % MaxKapacita
                        PočetPoložek--

                        -- Synchronize, signalizace
                        Csignal(Neplný)

                        return Položka
            ```
            ```
                -- Producent
                loop
                    Položka = ProduceItem()
                    Mon.Ulož(Položka)
            ```
            ```
                -- Konzument
                loop
                    Položka = Mon.Vyzvedni()
                    ConsumeItem(Položka)
            ```
            - Sdílená data a funkce pro vložení a výběr položek uvnitř monitoru 
                + Monitor zajistí vzájemné vylučování
            - Pro synchronizaci použít podmínkové proměnné
                + Pokud je mezisklad plný, v `Ulož` čeká vlákno na uvolnění místa
                + Pokud je mezisklad prázdný, v `Vyzvedni` čeká vlákno na vložení položky
                + Podmínky jsou implementovány pomocí While cyklu
                    * Po probuzení signálem je monitor volný jak pro probuzené vlákno, tak i pro jiná vlákna ve vstupní frontě
                    * Možnost implementace pomocí If podmínky záleží na implementaci přednosti podmínkové a vstupní fronty

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=138), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7743#OS-7-1-3--IPC-producer-consumer-monitor)

24) ## Nástroje knihovny posixových vláken: mutex, bariéra, podmínková proměnná.

    1. ### Popis mutexu, účel a vlastnosti, popis funkcí.
        Bodové ohodnocení: **3**

        - Datová struktura
        - Binární semafor
        - Zajištění atomicity a vzájemného vylučování
        - Neaktivní čekání
        - Položky
            + Boolean indikující zamčení inicializovaný na `false`
            + Fronta procesů
        - Metody
            + `pthread_mutex_init`
                * Deklarace a inicializace
            + `pthread_mutex_lock`
                * Zamkne mutex
                    - Je-li už zamčený, blokuje vlákno
            + `pthread_mutex_unlock`
                * Odemkne mutex zamčený tímto vláknem
                    - Čeká-li jiné vlákno na odemčení, je odblokováno
            + `pthread_mutex_destroy`
                * Zruší mutex

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=93), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7742#OS-6-3-3--IPC-binary-semaphore)

    2. ### Způsob použití mutexu.
        Bodové ohodnocení: **2**

        ```C++ 
            // Inicializace
            pthread_mutex_t a_mutex = PTHREAD_MUTEX_INITIALIZER;
        ```
        ```C++
            // Užití
            pthread_mutex_lock(&a_mutex); // wait
            KS; // kritická sekce
            pthread_mutex_unlock(&a_mutex); // signal
            ZS; // zbytková sekce
        ```

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=98)

        <!-- TODO: Něco více? -->

    3. ### Bariéra: účel, použití a popis funkcí (včetně návratové hodnoty funkce čekání).
        Bodové ohodnocení: **1+4**

        ```C++
            // inicializace
            pthread_barrier_t a_barrier; // deklarace
            pthread_barrier_init(&a_barrier, NULL, 5)
        ```
        ```C++
            // použití
            switch (pthread_barrier_wait(&a_barrier)) {
                case PTHREAD_BARRIER_SERIAL_THREAD: // jedno z vláken
                    (void) pthread_barrier_destroy(&a_barrier);
                case 0: break; // ostatní vlákna
                default: perror("barrier wait"); exit(EXIT_FAILURE);
            }
        ```

        - Pro synchronizaci vláken
        - Neaktivní čekání na ostatní vlákna
        - Jakmile k bariéře dospěje daný počet vláken, propustí je
        - Metody
            + `pthread_barrier_init`
                * Deklarace a inicializace
                * Stanoví se, kolik vláken musí zavolat funkci pro uvolnění
            + `pthread_barrier_wait`
                * Blokuje volající vlákno
                * Po dosažení stanoveného počtu vláken, propustí všechny
                    - Vrací při úspěchu pro jedno jádro hodnotu `PTHREAD_BARRIER_SERIAL_THREAD`
                    - Pro ostatní nulu (nenulové čislo při chybě) 
            + `pthread_barrier_destroy`
                * Zruší bariéru
                * Vrací `0` (úspěch) nebo číslo chyby

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=68), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7743#OS-7-2--IPC-barrier)

    4. ### Podmínková proměnná: účel, způsob použití a vlastnosti.
        Bodové ohodnocení: **1+4**

        - Pro synchronizaci vláken
        - Nezaručuje exkluzivitu přístupu
        - Neaktivní čekání na událost
        - Událost oznamuje některé vlákno signálem
            + Nečeká-li žádné vlákno, je signál ztracen

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=100)

25) ## Stav uváznutí (deadlock) a vyhladovění (definice a rozdíl), nutné podmínky pro vznik stavu uváznutí, předcházení a řešení problému stavu uváznutí, algoritmus bankéře.

    1. ### Definice stavu uváznutí (deadlock).
        Bodové ohodnocení: **2**

        - Skupina procesů je ve stavu uváznutí, když každý proces ve skupině čeká na událost, kterou může vyvolat pouze jiný proces ze skupiny

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2006%20%E2%80%93%20deadlock%20%E2%80%93%20prevence%20a%20%C5%99e%C5%A1en%C3%AD.pdf#page=5), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7744#OS-8-1--deadlock-def)

    2. ### Definice stavu vyhladovění (starvation), příklad.
        Bodové ohodnocení: **1**

        - Nekončící čekání procesu na přidělení prostředku, proces nečiní žádný pokrok
        - Např. nízká priorita procesu při soutěži o procesorový čas

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2006%20%E2%80%93%20deadlock%20%E2%80%93%20prevence%20a%20%C5%99e%C5%A1en%C3%AD.pdf#page=7), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7740#OS-4-3-5--prio)

    3. ### Vysvětlení podmínek pro vznik stavu uváznutí.
        Bodové ohodnocení: **4**

        - Vzájemné vylučování
            + Prostředky lze vlastnit pouze jediným procesem
        - Alokace a čekání
            + Proces vlastnící prostředek může požadovat další
        - Neodnímatelné prostředky
            + OS je nemůže odejmout, musí být explicitně uvolněny vlastnícím procesem
        - Cyklické čekání
            + Řetěz vzájemně čekajících procesů uzavírá cyklus

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2006%20%E2%80%93%20deadlock%20%E2%80%93%20prevence%20a%20%C5%99e%C5%A1en%C3%AD.pdf#page=9), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7744#OS-8-2--deadlock-conditions)

    4. ### Přístupy k řešení odstranění vzniklého stavu uváznutí.
        Bodové ohodnocení: **3**

        - Ignorování
        - Detekce a obnovení
        - Prevence
            + Stačí vyloučit jedinou podmínku

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2006%20%E2%80%93%20deadlock%20%E2%80%93%20prevence%20a%20%C5%99e%C5%A1en%C3%AD.pdf#page=11), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7744#OS-8-3--deadlock-possible-solutions)

    5. ### Způsoby prevence vzniku stavu uváznutí.
        Bodové ohodnocení: **3**

        - Negace vzájemného vylučování
            + Spooling (Vytvoření fronty požadavků)
        - Negace alokace a čekání
            + Zajistit alokaci všech potřebných prostředků naráz
        - Negace neodnímatelných prostředků
            + Zavést možné odebrání prostředku / zabití procesu
        - Negace cyklického čekání
            + Nedovolit alokaci prostředku, pokud by vznikl cyklus
        - Dovolení pouze bezpečných stavů

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2006%20%E2%80%93%20deadlock%20%E2%80%93%20prevence%20a%20%C5%99e%C5%A1en%C3%AD.pdf#page=12), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7744#OS-8-4--deadlock-solution-negate)

    6. ### Popis bankéřova algoritmu aplikovaného na procesy (s popisem stavů).
        Bodové ohodnocení: **2**

        - Předpoklady
            + Pevný počet prostředků
            + Každý proces deklaruje své maximální požadavky
            + Postupná alokace prostředků
        - Prostředek je na požadavek přidělen jen tehdy, vede-li situace do bezpečného stavu
            + Existuje plánovací pořadí dokončení procesů, při kterém všechny procesy mohou být dokončeny, i když všechny procesy naráz budou požadovat maximum svých prostředků
        - Pokud požadavek procesu vede k nebezpečnému stavu, je tento požadavek odmítnut
            + Pokud by každý proces požadoval maximum svých deklarovaných zdrojů a ani jednomu nebude moci systém vyhovět

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2006%20%E2%80%93%20deadlock%20%E2%80%93%20prevence%20a%20%C5%99e%C5%A1en%C3%AD.pdf#page=15), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7744#OS-8-5-1--deadlock-solution-banker)

26) ## IPC: komunikace procesů a vláken, možné prostředky komunikace.

    1. ### Možné prostředky pro komunikaci procesů / vláken.
        Bodové ohodnocení: **5**

        - Soubor, databáze
        - Roura
        - Socket
        - Fronty zpráv
        - Sdílená paměť

        Zdroj: [Moodle (prezentance)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=146)

    2. ### Krátká charakteristika prostředků pro komunikaci procesů / vláken.
        Bodové ohodnocení: **5**

        - Soubor, databáze
            + Náhodný přístup
            + Současný přístup nutno řídit
            + Pomalé
        - Roura
            + Proudový přístup (FIFO)
            + Jednosměrná komunikace
        - Socket
            + Proudový přístup (FIFO)
            + Obousměrná síťová komunikace
        - Fronty zpráv
            + Exkluzivní přístup (FIFO)
            + (Jednosměrná) komunikace
        - Sdílená paměť
            + Náhodný přístup
            + Současný přístup nutno řídit
            + Nejrychlejší

        Zdroj: [Moodle (prezentance)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=146)

    3. ### Popis funkcí pro sokety (alespoň pěti typů).
        Bodové ohodnocení: **5**

        - `getaddrinfo(3)` (překlad adresy)
        - `socket(2)` (alokace socketu)
        - `bind(2)` (svázání socketu s lokálním portem)
        - `connect(2)` (navázání spojení)
        - `close(2)` (zavření socketu)

        Zdroj: [Moodle (prezentance)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2005%20%E2%80%93%20konkurence%20proces%C5%AF%20a%20IPC.pdf#page=145)

        <!-- TODO: Pěti typů jako pěti různých funkcí? -->

27) ## Dělení disku na oddíly, zavaděč OS, důvody dělení, MBR, GPT, swap.

    1. ### Popis důvodů pro rozdělení disku na oddíly.
        Bodové ohodnocení: **4**

        - Lze používat různé souborové systémy
        - Snadnější správa (např. adresáře uživatelů nemohou zaplnit systémový disk)
        - Omezení potencionálního přepsání či HW chyby na oddíl
        - Oddíl pro swap
            + Netrpí datovou fragmentací
                * Rychlejší přístup

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=2)

    2. ### Popis MBR a způsob dělení disku na oddíly.
        Bodové ohodnocení: **3**

        - Master Boot Record
            + První sektor disku
            + Tabulka rozdělení disku na 4 oddíly
            + Primární zavaděč

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=3)

    3. ### Popis typů oddílů (pro dělení MBR).
        Bodové ohodnocení: **3**

        - Primární
            + Lze zavést OS pomocí sekundárního zavaděče
        - Rozšířený
            + Rozdělen na logické oddíly
        - Logický
            + Popisované Extended Boot Record (2 záznamy)
                * Následující logický oddíl
                * Následující EBR

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=3)

    4. ### Charakterizace GPT.
        Bodové ohodnocení: **3**

        - GUID Partition Table
            + Standard UEFI
            + Až 128 (primárních) oddílů
            + Odstraňuje limity MBR (disky nad 2 TiB)
            + Protective MBR zajišťuje zpětnou kompabilitu

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=3)

    5. ### Vysvětlení rozdílů mezi odkládacím prostorem (swap) na samostatném diskovém oddíle a v souboru.
        Bodové ohodnocení: **2**

        [Viz otázka 1](#popis-důvodů-pro-rozdělení-disku-na-oddíly)

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=2)

28) ## Souborový systém, metadata, speciální soubory.

    1. ### Popis obecné struktury souborových systémů a jejich metadat.
        Bodové ohodnocení: **3**

        - Data jsou uchovávána v souborech
        - Soubory a metadata alokují prostor po alokačních blocích
        - Soubory jsou organizovány v adresářích
        - Hierarchická struktura (strom)
            + Hlavní (kořenový, root) adresář
            + Aktuální (pracovní, working) adresář
            + Cesta (path) určuje logické umístění souboru
                * Absolutní (od kořene)
                * Relativní (od pracovního adresáře)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=6), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7747#OS-11--filesystems)
        
        <!-- TODO: Co je zde přesně nutno vědět? -->

    2. ### Metadata souborů vyjma oprávnění (alespoň šest).
        Bodové ohodnocení: **3**

        - Jméno souboru
        - Typ souboru
        - Alokované bloky
        - Velikost
        - Čas přístupu
        - Času změny

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=11), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7747#OS-11--filesystems)

    3. ### Možná oprávnění na soubor (alespoň šest).
        Bodové ohodnocení: **3**

        - Znalost existence
        - Čtení
        - Provádění
        - Mazání
        - Přepisování
        - Změna atributů

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=44), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7747#OS-11-4--file-permissions)

    4. ### Popis zvláštních typů souborů (alespoň čtyř).
        Bodové ohodnocení: **2**

        - Symbolický odkaz
            + Textová záměna za jiné jméno
            + Změna jména je pro procesy transparentní
        - Pojmenovaná roura
            + Jednosměrný komunikační nástroj pro dva procesy
            + Co bylo přečteno se odstraní
        - Pojmenovaný socket
            + Obousměrný komunikační nástroj
            + Adresa = jméno souboru
        - Zařízení (device file)
            + Blokový (s náhodným přístupem, např. disk)
            + Znakový (proudový přístup po bajtech, např. tiskárna)

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=39), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7747#OS-11-3--special-files)

    5. ### Charakteristika typů odkazů a jejich reprezentace na souborovém systému.
        Bodové ohodnocení: **2+2**

        - Tvrdý odkaz (Hard link)
            + Více jmen pro týž soubor na stejném FS
            + Data i metadata jsou na médiu uložena pouze jednou
            + Ke smazání dojde při odstranění posledního odkazu
        - Symbolický odkaz (Symbolic link)
            + Textová záměna za jiné jméno
            + Změna jména je pro procesy transparentní

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=39), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7747#OS-11-3--special-files)


29) ## Konzistence metadat souborových systémů: příčiny vzniku nekonzistencí, metody zachování konzistence, vlastnosti metod, příklady souborových systémů.

    1. ### Popis příčiny vzniku nekonzistence metadat souborového systému.
        Bodové ohodnocení: **3**

        - Zápis dat do souboru znamená provedení operací na různých místech
            + Změny probíhají postupně
                * Vznik nekonzistence

        Zdroje: [Mooodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=20), [Mooodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7747#OS-11-2--filesystem-consistency)

    2. ### Popis principu žurnálování (včetně nevýhod) a činnost obnovy konzistence po pádu.
        Bodové ohodnocení: **5**

        - Transakční log
            + Změny metadat se zapisují do transakčního logu
                * Zabraňuje ztrátě konzistence dat při pádu systému
                    - Nezabraňuje ztrátě dat
                * Po potvrzení zápisu se provede daná změna
                    - Dvojí zápis
                        + Zpomalení
                * Po pádu není třeba kontrolovat celý souborový systém
                    - Zkontrolují se pouze místa posledních změn
                        + Zrychlení
                
        Zdroje: [Mooodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=26), [Mooodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7747#OS-11-2-1--filesystem-consistency-journaling)

    3. ### Popis principu metody copy‑on‑write (včetně nevýhod) a činnost obnovy konzistence po pádu.
        Bodové ohodnocení: **4**

        - Při přepisu dat či metadat se modifikuje kopie bloku
        - Po dokončení zápisu se atomicky provede zneplatnění původních dat a metadat a potvrdí se platnost nových
        - Souborový systém je vždy konzistentní
        - Data se nezapisují dvakrát
        - Větší datová fragmentace

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=33), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7747#OS-11-2-2--filesystem-consistency-copy-on-write)

    4. ### Příklady souborových systémů ve vztahu k metodě zachování konzistence, alespoň dva různé pro každou metodu (nikoliv různé verze téhož), pro žurnálování zvlášť po dvou příkladech pro dvojí způsob.
        Bodové ohodnocení: **3**

        - Bez konzistence
            + FAT
            + HFS
        - Žurnálování
            + Úplné
                * ext4
                * UDF
            + Pouze metadata
                * NTFS
                * HFS+
        - Copy-on-write
            + BtrFS
            + ZFS

        Zdroj: [Mooodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=38)

30) ## Typy úložišť, RAID, způsob alokace dat souborů.

    1. ### Popis typů úložišť (DAS, NAS, SAN) s příklady.
        Bodové ohodnocení: **3**

        - Directly Attached Storage
            + Lokální blokové zařízení
            + SCSI, SATA
        - Network Attached Storage
            + Souborový systém zpřístupněný síťovým protokolem
            + NFS, Samba
        - Storage Area Network
            + Blokové zařízení zpřístupněné síťovým protokolem
            + iSCSI

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=9)

    2. ### Charakteristika RAID (způsob zapojení včetně minimálního počtu disků a principu ukládání dat, odolnost, rychlost R/W).
        3. #### RAID 0.
            Bodové ohodnocení: **3**

            - Prokládané ukládání
                + Data jsou rozprostřena na více discích
            - Minimálně 2 disky
            - Nevydrží ztrátu žádného disku
            - Rychlejší čtení
            - Rychlejší zápis

        4. #### RAID 1.
            Bodové ohodnocení: **3**

            - Zrcadlené ukládání
                + Data jsou ukládána symetricky na více discích
            - Minimálně 2 disky
            - Vydrží ztrátu N-1 disků
            - Rychlejší čtení
            - Stejně rychlý zápis

        5. #### RAID 5.
            Bodové ohodnocení: **3**

            - Prokládané s paritou
                + Data jsou ukládána symetricky na více discích
                + Paritní data jsou rozprostřena na více discích
            - Minimálně 3 disky
            - Vydrží ztrátu 1 disku
            - Rychlejší čtení
            - Rychlejší zápis

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=10), [Moodle (text, Trvalá úložiště dat)](https://moodle.upce.cz/moodle/pluginfile.php/600093/mod_resource/content/5/ARPO_08_uloziste.pdf)


    6. ### Charakteristika možných způsobů alokace dat pro soubory.
        Bodové ohodnocení: **3**

        - Souvislá
            + Souboru jsou přiděleny po sobě jdoucí bloky
            + Vnější fragmentace

            ![Souvislá alokace](https://moodle.upce.cz/moodle/tohu0051/courses/OS/images/cs/file_space_allocation-contiguous.svg)
        - Řetězená
            + Alokační tabulka obsahuje zřetězený seznam
            + Odstraněna vnější fragmentace
            + Datová fragmentace

            ![Řetězená alokace](https://moodle.upce.cz/moodle/tohu0051/courses/OS/images/cs/file_space_allocation-chained.svg)
        - Indexová
            + Index obsahuje seznam přidělených bloků
            + Index se může odkazovat na blok s indexem
            + Odstraněna vnější fragmentace

            ![Indexová alokace](https://moodle.upce.cz/moodle/tohu0051/courses/OS/images/cs/file_space_allocation-indexed.svg)
            
        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2008%20%E2%80%93%20spr%C3%A1va%20soubor%C5%AF.pdf#page=12), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7747#OS-11-1--file-allocation)

31) ## Vzdálený přístup k OS, telnet, SSH, autentizace, autorizace, zásady tvorby hesla, typy útoků na systém a prevence.

    1. ### Definice pojmů autentizace a autorizace.
        Bodové ohodnocení: **2**

        - Autentizace
            + Ověření identity
        - Autorizace 
            + Ověření oprávnění

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2010%20%E2%80%93%20design%20a%20bezpe%C4%8Dnost.pdf#page=23), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7749#OS-13-4-2--protection)

    2. ### Možné metody autentizace (alespoň čtyři).
        Bodové ohodnocení: **2**

        - Jméno a heslo
        - Hesla na jedno použití
        - Soukromý klíč
        - Biometrie

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2010%20%E2%80%93%20design%20a%20bezpe%C4%8Dnost.pdf#page=23), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7749#OS-13-4-2--protection)

    3. ### Popis principu zabezpečení přihlašování pomocí protokolu SSH.
        Bodové ohodnocení: **3**

        <!-- TODO: Kde se toto v učivu nachází? -->

        Zdroje: [Moodle (prezentace)](), [Moodle (text)]()

    4. ### Riziko přihlašování pomocí protokolu SSH a jak mu předcházet.
        Bodové ohodnocení: **2+2**

        <!-- TODO: Kde se toto v učivu nachází? -->

        Zdroje: [Moodle (prezentace)](), [Moodle (text)]()
        
    5. ### Zásady tvorby hesla (čtyři nejdůležitější).
        Bodové ohodnocení: **2**

        - Minimální délka 10 znaků
        - Použití velkých a malých písmen, číslic a speciálních znaků (!?#)
        - Žádné slovníkové výrazy
        - Žádné údaje odvoditelné od uživatele

        Zdroj: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2010%20%E2%80%93%20design%20a%20zabezpe%C4%8Den%C3%AD.pdf#page=24)
        
    6. ### Popis alespoň čtyř typů útoků na systém.
        Bodové ohodnocení: **2**

        - (Distributed) Denial of Service
            + Zahlcení serveru množstvím požadavků, takže se služba zastaví nebo velmi zpomalí
        - Login spoofing
            + Imitace přihlašovací obrazovky OS
        - Logické (časované) bomby
            + Po určité době nebo za určitých okolností se spouští škodlivý kód
        - Zadní vrátka
            + Vložená metoda přístupu navíc

        Zdroje: [Moodle (prezentace)](https://moodle.upce.cz/moodle/tohu0051/courses/OS/slides/OS%2010%20%E2%80%93%20design%20a%20bezpe%C4%8Dnost.pdf#page=17), [Moodle (text)](https://moodle.upce.cz/moodle/mod/book/view.php?id=408908&chapterid=7749#OS-13-4-1--attacks)
        
