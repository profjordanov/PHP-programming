ООП е въведено за първи път в PHP във версия 3. 
Възможностите му остават изключително ограничени и във версия 4.
В PHP5 е преработен изцяло обектния модел.
Основната разлика между ООП и функционалното програмиране е че при ООП данните и кодът за манипулиране с тях се намират на едно място – наречено клас. 
Класът е шаблон за създаване на обекти. 
Класът е общото, обектът – частното. Например клас „клиенти“ позволява задаване на  различни характеристики за всеки клиент – град, адрес, име, имейл. Обекът от този клас би бил всеки клиент с характерните стойности за зададените свойства – например „Петър Йорданов от Варна с имейл peter90@gmail.com”

- Нов обект се създава с $име_обект=new Име_клас()
- Свойствата и методите се достъпват с $име_обект->име_свойство ($име_обект->име_метод())
- Свойство тип Public  - показва, че достъп до това свойство имат всички обекти и класове.

Свойство тип Private – показва, че достъп до такива променливи имат само методите на класа.
За да се даде име на новия обект от клас Човек, ще се използва конструктор.

Конструктор се създава като  метод (функция) в класа с име __construct

Деструктор се създава като  метод (функция) в класа с име __destruct

Деструктор – изпълнява се при унищожаване на обект ($име_обект=Null или unset($име обект))  или при приключване изпълнението на Php скрипта.

Свойство или метод, декларирани като статични, могат да бъдат достъпени и без да се създаде обект за класа. 
Символът за $ се записва СЛЕД :: 
За достъп в класа НЕ МОЖЕ да бъде използван $this, вместо това се използва self::



В PHP 5 са реализирани абстрактни класове и методи. 
Не е възможно инстанциирането на клас дефиниран като абстрактен. 
Всеки клас, който съдържа поне един абстрактен метод, трябва също да се дефинира като абстрактен. 
Методите, декларирани като абстрактни, имат прототип, но не и имплементация. 
