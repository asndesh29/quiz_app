<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class MCQBoosterSeeder5 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'MCQ Booster 5',
            'description' => 'Computer Fundamentals, Hardware, CPU Architecture, Memory, Storage, Motherboard and ICT in Nepal MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which category of computers integrates both continuous analog signal processing and discrete digital binary computations within a single system architecture?',
                'options' => [
                    [
                        'answer' => 'Mainframe Computer',
                        'is_correct' => false,
                        'explanation' => 'A mainframe is a powerful computer designed to process large volumes of data and support many users, but it does not specifically combine analog and digital processing.',
                    ],
                    [
                        'answer' => 'Supercomputer',
                        'is_correct' => false,
                        'explanation' => 'A supercomputer is designed for extremely high-speed numerical computation and does not specifically refer to combining analog and digital processing.',
                    ],
                    [
                        'answer' => 'Hybrid Computer',
                        'is_correct' => true,
                        'explanation' => 'A hybrid computer combines analog processing for continuous signals with digital processing for discrete binary data.',
                    ],
                    [
                        'answer' => 'Microcomputer',
                        'is_correct' => false,
                        'explanation' => 'A microcomputer is a computer based on a microprocessor and is not defined by combining analog and digital processing.',
                    ],
                ],
            ],

            [
                'question' => 'What structural feature distinguishes Third-Generation computers from Second-Generation computing architectures?',
                'options' => [
                    [
                        'answer' => 'Integration of multiple transistors onto a single silicon semiconductor chip (Integrated Circuit - IC)',
                        'is_correct' => true,
                        'explanation' => 'Third-generation computers introduced integrated circuits, placing multiple electronic components such as transistors onto a single semiconductor chip.',
                    ],
                    [
                        'answer' => 'Complete elimination of input/output peripheral devices',
                        'is_correct' => false,
                        'explanation' => 'Third-generation computers continued to use input and output peripheral devices.',
                    ],
                    [
                        'answer' => 'Replacement of magnetic core memory with optical disks',
                        'is_correct' => false,
                        'explanation' => 'Optical disks were developed much later and were not the defining technology of third-generation computers.',
                    ],
                    [
                        'answer' => 'Use of vacuum tube arrays for primary memory registers',
                        'is_correct' => false,
                        'explanation' => 'Vacuum tubes were characteristic of first-generation computers, not third-generation computers.',
                    ],
                ],
            ],

            [
                'question' => 'In Machine Learning classification algorithms, what metric measures the proportion of actual positive cases that were correctly identified by the model?',
                'options' => [
                    [
                        'answer' => 'Precision',
                        'is_correct' => false,
                        'explanation' => 'Precision measures the proportion of predicted positive cases that are actually positive.',
                    ],
                    [
                        'answer' => 'Specificity',
                        'is_correct' => false,
                        'explanation' => 'Specificity measures the proportion of actual negative cases correctly identified as negative.',
                    ],
                    [
                        'answer' => 'Mean Squared Error',
                        'is_correct' => false,
                        'explanation' => 'Mean Squared Error is commonly used for regression problems and measures the average squared difference between predicted and actual values.',
                    ],
                    [
                        'answer' => 'Recall (Sensitivity)',
                        'is_correct' => true,
                        'explanation' => 'Recall, also called sensitivity or true positive rate, measures the proportion of actual positive cases correctly identified by the model.',
                    ],
                ],
            ],

            [
                'question' => 'In a decentralized Blockchain architecture, what component serves as a cryptographic timestamp and link binding consecutive data blocks in a continuous chain?',
                'options' => [
                    [
                        'answer' => 'Public key signature of the central domain authority',
                        'is_correct' => false,
                        'explanation' => 'A decentralized blockchain does not depend on a central domain authority to link its blocks.',
                    ],
                    [
                        'answer' => 'Merkle Tree root hash of current transactions and previous block header hash',
                        'is_correct' => true,
                        'explanation' => 'Blockchain blocks contain cryptographic hashes linking them to previous blocks, while the Merkle root summarizes the transactions within the block.',
                    ],
                    [
                        'answer' => 'Floating-point parity byte',
                        'is_correct' => false,
                        'explanation' => 'A floating-point parity byte is not a blockchain mechanism for linking consecutive blocks.',
                    ],
                    [
                        'answer' => 'Cleartext IP routing table entries',
                        'is_correct' => false,
                        'explanation' => 'IP routing tables are network-layer structures and do not provide cryptographic links between blockchain blocks.',
                    ],
                ],
            ],

            [
                'question' => 'Which physical security control mechanism prevents unauthorized individuals from physically accessing patch panels and network switches inside a data center telecommunications room?',
                'options' => [
                    [
                        'answer' => 'Uninterruptible Power Supply (UPS) Batteries',
                        'is_correct' => false,
                        'explanation' => 'UPS batteries provide backup electrical power and do not directly prevent unauthorized physical access.',
                    ],
                    [
                        'answer' => 'Clean Agent Gas Fire Extinguishers',
                        'is_correct' => false,
                        'explanation' => 'Clean-agent fire suppression systems protect equipment from fire but do not control physical access.',
                    ],
                    [
                        'answer' => 'Biometric Access Control and Locked Server Racks / Enclosures',
                        'is_correct' => true,
                        'explanation' => 'Biometric access controls and locked racks or enclosures restrict unauthorized physical access to networking equipment.',
                    ],
                    [
                        'answer' => 'Precision HVAC Humidity Sensors',
                        'is_correct' => false,
                        'explanation' => 'HVAC and humidity controls maintain environmental conditions but do not prevent unauthorized physical access.',
                    ],
                ],
            ],

            [
                'question' => 'What Client-Side web script framework allows web pages to asynchronously send and retrieve data from a web server in the background without requiring a full page reload?',
                'options' => [
                    [
                        'answer' => 'Static HTML Parsing',
                        'is_correct' => false,
                        'explanation' => 'Static HTML parsing displays document content but does not provide asynchronous server communication.',
                    ],
                    [
                        'answer' => 'CSS Media Queries',
                        'is_correct' => false,
                        'explanation' => 'CSS media queries control presentation based on device or viewport characteristics and do not communicate with servers.',
                    ],
                    [
                        'answer' => 'XML Schema Validation',
                        'is_correct' => false,
                        'explanation' => 'XML Schema validates XML document structure and does not provide asynchronous browser-server communication.',
                    ],
                    [
                        'answer' => 'AJAX (Asynchronous JavaScript and XML)',
                        'is_correct' => true,
                        'explanation' => 'AJAX allows JavaScript to communicate asynchronously with a server and update parts of a web page without a complete page reload.',
                    ],
                ],
            ],

            [
                'question' => 'Which register is connected directly to the system Data Bus?',
                'options' => [
                    [
                        'answer' => 'Memory Buffer Register (MBR)',
                        'is_correct' => true,
                        'explanation' => 'The Memory Buffer Register, also called the Memory Data Register, holds data being transferred between memory and the CPU and is connected to the data bus.',
                    ],
                    [
                        'answer' => 'Program Counter (PC)',
                        'is_correct' => false,
                        'explanation' => 'The Program Counter stores the address of the next instruction and is primarily associated with the address bus.',
                    ],
                    [
                        'answer' => 'Memory Address Register',
                        'is_correct' => false,
                        'explanation' => 'The Memory Address Register stores memory addresses and is associated with the address bus rather than directly carrying data.',
                    ],
                    [
                        'answer' => 'Control Address Register',
                        'is_correct' => false,
                        'explanation' => 'A control address register is not the standard CPU register used to transfer data through the system data bus.',
                    ],
                ],
            ],

            [
                'question' => 'What cache replacement policy evicts the memory block that has remained unaccessed for the longest duration of time when a cache memory set becomes full?',
                'options' => [
                    [
                        'answer' => 'Random Replacement (RR)',
                        'is_correct' => false,
                        'explanation' => 'Random replacement selects a cache block randomly rather than considering how recently it was accessed.',
                    ],
                    [
                        'answer' => 'Least Recently Used (LRU)',
                        'is_correct' => true,
                        'explanation' => 'LRU removes the cache block that has not been accessed for the longest period of time.',
                    ],
                    [
                        'answer' => 'First-In, First-Out (FIFO)',
                        'is_correct' => false,
                        'explanation' => 'FIFO removes the block that entered the cache first, regardless of when it was last accessed.',
                    ],
                    [
                        'answer' => 'Most Recently Used (MRU)',
                        'is_correct' => false,
                        'explanation' => 'MRU removes the block that was accessed most recently, which is the opposite of LRU.',
                    ],
                ],
            ],

            [
                'question' => 'In Hard Disk geometry, what structural unit comprises a continuous physical grouping of adjacent sectors allocated by the operating system file system as a single logical allocation unit?',
                'options' => [
                    [
                        'answer' => 'Track',
                        'is_correct' => false,
                        'explanation' => 'A track is a circular path on a disk surface containing multiple sectors, not the filesystem allocation unit.',
                    ],
                    [
                        'answer' => 'Cylinder',
                        'is_correct' => false,
                        'explanation' => 'A cylinder consists of corresponding tracks across multiple disk surfaces.',
                    ],
                    [
                        'answer' => 'Cluster (Allocation Unit)',
                        'is_correct' => true,
                        'explanation' => 'A cluster, or allocation unit, is a group of sectors that the filesystem manages as a single logical storage unit.',
                    ],
                    [
                        'answer' => 'Platter Head',
                        'is_correct' => false,
                        'explanation' => 'A platter head reads and writes data on disk surfaces and is not a filesystem allocation unit.',
                    ],
                ],
            ],

            [
                'question' => 'In I/O management, how does the CPU acknowledge an incoming hardware interrupt request from a peripheral controller?',
                'options' => [
                    [
                        'answer' => 'By issuing an Interrupt Acknowledge (INTA) signal and fetching the corresponding Interrupt Vector Number',
                        'is_correct' => true,
                        'explanation' => 'The CPU acknowledges an interrupt and obtains the interrupt vector so it can locate the appropriate interrupt service routine.',
                    ],
                    [
                        'answer' => 'By immediately clearing all system RAM memory',
                        'is_correct' => false,
                        'explanation' => 'Clearing RAM would destroy active system data and is not part of normal interrupt handling.',
                    ],
                    [
                        'answer' => 'By terminating all background operating system processes',
                        'is_correct' => false,
                        'explanation' => 'Interrupt handling does not require terminating all background processes.',
                    ],
                    [
                        'answer' => 'By switching off system bus clock generators',
                        'is_correct' => false,
                        'explanation' => 'Disabling the system clock would stop normal CPU and bus operation and is not an interrupt acknowledgment mechanism.',
                    ],
                ],
            ],

            [
                'question' => 'What technique allows low-speed output devices like network printers to receive print jobs continuously from high-speed programs without forcing the application to wait for slow hardware execution?',
                'options' => [
                    [
                        'answer' => 'Memory Compaction',
                        'is_correct' => false,
                        'explanation' => 'Memory compaction reorganizes memory to reduce fragmentation and is unrelated to printer job management.',
                    ],
                    [
                        'answer' => 'Swapping',
                        'is_correct' => false,
                        'explanation' => 'Swapping moves processes between RAM and secondary storage and does not specifically manage printer output.',
                    ],
                    [
                        'answer' => 'Direct Virtual Paging',
                        'is_correct' => false,
                        'explanation' => 'Virtual paging manages memory pages and is unrelated to buffering printer output.',
                    ],
                    [
                        'answer' => 'Spooling (Simultaneous Peripheral Operations On-Line)',
                        'is_correct' => true,
                        'explanation' => 'Spooling stores output jobs in a buffer or queue so fast applications do not have to wait for slower peripheral devices.',
                    ],
                ],
            ],

            [
                'question' => 'What primary operational benefit does a Direct Memory Access (DMA) controller provide to the system architecture during bulk storage data operations?',
                'options' => [
                    [
                        'answer' => 'It performs complex arithmetic computations on input stream arrays.',
                        'is_correct' => false,
                        'explanation' => 'DMA controllers are designed for data movement, not complex arithmetic processing.',
                    ],
                    [
                        'answer' => 'It encrypts file payloads using symmetric block keys.',
                        'is_correct' => false,
                        'explanation' => 'Encryption is performed by cryptographic software or hardware rather than being the primary purpose of DMA.',
                    ],
                    [
                        'answer' => 'It executes direct block data transfers between I/O controllers and RAM without continuously consuming CPU processing cycles.',
                        'is_correct' => true,
                        'explanation' => 'DMA allows data to move directly between I/O devices and memory with minimal CPU involvement, improving overall system efficiency.',
                    ],
                    [
                        'answer' => 'It increases the physical clock frequency of system RAM modules.',
                        'is_correct' => false,
                        'explanation' => 'DMA does not change the physical clock frequency of RAM.',
                    ],
                ],
            ],

            [
                'question' => 'At which layer of the OSI model does a transparent Layer 2 Network Switch inspect MAC addresses to forward data frames directly to target physical ports?',
                'options' => [
                    [
                        'answer' => 'Physical Layer (Layer 1)',
                        'is_correct' => false,
                        'explanation' => 'The Physical layer handles transmission of raw bits over physical media and does not make MAC-based forwarding decisions.',
                    ],
                    [
                        'answer' => 'Data Link Layer (Layer 2)',
                        'is_correct' => true,
                        'explanation' => 'Ethernet switches operate primarily at Layer 2 and use MAC addresses to forward frames.',
                    ],
                    [
                        'answer' => 'Session Layer (Layer 5)',
                        'is_correct' => false,
                        'explanation' => 'The Session layer manages communication sessions and does not perform MAC address switching.',
                    ],
                    [
                        'answer' => 'Network Layer (Layer 3)',
                        'is_correct' => false,
                        'explanation' => 'Layer 3 devices such as routers use IP addresses for routing between networks.',
                    ],
                ],
            ],

            [
                'question' => 'In even parity checking, what bit is appended to the data stream 1011001?',
                'options' => [
                    [
                        'answer' => '0',
                        'is_correct' => true,
                        'explanation' => 'The data 1011001 contains four 1-bits, which is already even. Therefore, a parity bit of 0 keeps the total number of 1-bits even.',
                    ],
                    [
                        'answer' => '1',
                        'is_correct' => false,
                        'explanation' => 'Adding 1 would make the total number of 1-bits five, which is odd and therefore violates even parity.',
                    ],
                    [
                        'answer' => 'Both A and B',
                        'is_correct' => false,
                        'explanation' => 'Only one parity bit is required, and for this data the correct bit is 0.',
                    ],
                    [
                        'answer' => 'None of the above',
                        'is_correct' => false,
                        'explanation' => 'A parity bit is required, and the correct value is 0.',
                    ],
                ],
            ],

            [
                'question' => 'The process by which a client automatically leases an IP address involves which protocol sequence?',
                'options' => [
                    [
                        'answer' => 'DORA',
                        'is_correct' => true,
                        'explanation' => 'DHCP uses the DORA sequence: Discover, Offer, Request, and Acknowledge.',
                    ],
                    [
                        'answer' => 'HANDSHAKE',
                        'is_correct' => false,
                        'explanation' => 'Handshake is a general networking term but is not the DHCP address allocation sequence.',
                    ],
                    [
                        'answer' => 'ARP-RARP',
                        'is_correct' => false,
                        'explanation' => 'ARP resolves IP addresses to MAC addresses, while RARP historically performed the reverse function; neither represents the DHCP leasing sequence.',
                    ],
                    [
                        'answer' => 'ICMP-ECHO',
                        'is_correct' => false,
                        'explanation' => 'ICMP Echo is used by tools such as ping to test connectivity and is not used for DHCP address leasing.',
                    ],
                ],
            ],

            [
                'question' => 'What is the size of a MAC address?',
                'options' => [
                    [
                        'answer' => '128',
                        'is_correct' => false,
                        'explanation' => '128 bits is the size of an IPv6 address, not a standard Ethernet MAC address.',
                    ],
                    [
                        'answer' => '64',
                        'is_correct' => false,
                        'explanation' => 'A standard MAC-48 address contains 48 bits, not 64 bits.',
                    ],
                    [
                        'answer' => '48',
                        'is_correct' => true,
                        'explanation' => 'A standard Ethernet MAC address is 48 bits, commonly represented as six hexadecimal bytes.',
                    ],
                    [
                        'answer' => '32',
                        'is_correct' => false,
                        'explanation' => '32 bits is the size of an IPv4 address, not a standard Ethernet MAC address.',
                    ],
                ],
            ],

            [
                'question' => 'Which protocol provides encrypted remote command-line administration over TCP port 22, replacing unencrypted Telnet sessions?',
                'options' => [
                    [
                        'answer' => 'FTP',
                        'is_correct' => false,
                        'explanation' => 'FTP is primarily used for file transfer and does not provide the standard encrypted remote shell service described here.',
                    ],
                    [
                        'answer' => 'RDP',
                        'is_correct' => false,
                        'explanation' => 'RDP provides remote graphical desktop access and commonly uses TCP port 3389.',
                    ],
                    [
                        'answer' => 'SSH',
                        'is_correct' => true,
                        'explanation' => 'SSH provides encrypted remote command-line access and normally operates on TCP port 22.',
                    ],
                    [
                        'answer' => 'SNMP',
                        'is_correct' => false,
                        'explanation' => 'SNMP is primarily used for network device monitoring and management.',
                    ],
                ],
            ],

            [
                'question' => 'What asymmetric key cipher algorithm bases its security model on the mathematical difficulty of computing discrete logarithms over finite fields or elliptic curves?',
                'options' => [
                    [
                        'answer' => 'RSA',
                        'is_correct' => false,
                        'explanation' => 'RSA security is primarily based on the computational difficulty of factoring large integers.',
                    ],
                    [
                        'answer' => 'AES-256',
                        'is_correct' => false,
                        'explanation' => 'AES-256 is a symmetric encryption algorithm, not an asymmetric discrete-logarithm-based algorithm.',
                    ],
                    [
                        'answer' => 'Blowfish',
                        'is_correct' => false,
                        'explanation' => 'Blowfish is a symmetric-key block cipher and does not rely on the discrete logarithm problem.',
                    ],
                    [
                        'answer' => 'Diffie-Hellman / ECC (Elliptic Curve Cryptography)',
                        'is_correct' => true,
                        'explanation' => 'Diffie-Hellman relies on discrete logarithm problems, while ECC uses related elliptic-curve mathematical problems for public-key cryptography.',
                    ],
                ],
            ],

            [
                'question' => 'Which cryptographic mechanism provides non-repudiation, message integrity, and sender authenticity by combining asymmetric encryption with cryptographic hashing?',
                'options' => [
                    [
                        'answer' => 'Digital Signature',
                        'is_correct' => true,
                        'explanation' => 'A digital signature uses a private key and a cryptographic hash to provide authenticity, integrity, and non-repudiation.',
                    ],
                    [
                        'answer' => 'Symmetric Block Cipher',
                        'is_correct' => false,
                        'explanation' => 'Symmetric encryption protects confidentiality using a shared secret key but does not by itself provide non-repudiation.',
                    ],
                    [
                        'answer' => 'Diffie-Hellman Key Exchange',
                        'is_correct' => false,
                        'explanation' => 'Diffie-Hellman establishes shared secrets but does not by itself provide message authentication or non-repudiation.',
                    ],
                    [
                        'answer' => 'Cyclic Redundancy Check',
                        'is_correct' => false,
                        'explanation' => 'CRC is primarily an error-detection mechanism and does not provide cryptographic authentication or non-repudiation.',
                    ],
                ],
            ],

            [
                'question' => 'What is the key function of a network Firewall deployed at an enterprise boundary?',
                'options' => [
                    [
                        'answer' => 'Converting binary application code into executable machine instructions',
                        'is_correct' => false,
                        'explanation' => 'Compilers and interpreters perform code translation, not firewalls.',
                    ],
                    [
                        'answer' => 'Translating physical MAC addresses into global domain names',
                        'is_correct' => false,
                        'explanation' => 'DNS resolves domain names and IP addresses; firewalls do not translate MAC addresses into domain names.',
                    ],
                    [
                        'answer' => 'Filtering incoming and outgoing network traffic based on stateful security rules and Access Control Lists (ACLs)',
                        'is_correct' => true,
                        'explanation' => 'Firewalls enforce security policies by inspecting and filtering network traffic according to configured rules and access controls.',
                    ],
                    [
                        'answer' => 'Generating continuous data backup mirrors across cloud storage',
                        'is_correct' => false,
                        'explanation' => 'Backup systems replicate and protect data, while firewalls primarily control network traffic.',
                    ],
                ],
            ],

            [
                'question' => 'Which wireless networking standard operates in both the 2.4 GHz and 5 GHz radio frequency bands and is officially known as Wi-Fi 6?',
                'options' => [
                    [
                        'answer' => 'IEEE 802.3',
                        'is_correct' => false,
                        'explanation' => 'IEEE 802.3 defines Ethernet wired networking.',
                    ],
                    [
                        'answer' => 'IEEE 802.15.1',
                        'is_correct' => false,
                        'explanation' => 'IEEE 802.15.1 is associated with Bluetooth technology rather than Wi-Fi 6.',
                    ],
                    [
                        'answer' => 'IEEE 802.11ax',
                        'is_correct' => true,
                        'explanation' => 'IEEE 802.11ax is the wireless networking standard marketed as Wi-Fi 6 and operates in the 2.4 GHz and 5 GHz bands.',
                    ],
                    [
                        'answer' => 'IEEE 802.16',
                        'is_correct' => false,
                        'explanation' => 'IEEE 802.16 is associated with WiMAX broadband wireless technology.',
                    ],
                ],
            ],

            [
                'question' => 'Which guided transmission medium consists of four twisted pairs of insulated copper wires wrapped in an outer protective plastic jacket to minimize electromagnetic crosstalk?',
                'options' => [
                    [
                        'answer' => 'Unshielded Twisted Pair (UTP)',
                        'is_correct' => true,
                        'explanation' => 'UTP cable typically contains four twisted pairs of insulated copper wires inside a protective jacket, with twisting helping reduce electromagnetic interference and crosstalk.',
                    ],
                    [
                        'answer' => 'Coaxial Cable',
                        'is_correct' => false,
                        'explanation' => 'Coaxial cable uses a central conductor, insulation, metallic shield, and outer jacket rather than four twisted pairs.',
                    ],
                    [
                        'answer' => 'Microwave Waveguide',
                        'is_correct' => false,
                        'explanation' => 'A microwave waveguide is a hollow structure used to guide electromagnetic waves and does not contain four twisted copper pairs.',
                    ],
                    [
                        'answer' => 'Single-Mode Optical Fiber',
                        'is_correct' => false,
                        'explanation' => 'Single-mode optical fiber transmits light through glass or plastic fiber rather than electrical signals through twisted copper pairs.',
                    ],
                ],
            ],

            [
                'question' => 'What switching technology breaks incoming application messages into smaller, uniform frames or packets, routing each independently across shared network links to destination addresses?',
                'options' => [
                    [
                        'answer' => 'Circuit Switching',
                        'is_correct' => false,
                        'explanation' => 'Circuit switching establishes a dedicated communication path before data transmission.',
                    ],
                    [
                        'answer' => 'Message Switching',
                        'is_correct' => false,
                        'explanation' => 'Message switching forwards complete messages using store-and-forward techniques rather than breaking them into independently routed packets in the manner described.',
                    ],
                    [
                        'answer' => 'Physical Channel Switching',
                        'is_correct' => false,
                        'explanation' => 'Physical channel switching is not the standard networking technology described by this definition.',
                    ],
                    [
                        'answer' => 'Packet Switching',
                        'is_correct' => true,
                        'explanation' => 'Packet switching divides data into packets that can be transmitted across shared network links and forwarded toward their destination.',
                    ],
                ],
            ],

            [
                'question' => 'In Cryptography, what term describes the process of converting unencrypted plaintext messages into unreadable ciphertext using a secret mathematical key?',
                'options' => [
                    [
                        'answer' => 'Decryption',
                        'is_correct' => false,
                        'explanation' => 'Decryption converts ciphertext back into readable plaintext.',
                    ],
                    [
                        'answer' => 'Encryption',
                        'is_correct' => true,
                        'explanation' => 'Encryption transforms plaintext into ciphertext using a cryptographic algorithm and key.',
                    ],
                    [
                        'answer' => 'De-duplication',
                        'is_correct' => false,
                        'explanation' => 'Deduplication removes redundant copies of data and is unrelated to cryptographic transformation.',
                    ],
                    [
                        'answer' => 'Hashing',
                        'is_correct' => false,
                        'explanation' => 'Hashing produces a fixed-size digest and is generally designed as a one-way operation rather than reversible encryption.',
                    ],
                ],
            ],

            [
                'question' => 'Which one-way hashing standard outputs a 256-bit fixed-length digest from any input payload and belongs to the Secure Hash Algorithm 2 family?',
                'options' => [
                    [
                        'answer' => 'SHA-256',
                        'is_correct' => true,
                        'explanation' => 'SHA-256 is part of the SHA-2 family and produces a 256-bit hash digest.',
                    ],
                    [
                        'answer' => 'MD5',
                        'is_correct' => false,
                        'explanation' => 'MD5 produces a 128-bit digest and is considered cryptographically broken for collision resistance.',
                    ],
                    [
                        'answer' => 'SHA-1',
                        'is_correct' => false,
                        'explanation' => 'SHA-1 produces a 160-bit digest and is no longer considered secure for many cryptographic applications.',
                    ],
                    [
                        'answer' => 'CRC-32',
                        'is_correct' => false,
                        'explanation' => 'CRC-32 is an error-detection checksum rather than a cryptographic hash standard.',
                    ],
                ],
            ],

            [
                'question' => 'What component of an Operating System acts as the primary intermediary layer, managing system hardware calls, execution modes, and process memory allocations?',
                'options' => [
                    [
                        'answer' => 'User Shell',
                        'is_correct' => false,
                        'explanation' => 'A shell provides a user interface to the operating system but does not directly manage core hardware and memory operations.',
                    ],
                    [
                        'answer' => 'Application Control Interface',
                        'is_correct' => false,
                        'explanation' => 'An application interface provides software access to operating system functionality but is not the central operating system component.',
                    ],
                    [
                        'answer' => 'Kernel',
                        'is_correct' => true,
                        'explanation' => 'The kernel is the core of an operating system and manages hardware resources, processes, memory, and system calls.',
                    ],
                    [
                        'answer' => 'File System Formatter',
                        'is_correct' => false,
                        'explanation' => 'A filesystem formatter prepares storage media and does not manage CPU execution, memory, and hardware resources continuously.',
                    ],
                ],
            ],

            [
                'question' => 'In preemptive CPU process scheduling, what occurs when a process with higher priority enters the ready queue while a lower-priority process is currently executing?',
                'options' => [
                    [
                        'answer' => 'The lower-priority process finishes its entire burst time before the new process runs.',
                        'is_correct' => false,
                        'explanation' => 'That behavior describes non-preemptive scheduling rather than preemptive priority scheduling.',
                    ],
                    [
                        'answer' => 'Both processes execute simultaneously on a single CPU core register.',
                        'is_correct' => false,
                        'explanation' => 'A single CPU core cannot execute both processes simultaneously in this manner.',
                    ],
                    [
                        'answer' => 'The operating system preempts (suspends) the executing lower-priority process and assigns CPU time to the higher-priority process immediately.',
                        'is_correct' => true,
                        'explanation' => 'In preemptive priority scheduling, the higher-priority process can interrupt the currently running lower-priority process.',
                    ],
                    [
                        'answer' => 'The system generates a fatal kernel panic error.',
                        'is_correct' => false,
                        'explanation' => 'Normal process preemption is a standard operating system function and does not cause a kernel panic.',
                    ],
                ],
            ],

            [
                'question' => 'The degree of multiprogramming is controlled by which scheduler?',
                'options' => [
                    [
                        'answer' => 'Short-Term Scheduler',
                        'is_correct' => false,
                        'explanation' => 'The short-term scheduler selects which ready process receives CPU time and operates frequently.',
                    ],
                    [
                        'answer' => 'Medium-Term Scheduler',
                        'is_correct' => false,
                        'explanation' => 'The medium-term scheduler manages process suspension and swapping to control memory usage.',
                    ],
                    [
                        'answer' => 'Long-Term Scheduler',
                        'is_correct' => true,
                        'explanation' => 'The long-term scheduler controls how many processes are admitted into the system, thereby controlling the degree of multiprogramming.',
                    ],
                    [
                        'answer' => 'Dispatcher',
                        'is_correct' => false,
                        'explanation' => 'The dispatcher gives CPU control to the process selected by the short-term scheduler.',
                    ],
                ],
            ],

            [
                'question' => 'In UNIX/Linux file systems, which command alters the user account ownership of a specified file or directory structure?',
                'options' => [
                    [
                        'answer' => 'chmod',
                        'is_correct' => false,
                        'explanation' => 'chmod changes file and directory permission bits.',
                    ],
                    [
                        'answer' => 'chgrp',
                        'is_correct' => false,
                        'explanation' => 'chgrp changes the group ownership of files or directories.',
                    ],
                    [
                        'answer' => 'umask',
                        'is_correct' => false,
                        'explanation' => 'umask controls default permission masks for newly created files and directories.',
                    ],
                    [
                        'answer' => 'chown',
                        'is_correct' => true,
                        'explanation' => 'chown changes the owner of a file or directory and can also change its group ownership.',
                    ],
                ],
            ],

            [
                'question' => 'What internal MS-DOS command clears the screen text console display, returning the active cursor prompt to the top left position?',
                'options' => [
                    [
                        'answer' => 'CLS',
                        'is_correct' => true,
                        'explanation' => 'CLS stands for Clear Screen and clears the MS-DOS command prompt display.',
                    ],
                    [
                        'answer' => 'DEL',
                        'is_correct' => false,
                        'explanation' => 'DEL deletes files and does not clear the console screen.',
                    ],
                    [
                        'answer' => 'CLEAR',
                        'is_correct' => false,
                        'explanation' => 'CLEAR is not the standard internal MS-DOS command used to clear the console screen.',
                    ],
                    [
                        'answer' => 'RESET',
                        'is_correct' => false,
                        'explanation' => 'RESET is not the standard MS-DOS command for clearing the console screen.',
                    ],
                ],
            ],

            [
                'question' => 'Which OS Security threat consists of malware designed to open undocumented remote backdoors on an infected host computer, allowing remote attackers to issue unauthorized administrative commands?',
                'options' => [
                    [
                        'answer' => 'Macro Virus (MV)',
                        'is_correct' => false,
                        'explanation' => 'A macro virus infects documents containing macro languages and spreads when the infected documents are opened.',
                    ],
                    [
                        'answer' => 'Boot Sector Virus (BSV)',
                        'is_correct' => false,
                        'explanation' => 'A boot sector virus infects boot-related disk sectors and can execute during system startup.',
                    ],
                    [
                        'answer' => 'Remote Access Trojan (RAT)',
                        'is_correct' => true,
                        'explanation' => 'A RAT provides unauthorized remote access and can allow attackers to execute commands and control an infected system.',
                    ],
                    [
                        'answer' => 'File Infector (FI)',
                        'is_correct' => false,
                        'explanation' => 'A file infector attaches malicious code to executable files rather than specifically providing remote administrative access.',
                    ],
                ],
            ],

            [
                'question' => 'In Relational Database Management Systems, what constraint rule dictates that Primary Key column values within a relational table can NEVER contain NULL entries?',
                'options' => [
                    [
                        'answer' => 'Entity Integrity',
                        'is_correct' => true,
                        'explanation' => 'Entity integrity requires every primary key value to be unique and non-NULL so each row can be uniquely identified.',
                    ],
                    [
                        'answer' => 'Referential Integrity',
                        'is_correct' => false,
                        'explanation' => 'Referential integrity controls relationships between foreign keys and referenced keys across tables.',
                    ],
                    [
                        'answer' => 'Domain Integrity',
                        'is_correct' => false,
                        'explanation' => 'Domain integrity ensures values conform to the allowed data type, range, and format for a column.',
                    ],
                    [
                        'answer' => 'Key Constraints',
                        'is_correct' => false,
                        'explanation' => 'Key constraints relate to uniqueness and identification, but the specific rule that primary keys cannot be NULL is known as entity integrity.',
                    ],
                ],
            ],

            [
                'question' => 'What database operation combines rows from two or more tables based on a related common column field linking both structures?',
                'options' => [
                    [
                        'answer' => 'SQL Group By',
                        'is_correct' => false,
                        'explanation' => 'GROUP BY groups rows based on column values and is commonly used with aggregate functions.',
                    ],
                    [
                        'answer' => 'SQL Union',
                        'is_correct' => false,
                        'explanation' => 'UNION combines the results of compatible SELECT queries vertically rather than joining related columns between tables.',
                    ],
                    [
                        'answer' => 'SQL Join',
                        'is_correct' => true,
                        'explanation' => 'A SQL JOIN combines related rows from multiple tables using matching or related columns.',
                    ],
                    [
                        'answer' => 'SQL Subquery',
                        'is_correct' => false,
                        'explanation' => 'A subquery is a query nested inside another query and is not itself the operation specifically used to combine related rows.',
                    ],
                ],
            ],

            [
                'question' => 'Which characteristic of a Data Warehouse refers to standardizing data collected from multiple operational source systems?',
                'options' => [
                    [
                        'answer' => 'Time-Variant',
                        'is_correct' => false,
                        'explanation' => 'Time-variant means that a data warehouse stores historical data associated with different time periods.',
                    ],
                    [
                        'answer' => 'Non-Volatile',
                        'is_correct' => false,
                        'explanation' => 'Non-volatile means data is generally stable and is not frequently updated or deleted by operational transactions.',
                    ],
                    [
                        'answer' => 'Subject-Oriented',
                        'is_correct' => false,
                        'explanation' => 'Subject-oriented means data is organized around major business subjects such as customers, products, or sales.',
                    ],
                    [
                        'answer' => 'Integrated',
                        'is_correct' => true,
                        'explanation' => 'Integrated means data from different operational systems is standardized and combined into a consistent format.',
                    ],
                ],
            ],

            [
                'question' => 'What is the fundamental difference between a Data Warehouse and a Data Mart?',
                'options' => [
                    [
                        'answer' => 'Data Warehouses contain non-relational unstructured data; Data Marts contain text files.',
                        'is_correct' => false,
                        'explanation' => 'Both data warehouses and data marts can contain structured data and are not defined by this distinction.',
                    ],
                    [
                        'answer' => 'Data Marts process real-time core banking transactions; Data Warehouses only generate weekly system logs.',
                        'is_correct' => false,
                        'explanation' => 'Neither definition accurately describes the primary distinction between a data warehouse and a data mart.',
                    ],
                    [
                        'answer' => 'A Data Warehouse holds enterprise-wide integrated historical data; a Data Mart is a focused subset tailored to a specific department or business unit.',
                        'is_correct' => true,
                        'explanation' => 'A data warehouse provides broad enterprise-level analytical data, while a data mart focuses on a particular department, subject, or business function.',
                    ],
                    [
                        'answer' => 'Data Warehouses cannot undergo ETL processing.',
                        'is_correct' => false,
                        'explanation' => 'ETL is commonly used to extract, transform, and load data into data warehouses.',
                    ],
                ],
            ],

            [
                'question' => 'Which structural HTML element is used to build tabular data matrices consisting of rows and data cells on a web page?',
                'options' => [
                    [
                        'answer' => '<form>',
                        'is_correct' => false,
                        'explanation' => 'The form element is used to collect and submit user input.',
                    ],
                    [
                        'answer' => '<div>',
                        'is_correct' => false,
                        'explanation' => 'The div element is a general-purpose container and does not specifically define tabular data.',
                    ],
                    [
                        'answer' => '<table>',
                        'is_correct' => true,
                        'explanation' => 'The table element is used to represent tabular data using rows and cells.',
                    ],
                    [
                        'answer' => '<section>',
                        'is_correct' => false,
                        'explanation' => 'The section element groups related content but does not specifically create a table.',
                    ],
                ],
            ],

            [
                'question' => 'Which cascading style sheet (CSS) rule approach places styling properties directly inside individual HTML element tags using the style attribute?',
                'options' => [
                    [
                        'answer' => 'Inline CSS',
                        'is_correct' => true,
                        'explanation' => 'Inline CSS places style declarations directly in an HTML element using its style attribute.',
                    ],
                    [
                        'answer' => 'External CSS',
                        'is_correct' => false,
                        'explanation' => 'External CSS is stored in a separate stylesheet file and linked to HTML documents.',
                    ],
                    [
                        'answer' => 'Internal / Embedded CSS',
                        'is_correct' => false,
                        'explanation' => 'Internal CSS is written inside a style element in the HTML document head.',
                    ],
                    [
                        'answer' => 'Imported CSS',
                        'is_correct' => false,
                        'explanation' => 'Imported CSS is brought into a stylesheet using mechanisms such as @import and is not placed directly inside individual HTML tags.',
                    ],
                ],
            ],

            [
                'question' => 'Which process provides the foundation for setting RTO and RPO metrics?',
                'options' => [
                    [
                        'answer' => 'Risk Assessment (RA)',
                        'is_correct' => false,
                        'explanation' => 'Risk assessment identifies and evaluates risks, but Business Impact Analysis specifically establishes business recovery requirements used to determine RTO and RPO.',
                    ],
                    [
                        'answer' => 'Full Interruption Test (FIT)',
                        'is_correct' => false,
                        'explanation' => 'A full interruption test validates recovery capabilities but is not the primary process for establishing RTO and RPO.',
                    ],
                    [
                        'answer' => 'System Vulnerability Scan',
                        'is_correct' => false,
                        'explanation' => 'Vulnerability scanning identifies security weaknesses and does not establish business recovery objectives.',
                    ],
                    [
                        'answer' => 'Business Impact Analysis (BIA)',
                        'is_correct' => true,
                        'explanation' => 'A Business Impact Analysis identifies critical processes, their impacts, and recovery requirements, forming the foundation for RTO and RPO.',
                    ],
                ],
            ],

            [
                'question' => 'What operational configuration defines a Disaster Recovery "Warm Site"?',
                'options' => [
                    [
                        'answer' => 'A site fully operational with real-time cloned data databases and active automated failover.',
                        'is_correct' => false,
                        'explanation' => 'This describes a hot site, which is designed for rapid or near-immediate failover.',
                    ],
                    [
                        'answer' => 'A facility equipped with server hardware, network infrastructure, and system software, requiring backup restoration before resuming operations.',
                        'is_correct' => true,
                        'explanation' => 'A warm site has much of the required infrastructure and equipment but generally requires restoration or configuration before full operation.',
                    ],
                    [
                        'answer' => 'A facility with physical building infrastructure, power, and climate controls, but lacking pre-installed server hardware.',
                        'is_correct' => false,
                        'explanation' => 'This more closely describes a cold site, which provides facilities but requires significant equipment installation before operation.',
                    ],
                    [
                        'answer' => 'A mobile truck unit containing desktop PCs.',
                        'is_correct' => false,
                        'explanation' => 'A mobile recovery unit can support continuity but is not the standard definition of a warm site.',
                    ],
                ],
            ],

            [
                'question' => 'What type of social engineering attack involves an unauthorized individual posing as an IT support desk employee over the phone to trick users into providing their domain passwords?',
                'options' => [
                    [
                        'answer' => 'Spear Phishing',
                        'is_correct' => false,
                        'explanation' => 'Spear phishing is a targeted phishing attack, commonly delivered through email or messaging, tailored to a particular victim.',
                    ],
                    [
                        'answer' => 'Pretexting',
                        'is_correct' => true,
                        'explanation' => 'Pretexting involves creating a believable false identity or scenario, such as pretending to be IT support, to obtain sensitive information.',
                    ],
                    [
                        'answer' => 'Shoulder Surfing',
                        'is_correct' => false,
                        'explanation' => 'Shoulder surfing involves observing someone directly to obtain passwords or other sensitive information.',
                    ],
                    [
                        'answer' => 'Watering Hole Attack',
                        'is_correct' => false,
                        'explanation' => 'A watering hole attack compromises websites likely to be visited by a target group in order to infect or compromise visitors.',
                    ],
                ],
            ],

            [
                'question' => 'What malware variant self-replicates across networks by exploiting operating system vulnerabilities without requiring human interaction or attachment to host program files?',
                'options' => [
                    [
                        'answer' => 'Computer Virus',
                        'is_correct' => false,
                        'explanation' => 'A virus generally requires a host file or user action to spread.',
                    ],
                    [
                        'answer' => 'Trojan Horse',
                        'is_correct' => false,
                        'explanation' => 'A Trojan disguises itself as legitimate software and does not inherently self-replicate like a worm.',
                    ],
                    [
                        'answer' => 'Computer Worm',
                        'is_correct' => true,
                        'explanation' => 'A worm can self-replicate across networks by exploiting vulnerabilities without requiring attachment to a host program.',
                    ],
                    [
                        'answer' => 'Macro Infector',
                        'is_correct' => false,
                        'explanation' => 'A macro infector spreads through documents containing malicious macros and generally requires document execution.',
                    ],
                ],
            ],

            [
                'question' => 'Which network security attack floods target server endpoints with massive volumes of traffic generated by thousands of compromised, remotely controlled botnet devices?',
                'options' => [
                    [
                        'answer' => 'Man-in-the-Middle (MitM) Attack',
                        'is_correct' => false,
                        'explanation' => 'A MitM attack involves intercepting or manipulating communication between parties rather than overwhelming a target with distributed traffic.',
                    ],
                    [
                        'answer' => 'Cross-Site Scripting (XSS)',
                        'is_correct' => false,
                        'explanation' => 'XSS injects malicious scripts into web content viewed by users and is not a distributed traffic-flooding attack.',
                    ],
                    [
                        'answer' => 'SQL Injection',
                        'is_correct' => false,
                        'explanation' => 'SQL injection manipulates database queries through malicious input and is not a distributed denial-of-service technique.',
                    ],
                    [
                        'answer' => 'Distributed Denial of Service (DDoS) Attack',
                        'is_correct' => true,
                        'explanation' => 'A DDoS attack uses many compromised devices, often a botnet, to generate overwhelming traffic toward a target.',
                    ],
                ],
            ],

            [
                'question' => 'Which access control mechanism grants or restricts permissions based on security attributes assigned to users, targets, and environmental conditions such as access time and IP location?',
                'options' => [
                    [
                        'answer' => 'Attribute-Based Access Control (ABAC)',
                        'is_correct' => true,
                        'explanation' => 'ABAC makes authorization decisions using attributes associated with users, resources, actions, and environmental conditions.',
                    ],
                    [
                        'answer' => 'Discretionary Access Control (DAC)',
                        'is_correct' => false,
                        'explanation' => 'DAC allows resource owners to determine who can access resources and does not primarily base decisions on multiple contextual attributes.',
                    ],
                    [
                        'answer' => 'Role-Based Access Control (RBAC)',
                        'is_correct' => false,
                        'explanation' => 'RBAC grants permissions based primarily on roles assigned to users rather than a broad collection of environmental attributes.',
                    ],
                    [
                        'answer' => 'Mandatory Access Control (MAC)',
                        'is_correct' => false,
                        'explanation' => 'MAC uses centrally defined security classifications and labels rather than the flexible attribute-based policies described here.',
                    ],
                ],
            ],

            [
                'question' => 'What objective is highlighted in the Information and Communication Technology (ICT) Policy of Nepal, 2072 regarding national broadband infrastructure expansion?',
                'options' => [
                    [
                        'answer' => 'To restrict broadband Internet connectivity exclusively to metropolitan banking hubs',
                        'is_correct' => false,
                        'explanation' => 'The policy seeks broader access rather than restricting connectivity to metropolitan banking centers.',
                    ],
                    [
                        'answer' => 'To extend broadband infrastructure access across all parts of the country to build an inclusive digital society',
                        'is_correct' => true,
                        'explanation' => 'The objective is to expand ICT and broadband access throughout Nepal and support an inclusive digital society.',
                    ],
                    [
                        'answer' => 'To ban international fiber-optic gateway connections',
                        'is_correct' => false,
                        'explanation' => 'The ICT policy does not seek to ban international fiber-optic connectivity.',
                    ],
                    [
                        'answer' => 'To replace fixed broadband connections entirely with satellite phones',
                        'is_correct' => false,
                        'explanation' => 'Satellite phones are not intended to completely replace fixed broadband infrastructure under the policy.',
                    ],
                ],
            ],

            [
                'question' => 'According to NRB IT Guidelines, what control requirement must licensed financial institutions enforce regarding administrative user access management?',
                'options' => [
                    [
                        'answer' => 'Using generic shared administrative accounts across all IT staff',
                        'is_correct' => false,
                        'explanation' => 'Shared administrative accounts reduce accountability and make it difficult to trace actions to individual users.',
                    ],
                    [
                        'answer' => 'Disabling security logging on domain controller servers',
                        'is_correct' => false,
                        'explanation' => 'Security logging should be maintained to support monitoring, investigation, and accountability.',
                    ],
                    [
                        'answer' => 'Implementing unique individual administrative IDs, strong authentication, and detailed action logging',
                        'is_correct' => true,
                        'explanation' => 'Individual administrative identities, strong authentication, and audit logging improve accountability and control over privileged access.',
                    ],
                    [
                        'answer' => 'Granting administrative privileges to all branch tellers',
                        'is_correct' => false,
                        'explanation' => 'Administrative privileges should be restricted according to job responsibilities and least-privilege principles.',
                    ],
                ],
            ],

            [
                'question' => 'According to IT guidelines, what does ISO refer to?',
                'options' => [
                    [
                        'answer' => 'Information Security Officer',
                        'is_correct' => true,
                        'explanation' => 'Information Security Officer is a job role and is not the meaning of the ISO acronym in this context.',
                    ],
                    [
                        'answer' => 'Internet Security Officer',
                        'is_correct' => false,
                        'explanation' => 'Internet Security Officer is not the expansion of ISO.',
                    ],
                    [
                        'answer' => 'International Organization for Standardization',
                        'is_correct' => false,
                        'explanation' => 'ISO stands for International Organization for Standardization, an international organization that develops standards.',
                    ],
                    [
                        'answer' => 'Internet Organization for Standardization',
                        'is_correct' => false,
                        'explanation' => 'Internet Organization for Standardization is not the correct expansion of ISO.',
                    ],
                ],
            ],

            [
                'question' => 'Under the Cyber Resilience Guidelines (2023) issued by NRB, what operational capability must financial entities maintain to respond effectively to cyber incidents?',
                'options' => [
                    [
                        'answer' => 'Establishing a Cyber Incident Response Team (CIRT/CSIRT) with defined incident escalation procedures',
                        'is_correct' => true,
                        'explanation' => 'A defined incident response capability with appropriate teams, procedures, and escalation paths enables organizations to detect, respond to, and recover from cyber incidents.',
                    ],
                    [
                        'answer' => 'Outsourcing all incident responses to unverified public forums',
                        'is_correct' => false,
                        'explanation' => 'Incident response requires controlled, trusted, and accountable processes rather than unverified public forums.',
                    ],
                    [
                        'answer' => 'Ignoring minor security breaches until annual audit reviews',
                        'is_correct' => false,
                        'explanation' => 'Security incidents should be assessed and handled according to established incident response procedures rather than being ignored.',
                    ],
                    [
                        'answer' => 'Erasing server system logs immediately after detecting an intrusion',
                        'is_correct' => false,
                        'explanation' => 'Logs are valuable evidence for investigation and should be protected rather than immediately erased.',
                    ],
                ],
            ],

            [
                'question' => 'Under NRB Cyber Resilience Guidelines (2023), what role does the Board of Directors play in institutional cyber resilience management?',
                'options' => [
                    [
                        'answer' => 'Executing manual password resets for banking customers',
                        'is_correct' => false,
                        'explanation' => 'Password resets are operational activities and are not a primary responsibility of the Board of Directors.',
                    ],
                    [
                        'answer' => 'Writing software code for core banking systems',
                        'is_correct' => false,
                        'explanation' => 'Software development is an operational or technical responsibility, not a Board-level governance function.',
                    ],
                    [
                        'answer' => 'Managing daily physical server backups in data centers',
                        'is_correct' => false,
                        'explanation' => 'Daily backup operations are normally handled by technical and operational teams.',
                    ],
                    [
                        'answer' => 'Approving the cyber resilience strategy, defining risk tolerance limits, and overseeing cyber risk governance',
                        'is_correct' => true,
                        'explanation' => 'The Board provides governance and oversight by approving strategy, setting risk tolerance, and ensuring appropriate cyber risk management.',
                    ],
                ],
            ],

            [
                'question' => 'Which core CIA security pillar guarantees that corporate data assets remain accurate, complete, and protected against unauthorized modifications or tampering?',
                'options' => [
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => false,
                        'explanation' => 'Confidentiality protects information from unauthorized disclosure.',
                    ],
                    [
                        'answer' => 'Integrity',
                        'is_correct' => true,
                        'explanation' => 'Integrity ensures information remains accurate, complete, trustworthy, and protected against unauthorized modification.',
                    ],
                    [
                        'answer' => 'Availability',
                        'is_correct' => false,
                        'explanation' => 'Availability ensures authorized users can access systems and information when needed.',
                    ],
                    [
                        'answer' => 'Non-repudiation',
                        'is_correct' => false,
                        'explanation' => 'Non-repudiation provides evidence that a particular party performed an action or created a message and is not one of the three primary CIA pillars.',
                    ],
                ],
            ],

            [
                'question' => 'Under NRB IT Guidelines, what primary operational safeguard must banks implement to protect core banking databases against catastrophic hardware failures or physical site disasters?',
                'options' => [
                    [
                        'answer' => 'Storing database files solely in localized temporary browser caches',
                        'is_correct' => false,
                        'explanation' => 'Browser caches are not an appropriate mechanism for protecting core banking databases against hardware or site disasters.',
                    ],
                    [
                        'answer' => 'Print out core financial ledgers on paper records daily',
                        'is_correct' => false,
                        'explanation' => 'Paper records alone cannot provide reliable operational recovery for modern core banking systems.',
                    ],
                    [
                        'answer' => 'Maintaining continuous data backups, maintaining an offsite Disaster Recovery Center (DRC), and testing failovers periodically',
                        'is_correct' => true,
                        'explanation' => 'Regular backups, an appropriately separated disaster recovery facility, and periodic recovery testing provide resilience against hardware failures and physical disasters.',
                    ],
                    [
                        'answer' => 'Disabling database transactions during business peak hours',
                        'is_correct' => false,
                        'explanation' => 'Disabling transactions during peak hours does not provide a disaster recovery or data protection mechanism.',
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
