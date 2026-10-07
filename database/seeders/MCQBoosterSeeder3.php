<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class MCQBoosterSeeder3 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'MCQ Booster 3',
            'description' => 'Computer Fundamentals, Hardware, CPU Architecture, Memory, Storage, Motherboard and ICT in Nepal MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which category of computers relies on physical variables—such as voltage, pressure, or temperature—to represent data continuously rather than processing discrete binary values?',
                'options' => [
                    [
                        'answer' => 'Digital Computer',
                        'is_correct' => false,
                        'explanation' => 'Digital computers process data using discrete values, primarily binary digits (0 and 1).',
                    ],
                    [
                        'answer' => 'Analog Computer',
                        'is_correct' => true,
                        'explanation' => 'Analog computers represent and process data using continuously varying physical quantities such as voltage, pressure, temperature, or speed.',
                    ],
                    [
                        'answer' => 'Mainframe Computer',
                        'is_correct' => false,
                        'explanation' => 'A mainframe is a high-performance computer designed to process large volumes of data and support many users.',
                    ],
                    [
                        'answer' => 'Microcomputer',
                        'is_correct' => false,
                        'explanation' => 'A microcomputer is a computer based on a microprocessor, such as a desktop or personal computer.',
                    ],
                ],
            ],
            [
                'question' => 'How does an optical disc (such as a CD/DVD) differ fundamentally from a magnetic hard disk drive in terms of data recording and storage mechanism?',
                'options' => [
                    [
                        'answer' => 'Optical discs use magnetic domains on spinning platters; hard disks use lasers.',
                        'is_correct' => false,
                        'explanation' => 'This is reversed. Optical discs use lasers, while magnetic hard disks use magnetic domains on spinning platters.',
                    ],
                    [
                        'answer' => 'Optical discs read/write data using laser beams focused on reflective tracks; magnetic hard disks store data via magnetic polarization on metallic platters.',
                        'is_correct' => true,
                        'explanation' => 'Optical discs use laser technology to read or write data, whereas hard disks store data through magnetic polarization on rotating platters.',
                    ],
                    [
                        'answer' => 'Optical discs provide faster random access speeds than hard disk drives.',
                        'is_correct' => false,
                        'explanation' => 'Traditional optical discs generally have slower access times than magnetic hard disk drives.',
                    ],
                    [
                        'answer' => 'Magnetic hard drives lose all stored data when power is disconnected.',
                        'is_correct' => false,
                        'explanation' => 'Magnetic hard drives are non-volatile storage devices and retain stored data when power is removed.',
                    ],
                ],
            ],
            [
                'question' => 'In Machine Learning, which paradigm uses a reward and punishment system to train an autonomous agent to make optimal sequential decisions within a dynamic environment?',
                'options' => [
                    [
                        'answer' => 'Supervised Learning',
                        'is_correct' => false,
                        'explanation' => 'Supervised learning trains models using labeled input-output examples.',
                    ],
                    [
                        'answer' => 'Unsupervised Learning',
                        'is_correct' => false,
                        'explanation' => 'Unsupervised learning identifies patterns or structures in unlabeled data.',
                    ],
                    [
                        'answer' => 'Reinforcement Learning',
                        'is_correct' => true,
                        'explanation' => 'Reinforcement learning trains an agent through rewards and penalties as it interacts with an environment and learns sequential decision-making.',
                    ],
                    [
                        'answer' => 'Semi-Supervised Learning',
                        'is_correct' => false,
                        'explanation' => 'Semi-supervised learning combines labeled and unlabeled training data.',
                    ],
                ],
            ],
            [
                'question' => 'In a Blockchain ecosystem, what term describes the mathematical consensus mechanism where network validators prove ownership of a specified amount of cryptocurrency to validate transactions and produce new blocks?',
                'options' => [
                    [
                        'answer' => 'Proof of Stake (PoS)',
                        'is_correct' => true,
                        'explanation' => 'Proof of Stake selects validators based partly on the cryptocurrency they have staked, rather than requiring miners to perform computationally intensive work.',
                    ],
                    [
                        'answer' => 'Proof of Work (PoW)',
                        'is_correct' => false,
                        'explanation' => 'Proof of Work requires participants to perform computational work to solve cryptographic puzzles.',
                    ],
                    [
                        'answer' => 'Proof of Authority (PoA)',
                        'is_correct' => false,
                        'explanation' => 'Proof of Authority relies on approved and identifiable validators rather than cryptocurrency staking.',
                    ],
                    [
                        'answer' => 'Byzantine Fault Tolerance (BFT)',
                        'is_correct' => false,
                        'explanation' => 'BFT is a family of consensus approaches designed to tolerate failures or malicious behavior among participating nodes.',
                    ],
                ],
            ],
            [
                'question' => 'What physical security feature prevents unauthorized individuals from opening and modifying critical server chassis enclosures within a banking data center?',
                'options' => [
                    [
                        'answer' => 'Physical Chassis Intrusion Detection Switch / Enclosure Locks',
                        'is_correct' => true,
                        'explanation' => 'Chassis locks restrict physical access, while intrusion detection switches can detect unauthorized opening of server enclosures.',
                    ],
                    [
                        'answer' => 'Fire Suppression Nozzles',
                        'is_correct' => false,
                        'explanation' => 'Fire suppression systems protect equipment from fire rather than preventing unauthorized chassis access.',
                    ],
                    [
                        'answer' => 'Surge Protector Cables',
                        'is_correct' => false,
                        'explanation' => 'Surge protectors protect electrical equipment from voltage spikes and do not restrict physical access.',
                    ],
                    [
                        'answer' => 'Biometric Door Latches',
                        'is_correct' => false,
                        'explanation' => 'Biometric door latches control access to rooms or restricted areas, not specifically the opening of server chassis.',
                    ],
                ],
            ],
            [
                'question' => 'Which Web Design component is primarily responsible for defining the layout, color palette, typography, and visual presentation layer of an HTML page?',
                'options' => [
                    [
                        'answer' => 'JavaScript (JS)',
                        'is_correct' => false,
                        'explanation' => 'JavaScript primarily provides dynamic behavior and interactivity to web pages.',
                    ],
                    [
                        'answer' => 'Document Object Model (DOM)',
                        'is_correct' => false,
                        'explanation' => 'The DOM represents the structure of an HTML document so scripts can access and manipulate its elements.',
                    ],
                    [
                        'answer' => 'Cascading Style Sheets (CSS)',
                        'is_correct' => true,
                        'explanation' => 'CSS controls the visual presentation of HTML documents, including layout, colors, fonts, spacing, and typography.',
                    ],
                    [
                        'answer' => 'Hypertext Transfer Protocol (HTTP)',
                        'is_correct' => false,
                        'explanation' => 'HTTP is a communication protocol used to transfer web resources between clients and servers.',
                    ],
                ],
            ],
            [
                'question' => 'Which register inside the Central Processing Unit (CPU) directly buffers data read from or written to main memory (RAM)?',
                'options' => [
                    [
                        'answer' => 'Memory Address Register (MAR)',
                        'is_correct' => false,
                        'explanation' => 'The MAR stores the address of the memory location being accessed.',
                    ],
                    [
                        'answer' => 'Memory Buffer Register (MBR) / Memory Data Register (MDR)',
                        'is_correct' => true,
                        'explanation' => 'The MBR or MDR temporarily holds data being transferred between the CPU and main memory.',
                    ],
                    [
                        'answer' => 'Program Counter (PC)',
                        'is_correct' => false,
                        'explanation' => 'The Program Counter stores the address of the next instruction to be fetched.',
                    ],
                    [
                        'answer' => 'Instruction Register (IR)',
                        'is_correct' => false,
                        'explanation' => 'The Instruction Register holds the instruction currently being decoded or executed.',
                    ],
                ],
            ],
            [
                'question' => 'What type of cache mapping policy allows any main memory block to be placed into ANY available cache line slot within the cache memory?',
                'options' => [
                    [
                        'answer' => 'Direct Mapping',
                        'is_correct' => false,
                        'explanation' => 'Direct mapping restricts each memory block to one specific cache line.',
                    ],
                    [
                        'answer' => 'Fully Associative Mapping',
                        'is_correct' => true,
                        'explanation' => 'Fully associative mapping allows any main memory block to be stored in any cache line.',
                    ],
                    [
                        'answer' => 'Set-Associative Mapping',
                        'is_correct' => false,
                        'explanation' => 'Set-associative mapping allows a block to be placed in any line within a particular cache set.',
                    ],
                    [
                        'answer' => 'Static Mapping',
                        'is_correct' => false,
                        'explanation' => 'Static mapping is not the standard cache mapping policy described by this behavior.',
                    ],
                ],
            ],
            [
                'question' => "What term defines the total time required for a Hard Disk drive's read/write head to position itself over the target track?",
                'options' => [
                    [
                        'answer' => 'Latency Time',
                        'is_correct' => false,
                        'explanation' => 'Rotational latency is the time waiting for the required sector to rotate under the read/write head.',
                    ],
                    [
                        'answer' => 'Access Time',
                        'is_correct' => false,
                        'explanation' => 'Access time is a broader measure that can include seek time and rotational latency.',
                    ],
                    [
                        'answer' => 'Transfer Time',
                        'is_correct' => false,
                        'explanation' => 'Transfer time is the time required to actually transfer data after the required location is reached.',
                    ],
                    [
                        'answer' => 'Seek Time',
                        'is_correct' => true,
                        'explanation' => 'Seek time is the time required for the hard disk read/write head to move to the desired track.',
                    ],
                ],
            ],
            [
                'question' => 'In computer architecture, what line protocol feature prevents a fast sender device from overflowing the input buffer of a slower receiver device during data transmission?',
                'options' => [
                    [
                        'answer' => 'Flow Control',
                        'is_correct' => true,
                        'explanation' => 'Flow control regulates the transmission rate so a fast sender does not overwhelm a slower receiver.',
                    ],
                    [
                        'answer' => 'Error Control',
                        'is_correct' => false,
                        'explanation' => 'Error control detects and handles transmission errors rather than controlling transmission speed.',
                    ],
                    [
                        'answer' => 'Frame Alignment',
                        'is_correct' => false,
                        'explanation' => 'Frame alignment helps identify boundaries of transmitted frames.',
                    ],
                    [
                        'answer' => 'Access Control',
                        'is_correct' => false,
                        'explanation' => 'Access control determines who or what is permitted to access a resource.',
                    ],
                ],
            ],
            [
                'question' => 'What occurs during a CPU Interrupt Service Routine (ISR) execution cycle?',
                'options' => [
                    [
                        'answer' => 'The CPU pauses current program execution, saves execution context, executes the ISR code for the interrupting device, and restores execution context.',
                        'is_correct' => true,
                        'explanation' => 'When an interrupt occurs, the CPU preserves the current execution context, executes the appropriate ISR, and then restores the previous context to continue execution.',
                    ],
                    [
                        'answer' => 'The CPU powers down to conserve system energy.',
                        'is_correct' => false,
                        'explanation' => 'An interrupt does not normally power down the CPU.',
                    ],
                    [
                        'answer' => 'The system performs a hard reboot of operating system drivers.',
                        'is_correct' => false,
                        'explanation' => 'An ISR handles an interrupt and does not normally reboot the operating system.',
                    ],
                    [
                        'answer' => 'All cache lines are permanently cleared.',
                        'is_correct' => false,
                        'explanation' => 'Interrupt processing does not permanently clear all CPU cache lines.',
                    ],
                ],
            ],
            [
                'question' => 'How does a DMA controller interact with the system bus during data transfers using the "Cycle Stealing" technique?',
                'options' => [
                    [
                        'answer' => 'The DMA controller locks the system bus exclusively for hours until all files are moved.',
                        'is_correct' => false,
                        'explanation' => 'Cycle stealing temporarily takes individual bus cycles rather than monopolizing the bus for an extended period.',
                    ],
                    [
                        'answer' => 'The DMA controller steals individual bus cycles from the CPU when the bus is idle or between instruction fetches to transfer one byte/word at a time.',
                        'is_correct' => true,
                        'explanation' => 'In cycle stealing, the DMA controller temporarily takes control of individual bus cycles to transfer data while allowing the CPU to continue operating between those cycles.',
                    ],
                    [
                        'answer' => 'The DMA controller disables CPU interrupts permanently.',
                        'is_correct' => false,
                        'explanation' => 'DMA cycle stealing does not require permanently disabling CPU interrupts.',
                    ],
                    [
                        'answer' => 'The CPU stops execution completely until a cold reboot occurs.',
                        'is_correct' => false,
                        'explanation' => 'The CPU may be temporarily delayed for individual bus cycles but does not stop until reboot.',
                    ],
                ],
            ],
            [
                'question' => 'At which layer of the OSI model does a Network Hub operate?',
                'options' => [
                    [
                        'answer' => 'Physical Layer (Layer 1)',
                        'is_correct' => true,
                        'explanation' => 'A hub operates at Layer 1 and simply regenerates and broadcasts electrical or optical signals without examining frames.',
                    ],
                    [
                        'answer' => 'Data Link Layer (Layer 2)',
                        'is_correct' => false,
                        'explanation' => 'Layer-2 devices such as switches examine MAC addresses and frames.',
                    ],
                    [
                        'answer' => 'Network Layer (Layer 3)',
                        'is_correct' => false,
                        'explanation' => 'Routers primarily operate at the Network Layer and use IP addressing for forwarding.',
                    ],
                    [
                        'answer' => 'Application Layer (Layer 7)',
                        'is_correct' => false,
                        'explanation' => 'Application-layer protocols provide network services directly to applications.',
                    ],
                ],
            ],
            [
                'question' => 'Which error detection method sums up all data words in a frame and appends the calculated arithmetic complement to the transmitted payload?',
                'options' => [
                    [
                        'answer' => 'Parity Check',
                        'is_correct' => false,
                        'explanation' => 'Parity adds a parity bit or bits to detect certain bit errors.',
                    ],
                    [
                        'answer' => 'Hamming Code',
                        'is_correct' => false,
                        'explanation' => 'Hamming codes add redundant bits to detect and correct certain errors.',
                    ],
                    [
                        'answer' => 'CRC-32',
                        'is_correct' => false,
                        'explanation' => 'CRC uses polynomial division rather than arithmetic summation and complementation.',
                    ],
                    [
                        'answer' => 'Checksum',
                        'is_correct' => true,
                        'explanation' => 'A checksum is commonly calculated by summing data words and transmitting a complement or derived checksum value for error detection.',
                    ],
                ],
            ],
            [
                'question' => 'In public IP addressing, what is the default network class for an IP address whose first octet falls between 192 and 223 (e.g., 192.168.1.1)?',
                'options' => [
                    [
                        'answer' => 'Class A',
                        'is_correct' => false,
                        'explanation' => 'Class A addresses traditionally have first octets from 1 through 126.',
                    ],
                    [
                        'answer' => 'Class B',
                        'is_correct' => false,
                        'explanation' => 'Class B addresses traditionally have first octets from 128 through 191.',
                    ],
                    [
                        'answer' => 'Class C',
                        'is_correct' => true,
                        'explanation' => 'Class C addresses traditionally use first octets from 192 through 223.',
                    ],
                    [
                        'answer' => 'Class D',
                        'is_correct' => false,
                        'explanation' => 'Class D addresses, used for multicast, traditionally range from 224 through 239.',
                    ],
                ],
            ],
            [
                'question' => 'What network application protocol translates IP network host addresses into physical MAC hardware addresses within a local area network (LAN)?',
                'options' => [
                    [
                        'answer' => 'Domain Name System (DNS)',
                        'is_correct' => false,
                        'explanation' => 'DNS translates domain names into IP addresses and other DNS records.',
                    ],
                    [
                        'answer' => 'Address Resolution Protocol (ARP)',
                        'is_correct' => true,
                        'explanation' => 'ARP resolves an IPv4 address to the corresponding MAC address on a local network.',
                    ],
                    [
                        'answer' => 'Dynamic Host Configuration Protocol (DHCP)',
                        'is_correct' => false,
                        'explanation' => 'DHCP dynamically provides network configuration such as IP addresses to clients.',
                    ],
                    [
                        'answer' => 'Reverse ARP (RARP)',
                        'is_correct' => false,
                        'explanation' => 'RARP historically mapped MAC addresses to IP addresses and has largely been replaced by DHCP.',
                    ],
                ],
            ],
            [
                'question' => 'Which protocol is primarily used for securely transferring files between a local client and a remote server over an encrypted SSH connection?',
                'options' => [
                    [
                        'answer' => 'FTP (File Transfer Protocol)',
                        'is_correct' => false,
                        'explanation' => 'Traditional FTP does not inherently encrypt its control and data channels.',
                    ],
                    [
                        'answer' => 'HTTP (Hyper Text Transfer Protocol)',
                        'is_correct' => false,
                        'explanation' => 'HTTP is primarily used for transferring web resources rather than secure SSH-based file transfers.',
                    ],
                    [
                        'answer' => 'TSTP',
                        'is_correct' => false,
                        'explanation' => 'TSTP is not the standard protocol used for secure file transfer over SSH.',
                    ],
                    [
                        'answer' => 'SFTP (Secure File Transfer Protocol)',
                        'is_correct' => true,
                        'explanation' => 'SFTP provides secure file transfer over an SSH connection.',
                    ],
                ],
            ],
            [
                'question' => 'What type of cryptographic attack involves systematically testing every possible password or key combination until the correct secret is discovered?',
                'options' => [
                    [
                        'answer' => 'Phishing Attack',
                        'is_correct' => false,
                        'explanation' => 'Phishing uses deceptive messages or websites to trick victims into revealing sensitive information.',
                    ],
                    [
                        'answer' => 'Brute-Force Attack',
                        'is_correct' => true,
                        'explanation' => 'A brute-force attack systematically tries possible passwords or cryptographic keys until the correct one is found.',
                    ],
                    [
                        'answer' => 'Replay Attack',
                        'is_correct' => false,
                        'explanation' => 'A replay attack captures valid communication and retransmits it to deceive a system.',
                    ],
                    [
                        'answer' => 'Cross-Site Scripting',
                        'is_correct' => false,
                        'explanation' => 'XSS injects malicious scripts into web content viewed by other users.',
                    ],
                ],
            ],
            [
                'question' => 'Which asymmetric encryption algorithm relies on the mathematical difficulty of factoring very large prime numbers into their original prime factors?',
                'options' => [
                    [
                        'answer' => 'Rivest-Shamir-Adleman (RSA)',
                        'is_correct' => true,
                        'explanation' => 'RSA security is based on the computational difficulty of factoring large composite numbers derived from large primes.',
                    ],
                    [
                        'answer' => 'Advanced Encryption Standard (AES)',
                        'is_correct' => false,
                        'explanation' => 'AES is a symmetric-key encryption algorithm.',
                    ],
                    [
                        'answer' => 'Elliptic Curve Cryptography (ECC)',
                        'is_correct' => false,
                        'explanation' => 'ECC relies on the difficulty of the elliptic curve discrete logarithm problem rather than integer factorization.',
                    ],
                    [
                        'answer' => 'Data Encryption Standard (DES)',
                        'is_correct' => false,
                        'explanation' => 'DES is a symmetric-key encryption algorithm.',
                    ],
                ],
            ],
            [
                'question' => 'What is the main structural advantage of using Asymmetric Encryption over Symmetric Encryption in open networks?',
                'options' => [
                    [
                        'answer' => 'Asymmetric encryption operates significantly faster than symmetric encryption.',
                        'is_correct' => false,
                        'explanation' => 'Asymmetric cryptographic operations are generally slower than symmetric encryption.',
                    ],
                    [
                        'answer' => 'Asymmetric encryption solves the secure key distribution problem because the public key can be freely shared without compromising the private key.',
                        'is_correct' => true,
                        'explanation' => 'Public-key cryptography allows the public key to be distributed openly while the private key remains secret, reducing the key-distribution problem.',
                    ],
                    [
                        'answer' => 'Asymmetric algorithms produce shorter ciphertext lengths than symmetric algorithms.',
                        'is_correct' => false,
                        'explanation' => 'Ciphertext size depends on the specific algorithm and mode; shorter ciphertext is not the fundamental advantage.',
                    ],
                    [
                        'answer' => 'Asymmetric encryption does not require mathematical operations.',
                        'is_correct' => false,
                        'explanation' => 'Asymmetric cryptography relies heavily on mathematical operations and computational problems.',
                    ],
                ],
            ],
            [
                'question' => 'Which wireless network standard uses Near Field Communication (NFC) technology for contactless point-of-sale mobile payments over distances under 10 centimeters?',
                'options' => [
                    [
                        'answer' => 'IEEE 802.11ax',
                        'is_correct' => false,
                        'explanation' => 'IEEE 802.11ax is a Wi-Fi standard, commonly known as Wi-Fi 6.',
                    ],
                    [
                        'answer' => 'ISO/IEC 14443 / NFC Standards',
                        'is_correct' => true,
                        'explanation' => 'NFC contactless communication is based on standards including ISO/IEC 14443 and related NFC specifications and is designed for very short-range communication.',
                    ],
                    [
                        'answer' => 'IEEE 802.15.1',
                        'is_correct' => false,
                        'explanation' => 'IEEE 802.15.1 is associated with Bluetooth technology.',
                    ],
                    [
                        'answer' => 'IEEE 802.16',
                        'is_correct' => false,
                        'explanation' => 'IEEE 802.16 is associated with WiMAX broadband wireless networking.',
                    ],
                ],
            ],
            [
                'question' => 'Which component in a Digital Certificate binds a public key to an individual identity or institution using an authentic digital signature?',
                'options' => [
                    [
                        'answer' => 'Domain Name Registrar (DNR)',
                        'is_correct' => false,
                        'explanation' => 'A domain registrar manages domain registrations and does not issue X.509 certificates as the certificate authority does.',
                    ],
                    [
                        'answer' => 'Certificate Authority (CA)',
                        'is_correct' => true,
                        'explanation' => 'A Certificate Authority issues and digitally signs certificates that bind public keys to verified identities.',
                    ],
                    [
                        'answer' => 'Internet Service Provider (ISP)',
                        'is_correct' => false,
                        'explanation' => 'An ISP provides Internet connectivity and is not inherently responsible for issuing digital certificates.',
                    ],
                    [
                        'answer' => 'Network Interface Controller (NIC)',
                        'is_correct' => false,
                        'explanation' => 'A NIC provides network connectivity and has no role in issuing digital certificates.',
                    ],
                ],
            ],
            [
                'question' => 'In computer networking, what parameter defines the total maximum data-carrying capability of a communication channel measured in bits per second (bps)?',
                'options' => [
                    [
                        'answer' => 'Latency',
                        'is_correct' => false,
                        'explanation' => 'Latency measures the delay involved in transmitting data.',
                    ],
                    [
                        'answer' => 'Jitter',
                        'is_correct' => false,
                        'explanation' => 'Jitter measures variation in packet delay over time.',
                    ],
                    [
                        'answer' => 'Bandwidth',
                        'is_correct' => true,
                        'explanation' => 'Bandwidth represents the maximum data-carrying capacity of a communication channel, commonly expressed in bits per second.',
                    ],
                    [
                        'answer' => 'Throughput',
                        'is_correct' => false,
                        'explanation' => 'Throughput is the actual rate of successful data transfer achieved by a network.',
                    ],
                ],
            ],
            [
                'question' => 'What switching mechanism establishes a dedicated, continuous physical communication pathway between sender and receiver before transmitting data (such as legacy landline phone calls)?',
                'options' => [
                    [
                        'answer' => 'Packet Switching',
                        'is_correct' => false,
                        'explanation' => 'Packet switching divides data into packets and does not require a dedicated physical path for the entire communication.',
                    ],
                    [
                        'answer' => 'Circuit Switching',
                        'is_correct' => true,
                        'explanation' => 'Circuit switching establishes a dedicated communication path before data transmission begins.',
                    ],
                    [
                        'answer' => 'Message Switching',
                        'is_correct' => false,
                        'explanation' => 'Message switching stores and forwards complete messages through intermediate nodes.',
                    ],
                    [
                        'answer' => 'Store-and-Forward Switching',
                        'is_correct' => false,
                        'explanation' => 'Store-and-forward techniques temporarily store data at intermediate nodes rather than establishing a dedicated physical circuit.',
                    ],
                ],
            ],
            [
                'question' => 'Which error correction code adds parity bits into dynamic data locations to automatically fix multi-bit burst errors common in satellite signals?',
                'options' => [
                    [
                        'answer' => 'Simple Vertical Parity',
                        'is_correct' => false,
                        'explanation' => 'Simple parity provides limited error detection and cannot generally correct multi-bit burst errors.',
                    ],
                    [
                        'answer' => 'Checksum',
                        'is_correct' => false,
                        'explanation' => 'Checksums are primarily used for error detection rather than correcting multi-bit burst errors.',
                    ],
                    [
                        'answer' => 'Longitudinal Redundancy Check',
                        'is_correct' => false,
                        'explanation' => 'LRC can detect certain errors but is not the standard correction technique described here.',
                    ],
                    [
                        'answer' => 'Reed-Solomon Code',
                        'is_correct' => true,
                        'explanation' => 'Reed-Solomon codes are powerful error-correcting codes commonly used to detect and correct burst errors in communication and storage systems.',
                    ],
                ],
            ],
            [
                'question' => 'What component of an Operating System provides a user interface that interprets human-entered command lines and executes corresponding kernel commands?',
                'options' => [
                    [
                        'answer' => 'Process Control Block',
                        'is_correct' => false,
                        'explanation' => 'A PCB stores information about a process, such as its state, registers, and scheduling information.',
                    ],
                    [
                        'answer' => 'Command Shell / Interpreter',
                        'is_correct' => true,
                        'explanation' => 'A command shell interprets user-entered commands and invokes the appropriate operating system services or programs.',
                    ],
                    [
                        'answer' => 'Interrupt Handler',
                        'is_correct' => false,
                        'explanation' => 'An interrupt handler processes hardware or software interrupts.',
                    ],
                    [
                        'answer' => 'Device Controller',
                        'is_correct' => false,
                        'explanation' => 'A device controller manages communication between the operating system and a hardware device.',
                    ],
                ],
            ],
            [
                'question' => 'In operating system process scheduling, what condition is known as "Starvation"?',
                'options' => [
                    [
                        'answer' => 'A process crashes due to illegal memory access.',
                        'is_correct' => false,
                        'explanation' => 'An illegal memory access can cause a process failure but is not called starvation.',
                    ],
                    [
                        'answer' => 'A low-priority process is indefinitely delayed from receiving CPU time because higher-priority processes continuously enter the ready queue.',
                        'is_correct' => true,
                        'explanation' => 'Starvation occurs when a process waits indefinitely for CPU or other resources because competing processes are continually favored.',
                    ],
                    [
                        'answer' => 'The CPU execution pipeline freezes during deadlock state.',
                        'is_correct' => false,
                        'explanation' => 'Deadlock and starvation are different conditions, although both can involve indefinite waiting.',
                    ],
                    [
                        'answer' => 'Memory space becomes fully fragmented.',
                        'is_correct' => false,
                        'explanation' => 'Memory fragmentation is a memory-management issue and is unrelated to CPU scheduling starvation.',
                    ],
                ],
            ],
            [
                'question' => 'What scheduling technique resolves the problem of process Starvation in priority-based CPU scheduling algorithms?',
                'options' => [
                    [
                        'answer' => 'Aging',
                        'is_correct' => true,
                        'explanation' => 'Aging gradually increases the priority of waiting processes so that they eventually receive CPU time.',
                    ],
                    [
                        'answer' => 'Compaction',
                        'is_correct' => false,
                        'explanation' => 'Compaction reduces external memory fragmentation and does not solve scheduling starvation.',
                    ],
                    [
                        'answer' => 'Paging',
                        'is_correct' => false,
                        'explanation' => 'Paging is a virtual memory management technique.',
                    ],
                    [
                        'answer' => 'Round Robin Slicing',
                        'is_correct' => false,
                        'explanation' => 'Round Robin can improve fairness, but aging is the standard technique for preventing starvation in priority scheduling.',
                    ],
                ],
            ],
            [
                'question' => 'In MS-DOS operating systems, which file acts as the primary command interpreter that loads user interface prompts?',
                'options' => [
                    [
                        'answer' => 'IO.SYS',
                        'is_correct' => false,
                        'explanation' => 'IO.SYS provides low-level input/output system functions and boot-related functionality.',
                    ],
                    [
                        'answer' => 'MSDOS.SYS',
                        'is_correct' => false,
                        'explanation' => 'MSDOS.SYS contains core DOS operating system functionality rather than serving as the primary command interpreter.',
                    ],
                    [
                        'answer' => 'COMMAND.COM',
                        'is_correct' => true,
                        'explanation' => 'COMMAND.COM is the MS-DOS command interpreter responsible for processing commands and providing the command prompt.',
                    ],
                    [
                        'answer' => 'AUTOEXEC.BAT',
                        'is_correct' => false,
                        'explanation' => 'AUTOEXEC.BAT is a batch file executed during startup to run configured commands.',
                    ],
                ],
            ],
            [
                'question' => 'What MS-DOS command displays the current operating system version string?',
                'options' => [
                    [
                        'answer' => 'DIR',
                        'is_correct' => false,
                        'explanation' => 'DIR displays the contents of a directory.',
                    ],
                    [
                        'answer' => 'VOL',
                        'is_correct' => false,
                        'explanation' => 'VOL displays the volume label and serial number of a disk.',
                    ],
                    [
                        'answer' => 'VER',
                        'is_correct' => true,
                        'explanation' => 'The VER command displays the MS-DOS or Windows command-line environment version.',
                    ],
                    [
                        'answer' => 'CLS',
                        'is_correct' => false,
                        'explanation' => 'CLS clears the contents of the command prompt screen.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is considered an active entity?',
                'options' => [
                    [
                        'answer' => 'File',
                        'is_correct' => false,
                        'explanation' => 'A file is generally considered a passive collection of data stored on a storage device.',
                    ],
                    [
                        'answer' => 'Program',
                        'is_correct' => false,
                        'explanation' => 'A program stored on disk is passive until it is executed.',
                    ],
                    [
                        'answer' => 'Source Code',
                        'is_correct' => false,
                        'explanation' => 'Source code is a passive representation of instructions until compiled or interpreted and executed.',
                    ],
                    [
                        'answer' => 'Process',
                        'is_correct' => true,
                        'explanation' => 'A process is a program in execution and is therefore considered an active entity in an operating system.',
                    ],
                ],
            ],
            [
                'question' => "In Relational Database Management Systems (RDBMS), what property guarantees that multiple concurrent transactions execute without interfering with one another's intermediate states?",
                'options' => [
                    [
                        'answer' => 'Atomicity',
                        'is_correct' => false,
                        'explanation' => 'Atomicity ensures a transaction is completed entirely or not at all.',
                    ],
                    [
                        'answer' => 'Consistency',
                        'is_correct' => false,
                        'explanation' => 'Consistency ensures that transactions preserve defined database integrity rules.',
                    ],
                    [
                        'answer' => 'Isolation',
                        'is_correct' => true,
                        'explanation' => 'Isolation ensures that concurrent transactions do not improperly expose or interfere with each other’s intermediate states.',
                    ],
                    [
                        'answer' => 'Durability',
                        'is_correct' => false,
                        'explanation' => 'Durability ensures committed transaction results survive failures.',
                    ],
                ],
            ],
            [
                'question' => 'What type of SQL command set includes statements like CREATE, ALTER, DROP, and TRUNCATE to modify relational database schema structures?',
                'options' => [
                    [
                        'answer' => 'Data Definition Language (DDL)',
                        'is_correct' => true,
                        'explanation' => 'DDL contains commands such as CREATE, ALTER, DROP, and TRUNCATE that define or modify database objects and structures.',
                    ],
                    [
                        'answer' => 'Data Manipulation Language (DML)',
                        'is_correct' => false,
                        'explanation' => 'DML is used primarily to retrieve and manipulate data using commands such as SELECT, INSERT, UPDATE, and DELETE.',
                    ],
                    [
                        'answer' => 'Data Control Language (DCL)',
                        'is_correct' => false,
                        'explanation' => 'DCL manages permissions using commands such as GRANT and REVOKE.',
                    ],
                    [
                        'answer' => 'Transaction Control Language (TCL)',
                        'is_correct' => false,
                        'explanation' => 'TCL manages transactions using commands such as COMMIT, ROLLBACK, and SAVEPOINT.',
                    ],
                ],
            ],
            [
                'question' => 'In Relational Database Normalization, a table is in Second Normal Form (2NF) if it is in 1NF and contains NO:',
                'options' => [
                    [
                        'answer' => 'Transitive dependencies',
                        'is_correct' => false,
                        'explanation' => 'Eliminating transitive dependencies is the main requirement associated with Third Normal Form (3NF).',
                    ],
                    [
                        'answer' => 'Partial functional dependencies on a composite primary key',
                        'is_correct' => true,
                        'explanation' => 'A relation in 2NF must be in 1NF and every non-key attribute must be fully functionally dependent on the entire primary key, eliminating partial dependencies.',
                    ],
                    [
                        'answer' => 'Multi-valued dependencies',
                        'is_correct' => false,
                        'explanation' => 'Multivalued dependencies are addressed by Fourth Normal Form (4NF).',
                    ],
                    [
                        'answer' => 'Repeating groups',
                        'is_correct' => false,
                        'explanation' => 'Eliminating repeating groups and ensuring atomic values is a requirement of 1NF.',
                    ],
                ],
            ],
            [
                'question' => 'What primary functional transformation occurs during the "Transformation" step of an ETL pipeline in Data Warehousing?',
                'options' => [
                    [
                        'answer' => 'Raw data is read directly from source operational databases.',
                        'is_correct' => false,
                        'explanation' => 'Reading data from source systems is primarily the Extract step.',
                    ],
                    [
                        'answer' => 'Data is cleansed, standardized, validated, aggregated, and converted into target warehouse schema structures.',
                        'is_correct' => true,
                        'explanation' => 'Transformation cleans, validates, standardizes, aggregates, and restructures extracted data so it conforms to the target warehouse requirements.',
                    ],
                    [
                        'answer' => 'Data is written to optical backup tapes.',
                        'is_correct' => false,
                        'explanation' => 'Writing data to backup media is a storage or backup operation rather than the core ETL transformation step.',
                    ],
                    [
                        'answer' => 'Web pages are converted into PDF reports.',
                        'is_correct' => false,
                        'explanation' => 'Converting web pages to PDF is unrelated to the normal Transformation step of a data warehouse ETL pipeline.',
                    ],
                ],
            ],
            [
                'question' => 'Which structural HTML tag is used to create hyperlinked anchors that navigate users to another web document or external URL?',
                'options' => [
                    [
                        'answer' => '<link>',
                        'is_correct' => false,
                        'explanation' => 'The link element is primarily used to define relationships between the current document and external resources such as stylesheets.',
                    ],
                    [
                        'answer' => '<href>',
                        'is_correct' => false,
                        'explanation' => 'href is an attribute, not an HTML element.',
                    ],
                    [
                        'answer' => '<a>',
                        'is_correct' => true,
                        'explanation' => 'The anchor element <a> creates hyperlinks, with the href attribute specifying the destination URL.',
                    ],
                    [
                        'answer' => '<nav>',
                        'is_correct' => false,
                        'explanation' => 'The nav element identifies a section containing navigation links but does not itself create hyperlinks.',
                    ],
                ],
            ],
            [
                'question' => 'Which client-side scripting language is supported natively across modern web browsers to add dynamic functionality and interact with the DOM?',
                'options' => [
                    [
                        'answer' => 'Python',
                        'is_correct' => false,
                        'explanation' => 'Python is not natively executed in standard browsers as the primary client-side scripting language.',
                    ],
                    [
                        'answer' => 'JavaScript',
                        'is_correct' => true,
                        'explanation' => 'JavaScript is natively supported by modern web browsers and can manipulate the DOM to create dynamic web experiences.',
                    ],
                    [
                        'answer' => 'PHP',
                        'is_correct' => false,
                        'explanation' => 'PHP is primarily a server-side scripting language.',
                    ],
                    [
                        'answer' => 'Java',
                        'is_correct' => false,
                        'explanation' => 'Java applets are obsolete and modern browsers do not natively execute Java applets.',
                    ],
                ],
            ],
            [
                'question' => 'In Disaster Recovery terminology, what operational setup describes a recovery location equipped with basic physical space, utility power, and cooling, but lacking pre-installed server hardware or pre-configured IT equipment?',
                'options' => [
                    [
                        'answer' => 'Hot Site',
                        'is_correct' => false,
                        'explanation' => 'A hot site has operational hardware, software, connectivity, and often synchronized data ready for rapid failover.',
                    ],
                    [
                        'answer' => 'Warm Site',
                        'is_correct' => false,
                        'explanation' => 'A warm site has some infrastructure and equipment available but generally requires additional configuration before full operation.',
                    ],
                    [
                        'answer' => 'Cold Site',
                        'is_correct' => true,
                        'explanation' => 'A cold site provides basic facilities such as space, power, and cooling but generally lacks pre-installed IT hardware and configuration.',
                    ],
                    [
                        'answer' => 'Cloud Mirror Site',
                        'is_correct' => false,
                        'explanation' => 'A cloud mirror site implies a replicated cloud-based recovery environment rather than an empty facility with only basic infrastructure.',
                    ],
                ],
            ],
            [
                'question' => 'How does a Differential Backup strategy function during daily backup executions?',
                'options' => [
                    [
                        'answer' => 'It backs up only files modified since the LAST FULL BACKUP, without clearing file archive flags.',
                        'is_correct' => true,
                        'explanation' => 'A differential backup copies all changes made since the most recent full backup. Each differential backup grows until another full backup is performed.',
                    ],
                    [
                        'answer' => 'It backs up all selected files every single day, clearing archive flags.',
                        'is_correct' => false,
                        'explanation' => 'Backing up all selected files every day describes a full backup strategy.',
                    ],
                    [
                        'answer' => 'It backs up files altered since the previous incremental backup.',
                        'is_correct' => false,
                        'explanation' => 'This describes incremental backup behavior rather than differential backup.',
                    ],
                    [
                        'answer' => 'It duplicates running operational memory onto virtual disks.',
                        'is_correct' => false,
                        'explanation' => 'Differential backup is a file/data backup strategy and does not duplicate running memory in this manner.',
                    ],
                ],
            ],
            [
                'question' => 'What is the main component of the CIA Triad that is directly impacted during a Distributed Denial of Service (DDoS) attack?',
                'options' => [
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => false,
                        'explanation' => 'Confidentiality protects information from unauthorized disclosure.',
                    ],
                    [
                        'answer' => 'Integrity',
                        'is_correct' => false,
                        'explanation' => 'Integrity protects information from unauthorized alteration.',
                    ],
                    [
                        'answer' => 'Availability',
                        'is_correct' => true,
                        'explanation' => 'DDoS attacks overwhelm services or networks, preventing legitimate users from accessing them and therefore directly impacting availability.',
                    ],
                    [
                        'answer' => 'Non-Repudiation',
                        'is_correct' => false,
                        'explanation' => 'Non-repudiation provides evidence that a party performed a particular action or sent a particular message.',
                    ],
                ],
            ],
            [
                'question' => 'What malware classification describes an apparently useful program that conceals malicious functionality designed to compromise target systems upon execution?',
                'options' => [
                    [
                        'answer' => 'Computer Worm',
                        'is_correct' => false,
                        'explanation' => 'A worm is malware that can self-replicate and spread across networks without requiring a host program.',
                    ],
                    [
                        'answer' => 'Trojan Horse',
                        'is_correct' => true,
                        'explanation' => 'A Trojan disguises itself as legitimate or useful software while carrying malicious functionality that executes when the program is run.',
                    ],
                    [
                        'answer' => 'Spyware',
                        'is_correct' => false,
                        'explanation' => 'Spyware is designed primarily to secretly monitor or collect information about users or systems.',
                    ],
                    [
                        'answer' => 'Adware',
                        'is_correct' => false,
                        'explanation' => 'Adware primarily displays unwanted advertisements, although some forms can have additional malicious behavior.',
                    ],
                ],
            ],
            [
                'question' => 'What type of cyber attack sends crafted malicious input into interactive form fields to trick a database parser into executing unauthorized database operations?',
                'options' => [
                    [
                        'answer' => 'Cross-Site Scripting (XSS)',
                        'is_correct' => false,
                        'explanation' => 'XSS injects malicious scripts into web pages so they execute in users’ browsers.',
                    ],
                    [
                        'answer' => 'Cross-Site Request Forgery (CSRF)',
                        'is_correct' => false,
                        'explanation' => 'CSRF tricks an authenticated user’s browser into performing an unintended action on a web application.',
                    ],
                    [
                        'answer' => 'Buffer Overflow',
                        'is_correct' => false,
                        'explanation' => 'A buffer overflow occurs when data exceeds the bounds of allocated memory and can potentially alter program execution.',
                    ],
                    [
                        'answer' => 'SQL Injection (SQLi)',
                        'is_correct' => true,
                        'explanation' => 'SQL injection inserts malicious SQL syntax into application inputs to manipulate database queries or execute unauthorized database operations.',
                    ],
                ],
            ],
            [
                'question' => 'What security control mechanism ensures that a system user cannot access resources beyond those explicitly authorized for their operational role?',
                'options' => [
                    [
                        'answer' => 'Identification',
                        'is_correct' => false,
                        'explanation' => 'Identification is the process by which a user claims an identity, such as entering a username.',
                    ],
                    [
                        'answer' => 'Authentication',
                        'is_correct' => false,
                        'explanation' => 'Authentication verifies that a claimed identity is genuine.',
                    ],
                    [
                        'answer' => 'Role-Based Access Control (RBAC)',
                        'is_correct' => true,
                        'explanation' => 'RBAC restricts access according to predefined roles and their associated permissions, ensuring users receive only authorized access.',
                    ],
                    [
                        'answer' => 'Non-repudiation',
                        'is_correct' => false,
                        'explanation' => 'Non-repudiation prevents parties from credibly denying actions such as sending a digitally signed transaction.',
                    ],
                ],
            ],
            [
                'question' => 'What key organizational target was established under the ICT Policy of Nepal, 2072 regarding e-Governance initiatives across public institutions?',
                'options' => [
                    [
                        'answer' => 'Complete abolition of paper files in private banks',
                        'is_correct' => false,
                        'explanation' => 'The ICT Policy focuses on broader ICT development and e-Governance rather than abolishing paper files specifically in private banks.',
                    ],
                    [
                        'answer' => 'Integration of public service delivery into digital e-Governance systems',
                        'is_correct' => true,
                        'explanation' => 'The policy promotes the use of ICT to improve public service delivery and develop effective digital e-Governance systems.',
                    ],
                    [
                        'answer' => 'Requirement for all citizens to own smartphones',
                        'is_correct' => false,
                        'explanation' => 'The policy does not require every citizen to own a smartphone.',
                    ],
                    [
                        'answer' => 'Conversion of national currency exclusively into digital tokens',
                        'is_correct' => false,
                        'explanation' => 'The ICT Policy does not establish a requirement to replace Nepalese currency with digital tokens.',
                    ],
                ],
            ],
            [
                'question' => 'According to the NRB IT Guidelines, what security mechanism must be enforced for authenticating administrative access to critical banking infrastructure components?',
                'options' => [
                    [
                        'answer' => 'Single-factor password verification',
                        'is_correct' => false,
                        'explanation' => 'Single-factor authentication provides weaker protection for highly privileged administrative access.',
                    ],
                    [
                        'answer' => 'Multi-Factor Authentication (MFA)',
                        'is_correct' => true,
                        'explanation' => 'MFA requires multiple authentication factors and provides stronger protection for privileged access to critical banking infrastructure.',
                    ],
                    [
                        'answer' => 'Open Anonymous Access',
                        'is_correct' => false,
                        'explanation' => 'Anonymous access is inappropriate for critical administrative banking infrastructure.',
                    ],
                    [
                        'answer' => 'Static IP Whitelisting only',
                        'is_correct' => false,
                        'explanation' => 'IP whitelisting can restrict network locations but is not a substitute for strong user authentication such as MFA.',
                    ],
                ],
            ],
            [
                'question' => 'Under NRB IT Directives, what minimum requirement is mandated for data backups of financial records stored in secondary storage locations?',
                'options' => [
                    [
                        'answer' => 'Storing unencrypted copies on local server desks',
                        'is_correct' => false,
                        'explanation' => 'Unsecured local copies create significant security and availability risks.',
                    ],
                    [
                        'answer' => 'Encrypting backup media and maintaining off-site secondary storage',
                        'is_correct' => true,
                        'explanation' => 'Sensitive backup data should be protected through encryption and maintained in an appropriately separated secondary or off-site location to support security and disaster recovery.',
                    ],
                    [
                        'answer' => 'Deleting backups every 30 days to free storage space',
                        'is_correct' => false,
                        'explanation' => 'Deleting backups without an appropriate retention policy can prevent recovery from historical incidents.',
                    ],
                    [
                        'answer' => 'Storing backups on personal flash drives',
                        'is_correct' => false,
                        'explanation' => 'Personal flash drives are not an appropriate controlled backup medium for critical banking records.',
                    ],
                ],
            ],
            [
                'question' => 'Under the Cyber Resilience Guidelines (2023) issued by NRB, what framework requirement mandates banks to establish an operational Security Operations Center (SOC)?',
                'options' => [
                    [
                        'answer' => 'Mandatory continuous 24/7 monitoring and response capability for cyber threats',
                        'is_correct' => true,
                        'explanation' => 'A Security Operations Center provides continuous monitoring, detection, analysis, and response capabilities for cybersecurity events and threats.',
                    ],
                    [
                        'answer' => 'Optional deployment based on annual profitability',
                        'is_correct' => false,
                        'explanation' => 'Cybersecurity monitoring requirements are not simply optional based on annual profitability.',
                    ],
                    [
                        'answer' => 'Requirement applicable only during active cyber attacks',
                        'is_correct' => false,
                        'explanation' => 'Security monitoring should operate continuously rather than only after an attack begins.',
                    ],
                    [
                        'answer' => 'Outsourcing all operations to unverified international entities',
                        'is_correct' => false,
                        'explanation' => 'Cybersecurity operations require appropriate governance and controls; unverified outsourcing is not a valid requirement.',
                    ],
                ],
            ],
            [
                'question' => 'Under NRB Cyber Resilience Guidelines (2023), what operational drill must licensed financial institutions execute at least annually to test system recovery capabilities?',
                'options' => [
                    [
                        'answer' => 'Physical Fire Drill',
                        'is_correct' => false,
                        'explanation' => 'A fire drill tests physical emergency response, not specifically cyber or IT recovery capabilities.',
                    ],
                    [
                        'answer' => 'Disaster Recovery (DR) Failover & Cyber Incident Exercise',
                        'is_correct' => true,
                        'explanation' => 'DR failover and cyber incident exercises test whether systems, processes, people, and recovery mechanisms can respond to and recover from disruptive events.',
                    ],
                    [
                        'answer' => 'Hardware Asset Liquidation Drill',
                        'is_correct' => false,
                        'explanation' => 'Hardware liquidation is an asset-management activity and does not test disaster recovery capability.',
                    ],
                    [
                        'answer' => 'Network Speed Benchmark Test',
                        'is_correct' => false,
                        'explanation' => 'A network benchmark measures performance but does not adequately test disaster recovery or cyber incident response.',
                    ],
                ],
            ],
            [
                'question' => 'Which cyber security property ensures that sensitive financial information is kept inaccessible to unauthorized individuals or processes?',
                'options' => [
                    [
                        'answer' => 'Integrity',
                        'is_correct' => false,
                        'explanation' => 'Integrity protects information from unauthorized modification or destruction.',
                    ],
                    [
                        'answer' => 'Availability',
                        'is_correct' => false,
                        'explanation' => 'Availability ensures authorized users can access systems and information when needed.',
                    ],
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => true,
                        'explanation' => 'Confidentiality ensures that sensitive information is accessible only to authorized individuals or processes.',
                    ],
                    [
                        'answer' => 'Accountability',
                        'is_correct' => false,
                        'explanation' => 'Accountability ensures actions can be traced to responsible users or entities.',
                    ],
                ],
            ],
            [
                'question' => 'Under NRB IT Guidelines, how should sensitive customer data (such as passwords, PINs, and card security numbers) be stored in banking databases?',
                'options' => [
                    [
                        'answer' => 'Plaintext string fields',
                        'is_correct' => false,
                        'explanation' => 'Plaintext storage exposes sensitive credentials if the database is compromised.',
                    ],
                    [
                        'answer' => 'Reversible Base64 encoding',
                        'is_correct' => false,
                        'explanation' => 'Base64 is an encoding mechanism, not encryption or secure password protection, and can easily be reversed.',
                    ],
                    [
                        'answer' => 'Strongly salted cryptographic hashes / strong encryption',
                        'is_correct' => true,
                        'explanation' => 'Passwords and PINs should generally be protected using strong salted password hashing, while sensitive data that must be recoverable should use strong encryption and appropriate key management.',
                    ],
                    [
                        'answer' => 'Publicly accessible XML files',
                        'is_correct' => false,
                        'explanation' => 'Making sensitive customer credentials publicly accessible would be a severe security violation.',
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
