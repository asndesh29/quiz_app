<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder5 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'Weekly Booster 5',
            'description' => 'Computer Fundamentals, Hardware, CPU Architecture, Memory, Storage, Motherboard and ICT in Nepal MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which of the following statements correctly distinguishes an Intranet from an Extranet?',
                'options' => [
                    [
                        'answer' => 'An Intranet uses public networks, while an Extranet uses private networks exclusively.',
                        'is_correct' => false,
                        'explanation' => 'An Intranet is a private network intended for internal employees, while an Extranet extends controlled access to authorized external users such as vendors, suppliers, or business partners.',
                    ],
                    [
                        'answer' => 'An Intranet is accessible only by internal employees, whereas an Extranet grants controlled access to authorized external partners or vendors.',
                        'is_correct' => true,
                        'explanation' => 'An Intranet is a private network intended for internal employees, while an Extranet extends controlled access to authorized external users such as vendors, suppliers, or business partners.',
                    ],
                    [
                        'answer' => 'An Intranet does not use TCP/IP protocols, whereas an Extranet relies entirely on TCP/IP.',
                        'is_correct' => false,
                        'explanation' => 'An Intranet is a private network intended for internal employees, while an Extranet extends controlled access to authorized external users such as vendors, suppliers, or business partners.',
                    ],
                    [
                        'answer' => 'An Intranet requires a public IP address, while an Extranet operates only on private IP addresses.',
                        'is_correct' => false,
                        'explanation' => 'An Intranet is a private network intended for internal employees, while an Extranet extends controlled access to authorized external users such as vendors, suppliers, or business partners.',
                    ],
                ],
            ],

            [
                'question' => 'When an email client retrieves messages from a mail server and automatically downloads and removes them from the server inbox by default, which application-layer protocol is being used?',
                'options' => [
                    [
                        'answer' => 'IMAP (Internet Message Access Protocol)',
                        'is_correct' => false,
                        'explanation' => 'POP3 is designed primarily for downloading email messages from a mail server. Traditionally, downloaded messages are removed from the server by default, unlike IMAP, which normally keeps messages synchronized on the server.',
                    ],
                    [
                        'answer' => 'SMTP (Simple Mail Transfer Protocol)',
                        'is_correct' => false,
                        'explanation' => 'POP3 is designed primarily for downloading email messages from a mail server. Traditionally, downloaded messages are removed from the server by default, unlike IMAP, which normally keeps messages synchronized on the server.',
                    ],
                    [
                        'answer' => 'POP3 (Post Office Protocol version 3)',
                        'is_correct' => true,
                        'explanation' => 'POP3 is designed primarily for downloading email messages from a mail server. Traditionally, downloaded messages are removed from the server by default, unlike IMAP, which normally keeps messages synchronized on the server.',
                    ],
                    [
                        'answer' => 'MIME (Multipurpose Internet Mail Extensions)',
                        'is_correct' => false,
                        'explanation' => 'POP3 is designed primarily for downloading email messages from a mail server. Traditionally, downloaded messages are removed from the server by default, unlike IMAP, which normally keeps messages synchronized on the server.',
                    ],
                ],
            ],

            [
                'question' => 'In an email header, what happens to the recipient email addresses placed in the BCC (Blind Carbon Copy) field?',
                'options' => [
                    [
                        'answer' => 'They are visible to the TO field recipients, but hidden from CC recipients.',
                        'is_correct' => false,
                        'explanation' => 'BCC hides the addresses of blind-copy recipients from the other recipients of the email, including recipients in the To, CC, and other BCC fields.',
                    ],
                    [
                        'answer' => 'They are hidden from all recipients, including TO, CC, and other BCC recipients.',
                        'is_correct' => true,
                        'explanation' => 'BCC hides the addresses of blind-copy recipients from the other recipients of the email, including recipients in the To, CC, and other BCC fields.',
                    ],
                    [
                        'answer' => 'They receive the email but cannot view the attachments included in the email.',
                        'is_correct' => false,
                        'explanation' => 'BCC hides the addresses of blind-copy recipients from the other recipients of the email, including recipients in the To, CC, and other BCC fields.',
                    ],
                    [
                        'answer' => 'They can reply to all recipients listed in the TO and CC fields simultaneously.',
                        'is_correct' => false,
                        'explanation' => 'BCC hides the addresses of blind-copy recipients from the other recipients of the email, including recipients in the To, CC, and other BCC fields.',
                    ],
                ],
            ],

            [
                'question' => 'Which HTML5 element tag is semantically correct for embedding an inline graphical image, and which attribute supplies alternate text for screen readers?',
                'options' => [
                    [
                        'answer' => '<picture src="..." alt="...">',
                        'is_correct' => false,
                        'explanation' => 'The HTML <img> element embeds an image. The src attribute specifies the image source, while the alt attribute provides alternative text for accessibility and screen readers.',
                    ],
                    [
                        'answer' => '<img src="..." alt="...">',
                        'is_correct' => true,
                        'explanation' => 'The HTML <img> element embeds an image. The src attribute specifies the image source, while the alt attribute provides alternative text for accessibility and screen readers.',
                    ],
                    [
                        'answer' => '<image href="..." title="...">',
                        'is_correct' => false,
                        'explanation' => 'The HTML <img> element embeds an image. The src attribute specifies the image source, while the alt attribute provides alternative text for accessibility and screen readers.',
                    ],
                    [
                        'answer' => '<img href="..." alt="...">',
                        'is_correct' => false,
                        'explanation' => 'The HTML <img> element embeds an image. The src attribute specifies the image source, while the alt attribute provides alternative text for accessibility and screen readers.',
                    ],
                ],
            ],

            [
                'question' => 'What is the fundamental difference between HTTP and HTTPS in web communication?',
                'options' => [
                    [
                        'answer' => 'HTTP operates at the Transport Layer, while HTTPS operates at the Application Layer.',
                        'is_correct' => false,
                        'explanation' => 'HTTP traditionally uses TCP port 80 and does not provide encryption by itself. HTTPS uses HTTP over TLS, traditionally associated with TCP port 443, to protect data in transit.',
                    ],
                    [
                        'answer' => 'HTTP sends data in plain text over TCP port 80, whereas HTTPS encrypts data using TLS/SSL over TCP port 443.',
                        'is_correct' => true,
                        'explanation' => 'HTTP traditionally uses TCP port 80 and does not provide encryption by itself. HTTPS uses HTTP over TLS, traditionally associated with TCP port 443, to protect data in transit.',
                    ],
                    [
                        'answer' => 'HTTP uses UDP for faster delivery, whereas HTTPS uses TCP for secure delivery.',
                        'is_correct' => false,
                        'explanation' => 'HTTP traditionally uses TCP port 80 and does not provide encryption by itself. HTTPS uses HTTP over TLS, traditionally associated with TCP port 443, to protect data in transit.',
                    ],
                    [
                        'answer' => 'HTTP is a dynamic web standard, while HTTPS is used strictly for static web pages.',
                        'is_correct' => false,
                        'explanation' => 'HTTP traditionally uses TCP port 80 and does not provide encryption by itself. HTTPS uses HTTP over TLS, traditionally associated with TCP port 443, to protect data in transit.',
                    ],
                ],
            ],

            [
                'question' => 'Which of the following technologies is primarily responsible for Client-Side dynamic rendering in modern Web Design?',
                'options' => [
                    [
                        'answer' => 'PHP',
                        'is_correct' => false,
                        'explanation' => 'JavaScript executes in the web browser and is the primary technology used to create dynamic client-side behavior and update web pages without requiring a full page reload.',
                    ],
                    [
                        'answer' => 'Node.js',
                        'is_correct' => false,
                        'explanation' => 'JavaScript executes in the web browser and is the primary technology used to create dynamic client-side behavior and update web pages without requiring a full page reload.',
                    ],
                    [
                        'answer' => 'JavaScript',
                        'is_correct' => true,
                        'explanation' => 'JavaScript executes in the web browser and is the primary technology used to create dynamic client-side behavior and update web pages without requiring a full page reload.',
                    ],
                    [
                        'answer' => 'ASP.NET',
                        'is_correct' => false,
                        'explanation' => 'JavaScript executes in the web browser and is the primary technology used to create dynamic client-side behavior and update web pages without requiring a full page reload.',
                    ],
                ],
            ],

            [
                'question' => 'What domain name service process translates a human-readable hostname (e.g., www.rbb.com.np) into a machine-readable IP address?',
                'options' => [
                    [
                        'answer' => 'Reverse Address Resolution',
                        'is_correct' => false,
                        'explanation' => 'Forward DNS resolution translates a domain or hostname into its corresponding IP address. Reverse DNS performs the opposite operation.',
                    ],
                    [
                        'answer' => 'Forward DNS Resolution',
                        'is_correct' => true,
                        'explanation' => 'Forward DNS resolution translates a domain or hostname into its corresponding IP address. Reverse DNS performs the opposite operation.',
                    ],
                    [
                        'answer' => 'DHCP Binding',
                        'is_correct' => false,
                        'explanation' => 'Forward DNS resolution translates a domain or hostname into its corresponding IP address. Reverse DNS performs the opposite operation.',
                    ],
                    [
                        'answer' => 'NAT Mapping',
                        'is_correct' => false,
                        'explanation' => 'Forward DNS resolution translates a domain or hostname into its corresponding IP address. Reverse DNS performs the opposite operation.',
                    ],
                ],
            ],

            [
                'question' => 'In CSS, which selector specificity order correctly prioritizes style application from highest to lowest precedence?',
                'options' => [
                    [
                        'answer' => 'External Stylesheet > Internal Style Tag > Inline Style Attribute',
                        'is_correct' => false,
                        'explanation' => 'Among these choices, inline styles generally have higher precedence than stylesheet rules, assuming comparable specificity and no !important rule. CSS specificity also depends on selectors and the cascade.',
                    ],
                    [
                        'answer' => 'Inline Style Attribute > Internal Style Tag (<style>) > External Stylesheet (.css)',
                        'is_correct' => true,
                        'explanation' => 'Among these choices, inline styles generally have higher precedence than stylesheet rules, assuming comparable specificity and no !important rule. CSS specificity also depends on selectors and the cascade.',
                    ],
                    [
                        'answer' => 'Internal Style Tag > Inline Style Attribute > External Stylesheet',
                        'is_correct' => false,
                        'explanation' => 'Among these choices, inline styles generally have higher precedence than stylesheet rules, assuming comparable specificity and no !important rule. CSS specificity also depends on selectors and the cascade.',
                    ],
                    [
                        'answer' => 'Element Selector > ID Selector > Class Selector',
                        'is_correct' => false,
                        'explanation' => 'Among these choices, inline styles generally have higher precedence than stylesheet rules, assuming comparable specificity and no !important rule. CSS specificity also depends on selectors and the cascade.',
                    ],
                ],
            ],

            [
                'question' => 'Machine Learning is considered a subfield of Artificial Intelligence. Which statement best describes the core operational paradigm of Machine Learning?',
                'options' => [
                    [
                        'answer' => 'Explicitly programming every logical rule into a deterministic expert system.',
                        'is_correct' => false,
                        'explanation' => 'Machine Learning enables algorithms to learn patterns from data and use those learned patterns to make predictions, classifications, or decisions rather than requiring every rule to be explicitly programmed.',
                    ],
                    [
                        'answer' => 'Algorithms learning statistical patterns directly from historical data to make predictions without being explicitly hardcoded.',
                        'is_correct' => true,
                        'explanation' => 'Machine Learning enables algorithms to learn patterns from data and use those learned patterns to make predictions, classifications, or decisions rather than requiring every rule to be explicitly programmed.',
                    ],
                    [
                        'answer' => 'Creating hardware components that mirror human brain synapses directly.',
                        'is_correct' => false,
                        'explanation' => 'Machine Learning enables algorithms to learn patterns from data and use those learned patterns to make predictions, classifications, or decisions rather than requiring every rule to be explicitly programmed.',
                    ],
                    [
                        'answer' => 'Using centralized databases to query transaction logs faster.',
                        'is_correct' => false,
                        'explanation' => 'Machine Learning enables algorithms to learn patterns from data and use those learned patterns to make predictions, classifications, or decisions rather than requiring every rule to be explicitly programmed.',
                    ],
                ],
            ],

            [
                'question' => 'A credit scoring model in a commercial bank is trained on labeled historical records containing past customer attributes and their binary loan status (Defaulted vs Repaid). What type of Machine Learning is this?',
                'options' => [
                    [
                        'answer' => 'Unsupervised Learning',
                        'is_correct' => false,
                        'explanation' => 'This is supervised learning because the training data contains input attributes along with known labeled outcomes: Defaulted or Repaid.',
                    ],
                    [
                        'answer' => 'Supervised Learning',
                        'is_correct' => true,
                        'explanation' => 'This is supervised learning because the training data contains input attributes along with known labeled outcomes: Defaulted or Repaid.',
                    ],
                    [
                        'answer' => 'Reinforcement Learning',
                        'is_correct' => false,
                        'explanation' => 'This is supervised learning because the training data contains input attributes along with known labeled outcomes: Defaulted or Repaid.',
                    ],
                    [
                        'answer' => 'Self-Organizing Clustering',
                        'is_correct' => false,
                        'explanation' => 'This is supervised learning because the training data contains input attributes along with known labeled outcomes: Defaulted or Repaid.',
                    ],
                ],
            ],

            [
                'question' => 'Which machine learning task is appropriate when predicting a continuous numerical value such as a customer’s annual income based on transaction history?',
                'options' => [
                    [
                        'answer' => 'Classification',
                        'is_correct' => false,
                        'explanation' => 'Regression is used to predict continuous numerical values, such as income, sales amount, temperature, or house price.',
                    ],
                    [
                        'answer' => 'Clustering',
                        'is_correct' => false,
                        'explanation' => 'Regression is used to predict continuous numerical values, such as income, sales amount, temperature, or house price.',
                    ],
                    [
                        'answer' => 'Regression',
                        'is_correct' => true,
                        'explanation' => 'Regression is used to predict continuous numerical values, such as income, sales amount, temperature, or house price.',
                    ],
                    [
                        'answer' => 'Dimensionality Reduction',
                        'is_correct' => false,
                        'explanation' => 'Regression is used to predict continuous numerical values, such as income, sales amount, temperature, or house price.',
                    ],
                ],
            ],

            [
                'question' => 'What specific cryptographic function connects consecutive blocks in a standard Blockchain ledger to ensure tamper-evident immutability?',
                'options' => [
                    [
                        'answer' => 'Symmetric AES-256 Encryption of the block payload.',
                        'is_correct' => false,
                        'explanation' => 'A blockchain block normally contains the cryptographic hash of the previous block. Changing an earlier block changes its hash and breaks the subsequent hash chain, making tampering evident.',
                    ],
                    [
                        'answer' => 'The inclusion of the Previous Block’s Cryptographic Hash in the current block header.',
                        'is_correct' => true,
                        'explanation' => 'A blockchain block normally contains the cryptographic hash of the previous block. Changing an earlier block changes its hash and breaks the subsequent hash chain, making tampering evident.',
                    ],
                    [
                        'answer' => 'RSA digital signature exchange between client web browsers.',
                        'is_correct' => false,
                        'explanation' => 'A blockchain block normally contains the cryptographic hash of the previous block. Changing an earlier block changes its hash and breaks the subsequent hash chain, making tampering evident.',
                    ],
                    [
                        'answer' => 'Cyclic Redundancy Check (CRC-32) verification at the network layer.',
                        'is_correct' => false,
                        'explanation' => 'A blockchain block normally contains the cryptographic hash of the previous block. Changing an earlier block changes its hash and breaks the subsequent hash chain, making tampering evident.',
                    ],
                ],
            ],

            [
                'question' => 'Self-executing digital agreements stored on a blockchain that run automatically when predetermined conditions are met are known as:',
                'options' => [
                    [
                        'answer' => 'Distributed Consensus Protocols',
                        'is_correct' => false,
                        'explanation' => 'Smart contracts are programs deployed on blockchain platforms that can automatically execute predefined logic when specified conditions are satisfied.',
                    ],
                    [
                        'answer' => 'Smart Contracts',
                        'is_correct' => true,
                        'explanation' => 'Smart contracts are programs deployed on blockchain platforms that can automatically execute predefined logic when specified conditions are satisfied.',
                    ],
                    [
                        'answer' => 'Proof-of-Work Algorithms',
                        'is_correct' => false,
                        'explanation' => 'Smart contracts are programs deployed on blockchain platforms that can automatically execute predefined logic when specified conditions are satisfied.',
                    ],
                    [
                        'answer' => 'Asymmetric Key Vaults',
                        'is_correct' => false,
                        'explanation' => 'Smart contracts are programs deployed on blockchain platforms that can automatically execute predefined logic when specified conditions are satisfied.',
                    ],
                ],
            ],

            [
                'question' => 'What is the basic building block or individual unit of an Artificial Neural Network called?',
                'options' => [
                    [
                        'answer' => 'Pixel',
                        'is_correct' => false,
                        'explanation' => 'A neuron is an individual computational unit in an artificial neural network. Multiple neurons are organized into layers.',
                    ],
                    [
                        'answer' => 'Neuron',
                        'is_correct' => true,
                        'explanation' => 'A neuron is an individual computational unit in an artificial neural network. Multiple neurons are organized into layers.',
                    ],
                    [
                        'answer' => 'Layer',
                        'is_correct' => false,
                        'explanation' => 'A neuron is an individual computational unit in an artificial neural network. Multiple neurons are organized into layers.',
                    ],
                    [
                        'answer' => 'Vector',
                        'is_correct' => false,
                        'explanation' => 'A neuron is an individual computational unit in an artificial neural network. Multiple neurons are organized into layers.',
                    ],
                ],
            ],

            [
                'question' => 'Which consensus algorithm used in permissionless blockchains like early Bitcoin requires network participants (miners) to expend computational power to solve complex mathematical puzzles?',
                'options' => [
                    [
                        'answer' => 'Proof of Stake (PoS)',
                        'is_correct' => false,
                        'explanation' => 'Proof of Work requires miners to perform computational work to find a valid solution to a cryptographic puzzle before adding blocks to the blockchain.',
                    ],
                    [
                        'answer' => 'Proof of Work (PoW)',
                        'is_correct' => true,
                        'explanation' => 'Proof of Work requires miners to perform computational work to find a valid solution to a cryptographic puzzle before adding blocks to the blockchain.',
                    ],
                    [
                        'answer' => 'Practical Byzantine Fault Tolerance (PBFT)',
                        'is_correct' => false,
                        'explanation' => 'Proof of Work requires miners to perform computational work to find a valid solution to a cryptographic puzzle before adding blocks to the blockchain.',
                    ],
                    [
                        'answer' => 'Delegated Proof of Stake (DPoS)',
                        'is_correct' => false,
                        'explanation' => 'Proof of Work requires miners to perform computational work to find a valid solution to a cryptographic puzzle before adding blocks to the blockchain.',
                    ],
                ],
            ],

            [
                'question' => 'What major architectural advantage does a Decentralized Public Blockchain offer compared to a Traditional Centralized Banking Database?',
                'options' => [
                    [
                        'answer' => 'Much faster transaction processing speeds and zero storage overhead.',
                        'is_correct' => false,
                        'explanation' => 'A decentralized blockchain distributes ledger control among multiple participants, reducing dependence on a single authority and making the system resistant to a single point of failure or unilateral modification.',
                    ],
                    [
                        'answer' => 'Complete reliance on a single central authority to modify ledger records instantly.',
                        'is_correct' => false,
                        'explanation' => 'A decentralized blockchain distributes ledger control among multiple participants, reducing dependence on a single authority and making the system resistant to a single point of failure or unilateral modification.',
                    ],
                    [
                        'answer' => 'Single point of failure elimination with high transparency and resistance to single-party censorship.',
                        'is_correct' => true,
                        'explanation' => 'A decentralized blockchain distributes ledger control among multiple participants, reducing dependence on a single authority and making the system resistant to a single point of failure or unilateral modification.',
                    ],
                    [
                        'answer' => 'Absence of any cryptographic hash functions or verification overhead.',
                        'is_correct' => false,
                        'explanation' => 'A decentralized blockchain distributes ledger control among multiple participants, reducing dependence on a single authority and making the system resistant to a single point of failure or unilateral modification.',
                    ],
                ],
            ],

            [
                'question' => 'At which layer of the OSI reference model does a Multi-Port Network Bridge (Switch) primarily operate?',
                'options' => [
                    [
                        'answer' => 'Layer 1 (Physical Layer)',
                        'is_correct' => false,
                        'explanation' => 'A traditional Ethernet switch is a multi-port bridge and primarily operates at OSI Layer 2, forwarding frames using MAC addresses.',
                    ],
                    [
                        'answer' => 'Layer 2 (Data Link Layer)',
                        'is_correct' => true,
                        'explanation' => 'A traditional Ethernet switch is a multi-port bridge and primarily operates at OSI Layer 2, forwarding frames using MAC addresses.',
                    ],
                    [
                        'answer' => 'Layer 3 (Network Layer)',
                        'is_correct' => false,
                        'explanation' => 'A traditional Ethernet switch is a multi-port bridge and primarily operates at OSI Layer 2, forwarding frames using MAC addresses.',
                    ],
                    [
                        'answer' => 'Layer 4 (Transport Layer)',
                        'is_correct' => false,
                        'explanation' => 'A traditional Ethernet switch is a multi-port bridge and primarily operates at OSI Layer 2, forwarding frames using MAC addresses.',
                    ],
                ],
            ],

            [
                'question' => 'How do a network Hub and a Layer-2 Switch handle collision domains when connecting four computers?',
                'options' => [
                    [
                        'answer' => 'A Hub creates four separate collision domains; a Switch creates one shared collision domain.',
                        'is_correct' => false,
                        'explanation' => 'A hub repeats signals to all ports, creating one shared collision domain. A switch isolates each port into a separate collision domain, assuming standard switched Ethernet operation.',
                    ],
                    [
                        'answer' => 'Both a Hub and a Switch create four separate collision domains.',
                        'is_correct' => false,
                        'explanation' => 'A hub repeats signals to all ports, creating one shared collision domain. A switch isolates each port into a separate collision domain, assuming standard switched Ethernet operation.',
                    ],
                    [
                        'answer' => 'A Hub creates one shared collision domain for all ports; a Switch provides a separate collision domain for each individual port.',
                        'is_correct' => true,
                        'explanation' => 'A hub repeats signals to all ports, creating one shared collision domain. A switch isolates each port into a separate collision domain, assuming standard switched Ethernet operation.',
                    ],
                    [
                        'answer' => 'Neither device affects collision domain boundaries.',
                        'is_correct' => false,
                        'explanation' => 'A hub repeats signals to all ports, creating one shared collision domain. A switch isolates each port into a separate collision domain, assuming standard switched Ethernet operation.',
                    ],
                ],
            ],

            [
                'question' => 'Which networking device isolates both Collision Domains AND Broadcast Domains by default?',
                'options' => [
                    [
                        'answer' => 'Ethernet Hub',
                        'is_correct' => false,
                        'explanation' => 'A router separates broadcast domains because broadcasts are not normally forwarded between its interfaces. Each router interface also represents a separate collision domain.',
                    ],
                    [
                        'answer' => 'Layer 2 Switch',
                        'is_correct' => false,
                        'explanation' => 'A router separates broadcast domains because broadcasts are not normally forwarded between its interfaces. Each router interface also represents a separate collision domain.',
                    ],
                    [
                        'answer' => 'Repeater',
                        'is_correct' => false,
                        'explanation' => 'A router separates broadcast domains because broadcasts are not normally forwarded between its interfaces. Each router interface also represents a separate collision domain.',
                    ],
                    [
                        'answer' => 'Router',
                        'is_correct' => true,
                        'explanation' => 'A router separates broadcast domains because broadcasts are not normally forwarded between its interfaces. Each router interface also represents a separate collision domain.',
                    ],
                ],
            ],

            [
                'question' => 'What address table does a Layer-3 Router inspect to make forwarding decisions on incoming packets?',
                'options' => [
                    [
                        'answer' => 'MAC Address Table (CAM Table)',
                        'is_correct' => false,
                        'explanation' => 'A router examines its IP routing table to determine the best next hop or outgoing interface for a destination IP address.',
                    ],
                    [
                        'answer' => 'IP Routing Table',
                        'is_correct' => true,
                        'explanation' => 'A router examines its IP routing table to determine the best next hop or outgoing interface for a destination IP address.',
                    ],
                    [
                        'answer' => 'ARP Cache Table',
                        'is_correct' => false,
                        'explanation' => 'A router examines its IP routing table to determine the best next hop or outgoing interface for a destination IP address.',
                    ],
                    [
                        'answer' => 'DNS Cache Table',
                        'is_correct' => false,
                        'explanation' => 'A router examines its IP routing table to determine the best next hop or outgoing interface for a destination IP address.',
                    ],
                ],
            ],

            [
                'question' => 'Why is a standard physical Repeater classified as a "non-intelligent" Layer-1 device?',
                'options' => [
                    [
                        'answer' => 'It cannot store data frames in non-volatile RAM.',
                        'is_correct' => false,
                        'explanation' => 'A repeater operates at the Physical Layer. It regenerates or retransmits signals without interpreting MAC addresses, IP headers, or higher-level protocol information.',
                    ],
                    [
                        'answer' => 'It inspects IP packet headers but ignores TCP port numbers.',
                        'is_correct' => false,
                        'explanation' => 'A repeater operates at the Physical Layer. It regenerates or retransmits signals without interpreting MAC addresses, IP headers, or higher-level protocol information.',
                    ],
                    [
                        'answer' => 'It regenerates and amplifies signals at the bit level without reading frame MAC addresses or packet headers.',
                        'is_correct' => true,
                        'explanation' => 'A repeater operates at the Physical Layer. It regenerates or retransmits signals without interpreting MAC addresses, IP headers, or higher-level protocol information.',
                    ],
                    [
                        'answer' => 'It drops duplicate network packets automatically.',
                        'is_correct' => false,
                        'explanation' => 'A repeater operates at the Physical Layer. It regenerates or retransmits signals without interpreting MAC addresses, IP headers, or higher-level protocol information.',
                    ],
                ],
            ],

            [
                'question' => 'An administrator connects 8 PCs to an unmanaged 8-port Ethernet Switch. How many Collision Domains and Broadcast Domains are present in this network setup?',
                'options' => [
                    [
                        'answer' => '1 Collision Domain, 8 Broadcast Domains',
                        'is_correct' => false,
                        'explanation' => 'Each switch port represents a separate collision domain. Without VLANs or a router, all eight ports remain in one broadcast domain.',
                    ],
                    [
                        'answer' => '8 Collision Domains, 1 Broadcast Domain',
                        'is_correct' => true,
                        'explanation' => 'Each switch port represents a separate collision domain. Without VLANs or a router, all eight ports remain in one broadcast domain.',
                    ],
                    [
                        'answer' => '8 Collision Domains, 8 Broadcast Domains',
                        'is_correct' => false,
                        'explanation' => 'Each switch port represents a separate collision domain. Without VLANs or a router, all eight ports remain in one broadcast domain.',
                    ],
                    [
                        'answer' => '1 Collision Domain, 1 Broadcast Domain',
                        'is_correct' => false,
                        'explanation' => 'Each switch port represents a separate collision domain. Without VLANs or a router, all eight ports remain in one broadcast domain.',
                    ],
                ],
            ],

            [
                'question' => 'Which statement accurately compares a Layer-2 Switch and a Router?',
                'options' => [
                    [
                        'answer' => 'A Switch forwards packets based on IP addresses; a Router forwards frames based on MAC addresses.',
                        'is_correct' => false,
                        'explanation' => 'A Layer-2 switch primarily connects devices within a LAN using MAC addresses, while a router connects different IP networks using routing information.',
                    ],
                    [
                        'answer' => 'A Switch works at Layer 3; a Router works at Layer 1.',
                        'is_correct' => false,
                        'explanation' => 'A Layer-2 switch primarily connects devices within a LAN using MAC addresses, while a router connects different IP networks using routing information.',
                    ],
                    [
                        'answer' => 'A Switch connects devices within the same Local Area Network (LAN); a Router connects multiple distinct networks (LAN to LAN or LAN to WAN).',
                        'is_correct' => true,
                        'explanation' => 'A Layer-2 switch primarily connects devices within a LAN using MAC addresses, while a router connects different IP networks using routing information.',
                    ],
                    [
                        'answer' => 'A Switch breaks broadcast domains; a Router expands broadcast domains.',
                        'is_correct' => false,
                        'explanation' => 'A Layer-2 switch primarily connects devices within a LAN using MAC addresses, while a router connects different IP networks using routing information.',
                    ],
                ],
            ],

            [
                'question' => 'In Circuit Switching networks such as traditional PSTN telephony, when is the physical communication path established?',
                'options' => [
                    [
                        'answer' => 'Dynamically on a packet-by-packet basis during transmission.',
                        'is_correct' => false,
                        'explanation' => 'Circuit switching establishes a dedicated communication path during the connection or call setup phase before data transmission begins.',
                    ],
                    [
                        'answer' => 'Dedicated prior to data transmission during the call setup phase.',
                        'is_correct' => true,
                        'explanation' => 'Circuit switching establishes a dedicated communication path during the connection or call setup phase before data transmission begins.',
                    ],
                    [
                        'answer' => 'After all message blocks arrive at the destination node.',
                        'is_correct' => false,
                        'explanation' => 'Circuit switching establishes a dedicated communication path during the connection or call setup phase before data transmission begins.',
                    ],
                    [
                        'answer' => 'Intermittently whenever intermediate router buffers become empty.',
                        'is_correct' => false,
                        'explanation' => 'Circuit switching establishes a dedicated communication path during the connection or call setup phase before data transmission begins.',
                    ],
                ],
            ],

            [
                'question' => 'Which of the following is a major disadvantage of Datagram Packet Switching?',
                'options' => [
                    [
                        'answer' => 'Entire bandwidth is reserved continuously even when no data is sent.',
                        'is_correct' => false,
                        'explanation' => 'Datagram packet switching is connectionless, so packets can take different routes and may arrive out of order, requiring higher-layer protocols to reorder them when necessary.',
                    ],
                    [
                        'answer' => 'Packets may arrive out of order at the destination and require reassembly.',
                        'is_correct' => true,
                        'explanation' => 'Datagram packet switching is connectionless, so packets can take different routes and may arrive out of order, requiring higher-layer protocols to reorder them when necessary.',
                    ],
                    [
                        'answer' => 'Call setup latency is high prior to transmitting the first byte.',
                        'is_correct' => false,
                        'explanation' => 'Datagram packet switching is connectionless, so packets can take different routes and may arrive out of order, requiring higher-layer protocols to reorder them when necessary.',
                    ],
                    [
                        'answer' => 'Intermediate routers must store the entire complete message on disk before forwarding.',
                        'is_correct' => false,
                        'explanation' => 'Datagram packet switching is connectionless, so packets can take different routes and may arrive out of order, requiring higher-layer protocols to reorder them when necessary.',
                    ],
                ],
            ],

            [
                'question' => 'How does Virtual Circuit Packet Switching differ from Datagram Packet Switching?',
                'options' => [
                    [
                        'answer' => 'Virtual Circuit is connectionless, whereas Datagram is connection-oriented.',
                        'is_correct' => false,
                        'explanation' => 'Virtual Circuit packet switching establishes a logical path before packet transmission. Packets normally follow that logical path and therefore tend to arrive in sequence.',
                    ],
                    [
                        'answer' => 'Virtual Circuit establishes a logical fixed path prior to packet transmission, ensuring packets arrive in sequence.',
                        'is_correct' => true,
                        'explanation' => 'Virtual Circuit packet switching establishes a logical path before packet transmission. Packets normally follow that logical path and therefore tend to arrive in sequence.',
                    ],
                    [
                        'answer' => 'Virtual Circuit relies exclusively on Store-and-Forward of multi-gigabyte files.',
                        'is_correct' => false,
                        'explanation' => 'Virtual Circuit packet switching establishes a logical path before packet transmission. Packets normally follow that logical path and therefore tend to arrive in sequence.',
                    ],
                    [
                        'answer' => 'Datagram packet switching guarantees dedicated bandwidth allocation like PSTN circuits.',
                        'is_correct' => false,
                        'explanation' => 'Virtual Circuit packet switching establishes a logical path before packet transmission. Packets normally follow that logical path and therefore tend to arrive in sequence.',
                    ],
                ],
            ],

            [
                'question' => 'The "Store-and-Forward" technique is a defining operational characteristic of which switching paradigm?',
                'options' => [
                    [
                        'answer' => 'Pure Physical Circuit Switching',
                        'is_correct' => false,
                        'explanation' => 'Message switching and packet switching use store-and-forward operation, where intermediate nodes receive and store data before forwarding it to the next destination.',
                    ],
                    [
                        'answer' => 'Message Switching and Packet Switching',
                        'is_correct' => true,
                        'explanation' => 'Message switching and packet switching use store-and-forward operation, where intermediate nodes receive and store data before forwarding it to the next destination.',
                    ],
                    [
                        'answer' => 'Direct Frequency Division Multiplexing',
                        'is_correct' => false,
                        'explanation' => 'Message switching and packet switching use store-and-forward operation, where intermediate nodes receive and store data before forwarding it to the next destination.',
                    ],
                    [
                        'answer' => 'Wavelength Division Switching',
                        'is_correct' => false,
                        'explanation' => 'Message switching and packet switching use store-and-forward operation, where intermediate nodes receive and store data before forwarding it to the next destination.',
                    ],
                ],
            ],

            [
                'question' => 'Which of the following switching technologies provides guaranteed constant bandwidth and predictable zero-jitter latency once a connection is established?',
                'options' => [
                    [
                        'answer' => 'Datagram Packet Switching',
                        'is_correct' => false,
                        'explanation' => 'Traditional circuit switching reserves dedicated network resources for the duration of a connection, providing predictable bandwidth and timing. In practice, however, "zero jitter" is an idealization.',
                    ],
                    [
                        'answer' => 'Connectionless IP Routing',
                        'is_correct' => false,
                        'explanation' => 'Traditional circuit switching reserves dedicated network resources for the duration of a connection, providing predictable bandwidth and timing. In practice, however, "zero jitter" is an idealization.',
                    ],
                    [
                        'answer' => 'Circuit Switching',
                        'is_correct' => true,
                        'explanation' => 'Traditional circuit switching reserves dedicated network resources for the duration of a connection, providing predictable bandwidth and timing. In practice, however, "zero jitter" is an idealization.',
                    ],
                    [
                        'answer' => 'Virtual Circuit Packet Switching',
                        'is_correct' => false,
                        'explanation' => 'Traditional circuit switching reserves dedicated network resources for the duration of a connection, providing predictable bandwidth and timing. In practice, however, "zero jitter" is an idealization.',
                    ],
                ],
            ],

            [
                'question' => 'Contrast Connection-Oriented communication with Connectionless communication. Which pair of protocols correctly exemplifies this distinction at the Transport Layer?',
                'options' => [
                    [
                        'answer' => 'IP (Connection-Oriented) and ICMP (Connectionless)',
                        'is_correct' => false,
                        'explanation' => 'TCP is a connection-oriented transport protocol that establishes a connection before data transfer. UDP is connectionless and does not establish a session before sending datagrams.',
                    ],
                    [
                        'answer' => 'TCP (Connection-Oriented) and UDP (Connectionless)',
                        'is_correct' => true,
                        'explanation' => 'TCP is a connection-oriented transport protocol that establishes a connection before data transfer. UDP is connectionless and does not establish a session before sending datagrams.',
                    ],
                    [
                        'answer' => 'HTTP (Connection-Oriented) and HTTPS (Connectionless)',
                        'is_correct' => false,
                        'explanation' => 'TCP is a connection-oriented transport protocol that establishes a connection before data transfer. UDP is connectionless and does not establish a session before sending datagrams.',
                    ],
                    [
                        'answer' => 'SMTP (Connection-Oriented) and POP3 (Connectionless)',
                        'is_correct' => false,
                        'explanation' => 'TCP is a connection-oriented transport protocol that establishes a connection before data transfer. UDP is connectionless and does not establish a session before sending datagrams.',
                    ],
                ],
            ],

            [
                'question' => 'What is the fundamental signal transformation process performed by a Modem (Modulator-Demodulator)?',
                'options' => [
                    [
                        'answer' => 'Converting direct current (DC) power to alternating current (AC) power.',
                        'is_correct' => false,
                        'explanation' => 'A modem performs modulation to encode digital information onto a transmission signal and demodulation to recover digital information from the received signal.',
                    ],
                    [
                        'answer' => 'Converting digital computer bits to analog transmission signals (Modulation) and analog signals back to digital bits (Demodulation).',
                        'is_correct' => true,
                        'explanation' => 'A modem performs modulation to encode digital information onto a transmission signal and demodulation to recover digital information from the received signal.',
                    ],
                    [
                        'answer' => 'Converting IPv4 packet headers to IPv6 frame headers.',
                        'is_correct' => false,
                        'explanation' => 'A modem performs modulation to encode digital information onto a transmission signal and demodulation to recover digital information from the received signal.',
                    ],
                    [
                        'answer' => 'Encrypting plain text data into ciphertext using public key cryptography.',
                        'is_correct' => false,
                        'explanation' => 'A modem performs modulation to encode digital information onto a transmission signal and demodulation to recover digital information from the received signal.',
                    ],
                ],
            ],

            [
                'question' => 'Which authentication protocol is considered more secure because it uses a three-way handshake and periodically verifies the identity of the peer using a variable challenge value, without sending the password over the network?',
                'options' => [
                    [
                        'answer' => 'PAP (Password Authentication Protocol)',
                        'is_correct' => false,
                        'explanation' => 'CHAP uses a challenge-response mechanism and periodically challenges the peer. The password itself is not transmitted directly over the network.',
                    ],
                    [
                        'answer' => 'CHAP (Challenge Handshake Authentication Protocol)',
                        'is_correct' => true,
                        'explanation' => 'CHAP uses a challenge-response mechanism and periodically challenges the peer. The password itself is not transmitted directly over the network.',
                    ],
                    [
                        'answer' => 'EAP (Extensible Authentication Protocol)',
                        'is_correct' => false,
                        'explanation' => 'CHAP uses a challenge-response mechanism and periodically challenges the peer. The password itself is not transmitted directly over the network.',
                    ],
                    [
                        'answer' => 'RADIUS (Remote Authentication Dial-In User Service)',
                        'is_correct' => false,
                        'explanation' => 'CHAP uses a challenge-response mechanism and periodically challenges the peer. The password itself is not transmitted directly over the network.',
                    ],
                ],
            ],

            [
                'question' => 'A Virtual Private Network (VPN) provides secure remote connection over an untrusted public network like the Internet primarily by using:',
                'options' => [
                    [
                        'answer' => 'Physical circuit reservation over PSTN lines.',
                        'is_correct' => false,
                        'explanation' => 'VPNs use tunneling and cryptographic mechanisms to protect communications across untrusted networks. Common technologies include IPsec and OpenVPN.',
                    ],
                    [
                        'answer' => 'Cryptographic tunneling protocols and data encryption (such as IPsec or OpenVPN).',
                        'is_correct' => true,
                        'explanation' => 'VPNs use tunneling and cryptographic mechanisms to protect communications across untrusted networks. Common technologies include IPsec and OpenVPN.',
                    ],
                    [
                        'answer' => 'Dial-up modem modulation across copper local loops.',
                        'is_correct' => false,
                        'explanation' => 'VPNs use tunneling and cryptographic mechanisms to protect communications across untrusted networks. Common technologies include IPsec and OpenVPN.',
                    ],
                    [
                        'answer' => 'MAC address spoofing at the Layer-2 switch level.',
                        'is_correct' => false,
                        'explanation' => 'VPNs use tunneling and cryptographic mechanisms to protect communications across untrusted networks. Common technologies include IPsec and OpenVPN.',
                    ],
                ],
            ],

            [
                'question' => 'Which Authentication Protocol is widely used in network enterprise environments to centralize Remote Access authentication, authorization, and accounting (AAA)?',
                'options' => [
                    [
                        'answer' => 'Simple Network Management Protocol (SNMP)',
                        'is_correct' => false,
                        'explanation' => 'RADIUS is widely used to centralize authentication, authorization, and accounting for network access, including VPN and wireless authentication.',
                    ],
                    [
                        'answer' => 'Remote Authentication Dial-In User Service (RADIUS)',
                        'is_correct' => true,
                        'explanation' => 'RADIUS is widely used to centralize authentication, authorization, and accounting for network access, including VPN and wireless authentication.',
                    ],
                    [
                        'answer' => 'Address Resolution Protocol (ARP)',
                        'is_correct' => false,
                        'explanation' => 'RADIUS is widely used to centralize authentication, authorization, and accounting for network access, including VPN and wireless authentication.',
                    ],
                    [
                        'answer' => 'Internet Control Message Protocol (ICMP)',
                        'is_correct' => false,
                        'explanation' => 'RADIUS is widely used to centralize authentication, authorization, and accounting for network access, including VPN and wireless authentication.',
                    ],
                ],
            ],

            [
                'question' => 'What protocol standard natively powers Microsoft Windows Remote Desktop Connection (RDC) for remote graphical user interface administration?',
                'options' => [
                    [
                        'answer' => 'SSH (Secure Shell)',
                        'is_correct' => false,
                        'explanation' => 'Microsoft Windows Remote Desktop Connection uses Microsoft’s Remote Desktop Protocol (RDP) to provide remote graphical desktop access.',
                    ],
                    [
                        'answer' => 'RDP (Remote Desktop Protocol)',
                        'is_correct' => true,
                        'explanation' => 'Microsoft Windows Remote Desktop Connection uses Microsoft’s Remote Desktop Protocol (RDP) to provide remote graphical desktop access.',
                    ],
                    [
                        'answer' => 'Telnet',
                        'is_correct' => false,
                        'explanation' => 'Microsoft Windows Remote Desktop Connection uses Microsoft’s Remote Desktop Protocol (RDP) to provide remote graphical desktop access.',
                    ],
                    [
                        'answer' => 'VNC (Virtual Network Computing)',
                        'is_correct' => false,
                        'explanation' => 'Microsoft Windows Remote Desktop Connection uses Microsoft’s Remote Desktop Protocol (RDP) to provide remote graphical desktop access.',
                    ],
                ],
            ],

            [
                'question' => 'In remote network security, what is the primary risk associated with using legacy Remote Access protocols like Telnet instead of SSH?',
                'options' => [
                    [
                        'answer' => 'Telnet requires expensive hardware modems at both ends.',
                        'is_correct' => false,
                        'explanation' => 'Telnet does not encrypt the session, so usernames, passwords, and transmitted data can potentially be captured by an attacker. SSH provides encrypted remote administration.',
                    ],
                    [
                        'answer' => 'Telnet transmits user credentials and session data in unencrypted plain text across the network.',
                        'is_correct' => true,
                        'explanation' => 'Telnet does not encrypt the session, so usernames, passwords, and transmitted data can potentially be captured by an attacker. SSH provides encrypted remote administration.',
                    ],
                    [
                        'answer' => 'Telnet does not support TCP/IP architecture.',
                        'is_correct' => false,
                        'explanation' => 'Telnet does not encrypt the session, so usernames, passwords, and transmitted data can potentially be captured by an attacker. SSH provides encrypted remote administration.',
                    ],
                    [
                        'answer' => 'Telnet is limited to female connector serial ports.',
                        'is_correct' => false,
                        'explanation' => 'Telnet does not encrypt the session, so usernames, passwords, and transmitted data can potentially be captured by an attacker. SSH provides encrypted remote administration.',
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
