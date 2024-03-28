# Important quotes and thoughts about testing
Credits: Vladimir Khorikov - Unit testing

> 
> Czy testować? O ile projekt nie jest zabawką, to tak. 
> Testy są jak kask na rowerze. Możesz jeździć bez niego,
> ale wtedy musisz być gotów na upadek.

> Pokrycie jest dobrą miarą tego jak zły jest kod, ale kiepską miarą tego jak jest on dobry.

> Kod trudny w przetestowaniu jest zapewne niskiej jakości, ale możliwość przetestowania kodu nie oznacza,
> że jest on wysokiej jakości.

> Rozgałęzienia w testach nie przynoszą żadnych korzyści -
> wprowadzaj.ą tylko dodatkowe koszty utrzymania. Instrukcja `if` sprawia, 
> że testy są bardziej skomplikowane i trudniejsze w utrzymaniu.

Instead `if` use patterns like [ObjectMother](ObjectMother.md) or [TestDataBuilder](TestDataBuilder.md).

> Four fundamentals of testing:
> - protection against regression
> - resistance to changes
> - quick feedback
> - maintainability 

> To have high ratio of protection against regression,
> your test shoud run as much production code as possible.

> Twój test powinien podchodzić do systemu poddawanego testom z perspektywy użytkownika końcowego
> i sprawdzać wyłącznie rezultaty mające znaczenie dla tego użytkownia. Wszystko inne należy pominąć.

> Mała liczba testów o wysokiej wartości bardziej przysłuży sę utrzymaniu zrównoważonego rozwoju projektu
> niż duża liczba miernych testów.

> Jeśli nie potrafisz przypisać testu do kontekstu biznesowego usuń go lub przebuduj. Nie zachowuj testu 
> w zestawie testowym tylko dlatego, że już tam jest.

> Istnieje nierozerwalny związek między dobrym testem, a dobrze zaprojektowanym interfejsem API klasy / systemu.

> Nie da się napisać dobrych testów, nie przykładając się do pisania bazy kodu, które te testy pokrywają.

> Rzadko udaje się znacząco ulepszyć zestaw testowy, bez refaktoryzacji kodu, który jest testowany.

> Im ważniejszy lub bardziej złożony jest kod, tym mniejszą liczbę współzależności powinien mieć.

> Lepiej w ogóle nienapisać testu, niż napisać zły.

> Ogólna zasada mówi, aby sprawdzać jak najwięcej biznesowych przypadków granicznych za pomocą 
> testów jednostkowych, a testami integracyjnymi pokrywać szczęśliwe ścieżki użytkownika
> i wszystkie przypadki graniczne, których nie obsługują testy jednostkowe.

> Korzystaj z rzeczywistych instancji zarządzanych zależności; niezarządzane zależności zastępuj atrapami.

> Testy integracyjne obejmują kontrolery, a jednostkowe algorytmy i model domeny.
> Testy integracyjne zapewniają lepszą ochronę przed regresją i odporność na zmiany; 
> testy jednostkowe utrzymywalność i szybkość informacji zwrotnej.






