# super-journey

### 1 zadanie
W ramach przetwarzania danych należy ukończyć implementację metody “make” klasy Pipeline.
Metoda “make” powinna przyjmować zmienną liczbę funkcji i zwracać nową funkcję, która przyjmuje
jeden parametr $arg.
Zwrócona funkcja powinna wywołać pierwszą funkcję w “make” z parametrem $arg i wywołać drugą
funkcję z wynikiem pierwszej funkcji.
Zwrócona funkcja powinna kontynuować wywoływanie każdej funkcji w “make” w kolejności,
postępując według tego samego wzorca i zwracać wartość z ostatniej funkcji.
Na przykład wywołanie make(function($var) { return $var * 3; }, function($var) { return $var + 1; },
function($var) { return $var / 2; }), a następnie wywołanie zwróconej funkcji z argumentem 3
powinno zwrócić 5.
### 2 zadanie
Interfejs użytkownika zawiera dwa rodzaje kontrolek wprowadzania danych: TextInput, który
akceptuje wszystkie teksty oraz NumericInput, który akceptuje tylko cyfry.
Zaimplementuj klasę TextInput, która zawiera:
Metodę publiczną add($text) - dodającą podany tekst do bieżącej wartości.
Metodę publiczną getValue() - zwracającą bieżącą wartość (string).
Zaimplementuj klasę NumericInput, która: Dziedziczy po TextInput. Przedefiniowuje metodę add tak,
aby każdy tekst nienumeryczny był ignorowany.
### 3 zadanie
Klasa RankingTable śledzi wyniki każdego gracza w lidze. Po każdej grze, gracz zapisuje swój wynik za
pomocą funkcji recordResult().
Ranking gracza w lidze jest obliczany zgodnie z następującą logiką:
Gracz z najwyższym wynikiem jest sklasyfikowany jako pierwszy (rank 1). Gracz z najniższym
wynikiem jest sklasyfikowany jako ostatni.
Jeśli dwóch graczy ma ten sam wynik, to gracz, który rozegrał mniej gier, jest sklasyfikowany wyżej.
Jeśli dwóch graczy ma ten sam wynik i rozegrali tę samą liczbę gier, to gracz, który był pierwszy na
liście graczy, jest sklasyfikowany wyżej.
Zaimplementuj funkcję playerRank, która zwraca gracza o podanym rankingu.
$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 5);
echo $table->playerRank(1);
Wszyscy gracze mają taki sam wynik. Jednak Maks i Monika rozegrali mniej gier niż Jan, a ponieważ
Monika znajduje się przed Maks na liście graczy, jest on sklasyfikowany jako pierwszy. Dlatego
powyższy kod powinien zwrócić "Monika".
### 4 zadanie
Jeden z rodzajów słownika, czyli tezaurus, zawiera słowa i ich synonimy. Poniżej znajduje się przykład
struktury danych, która definiuje tezaurus:
array("market" => array("trade"), "small" => array("little", "compact"))
Należy zaimplementować funkcję getSynonyms, która przyjmuje słowo jako ciąg znaków i zwraca
wszystkie synonimy dla tego słowa w formacie JSON, jak w poniższym przykładzie.
Na przykład wywołanie $thesaurus->getSynonyms("small") powinno zwrócić:
'{"word":"small","synonyms":["little", "compact"]}'
podczas gdy wywołanie z słowem, dla którego nie ma synonimów, np. $thesaurus-
/>getSynonyms("asleast") powinno zwrócić:
'{"word":"asleast","synonyms":[]}'
