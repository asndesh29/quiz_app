<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class MCQBoosterSeeder7 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'MCQ Booster 7',
            'description' => 'Computer Fundamentals, Networking, Operating Systems, Database, Web Technology, Cybersecurity, ICT Policy and NRB Cyber Resilience MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which of the following is NOT a way for transmitting data from one place to another using a computer?',
                'options' => [
                    [
                        'answer' => 'Full duplex',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Full duplex is a data transmission mode where communication occurs simultaneously in both directions.',
                    ],
                    [
                        'answer' => 'Half duplex',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Half duplex is a data transmission mode where communication occurs in both directions, but not simultaneously.',
                    ],
                    [
                        'answer' => 'Multiplex',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Multiplex. Multiplexing is a technique for combining multiple signals over a shared medium rather than being a basic direction of data transmission.',
                    ],
                    [
                        'answer' => 'Simplex',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Simplex is a data transmission mode where data flows in only one direction.',
                    ],
                ],
            ],
            [
                'question' => 'Which DOS command allows you to compress existing disks and to create new compressed volumes?',
                'options' => [
                    [
                        'answer' => 'DBLSPACE',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: DBLSPACE. MS-DOS DoubleSpace was used to compress disks and create compressed volumes.',
                    ],
                    [
                        'answer' => 'DEFRAG',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DEFRAG reorganizes fragmented files on a disk to improve access performance.',
                    ],
                    [
                        'answer' => 'SCANDISK',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SCANDISK checks disks for errors and can repair certain file-system problems.',
                    ],
                    [
                        'answer' => 'MSAV',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. MSAV is a Microsoft Anti-Virus utility used to detect certain computer viruses.',
                    ],
                ],
            ],
            [
                'question' => 'In a pure RISC architecture, arithmetic operations can be performed on operands located in:',
                'options' => [
                    [
                        'answer' => 'System RAM directly',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Pure RISC designs generally require operands to be loaded into registers before arithmetic operations.',
                    ],
                    [
                        'answer' => 'Secondary Storage',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Secondary storage is not directly used as the operand source for arithmetic instructions.',
                    ],
                    [
                        'answer' => 'Internal CPU Registers only',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Internal CPU Registers only. RISC follows a load/store architecture where arithmetic instructions operate on registers.',
                    ],
                    [
                        'answer' => 'Microcode ROM',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Microcode ROM stores control information in architectures that use microprogrammed control; it is not the normal operand location.',
                    ],
                ],
            ],
            [
                'question' => 'In Blockchain networks, what mechanism prevents a bad actor from altering past block history without redoing the work for all subsequent blocks?',
                'options' => [
                    [
                        'answer' => 'Asymmetric Public Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Asymmetric cryptography is primarily used for authentication, signatures, and secure key-related operations.',
                    ],
                    [
                        'answer' => 'Dynamic Routing Table',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Routing tables determine network paths and are unrelated to blockchain block integrity.',
                    ],
                    [
                        'answer' => 'Cryptographic Hash Linking',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Cryptographic Hash Linking. Each block contains a hash related to the previous block, so modifying an earlier block invalidates subsequent hashes.',
                    ],
                    [
                        'answer' => 'Parity Check Bit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A parity bit provides basic error detection in data transmission, not blockchain tamper resistance.',
                    ],
                ],
            ],
            [
                'question' => 'Which physical security control detects unauthorized physical entry into a bank\'s primary server room by monitoring infrared heat signals or movement?',
                'options' => [
                    [
                        'answer' => 'FM-200 Gas Suppression System',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. FM-200 is a fire suppression system used to extinguish fires in protected areas.',
                    ],
                    [
                        'answer' => 'Passive Infrared (PIR) Motion Detector',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Passive Infrared (PIR) Motion Detector. PIR sensors detect changes in infrared radiation caused by movement of people or objects.',
                    ],
                    [
                        'answer' => 'Uninterruptible Power Supply (UPS)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A UPS provides backup power and protects equipment from power interruptions.',
                    ],
                    [
                        'answer' => 'CCTV',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CCTV provides video surveillance but does not primarily detect infrared movement in the same manner as a PIR sensor.',
                    ],
                ],
            ],
            [
                'question' => 'Which open standard format is used to structure data in key-value pairs or arrays, often replacing XML in modern web APIs for lightweight data exchange?',
                'options' => [
                    [
                        'answer' => 'HTML5',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. HTML5 is a markup language used to structure web pages.',
                    ],
                    [
                        'answer' => 'JSON',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: JSON. JSON is a lightweight data-interchange format commonly used by modern web APIs.',
                    ],
                    [
                        'answer' => 'CSS3',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CSS3 is used to style and present web pages.',
                    ],
                    [
                        'answer' => 'SGML',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SGML is a generalized markup language and is not the lightweight data format commonly used by modern APIs.',
                    ],
                ],
            ],
            [
                'question' => 'Microcode Control Store (ROM) is a fundamental feature of:',
                'options' => [
                    [
                        'answer' => 'RISC Architecture',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Traditional RISC architectures emphasize hardwired control and simple instructions rather than extensive microcode.',
                    ],
                    [
                        'answer' => 'CISC Architecture',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: CISC Architecture. CISC processors commonly use microprogrammed control units and control stores for complex instructions.',
                    ],
                    [
                        'answer' => 'Harvard Memory Architecture',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Harvard architecture primarily concerns separate instruction and data memory paths.',
                    ],
                    [
                        'answer' => 'Von Neumann Memory Architecture',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Von Neumann architecture uses a shared memory model for instructions and data and does not specifically imply microcode ROM.',
                    ],
                ],
            ],
            [
                'question' => 'Cache memory is built using which technology?',
                'options' => [
                    [
                        'answer' => 'DRAM',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DRAM is commonly used for main memory, while cache memory is typically implemented using SRAM.',
                    ],
                    [
                        'answer' => 'Magnetic Core',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Magnetic core memory is an older memory technology and is not used for modern CPU cache.',
                    ],
                    [
                        'answer' => 'EEPROM',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. EEPROM is non-volatile memory used for persistent storage of small amounts of data.',
                    ],
                    [
                        'answer' => 'SRAM',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: SRAM. Static RAM is fast and is commonly used for CPU cache memory.',
                    ],
                ],
            ],
            [
                'question' => 'In hard disk access performance, what is the sum of Seek Time and Rotational Latency called?',
                'options' => [
                    [
                        'answer' => 'Transfer Time',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Transfer time is the time required to transfer the actual data after the required location has been reached.',
                    ],
                    [
                        'answer' => 'Latency Time',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Latency generally refers to delay, but the standard term for seek time plus rotational latency is access time.',
                    ],
                    [
                        'answer' => 'Access Time',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Access Time. Disk access time includes seek time and rotational latency, along with other minor delays in some definitions.',
                    ],
                    [
                        'answer' => 'Command Overhead Time',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Command overhead refers to processing associated with issuing and handling commands, not the sum of seek and rotational delays.',
                    ],
                ],
            ],
            [
                'question' => 'Who proposed the Stored Program Concept?',
                'options' => [
                    [
                        'answer' => 'John von Neumann',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: John von Neumann. The stored-program concept is closely associated with the von Neumann architecture and his 1945 report.',
                    ],
                    [
                        'answer' => 'Charles Babbage',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Charles Babbage designed the Analytical Engine, an important early programmable computing concept.',
                    ],
                    [
                        'answer' => 'Howard Aiken',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Howard Aiken was a pioneer of electromechanical computing and led development of the Harvard Mark I.',
                    ],
                    [
                        'answer' => 'Alan Turing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Alan Turing made major contributions to theoretical computer science and computing, but the stored-program architecture is traditionally associated with von Neumann.',
                    ],
                ],
            ],
            [
                'question' => 'What is an Interrupt Vector Table (IVT)?',
                'options' => [
                    [
                        'answer' => 'A list of active network ports',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An IVT is related to interrupt handling, not network ports.',
                    ],
                    [
                        'answer' => 'An array of memory addresses that point directly to specific Interrupt Service Routines (ISRs)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: An array of memory addresses that point directly to specific Interrupt Service Routines (ISRs).',
                    ],
                    [
                        'answer' => 'A set of hardware registers inside the ALU',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The IVT is a table stored in memory, not a set of ALU registers.',
                    ],
                    [
                        'answer' => 'A table mapping hostnames to IP addresses',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hostname-to-IP mappings are associated with DNS, not the Interrupt Vector Table.',
                    ],
                ],
            ],
            [
                'question' => 'What temporary storage area in memory holds data transferred between two devices operating at different speeds or with different block sizes?',
                'options' => [
                    [
                        'answer' => 'Cache',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cache primarily stores frequently accessed data to reduce access time.',
                    ],
                    [
                        'answer' => 'Buffer',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Buffer. A buffer temporarily stores data while it moves between components operating at different speeds or granularities.',
                    ],
                    [
                        'answer' => 'Register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Registers are small, high-speed storage locations inside the CPU.',
                    ],
                    [
                        'answer' => 'Spool File',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Spooling stores jobs temporarily, commonly for devices such as printers, rather than serving as the general temporary transfer area between different-speed devices.',
                    ],
                ],
            ],
            [
                'question' => 'At which OSI layer does a Repeater operate to regenerate incoming signals on media segments?',
                'options' => [
                    [
                        'answer' => 'Physical Layer (Layer 1)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Physical Layer (Layer 1). A repeater regenerates and retransmits signals without interpreting higher-level data.',
                    ],
                    [
                        'answer' => 'Data Link Layer (Layer 2)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Layer 2 devices such as bridges and switches process frames and MAC addresses.',
                    ],
                    [
                        'answer' => 'Network Layer (Layer 3)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Layer 3 devices such as routers forward packets based on network addresses.',
                    ],
                    [
                        'answer' => 'Transport Layer (Layer 4)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Transport Layer provides services such as segmentation, reliability, and flow control.',
                    ],
                ],
            ],
            [
                'question' => 'Which error detection mechanism involves sending a duplicate copy of every data block to verify correctness on the receiving end?',
                'options' => [
                    [
                        'answer' => 'Parity Checking',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Parity checking adds a parity bit to detect certain bit errors.',
                    ],
                    [
                        'answer' => 'Echo Checking / Redundancy',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Echo Checking / Redundancy. Echo checking uses repeated or returned data to compare the transmitted and received information.',
                    ],
                    [
                        'answer' => 'Cyclic Redundancy Check',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CRC calculates a polynomial-based check value rather than sending a duplicate copy of each data block.',
                    ],
                    [
                        'answer' => 'Checksum',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A checksum calculates a value from the data for comparison rather than sending an identical duplicate block.',
                    ],
                ],
            ],
            [
                'question' => 'What is the primary cause of the Von Neumann Bottleneck?',
                'options' => [
                    [
                        'answer' => 'Excessively large cache size',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A large cache is generally intended to reduce the impact of memory access delays.',
                    ],
                    [
                        'answer' => 'Slow CPU speed',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The bottleneck arises primarily from limited data and instruction movement between CPU and memory, not simply from slow CPU speed.',
                    ],
                    [
                        'answer' => 'Lack of a Control Unit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A Von Neumann computer includes a control unit.',
                    ],
                    [
                        'answer' => 'Shared system bus for data and instruction transfers',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Shared system bus for data and instruction transfers. Instructions and data share the same pathway, limiting throughput between memory and CPU.',
                    ],
                ],
            ],
            [
                'question' => 'Which application layer protocol uses TCP port 25 to send outgoing email between mail servers across the Internet?',
                'options' => [
                    [
                        'answer' => 'POP3',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. POP3 is primarily used by clients to retrieve email, traditionally using TCP port 110.',
                    ],
                    [
                        'answer' => 'IMAP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IMAP is primarily used for accessing and managing email on a mail server, traditionally using TCP port 143.',
                    ],
                    [
                        'answer' => 'SMTP',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: SMTP. Simple Mail Transfer Protocol traditionally uses TCP port 25 for mail transfer between mail servers.',
                    ],
                    [
                        'answer' => 'HTTP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. HTTP is used for web communication and traditionally uses TCP port 80.',
                    ],
                ],
            ],
            [
                'question' => 'Which register stores the intermediate and final outputs generated by the ALU?',
                'options' => [
                    [
                        'answer' => 'Program Counter',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Program Counter stores the address of the next instruction to be executed.',
                    ],
                    [
                        'answer' => 'Instruction Register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Instruction Register holds the instruction currently being decoded or executed.',
                    ],
                    [
                        'answer' => 'Accumulator',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Accumulator. The accumulator is traditionally used to hold intermediate and final arithmetic or logical results.',
                    ],
                    [
                        'answer' => 'Memory Address Register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Memory Address Register stores the address of the memory location being accessed.',
                    ],
                ],
            ],
            [
                'question' => 'What asymmetric cryptographic algorithm uses elliptic curves over finite fields to offer strong security with smaller key sizes than RSA?',
                'options' => [
                    [
                        'answer' => 'AES (Advanced Encryption Standard)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. AES is a symmetric block cipher, not an asymmetric elliptic-curve algorithm.',
                    ],
                    [
                        'answer' => 'ECC (Elliptic Curve Cryptography)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: ECC. Elliptic Curve Cryptography provides strong asymmetric security using comparatively smaller keys.',
                    ],
                    [
                        'answer' => 'DES (Data Encryption Standard)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DES is an older symmetric block cipher.',
                    ],
                    [
                        'answer' => 'MD5 (Message Digest Algorithm 5)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. MD5 is a cryptographic hash function and is not an asymmetric encryption algorithm.',
                    ],
                ],
            ],
            [
                'question' => 'Which process verifies that a message has not been altered in transit by comparing a generated hash with an attached hash value?',
                'options' => [
                    [
                        'answer' => 'Data Encryption',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Encryption primarily protects confidentiality by transforming data into an unreadable form.',
                    ],
                    [
                        'answer' => 'Data Compression',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Compression reduces the size of data and does not by itself verify integrity.',
                    ],
                    [
                        'answer' => 'Integrity Verification',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Integrity Verification. Comparing hash values can detect whether data was modified after the original hash was generated.',
                    ],
                    [
                        'answer' => 'Key Exchange',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Key exchange establishes cryptographic keys between parties and does not directly verify message integrity.',
                    ],
                ],
            ],
            [
                'question' => 'Which device connects different network segments and uses IP routing tables to determine the best path for forwarding data packets?',
                'options' => [
                    [
                        'answer' => 'Network Switch',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A network switch primarily forwards frames using MAC addresses within Layer 2 networks.',
                    ],
                    [
                        'answer' => 'Hub',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A hub repeats incoming signals to multiple ports and does not use IP routing tables.',
                    ],
                    [
                        'answer' => 'Router',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Router. A router forwards packets between networks using routing information and IP addresses.',
                    ],
                    [
                        'answer' => 'Bridge',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A bridge generally connects Layer 2 network segments using MAC addresses rather than IP routing tables.',
                    ],
                ],
            ],
            [
                'question' => 'A Hub is technically referred to as a:',
                'options' => [
                    [
                        'answer' => 'Multiport Bridge',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A bridge operates at the Data Link Layer and makes forwarding decisions based on MAC addresses.',
                    ],
                    [
                        'answer' => 'Multiport Repeater',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Multiport Repeater. A hub repeats incoming signals to all connected ports.',
                    ],
                    [
                        'answer' => 'Multiport Gateway',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A gateway connects networks or systems using different protocols and is not the technical name for a hub.',
                    ],
                    [
                        'answer' => 'Layer 3 Switch',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A Layer 3 switch can perform routing functions, whereas a traditional hub operates at the Physical Layer.',
                    ],
                ],
            ],
            [
                'question' => 'What does the term MODEM stand for?',
                'options' => [
                    [
                        'answer' => 'Memory Optimization Data Encapsulation Method',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the expansion of MODEM.',
                    ],
                    [
                        'answer' => 'Modulation Device Electronic Machine',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the expansion of MODEM.',
                    ],
                    [
                        'answer' => 'Media Orientation Digital Modulation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the expansion of MODEM.',
                    ],
                    [
                        'answer' => 'Modulator Demodulator',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Modulator Demodulator. A modem modulates digital data for transmission and demodulates received signals back into digital data.',
                    ],
                ],
            ],
            [
                'question' => 'Which wireless transmission technology operates in the short-range 2.4 GHz ISM band and is governed by the IEEE 802.15.1 standard?',
                'options' => [
                    [
                        'answer' => 'Wi-Fi',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Wi-Fi is primarily associated with the IEEE 802.11 family of standards.',
                    ],
                    [
                        'answer' => 'Bluetooth',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Bluetooth. Bluetooth is a short-range wireless technology associated with IEEE 802.15.1 and operates in the 2.4 GHz ISM band.',
                    ],
                    [
                        'answer' => 'Zigbee',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Zigbee is associated with IEEE 802.15.4 rather than IEEE 802.15.1.',
                    ],
                    [
                        'answer' => 'NFC',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. NFC operates at 13.56 MHz and is designed for very short-range communication.',
                    ],
                ],
            ],
            [
                'question' => 'What is the term for the maximum rate of data transfer across a given network path, usually measured in bits per second (bps)?',
                'options' => [
                    [
                        'answer' => 'Latency',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Latency measures the delay experienced by data during transmission.',
                    ],
                    [
                        'answer' => 'Bandwidth',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Bandwidth. Bandwidth represents the maximum data-transfer capacity of a communication path.',
                    ],
                    [
                        'answer' => 'Jitter',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Jitter refers to variation in packet delay over time.',
                    ],
                    [
                        'answer' => 'Propagation Delay',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Propagation delay is the time required for a signal to travel through the transmission medium.',
                    ],
                ],
            ],
            [
                'question' => 'Which block cipher algorithm uses 64-bit blocks and a 56-bit key length, making it vulnerable to modern brute-force decryption attacks?',
                'options' => [
                    [
                        'answer' => 'AES',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. AES uses 128-bit blocks and supports key sizes of 128, 192, and 256 bits.',
                    ],
                    [
                        'answer' => 'DES',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: DES. DES uses 64-bit blocks and an effective 56-bit key, which is too small against modern brute-force attacks.',
                    ],
                    [
                        'answer' => 'RSA',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. RSA is an asymmetric cryptographic algorithm rather than a 64-bit block cipher.',
                    ],
                    [
                        'answer' => 'Blowfish',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Blowfish uses 64-bit blocks but supports variable key lengths from 32 to 448 bits.',
                    ],
                ],
            ],
            [
                'question' => 'Which OS component translates high-level requests from applications into low-level instructions executed directly by hardware peripherals?',
                'options' => [
                    [
                        'answer' => 'Shell',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A shell provides an interface through which users or scripts interact with the operating system.',
                    ],
                    [
                        'answer' => 'Device Driver',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Device Driver. Drivers provide the software interface that allows the OS and applications to communicate with hardware devices.',
                    ],
                    [
                        'answer' => 'Process Control Block',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A PCB stores information about a process, such as its state, registers, and scheduling information.',
                    ],
                    [
                        'answer' => 'Text Editor',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A text editor is an application used to create and modify text files.',
                    ],
                ],
            ],
            [
                'question' => 'Which protocol uses a 3-way handshake and never sends the password over the network?',
                'options' => [
                    [
                        'answer' => 'PAP (Password Authentication Protocol)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. PAP sends credentials using a simple authentication exchange and does not provide the challenge-response protection of CHAP.',
                    ],
                    [
                        'answer' => 'HTTP (Hypertext Transfer Protocol)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. HTTP is a web application protocol and is not an authentication protocol using a 3-way challenge-response handshake.',
                    ],
                    [
                        'answer' => 'Telnet (Teletype Network)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Telnet transmits data, including credentials, without encryption and is not a secure challenge-response authentication protocol.',
                    ],
                    [
                        'answer' => 'CHAP (Challenge Handshake Authentication Protocol)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: CHAP. CHAP uses a challenge-response mechanism and does not transmit the password directly over the network.',
                    ],
                ],
            ],
            [
                'question' => 'Which CPU scheduling algorithm executes processes in order of arrival, but can cause long waiting times due to the Convoy Effect?',
                'options' => [
                    [
                        'answer' => 'Round Robin',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Round Robin uses time slices and is designed for responsive time-sharing systems.',
                    ],
                    [
                        'answer' => 'First-Come, First-Served (FCFS)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: First-Come, First-Served (FCFS). FCFS schedules processes by arrival order and can produce the Convoy Effect when a long process delays many short processes.',
                    ],
                    [
                        'answer' => 'Shortest Job First',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SJF selects the process with the shortest expected execution time.',
                    ],
                    [
                        'answer' => 'Priority Scheduling',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Priority scheduling selects processes based primarily on assigned priority values.',
                    ],
                ],
            ],
            [
                'question' => 'What data unit is processed by a Layer 2 Switch?',
                'options' => [
                    [
                        'answer' => 'Bits',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Bits are the basic transmission units associated with the Physical Layer.',
                    ],
                    [
                        'answer' => 'Packets',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Packets are the data unit generally associated with the Network Layer.',
                    ],
                    [
                        'answer' => 'Frames',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Frames. A Layer 2 switch forwards Ethernet frames using MAC addresses.',
                    ],
                    [
                        'answer' => 'Segments',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Segments are commonly associated with the Transport Layer for protocols such as TCP.',
                    ],
                ],
            ],
            [
                'question' => 'Which internal MS-DOS command displays the volume label and serial number of a specified disk drive?',
                'options' => [
                    [
                        'answer' => 'DIR',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DIR displays a directory listing and file information.',
                    ],
                    [
                        'answer' => 'VOL',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: VOL. The MS-DOS VOL command displays the disk volume label and serial number.',
                    ],
                    [
                        'answer' => 'VER',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. VER displays the operating system version.',
                    ],
                    [
                        'answer' => 'CHKDSK',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CHKDSK checks disk and file-system status and can report disk errors.',
                    ],
                ],
            ],
            [
                'question' => 'What condition occurs when dynamic memory allocation leaves small, non-contiguous free spaces that cannot fulfill allocation requests for larger contiguous blocks?',
                'options' => [
                    [
                        'answer' => 'Internal Fragmentation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Internal fragmentation occurs when allocated memory contains unused space inside an allocated block.',
                    ],
                    [
                        'answer' => 'External Fragmentation',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: External Fragmentation. Free memory becomes divided into small, non-contiguous blocks that may not satisfy larger allocation requests.',
                    ],
                    [
                        'answer' => 'Page Fault',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A page fault occurs when a referenced virtual-memory page is not currently in physical memory.',
                    ],
                    [
                        'answer' => 'Thrashing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Thrashing occurs when excessive paging consumes system resources and significantly reduces useful CPU work.',
                    ],
                ],
            ],
            [
                'question' => 'In Relational Database Management Systems (RDBMS), what property guarantees that all database constraints remain valid before and after a transaction?',
                'options' => [
                    [
                        'answer' => 'Atomicity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Atomicity ensures that a transaction is treated as an all-or-nothing unit.',
                    ],
                    [
                        'answer' => 'Consistency',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Consistency. Consistency ensures that transactions preserve all defined database rules and constraints.',
                    ],
                    [
                        'answer' => 'Isolation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Isolation controls how concurrently executing transactions interact with each other.',
                    ],
                    [
                        'answer' => 'Durability',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Durability ensures that committed transaction results persist despite failures.',
                    ],
                ],
            ],
            [
                'question' => 'The collection of metadata describing the structural design of a database is stored in the:',
                'options' => [
                    [
                        'answer' => 'Data Dictionary',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Data Dictionary. It contains metadata about database objects, structures, attributes, constraints, and other definitions.',
                    ],
                    [
                        'answer' => 'Index Table',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An index is primarily used to speed up data retrieval and does not represent the complete collection of database metadata.',
                    ],
                    [
                        'answer' => 'Transaction Log',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A transaction log records transaction activity for recovery and auditing purposes.',
                    ],
                    [
                        'answer' => 'Redo Log',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A redo log records changes used to recover or replay database operations after failures.',
                    ],
                ],
            ],
            [
                'question' => 'In Data Warehousing, what process cleanses, filters, transforms, and loads operational source data into target data warehouses?',
                'options' => [
                    [
                        'answer' => 'OLTP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. OLTP is designed for processing routine operational transactions.',
                    ],
                    [
                        'answer' => 'ETL',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: ETL. Extract, Transform, Load processes source data before loading it into a data warehouse.',
                    ],
                    [
                        'answer' => 'Data Mining',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Data mining discovers patterns and useful information from datasets.',
                    ],
                    [
                        'answer' => 'Indexing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Indexing creates data structures that improve query and retrieval performance.',
                    ],
                ],
            ],
            [
                'question' => 'An attribute or set of attributes that uniquely identifies a row in a relation is called a:',
                'options' => [
                    [
                        'answer' => 'Composite Attribute',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A composite attribute is an attribute that can be divided into smaller meaningful components.',
                    ],
                    [
                        'answer' => 'Secondary Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A secondary key is generally used for retrieval but does not necessarily uniquely identify every row.',
                    ],
                    [
                        'answer' => 'Foreign Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A foreign key references a key in another table and is used to establish relationships.',
                    ],
                    [
                        'answer' => 'Super Key',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Super Key. A super key is an attribute or combination of attributes that uniquely identifies a tuple in a relation.',
                    ],
                ],
            ],
            [
                'question' => 'Which HTML element tag is used to embed an inline frame that displays a separate HTML document inside the current web page?',
                'options' => [
                    [
                        'answer' => '<table>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The <table> element is used to represent tabular data.',
                    ],
                    [
                        'answer' => '<iframe>',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: <iframe>. The iframe element embeds another HTML document within the current page.',
                    ],
                    [
                        'answer' => '<div>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The <div> element is a generic container used to group and structure content.',
                    ],
                    [
                        'answer' => '<section>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The <section> element represents a thematic section of content.',
                    ],
                ],
            ],
            [
                'question' => 'Which attribute in HTML form elements specifies the HTTP method (GET or POST) used to submit form data to a web server?',
                'options' => [
                    [
                        'answer' => 'action',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The action attribute specifies the URL where the form data is submitted.',
                    ],
                    [
                        'answer' => 'method',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: method. The method attribute specifies how form data is submitted, such as GET or POST.',
                    ],
                    [
                        'answer' => 'target',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The target attribute specifies where the response should be displayed.',
                    ],
                    [
                        'answer' => 'enctype',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The enctype attribute specifies how form data should be encoded before submission.',
                    ],
                ],
            ],
            [
                'question' => 'What is the primary step where core algorithms are applied in the KDD process?',
                'options' => [
                    [
                        'answer' => 'Data Cleaning',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Data cleaning removes or handles noise, errors, missing values, and inconsistencies.',
                    ],
                    [
                        'answer' => 'Data Transformation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Data transformation converts data into a suitable format for analysis.',
                    ],
                    [
                        'answer' => 'Data Mining',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Data Mining. This is the core KDD step where algorithms are applied to discover useful patterns.',
                    ],
                    [
                        'answer' => 'Pattern Evaluation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Pattern evaluation identifies which discovered patterns are useful or interesting.',
                    ],
                ],
            ],
            [
                'question' => 'K-Nearest Neighbor (KNN) algorithm is classified as a:',
                'options' => [
                    [
                        'answer' => 'Lazy Learner',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Lazy Learner. KNN postpones most computation until a prediction/query is made rather than building an explicit model during training.',
                    ],
                    [
                        'answer' => 'Greedy Learner',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Greedy learning is associated with algorithms that make locally optimal choices during model construction.',
                    ],
                    [
                        'answer' => 'Eager Learner',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Eager learners build a model during training before receiving test queries.',
                    ],
                    [
                        'answer' => 'Unsupervised Model',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. KNN is commonly used as a supervised learning algorithm for classification and regression.',
                    ],
                ],
            ],
            [
                'question' => 'What cyber threat involves covert software installed on a system to monitor user activity, log keystrokes, and capture sensitive credentials?',
                'options' => [
                    [
                        'answer' => 'Ransomware',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Ransomware typically encrypts or locks data and demands payment for restoration.',
                    ],
                    [
                        'answer' => 'Spyware / Keylogger',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Spyware / Keylogger. Spyware monitors activity, while keyloggers record keystrokes to capture sensitive information.',
                    ],
                    [
                        'answer' => 'Computer Worm',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A worm is malware designed primarily to replicate and spread across systems or networks.',
                    ],
                    [
                        'answer' => 'Rootkit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Rootkits are designed to conceal malicious activity and maintain privileged access, although they can support spyware functionality.',
                    ],
                ],
            ],
            [
                'question' => 'What is the fundamental unit of storage in a Relational Database?',
                'options' => [
                    [
                        'answer' => 'File',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A file can contain database data but is not the fundamental relational unit represented to users.',
                    ],
                    [
                        'answer' => 'Record',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A record corresponds to a row/tuple, but the relational database organizes records into tables.',
                    ],
                    [
                        'answer' => 'Table',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Table. In the relational model, data is organized into relations, commonly represented as tables.',
                    ],
                    [
                        'answer' => 'Database',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A database is a collection of related data and database objects, not the fundamental relational storage unit.',
                    ],
                ],
            ],
            [
                'question' => 'A proxy server positioned to hide backend web server IP addresses and handle incoming load balancing is known as a:',
                'options' => [
                    [
                        'answer' => 'Forward Proxy',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A forward proxy acts on behalf of clients when accessing external servers.',
                    ],
                    [
                        'answer' => 'Reverse Proxy',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Reverse Proxy. A reverse proxy sits in front of backend servers, hides their addresses, and can distribute incoming requests.',
                    ],
                    [
                        'answer' => 'Transparent Proxy',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A transparent proxy intercepts traffic without requiring explicit proxy configuration but is not specifically defined by hiding backend servers.',
                    ],
                    [
                        'answer' => 'Anonymous Proxy',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An anonymous proxy primarily hides client identity rather than acting as a reverse proxy for backend servers.',
                    ],
                ],
            ],
            [
                'question' => 'Within how many months from issuance must banks submit their Action Plan for the implementation of the IT Guidelines to the Bank Supervision Department of NRB?',
                'options' => [
                    [
                        'answer' => '3 months',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The specified period in the question is 6 months.',
                    ],
                    [
                        'answer' => '6 months',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 6 months.',
                    ],
                    [
                        'answer' => '9 months',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The specified period in the question is 6 months.',
                    ],
                    [
                        'answer' => '12 months',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The specified period in the question is 6 months.',
                    ],
                ],
            ],
            [
                'question' => 'According to the target set in the ICT Policy 2072, what percentage of the population of Nepal was targeted to have digital literacy skills by the end of 2020?',
                'options' => [
                    [
                        'answer' => '50%',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The target stated in the question is 75%.',
                    ],
                    [
                        'answer' => '60%',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The target stated in the question is 75%.',
                    ],
                    [
                        'answer' => '75%',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 75%.',
                    ],
                    [
                        'answer' => '100%',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The target stated in the question is 75%.',
                    ],
                ],
            ],
            [
                'question' => 'On which date was the Electronic Transactions Act, 2063 (2006) authenticated and published in Nepal?',
                'options' => [
                    [
                        'answer' => '22 Mansir 2063 (December 8, 2006)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 22 Mansir 2063 (December 8, 2006).',
                    ],
                    [
                        'answer' => '24 Bhadra 2063 (September 9, 2006)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The specified authentication and publication date is 22 Mansir 2063.',
                    ],
                    [
                        'answer' => '15 Shrawan 2063 (July 30, 2006)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The specified authentication and publication date is 22 Mansir 2063.',
                    ],
                    [
                        'answer' => '1 Kartik 2063 (October 18, 2006)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The specified authentication and publication date is 22 Mansir 2063.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following matters is NOT exempted from the application of the Electronic Transactions Act, 2063?',
                'options' => [
                    [
                        'answer' => 'Negotiable instruments as defined in the Negotiable Instruments Act, 2034',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Negotiable instruments as defined under the relevant Act are among the matters exempted from application.',
                    ],
                    [
                        'answer' => 'Electronic filings of tax returns and corporate filings authorized by law',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Electronic filings of tax returns and corporate filings authorized by law. These are NOT included among the listed exemptions.',
                    ],
                    [
                        'answer' => 'Documents showing title or ownership of immovable property',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Documents showing title or ownership of immovable property are among the matters exempted.',
                    ],
                    [
                        'answer' => 'Power of Attorney, wills, deeds of sale or conveyance',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. These legal instruments are among the matters exempted from application.',
                    ],
                ],
            ],
            [
                'question' => 'Under the Governance component of the CRG 2023, who holds ultimate responsibility for ensuring that cyber risk is properly managed in a Licensed Institution (LI)?',
                'options' => [
                    [
                        'answer' => 'Chief Information Security Officer (CISO)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The CISO has important operational cybersecurity responsibilities, but ultimate governance responsibility rests with the Board.',
                    ],
                    [
                        'answer' => 'Internal Audit Committee',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Internal audit provides independent assurance and oversight but does not hold ultimate responsibility for cyber risk management.',
                    ],
                    [
                        'answer' => 'Head of IT Department',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Head of IT manages technology operations but does not hold ultimate responsibility for cyber risk governance.',
                    ],
                    [
                        'answer' => 'Board of Directors',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Board of Directors. The Board holds ultimate responsibility for ensuring that cyber risk is properly governed and managed.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is NOT one of the five primary risk management categories outlined in the Cyber Resilience Guidelines 2023?',
                'options' => [
                    [
                        'answer' => 'Testing',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Testing. Testing is an important cyber-resilience activity, but it is not one of the five primary risk management categories referenced in the question.',
                    ],
                    [
                        'answer' => 'Identification',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Identification is one of the primary cyber risk management categories.',
                    ],
                    [
                        'answer' => 'Detection',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Detection is one of the primary cyber risk management categories.',
                    ],
                    [
                        'answer' => 'Protection',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Protection is one of the primary cyber risk management categories.',
                    ],
                ],
            ],
            [
                'question' => 'Which core security principle ensures that data remains accurate and protected against unauthorized modifications during storage or transmission?',
                'options' => [
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Confidentiality ensures that information is accessible only to authorized parties.',
                    ],
                    [
                        'answer' => 'Integrity',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Integrity. Integrity ensures that information remains accurate, complete, and protected from unauthorized alteration.',
                    ],
                    [
                        'answer' => 'Availability',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Availability ensures that authorized users can access information and systems when needed.',
                    ],
                    [
                        'answer' => 'Non-repudiation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Non-repudiation provides evidence that a party performed or authorized an action and cannot credibly deny it later.',
                    ],
                ],
            ],
            [
                'question' => 'What specific operational authority and independence must be provided to the Chief Information Security Officer (CISO) or equivalent senior executive?',
                'options' => [
                    [
                        'answer' => 'Direct reporting access to the Board and operational independence from IT operations',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Direct reporting access to the Board and operational independence from IT operations. This supports independent cybersecurity oversight and effective escalation of risks.',
                    ],
                    [
                        'answer' => 'Direct control over financial budgets and approval of IT procurements',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Financial and procurement authority is not the specific independence requirement described for the CISO role.',
                    ],
                    [
                        'answer' => 'Dual reporting to external auditors and NRB officers directly',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The required arrangement emphasizes direct reporting access to the Board and independence from IT operations.',
                    ],
                    [
                        'answer' => 'Absolute authority to suspend business operations without executive consent',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A CISO does not automatically receive unrestricted authority to suspend business operations without appropriate governance or executive processes.',
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
