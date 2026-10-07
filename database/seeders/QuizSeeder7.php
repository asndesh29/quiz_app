<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder7 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'Weekly Booster 7',
            'description' => 'RDBMS, Data Warehousing, HTML, JavaScript, CSS, XML, Web Servers, Disaster Recovery and Database Normalization MCQs.',
        ]);

        $questions = [
            [
                'question' => 'In a relational database management system (RDBMS), a single row of a table that contains a complete set of related data fields is formally known as',
                'options' => [
                    [
                        'answer' => 'Attribute',
                        'is_correct' => false,
                        'explanation' => 'An attribute represents a column or field in a relational table.',
                    ],
                    [
                        'answer' => 'Tuple or Record',
                        'is_correct' => true,
                        'explanation' => 'A tuple, also called a record, represents a single row containing a complete set of related data values.',
                    ],
                    [
                        'answer' => 'Schema',
                        'is_correct' => false,
                        'explanation' => 'A schema defines the overall structure of a database, including tables, fields, relationships, and constraints.',
                    ],
                    [
                        'answer' => 'Domain',
                        'is_correct' => false,
                        'explanation' => 'A domain defines the set of valid values that an attribute can contain.',
                    ],
                ],
            ],
            [
                'question' => 'Which type of database key is chosen from a set of candidate keys to uniquely identify each row in a database table and cannot accept NULL values?',
                'options' => [
                    [
                        'answer' => 'Foreign Key',
                        'is_correct' => false,
                        'explanation' => 'A foreign key references a key in another table and may allow NULL values depending on the database design.',
                    ],
                    [
                        'answer' => 'Super Key',
                        'is_correct' => false,
                        'explanation' => 'A super key is any set of attributes that can uniquely identify a row, but it may contain unnecessary attributes.',
                    ],
                    [
                        'answer' => 'Primary Key',
                        'is_correct' => true,
                        'explanation' => 'A primary key is selected from the candidate keys to uniquely identify each row and cannot contain NULL values.',
                    ],
                    [
                        'answer' => 'Alternate Key',
                        'is_correct' => false,
                        'explanation' => 'An alternate key is a candidate key that was not selected as the primary key.',
                    ],
                ],
            ],
            [
                'question' => 'In an Banking Database, if one Customer can open multiple Bank Accounts, but each Bank Account belongs to exactly one Customer, what type of entity relationship exists between Customer and Account?',
                'options' => [
                    [
                        'answer' => 'One-to-One (1:1)',
                        'is_correct' => false,
                        'explanation' => 'A one-to-one relationship means each customer is associated with exactly one account and each account with one customer.',
                    ],
                    [
                        'answer' => 'One-to-Many (1:M)',
                        'is_correct' => true,
                        'explanation' => 'One customer can own multiple accounts, while each account belongs to exactly one customer, forming a one-to-many relationship.',
                    ],
                    [
                        'answer' => 'Many-to-Many (M:N)',
                        'is_correct' => false,
                        'explanation' => 'A many-to-many relationship would allow multiple customers to be associated with multiple accounts.',
                    ],
                    [
                        'answer' => 'Self-Referential',
                        'is_correct' => false,
                        'explanation' => 'A self-referential relationship occurs when an entity is related to itself.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following statements regarding Database Indexing is INCORRECT?',
                'options' => [
                    [
                        'answer' => 'Indexing speeds up data retrieval operations (SELECT queries).',
                        'is_correct' => false,
                        'explanation' => 'Indexes can significantly improve the speed of data retrieval by allowing the database to locate rows more efficiently.',
                    ],
                    [
                        'answer' => 'Creating indexes on a table decreases the time taken for INSERT, UPDATE, and DELETE operations.',
                        'is_correct' => true,
                        'explanation' => 'This statement is incorrect because indexes generally add overhead to INSERT, UPDATE, and DELETE operations since the indexes may also need to be maintained.',
                    ],
                    [
                        'answer' => 'A Clustered Index determines the physical order of data in a table.',
                        'is_correct' => false,
                        'explanation' => 'A clustered index determines the physical or storage order of rows in systems that support clustered indexes.',
                    ],
                    [
                        'answer' => 'A table can have only one Clustered Index but multiple Non-Clustered Indexes.',
                        'is_correct' => false,
                        'explanation' => 'A table can generally have one clustered index because its rows can have only one physical ordering, while multiple non-clustered indexes can exist.',
                    ],
                ],
            ],
            [
                'question' => 'According to W.H. Inmon (the father of Data Warehousing), a Data Warehouse is a subject-oriented, integrated, time-variant, and __________ collection of data in support of management\'s decision-making process.',
                'options' => [
                    [
                        'answer' => 'Volatile',
                        'is_correct' => false,
                        'explanation' => 'Data warehouses are designed to be non-volatile rather than frequently modified like operational databases.',
                    ],
                    [
                        'answer' => 'Non-volatile',
                        'is_correct' => true,
                        'explanation' => 'W.H. Inmon defines a data warehouse as subject-oriented, integrated, time-variant, and non-volatile.',
                    ],
                    [
                        'answer' => 'Transient',
                        'is_correct' => false,
                        'explanation' => 'Transient data is temporary and does not describe the persistent nature of a data warehouse.',
                    ],
                    [
                        'answer' => 'Operational',
                        'is_correct' => false,
                        'explanation' => 'Operational databases are designed primarily for day-to-day transaction processing rather than historical analysis.',
                    ],
                ],
            ],
            [
                'question' => 'How does an OLAP (Online Analytical Processing) system primarily differ from an OLTP (Online Transaction Processing) system?',
                'options' => [
                    [
                        'answer' => 'OLTP is designed for historical data analysis, while OLAP handles real-time daily transactions.',
                        'is_correct' => false,
                        'explanation' => 'The roles are reversed: OLTP handles daily transactions, while OLAP focuses on analytical processing and historical data.',
                    ],
                    [
                        'answer' => 'OLTP uses star schema, whereas OLAP strictly uses 3rd Normal Form (3NF).',
                        'is_correct' => false,
                        'explanation' => 'OLTP systems commonly use normalized schemas, while OLAP systems may use dimensional models such as star schemas.',
                    ],
                    [
                        'answer' => 'OLTP focuses on high throughput of short, atomic transactions, while OLAP focuses on complex queries on historical data.',
                        'is_correct' => true,
                        'explanation' => 'OLTP is optimized for frequent short transactions, while OLAP is optimized for complex analytical queries over historical and aggregated data.',
                    ],
                    [
                        'answer' => 'OLTP contains highly aggregated data, whereas OLAP contains detailed un-aggregated data.',
                        'is_correct' => false,
                        'explanation' => 'OLAP commonly uses historical and aggregated data for analysis, whereas OLTP typically stores detailed operational data.',
                    ],
                ],
            ],
            [
                'question' => 'In a Data Warehouse dimensional model (Star Schema), which table typically contains numerical measurements, metrics, and foreign keys referencing surrounding tables?',
                'options' => [
                    [
                        'answer' => 'Dimension Table',
                        'is_correct' => false,
                        'explanation' => 'Dimension tables contain descriptive attributes used to analyze facts.',
                    ],
                    [
                        'answer' => 'Fact Table',
                        'is_correct' => true,
                        'explanation' => 'A fact table contains numerical measures and foreign keys that reference related dimension tables.',
                    ],
                    [
                        'answer' => 'Lookup Table',
                        'is_correct' => false,
                        'explanation' => 'A lookup table generally provides reference values and is not the central table containing analytical measurements.',
                    ],
                    [
                        'answer' => 'Junction Table',
                        'is_correct' => false,
                        'explanation' => 'A junction table is typically used to implement many-to-many relationships in relational database designs.',
                    ],
                ],
            ],
            [
                'question' => 'A departmental subset or decentralized slice of a Data Warehouse designed specifically for a single business unit (e.g., the Loan Department or HR Department of a bank) is known as a:',
                'options' => [
                    [
                        'answer' => 'Data Lake',
                        'is_correct' => false,
                        'explanation' => 'A data lake stores large volumes of raw structured, semi-structured, and unstructured data.',
                    ],
                    [
                        'answer' => 'Data Staging Area',
                        'is_correct' => false,
                        'explanation' => 'A staging area temporarily holds data during extraction, transformation, cleansing, and preparation.',
                    ],
                    [
                        'answer' => 'Data Mart',
                        'is_correct' => true,
                        'explanation' => 'A data mart is a focused subset of a data warehouse designed for a specific department or business function.',
                    ],
                    [
                        'answer' => 'Operational Data Store (ODS)',
                        'is_correct' => false,
                        'explanation' => 'An ODS is commonly used for integrated operational reporting and near-real-time data rather than a departmental analytical subset.',
                    ],
                ],
            ],
            [
                'question' => 'What does the acronym ETL stand for in the context of Data Warehousing data integration pipelines?',
                'options' => [
                    [
                        'answer' => 'Enterprise Transport & Loading',
                        'is_correct' => false,
                        'explanation' => 'ETL does not stand for Enterprise Transport & Loading.',
                    ],
                    [
                        'answer' => 'Extract, Transform, Load',
                        'is_correct' => true,
                        'explanation' => 'ETL stands for Extract, Transform, Load, the process of extracting data, transforming it into the required format, and loading it into the target system.',
                    ],
                    [
                        'answer' => 'Evaluate, Transfer, Log',
                        'is_correct' => false,
                        'explanation' => 'Evaluate, Transfer, Log is not the standard meaning of ETL.',
                    ],
                    [
                        'answer' => 'Execute, Translate, Lock',
                        'is_correct' => false,
                        'explanation' => 'Execute, Translate, Lock is not the standard meaning of ETL.',
                    ],
                ],
            ],
            [
                'question' => 'Where are data cleansing, data validation, deduplication, and format standardization performed before loading the data into the final Data Warehouse repository?',
                'options' => [
                    [
                        'answer' => 'Staging Area',
                        'is_correct' => true,
                        'explanation' => 'The staging area temporarily stores extracted data where cleansing, validation, deduplication, transformation, and standardization can be performed before loading.',
                    ],
                    [
                        'answer' => 'Production OLTP Database',
                        'is_correct' => false,
                        'explanation' => 'Production OLTP databases are designed for operational transactions and are not normally used as the primary data cleansing area for a warehouse.',
                    ],
                    [
                        'answer' => 'Metadata Repository',
                        'is_correct' => false,
                        'explanation' => 'A metadata repository stores information about data structures, definitions, lineage, and mappings rather than performing data cleansing.',
                    ],
                    [
                        'answer' => 'Data Mart Presentation Layer',
                        'is_correct' => false,
                        'explanation' => 'The presentation layer is intended for analytical consumption rather than initial data cleansing and standardization.',
                    ],
                ],
            ],
            [
                'question' => 'In the Data Warehousing process, what is Metadata commonly described as, and why is it critical?',
                'options' => [
                    [
                        'answer' => 'Raw transaction logs; used to roll back bad batches.',
                        'is_correct' => false,
                        'explanation' => 'Raw transaction logs are operational data or log records, not metadata.',
                    ],
                    [
                        'answer' => 'Summarized numerical sales numbers; used for calculating profit.',
                        'is_correct' => false,
                        'explanation' => 'Summarized sales numbers are actual business data rather than metadata.',
                    ],
                    [
                        'answer' => '"Data about data"; providing context, lineage, definitions, and structural mapping.',
                        'is_correct' => true,
                        'explanation' => 'Metadata describes data, including its meaning, structure, source, lineage, relationships, and transformation rules.',
                    ],
                    [
                        'answer' => 'Encryption keys; used to secure user credentials.',
                        'is_correct' => false,
                        'explanation' => 'Encryption keys are security credentials and are not the general definition of metadata.',
                    ],
                ],
            ],
            [
                'question' => 'Which HTML tag is used to create an inline hyperlink that connects one web page to another?',
                'options' => [
                    [
                        'answer' => '<link>',
                        'is_correct' => false,
                        'explanation' => 'The <link> element is mainly used to define relationships between the current document and external resources such as stylesheets.',
                    ],
                    [
                        'answer' => '<a>',
                        'is_correct' => true,
                        'explanation' => 'The <a> anchor element is used to create hyperlinks to other pages, resources, locations, or URLs.',
                    ],
                    [
                        'answer' => '<href>',
                        'is_correct' => false,
                        'explanation' => 'href is an attribute, not an HTML element or tag.',
                    ],
                    [
                        'answer' => '<url>',
                        'is_correct' => false,
                        'explanation' => '<url> is not a standard HTML element for creating hyperlinks.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following HTML elements is an example of an empty element (a tag that does not require a closing tag)?',
                'options' => [
                    [
                        'answer' => '<table>',
                        'is_correct' => false,
                        'explanation' => 'The <table> element requires a closing tag.',
                    ],
                    [
                        'answer' => '<p>',
                        'is_correct' => false,
                        'explanation' => 'The <p> element normally requires a closing tag.',
                    ],
                    [
                        'answer' => '<img>',
                        'is_correct' => true,
                        'explanation' => 'The <img> element is a void or empty HTML element and does not require a closing tag.',
                    ],
                    [
                        'answer' => '<div>',
                        'is_correct' => false,
                        'explanation' => 'The <div> element requires a closing tag.',
                    ],
                ],
            ],
            [
                'question' => 'To specify that a form input field must be filled out before submitting the form in HTML5, which attribute should be added to the <input> element?',
                'options' => [
                    [
                        'answer' => 'validate="true"',
                        'is_correct' => false,
                        'explanation' => 'validate="true" is not the standard HTML5 attribute for making an input mandatory.',
                    ],
                    [
                        'answer' => 'required',
                        'is_correct' => true,
                        'explanation' => 'The required attribute makes an HTML form field mandatory before the form can be submitted.',
                    ],
                    [
                        'answer' => 'important',
                        'is_correct' => false,
                        'explanation' => 'important is not an HTML attribute used to require form input.',
                    ],
                    [
                        'answer' => 'placeholder="required"',
                        'is_correct' => false,
                        'explanation' => 'A placeholder only displays hint text and does not make the field mandatory.',
                    ],
                ],
            ],
            [
                'question' => 'What is the correct HTML hierarchy for creating a standard table with a single header row and one data row?',
                'options' => [
                    [
                        'answer' => '<table> <row> <head> </head> </row> </table>',
                        'is_correct' => false,
                        'explanation' => 'HTML tables use <tr> for rows and <th> or <td> for cells; <row> and <head> are not the correct elements here.',
                    ],
                    [
                        'answer' => '<table> <tr> <th> </th> </tr> <tr> <td> </td> </tr> </table>',
                        'is_correct' => true,
                        'explanation' => 'A table contains rows using <tr>, header cells using <th>, and data cells using <td>.',
                    ],
                    [
                        'answer' => '<table> <head> <th> </th> </head> <body> <td> </td> </body> </table>',
                        'is_correct' => false,
                        'explanation' => '<head> and <body> are document-level elements, not table row containers.',
                    ],
                    [
                        'answer' => '<table> <td> <tr> </tr> </td> </table>',
                        'is_correct' => false,
                        'explanation' => 'Table rows should contain cells, so <tr> should wrap <td> or <th>, not the reverse.',
                    ],
                ],
            ],
            [
                'question' => 'Which HTML tag is used to embed or reference client-side JavaScript code within an HTML document?',
                'options' => [
                    [
                        'answer' => '<script>',
                        'is_correct' => true,
                        'explanation' => 'The <script> element is used to embed or reference JavaScript code in an HTML document.',
                    ],
                    [
                        'answer' => '<javascript>',
                        'is_correct' => false,
                        'explanation' => '<javascript> is not a standard HTML element.',
                    ],
                    [
                        'answer' => '<js>',
                        'is_correct' => false,
                        'explanation' => '<js> is not a standard HTML element for embedding JavaScript.',
                    ],
                    [
                        'answer' => '<code>',
                        'is_correct' => false,
                        'explanation' => '<code> represents a fragment of computer code but does not specifically embed executable JavaScript.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is a primary distinction between Client-Side Scripting (e.g., JavaScript) and Server-Side Scripting (e.g., PHP, Node.js, Python)?',
                'options' => [
                    [
                        'answer' => 'Client-side scripts execute on the web server; server-side scripts execute in the browser.',
                        'is_correct' => false,
                        'explanation' => 'The execution locations are reversed in this statement.',
                    ],
                    [
                        'answer' => 'Client-side scripts interact directly with backend databases; server-side scripts handle user interface animations.',
                        'is_correct' => false,
                        'explanation' => 'Server-side applications commonly interact with databases, while client-side JavaScript commonly handles browser-side interactions and UI behavior.',
                    ],
                    [
                        'answer' => 'Client-side scripts execute inside the user\'s web browser; server-side scripts execute on the server before generating HTML for the client.',
                        'is_correct' => true,
                        'explanation' => 'Client-side scripts run in the browser, while server-side scripts execute on the server and can generate or process content before sending a response to the client.',
                    ],
                    [
                        'answer' => 'Client-side scripts are compiled; server-side scripts are never interpreted.',
                        'is_correct' => false,
                        'explanation' => 'Compilation and interpretation depend on the language and runtime and do not define the client-side versus server-side distinction.',
                    ],
                ],
            ],
            [
                'question' => 'Consider the following JavaScript snippet: var x = "5" + 3; What will be the value and type of variable x?',
                'options' => [
                    [
                        'answer' => '8 (Number)',
                        'is_correct' => false,
                        'explanation' => 'The + operator performs string concatenation when one operand is a string.',
                    ],
                    [
                        'answer' => '"53" (String)',
                        'is_correct' => true,
                        'explanation' => 'JavaScript converts the number 3 to a string and concatenates it with "5", producing the string "53".',
                    ],
                    [
                        'answer' => 'NaN (Not a Number)',
                        'is_correct' => false,
                        'explanation' => 'NaN is not produced because the operation is valid string concatenation.',
                    ],
                    [
                        'answer' => 'Syntax Error',
                        'is_correct' => false,
                        'explanation' => 'The JavaScript statement is syntactically valid.',
                    ],
                ],
            ],
            [
                'question' => 'Which CSS property is used to change the text color of an element?',
                'options' => [
                    [
                        'answer' => 'text-color',
                        'is_correct' => false,
                        'explanation' => 'text-color is not a standard CSS property.',
                    ],
                    [
                        'answer' => 'font-color',
                        'is_correct' => false,
                        'explanation' => 'font-color is not a standard CSS property.',
                    ],
                    [
                        'answer' => 'color',
                        'is_correct' => true,
                        'explanation' => 'The CSS color property sets the foreground or text color of an element.',
                    ],
                    [
                        'answer' => 'background-color',
                        'is_correct' => false,
                        'explanation' => 'background-color controls the background color rather than the text color.',
                    ],
                ],
            ],
            [
                'question' => 'Which style implementation method applies CSS rules directly inside an individual HTML element\'s tag using the style attribute?',
                'options' => [
                    [
                        'answer' => 'External CSS',
                        'is_correct' => false,
                        'explanation' => 'External CSS is stored in a separate .css file and linked to the HTML document.',
                    ],
                    [
                        'answer' => 'Internal CSS',
                        'is_correct' => false,
                        'explanation' => 'Internal CSS is placed inside a <style> element within the HTML document.',
                    ],
                    [
                        'answer' => 'Inline CSS',
                        'is_correct' => true,
                        'explanation' => 'Inline CSS is written directly in an HTML element using the style attribute.',
                    ],
                    [
                        'answer' => 'Embedded CSS',
                        'is_correct' => false,
                        'explanation' => 'Embedded or internal CSS is generally placed in a <style> block rather than directly in an element.',
                    ],
                ],
            ],
            [
                'question' => 'In the CSS Box Model, what is the correct order of layers from the innermost element to the outermost boundary?',
                'options' => [
                    [
                        'answer' => 'Content -> Border -> Padding -> Margin',
                        'is_correct' => false,
                        'explanation' => 'Padding lies between the content and border, so this order is incorrect.',
                    ],
                    [
                        'answer' => 'Content -> Padding -> Border -> Margin',
                        'is_correct' => true,
                        'explanation' => 'The CSS box model is ordered from inside to outside as content, padding, border, and margin.',
                    ],
                    [
                        'answer' => 'Margin -> Border -> Padding -> Content',
                        'is_correct' => false,
                        'explanation' => 'This is the reverse direction of the standard inside-to-outside box model order.',
                    ],
                    [
                        'answer' => 'Content -> Margin -> Border -> Padding',
                        'is_correct' => false,
                        'explanation' => 'Margin is outside the border, while padding is inside the border.',
                    ],
                ],
            ],
            [
                'question' => 'What does the acronym XML stand for?',
                'options' => [
                    [
                        'answer' => 'Extensible Markup Language',
                        'is_correct' => true,
                        'explanation' => 'XML stands for Extensible Markup Language and is designed to represent and transport structured data.',
                    ],
                    [
                        'answer' => 'Expanded Media Language',
                        'is_correct' => false,
                        'explanation' => 'Expanded Media Language is not the meaning of XML.',
                    ],
                    [
                        'answer' => 'Example Markup Link',
                        'is_correct' => false,
                        'explanation' => 'Example Markup Link is not the meaning of XML.',
                    ],
                    [
                        'answer' => 'Executable Matrix Language',
                        'is_correct' => false,
                        'explanation' => 'Executable Matrix Language is not the meaning of XML.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is a major functional difference between HTML and XML?',
                'options' => [
                    [
                        'answer' => 'HTML is case-sensitive, whereas XML is case-insensitive.',
                        'is_correct' => false,
                        'explanation' => 'XML is case-sensitive, while HTML is generally case-insensitive for HTML element names.',
                    ],
                    [
                        'answer' => 'HTML is designed to display data and focus on how data looks, while XML is designed to store and transport data.',
                        'is_correct' => true,
                        'explanation' => 'HTML primarily structures and presents content, while XML is designed to represent, store, and transport structured data.',
                    ],
                    [
                        'answer' => 'HTML allows custom user-defined tags, whereas XML has strict predefined tags.',
                        'is_correct' => false,
                        'explanation' => 'The opposite is generally true: XML allows user-defined tags, while HTML uses standardized elements.',
                    ],
                    [
                        'answer' => 'XML tags are optional and closing tags can be omitted.',
                        'is_correct' => false,
                        'explanation' => 'XML requires properly nested elements and closing tags for non-empty elements.',
                    ],
                ],
            ],
            [
                'question' => 'An XML document is considered "Well-Formed" if it complies with basic XML syntax rules. What additional requirement must it satisfy to be declared "Valid"?',
                'options' => [
                    [
                        'answer' => 'It must be converted into JSON format.',
                        'is_correct' => false,
                        'explanation' => 'Conversion to JSON is unrelated to XML validity.',
                    ],
                    [
                        'answer' => 'It must contain embedded JavaScript functions.',
                        'is_correct' => false,
                        'explanation' => 'JavaScript is not required for an XML document to be valid.',
                    ],
                    [
                        'answer' => 'It must conform to the structural rules defined in an associated DTD (Document Type Definition) or XML Schema (XSD).',
                        'is_correct' => true,
                        'explanation' => 'A valid XML document is well-formed and also conforms to the constraints defined by its associated DTD or XML Schema.',
                    ],
                    [
                        'answer' => 'It must be parsed by a web server without using CSS.',
                        'is_correct' => false,
                        'explanation' => 'Web server parsing and CSS usage do not determine whether an XML document is valid.',
                    ],
                ],
            ],
            [
                'question' => 'Which standard protocol operates over port 443 to provide secure, encrypted web communication between a client browser and a Web Server?',
                'options' => [
                    [
                        'answer' => 'HTTP',
                        'is_correct' => false,
                        'explanation' => 'Standard HTTP commonly uses TCP port 80 and does not provide TLS encryption by itself.',
                    ],
                    [
                        'answer' => 'HTTPS',
                        'is_correct' => true,
                        'explanation' => 'HTTPS uses TLS to secure HTTP communication and traditionally operates over TCP port 443.',
                    ],
                    [
                        'answer' => 'FTP',
                        'is_correct' => false,
                        'explanation' => 'FTP is primarily used for file transfer and commonly uses TCP ports 20 and 21.',
                    ],
                    [
                        'answer' => 'SMTP',
                        'is_correct' => false,
                        'explanation' => 'SMTP is primarily an email transmission protocol and does not use port 443 as its standard port.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following software applications acts primarily as a Web Server?',
                'options' => [
                    [
                        'answer' => 'Apache HTTP Server',
                        'is_correct' => true,
                        'explanation' => 'Apache HTTP Server is web server software designed to receive HTTP requests and serve web content to clients.',
                    ],
                    [
                        'answer' => 'MySQL',
                        'is_correct' => false,
                        'explanation' => 'MySQL is a relational database management system, not a web server.',
                    ],
                    [
                        'answer' => 'Microsoft Internet Explorer',
                        'is_correct' => false,
                        'explanation' => 'Internet Explorer is a web browser used to access web content, not primarily to serve it.',
                    ],
                    [
                        'answer' => 'Oracle 19c',
                        'is_correct' => false,
                        'explanation' => 'Oracle Database 19c is database management software rather than a primary web server.',
                    ],
                ],
            ],
            [
                'question' => 'An organization deploys a server in front of its internal backend web servers to handle load balancing, SSL termination, and protect internal servers from direct public exposure. What type of server is this?',
                'options' => [
                    [
                        'answer' => 'Forward Proxy',
                        'is_correct' => false,
                        'explanation' => 'A forward proxy generally represents clients when accessing external servers.',
                    ],
                    [
                        'answer' => 'Reverse Proxy',
                        'is_correct' => true,
                        'explanation' => 'A reverse proxy sits in front of backend servers and can provide load balancing, TLS termination, caching, and protection from direct external access.',
                    ],
                    [
                        'answer' => 'DHCP Server',
                        'is_correct' => false,
                        'explanation' => 'A DHCP server dynamically assigns network configuration such as IP addresses to clients.',
                    ],
                    [
                        'answer' => 'FTP Server',
                        'is_correct' => false,
                        'explanation' => 'An FTP server primarily provides file transfer services.',
                    ],
                ],
            ],
            [
                'question' => 'In Disaster Recovery Planning, RPO (Recovery Point Objective) defines:',
                'options' => [
                    [
                        'answer' => 'The maximum acceptable duration of time that a system can be down after a disaster.',
                        'is_correct' => false,
                        'explanation' => 'This describes the Recovery Time Objective (RTO), not RPO.',
                    ],
                    [
                        'answer' => 'The maximum acceptable amount of data loss measured in time (i.e., the point in time to which systems must be restored).',
                        'is_correct' => true,
                        'explanation' => 'RPO defines the maximum tolerable amount of data loss measured by time, such as the last 15 minutes of transactions.',
                    ],
                    [
                        'answer' => 'The financial cost incurred during each hour of system downtime.',
                        'is_correct' => false,
                        'explanation' => 'Financial impact is considered in business impact analysis but does not define RPO.',
                    ],
                    [
                        'answer' => 'The physical distance between the primary data center and the disaster recovery site.',
                        'is_correct' => false,
                        'explanation' => 'The geographic distance between recovery sites is a design consideration but is not the definition of RPO.',
                    ],
                ],
            ],
            [
                'question' => 'Scenario: Rastriya Banijya Bank requires a Backup/DR site where power, cooling, network connectivity, and fully configured hardware/servers with synchronized real-time data copies are running continuously to enable instant failover (near-zero downtime). Which recovery site strategy must RBB deploy?',
                'options' => [
                    [
                        'answer' => 'Cold Site',
                        'is_correct' => false,
                        'explanation' => 'A cold site generally provides basic facilities but requires significant setup and restoration before operations can resume.',
                    ],
                    [
                        'answer' => 'Warm Site',
                        'is_correct' => false,
                        'explanation' => 'A warm site has partially prepared infrastructure but generally requires additional configuration or data restoration before full operation.',
                    ],
                    [
                        'answer' => 'Hot Site',
                        'is_correct' => true,
                        'explanation' => 'A hot site is fully equipped and operational, typically with current data replication, enabling rapid or near-immediate failover.',
                    ],
                    [
                        'answer' => 'Off-site Mobile Trailer',
                        'is_correct' => false,
                        'explanation' => 'A mobile recovery facility is not the standard solution for continuous synchronized infrastructure and near-zero downtime.',
                    ],
                ],
            ],
            [
                'question' => 'Which backup strategy backs up only the data that has changed since the last full or incremental backup, resulting in the fastest backup execution time but requiring all preceding backups for a full restore?',
                'options' => [
                    [
                        'answer' => 'Full Backup',
                        'is_correct' => false,
                        'explanation' => 'A full backup copies all selected data and generally takes longer and requires more storage.',
                    ],
                    [
                        'answer' => 'Differential Backup',
                        'is_correct' => false,
                        'explanation' => 'A differential backup contains data changed since the last full backup, not since the last backup of any type.',
                    ],
                    [
                        'answer' => 'Incremental Backup',
                        'is_correct' => true,
                        'explanation' => 'An incremental backup copies data changed since the previous backup, minimizing backup time and storage but requiring the appropriate preceding backup chain for restoration.',
                    ],
                    [
                        'answer' => 'Mirror Backup',
                        'is_correct' => false,
                        'explanation' => 'A mirror backup maintains a copy that generally reflects the current source data rather than creating an incremental backup chain.',
                    ],
                ],
            ],
            [
                'question' => 'During the initial phases of Disaster Recovery Planning (DRP) and Business Continuity Planning (BCP), which formal process is conducted to identify critical business functions, quantify the impact of disruptions, and determine RTO/RPO requirements?',
                'options' => [
                    [
                        'answer' => 'Risk Mitigation Audit',
                        'is_correct' => false,
                        'explanation' => 'A risk mitigation audit may evaluate controls but is not the standard process used to establish business continuity priorities and RTO/RPO requirements.',
                    ],
                    [
                        'answer' => 'Business Impact Analysis (BIA)',
                        'is_correct' => true,
                        'explanation' => 'A BIA identifies critical functions, evaluates the effects of disruptions, and helps establish recovery priorities and RTO/RPO requirements.',
                    ],
                    [
                        'answer' => 'Failover Testing',
                        'is_correct' => false,
                        'explanation' => 'Failover testing validates recovery capabilities after recovery requirements and strategies have been established.',
                    ],
                    [
                        'answer' => 'Penetration Testing',
                        'is_correct' => false,
                        'explanation' => 'Penetration testing assesses security vulnerabilities and is not primarily used to determine business continuity requirements.',
                    ],
                ],
            ],
            [
                'question' => 'Database Normalization is primarily performed during database design to reduce __________ and prevent update/insertion/deletion anomalies.',
                'options' => [
                    [
                        'answer' => 'Query execution speed',
                        'is_correct' => false,
                        'explanation' => 'Normalization does not primarily aim to reduce query execution speed.',
                    ],
                    [
                        'answer' => 'Data redundancy',
                        'is_correct' => true,
                        'explanation' => 'Normalization reduces unnecessary data redundancy and helps prevent insertion, update, and deletion anomalies.',
                    ],
                    [
                        'answer' => 'Storage capacity',
                        'is_correct' => false,
                        'explanation' => 'Normalization may sometimes affect storage requirements, but reducing storage capacity is not its primary purpose.',
                    ],
                    [
                        'answer' => 'Network bandwidth',
                        'is_correct' => false,
                        'explanation' => 'Network bandwidth is not the primary concern addressed by database normalization.',
                    ],
                ],
            ],
            [
                'question' => 'A table is in First Normal Form (1NF) if and only if:',
                'options' => [
                    [
                        'answer' => 'It has no partial dependencies.',
                        'is_correct' => false,
                        'explanation' => 'Eliminating partial dependencies is a requirement of Second Normal Form (2NF).',
                    ],
                    [
                        'answer' => 'It has no transitive dependencies.',
                        'is_correct' => false,
                        'explanation' => 'Eliminating transitive dependencies is associated with Third Normal Form (3NF).',
                    ],
                    [
                        'answer' => 'All attributes contain atomic (indivisible) values and there are no repeating groups or multi-valued attributes.',
                        'is_correct' => true,
                        'explanation' => 'First Normal Form requires atomic attribute values and eliminates repeating groups or non-atomic multi-valued fields.',
                    ],
                    [
                        'answer' => 'Every determinant is a candidate key.',
                        'is_correct' => false,
                        'explanation' => 'The determinant requirement is associated with stronger normal forms such as BCNF.',
                    ],
                ],
            ],
            [
                'question' => 'Consider a table with a Composite Primary Key (StudentID, CourseID). If a non-key attribute TeacherName depends only on CourseID (a subset of the composite primary key), what type of dependency exists, and which Normal Form does this table violate?',
                'options' => [
                    [
                        'answer' => 'Transitive Dependency; violates 3NF',
                        'is_correct' => false,
                        'explanation' => 'The dependency is on only part of the composite key, which is a partial dependency rather than a transitive dependency.',
                    ],
                    [
                        'answer' => 'Partial Dependency; violates 2NF',
                        'is_correct' => true,
                        'explanation' => 'Because TeacherName depends only on CourseID, which is a proper subset of the composite primary key, a partial dependency exists and the table violates 2NF.',
                    ],
                    [
                        'answer' => 'Trivial Dependency; violates BCNF',
                        'is_correct' => false,
                        'explanation' => 'This is not a trivial functional dependency, and the described problem specifically represents a partial dependency.',
                    ],
                    [
                        'answer' => 'Multi-valued Dependency; violates 4NF',
                        'is_correct' => false,
                        'explanation' => 'The scenario describes a functional dependency on part of a composite key, not a multivalued dependency.',
                    ],
                ],
            ],
            [
                'question' => 'If functional dependencies in a relation are and , then is derived. If is a non-key attribute depending on (which is also not a candidate key), what form of dependency exists, and what Normal Form is violated?',
                'options' => [
                    [
                        'answer' => 'Partial Dependency; violates 2NF',
                        'is_correct' => false,
                        'explanation' => 'A partial dependency occurs when a non-key attribute depends on a proper subset of a composite candidate key. The described dependency is transitive.',
                    ],
                    [
                        'answer' => 'Transitive Dependency; violates 3NF',
                        'is_correct' => true,
                        'explanation' => 'When a non-key attribute depends on another non-key attribute, which in turn depends on the key, a transitive dependency exists and violates 3NF.',
                    ],
                    [
                        'answer' => 'Functional Dependency; violates 1NF',
                        'is_correct' => false,
                        'explanation' => 'A functional dependency by itself does not imply a violation of 1NF. The described situation is specifically a transitive dependency.',
                    ],
                    [
                        'answer' => 'Join Dependency; violates 5NF',
                        'is_correct' => false,
                        'explanation' => 'A join dependency is related to Fifth Normal Form and is not the dependency described in this scenario.',
                    ],
                ],
            ],
        ];



        foreach ($questions as $questionData) {
            $question = $quiz->questions()->create([
                'question' => $questionData['question'],
            ]);

            $question->answerOptions()->createMany(
                $questionData['options']
            );
        }
    }
}
