<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class MCQBoosterSeeder6 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'MCQ Booster 6',
            'description' => 'Computer Fundamentals, Hardware, CPU Architecture, Memory, Storage, Motherboard and ICT in Nepal MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which category of digital computers is designed to support single users with high-performance graphics, extensive computational capability, and dedicated hardware for engineering CAD/CAM software?',
                'options' => [
                    [
                        'answer' => 'Microcomputer / Workstation',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Microcomputer / Workstation.',
                    ],
                    [
                        'answer' => 'Mainframe Computer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Microcomputer / Workstation.',
                    ],
                    [
                        'answer' => 'Analog Computer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Microcomputer / Workstation.',
                    ],
                    [
                        'answer' => 'Hybrid Computer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Microcomputer / Workstation.',
                    ],
                ],
            ],

            [
                'question' => 'What generation of computer hardware introduced Microprocessors by combining thousands of integrated circuits onto a single silicon chip (LSI/VLSI)?',
                'options' => [
                    [
                        'answer' => 'First Generation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Fourth Generation.',
                    ],
                    [
                        'answer' => 'Second Generation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Fourth Generation.',
                    ],
                    [
                        'answer' => 'Third Generation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Fourth Generation.',
                    ],
                    [
                        'answer' => 'Fourth Generation',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Fourth Generation.',
                    ],
                ],
            ],

            [
                'question' => 'In Artificial Intelligence, what term describes a model’s inability to generalize well to unseen test data because it learned noise and specific details of the training dataset too closely?',
                'options' => [
                    [
                        'answer' => 'Underfitting',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Overfitting.',
                    ],
                    [
                        'answer' => 'Overfitting',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Overfitting.',
                    ],
                    [
                        'answer' => 'Dimensionality Reduction',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Overfitting.',
                    ],
                    [
                        'answer' => 'Gradient Descent',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Overfitting.',
                    ],
                ],
            ],

            [
                'question' => 'Who coined the term "Artificial Intelligence"?',
                'options' => [
                    [
                        'answer' => 'Marvin Minsky',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is John McCarthy.',
                    ],
                    [
                        'answer' => 'Alan Turing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is John McCarthy.',
                    ],
                    [
                        'answer' => 'Geoffrey Hinton',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is John McCarthy.',
                    ],
                    [
                        'answer' => 'John McCarthy',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: John McCarthy.',
                    ],
                ],
            ],

            [
                'question' => 'What is the primary purpose of a Mantrap in data center security?',
                'options' => [
                    [
                        'answer' => 'To prevent tailgating and piggybacking at access points',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: To prevent tailgating and piggybacking at access points.',
                    ],
                    [
                        'answer' => 'To trap high-voltage power surges',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is To prevent tailgating and piggybacking at access points.',
                    ],
                    [
                        'answer' => 'To collect particulate dust from entering personnel',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is To prevent tailgating and piggybacking at access points.',
                    ],
                    [
                        'answer' => 'To prevent water leakage into server racks',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is To prevent tailgating and piggybacking at access points.',
                    ],
                ],
            ],

            [
                'question' => 'What is the full form of the abbreviation URL?',
                'options' => [
                    [
                        'answer' => 'Uniform Resource Locator',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Uniform Resource Locator.',
                    ],
                    [
                        'answer' => 'Universal Resource Locator',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Uniform Resource Locator.',
                    ],
                    [
                        'answer' => 'Unified Resource Locator',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Uniform Resource Locator.',
                    ],
                    [
                        'answer' => 'Uniform Resource Link',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Uniform Resource Locator.',
                    ],
                ],
            ],

            [
                'question' => 'In a Linux file system, where is metadata such as file owner, size, permissions, and block pointers stored?',
                'options' => [
                    [
                        'answer' => 'Master File Table (MFT)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Inode.',
                    ],
                    [
                        'answer' => 'Root directory entry',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Inode.',
                    ],
                    [
                        'answer' => 'Inode',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Inode.',
                    ],
                    [
                        'answer' => 'Boot sector',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Inode.',
                    ],
                ],
            ],

            [
                'question' => 'In computer memory hierarchy, which cache mapping scheme maps each block of main memory to exactly ONE specific cache line slot using a modulo calculation?',
                'options' => [
                    [
                        'answer' => 'Direct Mapping',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Direct Mapping.',
                    ],
                    [
                        'answer' => 'Fully Associative Mapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Direct Mapping.',
                    ],
                    [
                        'answer' => 'Set-Associative Mapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Direct Mapping.',
                    ],
                    [
                        'answer' => 'Dynamic Mapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Direct Mapping.',
                    ],
                ],
            ],

            [
                'question' => 'What type of special ink is used to print characters evaluated by MICR readers?',
                'options' => [
                    [
                        'answer' => 'Hydrophobic Ink',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Iron Oxide Magnetic Ink.',
                    ],
                    [
                        'answer' => 'Thermal Sensitive Ink',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Iron Oxide Magnetic Ink.',
                    ],
                    [
                        'answer' => 'Ultraviolet Fluorescent Ink',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Iron Oxide Magnetic Ink.',
                    ],
                    [
                        'answer' => 'Iron Oxide Magnetic Ink',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Iron Oxide Magnetic Ink.',
                    ],
                ],
            ],

            [
                'question' => 'How does Programmed I/O differ from Interrupt-Driven I/O regarding CPU execution efficiency?',
                'options' => [
                    [
                        'answer' => 'Programmed I/O frees the CPU to execute background tasks during transfer.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Programmed I/O requires continuous CPU polling of device status bits, wasting processing cycles until transfer completes..',
                    ],
                    [
                        'answer' => 'Programmed I/O requires continuous CPU polling of device status bits, wasting processing cycles until transfer completes.',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Programmed I/O requires continuous CPU polling of device status bits, wasting processing cycles until transfer completes..',
                    ],
                    [
                        'answer' => 'Programmed I/O utilizes dedicated hardware DMA channels.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Programmed I/O requires continuous CPU polling of device status bits, wasting processing cycles until transfer completes..',
                    ],
                    [
                        'answer' => 'Interrupt-driven I/O halts all system buses indefinitely.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Programmed I/O requires continuous CPU polling of device status bits, wasting processing cycles until transfer completes..',
                    ],
                ],
            ],

            [
                'question' => 'What technique allows a CPU to execute multiple instruction phases (Fetch, Decode, Execute, Writeback) concurrently on continuous instruction streams?',
                'options' => [
                    [
                        'answer' => 'Multithreading',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Pipelining.',
                    ],
                    [
                        'answer' => 'Pipelining',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Pipelining.',
                    ],
                    [
                        'answer' => 'Spooling',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Pipelining.',
                    ],
                    [
                        'answer' => 'Microprogramming',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Pipelining.',
                    ],
                ],
            ],

            [
                'question' => 'In printer management, SPOOL stands for:?',
                'options' => [
                    [
                        'answer' => 'Simultaneous Peripheral Operations On-Line',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Simultaneous Peripheral Operations On-Line.',
                    ],
                    [
                        'answer' => 'System Performance Optimization On-Line',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Simultaneous Peripheral Operations On-Line.',
                    ],
                    [
                        'answer' => 'Serial Processing Of Open Logic',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Simultaneous Peripheral Operations On-Line.',
                    ],
                    [
                        'answer' => 'Synchronous Program Output Operation Logic',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Simultaneous Peripheral Operations On-Line.',
                    ],
                ],
            ],

            [
                'question' => 'At which layer of the OSI model does a Network Router analyze logical addresses to select optimal packet transmission paths across subnets?',
                'options' => [
                    [
                        'answer' => 'Data Link Layer (Layer 2)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Network Layer (Layer 3).',
                    ],
                    [
                        'answer' => 'Network Layer (Layer 3)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Network Layer (Layer 3).',
                    ],
                    [
                        'answer' => 'Transport Layer (Layer 4)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Network Layer (Layer 3).',
                    ],
                    [
                        'answer' => 'Application Layer (Layer 7)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Network Layer (Layer 3).',
                    ],
                ],
            ],

            [
                'question' => 'Simple parity check can detect how many corrupted bits?',
                'options' => [
                    [
                        'answer' => 'Exactly 2-bit errors',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Any odd number of errors.',
                    ],
                    [
                        'answer' => 'Any even number of errors',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Any odd number of errors.',
                    ],
                    [
                        'answer' => 'Any odd number of errors',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Any odd number of errors.',
                    ],
                    [
                        'answer' => 'All burst errors',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Any odd number of errors.',
                    ],
                ],
            ],

            [
                'question' => 'An APIPA address is assigned when a device cannot locate which server?',
                'options' => [
                    [
                        'answer' => 'Web Server',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is DHCP Server.',
                    ],
                    [
                        'answer' => 'DNS Server',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is DHCP Server.',
                    ],
                    [
                        'answer' => 'DHCP Server',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: DHCP Server.',
                    ],
                    [
                        'answer' => 'FTP Server',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is DHCP Server.',
                    ],
                ],
            ],

            [
                'question' => 'Which protocol uses Echo Request and Echo Reply messages?',
                'options' => [
                    [
                        'answer' => 'ICMP',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: ICMP.',
                    ],
                    [
                        'answer' => 'ARP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is ICMP.',
                    ],
                    [
                        'answer' => 'SNMP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is ICMP.',
                    ],
                    [
                        'answer' => 'IGMP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is ICMP.',
                    ],
                ],
            ],

            [
                'question' => 'Which email protocol retrieves messages from a mail server while maintaining synchronization between server and client mailboxes?',
                'options' => [
                    [
                        'answer' => 'POP3',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is IMAP.',
                    ],
                    [
                        'answer' => 'HTTP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is IMAP.',
                    ],
                    [
                        'answer' => 'SMTP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is IMAP.',
                    ],
                    [
                        'answer' => 'IMAP',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: IMAP.',
                    ],
                ],
            ],

            [
                'question' => 'Which of the following security mechanisms actively drops malicious packets inline in real time  ?',
                'options' => [
                    [
                        'answer' => 'Packet Sniffer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is IPS.',
                    ],
                    [
                        'answer' => 'Honeypot',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is IPS.',
                    ],
                    [
                        'answer' => 'IDS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is IPS.',
                    ],
                    [
                        'answer' => 'IPS',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: IPS.',
                    ],
                ],
            ],

            [
                'question' => 'An attacker redirects legitimate domain traffic to a fake IP address by manipulating local lookup caches. This is:',
                'options' => [
                    [
                        'answer' => 'Phishing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is DNS Cache Poisoning.',
                    ],
                    [
                        'answer' => 'MAC Spoofing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is DNS Cache Poisoning.',
                    ],
                    [
                        'answer' => 'DNS Cache Poisoning',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: DNS Cache Poisoning.',
                    ],
                    [
                        'answer' => 'ARP Poisoning',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is DNS Cache Poisoning.',
                    ],
                ],
            ],

            [
                'question' => 'What network security gateway inspects passing connection traffic against stateful rules to block unauthorized external access into an enterprise LAN?',
                'options' => [
                    [
                        'answer' => 'Network Switch',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Firewall.',
                    ],
                    [
                        'answer' => 'Firewall',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Firewall.',
                    ],
                    [
                        'answer' => 'Repeater',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Firewall.',
                    ],
                    [
                        'answer' => 'Modem',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Firewall.',
                    ],
                ],
            ],

            [
                'question' => 'What type of address is 00-1A-2B-3C-4D-5E?',
                'options' => [
                    [
                        'answer' => 'IPv6 Address',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is MAC Address.',
                    ],
                    [
                        'answer' => 'IPX Address',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is MAC Address.',
                    ],
                    [
                        'answer' => 'Port Number',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is MAC Address.',
                    ],
                    [
                        'answer' => 'MAC Address',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: MAC Address.',
                    ],
                ],
            ],

            [
                'question' => 'What physical transmission medium uses central copper conductors encased in dielectric insulation and woven metallic braiding to resist RF interference?',
                'options' => [
                    [
                        'answer' => 'Unshielded Twisted Pair',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Coaxial Cable.',
                    ],
                    [
                        'answer' => 'Coaxial Cable',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Coaxial Cable.',
                    ],
                    [
                        'answer' => 'Fiber Optic Cable',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Coaxial Cable.',
                    ],
                    [
                        'answer' => 'Ribbon Cable',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Coaxial Cable.',
                    ],
                ],
            ],

            [
                'question' => 'Which switching mechanism transmits complete data payloads from node to node, buffering the entirety of a message at intermediate hops before forwarding it?',
                'options' => [
                    [
                        'answer' => 'Circuit Switching',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Message Switching (Store-and-Forward).',
                    ],
                    [
                        'answer' => 'Cell Relay',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Message Switching (Store-and-Forward).',
                    ],
                    [
                        'answer' => 'Packet Switching',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Message Switching (Store-and-Forward).',
                    ],
                    [
                        'answer' => 'Message Switching (Store-and-Forward)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Message Switching (Store-and-Forward).',
                    ],
                ],
            ],

            [
                'question' => 'What parameter measures the delay time required for a data packet to travel from its source node across a network to its destination host?',
                'options' => [
                    [
                        'answer' => 'Latency',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Latency.',
                    ],
                    [
                        'answer' => 'Bandwidth',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Latency.',
                    ],
                    [
                        'answer' => 'Jitter',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Latency.',
                    ],
                    [
                        'answer' => 'Throughput',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Latency.',
                    ],
                ],
            ],

            [
                'question' => 'Which one-way hashing function generates a 128-bit digest and is now considered cryptographically broken for collision-sensitive security applications?',
                'options' => [
                    [
                        'answer' => 'SHA-256',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is MD5.',
                    ],
                    [
                        'answer' => 'CRC-32',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is MD5.',
                    ],
                    [
                        'answer' => 'SHA-3',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is MD5.',
                    ],
                    [
                        'answer' => 'MD5',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: MD5.',
                    ],
                ],
            ],

            [
                'question' => 'What component of an Operating System provides user-level interfaces to execute system commands using interactive command prompt input?',
                'options' => [
                    [
                        'answer' => 'System Kernel',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Command Shell / Interpreter.',
                    ],
                    [
                        'answer' => 'Command Shell / Interpreter',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Command Shell / Interpreter.',
                    ],
                    [
                        'answer' => 'Device Controller',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Command Shell / Interpreter.',
                    ],
                    [
                        'answer' => 'Memory Manager',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Command Shell / Interpreter.',
                    ],
                ],
            ],

            [
                'question' => 'In process management, what state transition occurs when an active running process makes an I/O request system call?',
                'options' => [
                    [
                        'answer' => 'Running → Ready',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Running → Waiting.',
                    ],
                    [
                        'answer' => 'Running → Waiting',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Running → Waiting.',
                    ],
                    [
                        'answer' => 'Waiting → Ready',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Running → Waiting.',
                    ],
                    [
                        'answer' => 'Ready → Running',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Running → Waiting.',
                    ],
                ],
            ],

            [
                'question' => 'Which CPU scheduling algorithm evaluates process ready queues using time quanta slices and operates on a preemptive circular queue framework?',
                'options' => [
                    [
                        'answer' => 'First-Come, First-Served',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Round Robin (RR).',
                    ],
                    [
                        'answer' => 'Shortest Job First',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Round Robin (RR).',
                    ],
                    [
                        'answer' => 'Round Robin (RR)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Round Robin (RR).',
                    ],
                    [
                        'answer' => 'Priority Scheduling',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Round Robin (RR).',
                    ],
                ],
            ],

            [
                'question' => 'In UNIX/Linux file systems, which terminal command displays active running system processes and their resource consumption in real time?',
                'options' => [
                    [
                        'answer' => 'ps',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is top.',
                    ],
                    [
                        'answer' => 'top',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: top.',
                    ],
                    [
                        'answer' => 'ls',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is top.',
                    ],
                    [
                        'answer' => 'df',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is top.',
                    ],
                ],
            ],

            [
                'question' => 'What internal MS-DOS command deletes specified files from a storage directory?',
                'options' => [
                    [
                        'answer' => 'RMDIR',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is DEL / ERASE.',
                    ],
                    [
                        'answer' => 'CHKDSK',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is DEL / ERASE.',
                    ],
                    [
                        'answer' => 'FORMAT',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is DEL / ERASE.',
                    ],
                    [
                        'answer' => 'DEL / ERASE',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: DEL / ERASE.',
                    ],
                ],
            ],

            [
                'question' => 'In OS memory management, what memory management technique swaps fixed-size program blocks between physical memory and secondary swap storage?',
                'options' => [
                    [
                        'answer' => 'Paging',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Paging.',
                    ],
                    [
                        'answer' => 'Segmentation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Paging.',
                    ],
                    [
                        'answer' => 'Dynamic Compaction',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Paging.',
                    ],
                    [
                        'answer' => 'Partition Pooling',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Paging.',
                    ],
                ],
            ],

            [
                'question' => 'In Relational Database Systems, what rule states that a foreign key attribute value must match an existing primary key value in the referenced parent table (or be NULL)?',
                'options' => [
                    [
                        'answer' => 'Referential Integrity',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Referential Integrity.',
                    ],
                    [
                        'answer' => 'Entity Integrity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Referential Integrity.',
                    ],
                    [
                        'answer' => 'Domain Integrity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Referential Integrity.',
                    ],
                    [
                        'answer' => 'User-Defined Integrity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Referential Integrity.',
                    ],
                ],
            ],

            [
                'question' => 'What database normalization form requires a table to be in 1NF while ensuring that every non-key column is fully functionally dependent on the primary key?',
                'options' => [
                    [
                        'answer' => 'First Normal Form (1NF)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Second Normal Form (2NF).',
                    ],
                    [
                        'answer' => 'Second Normal Form (2NF)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Second Normal Form (2NF).',
                    ],
                    [
                        'answer' => 'Third Normal Form (3NF)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Second Normal Form (2NF).',
                    ],
                    [
                        'answer' => 'Boyce-Codd Normal Form (BCNF)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Second Normal Form (2NF).',
                    ],
                ],
            ],

            [
                'question' => 'In Data Warehousing architectures, what process extracts raw operational data, transforms it into standardized dimensional formats, and loads it into a target data warehouse?',
                'options' => [
                    [
                        'answer' => 'OLTP Processing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is ETL (Extract, Transform, Load).',
                    ],
                    [
                        'answer' => 'Data Scrubbing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is ETL (Extract, Transform, Load).',
                    ],
                    [
                        'answer' => 'Index Optimization',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is ETL (Extract, Transform, Load).',
                    ],
                    [
                        'answer' => 'ETL (Extract, Transform, Load)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: ETL (Extract, Transform, Load).',
                    ],
                ],
            ],

            [
                'question' => 'In a Three-Tier Data Warehouse Architecture, what component resides in the Middle Tier?',
                'options' => [
                    [
                        'answer' => 'Operational Source Systems',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is OLAP Server.',
                    ],
                    [
                        'answer' => 'Relational Database Server',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is OLAP Server.',
                    ],
                    [
                        'answer' => 'Front-End Reporting Tools',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is OLAP Server.',
                    ],
                    [
                        'answer' => 'OLAP Server',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: OLAP Server.',
                    ],
                ],
            ],

            [
                'question' => 'Which structural HTML element creates a dropdown selection input menu within web forms?',
                'options' => [
                    [
                        'answer' => '<input type="dropdown">',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is <select>.',
                    ],
                    [
                        'answer' => '<select>',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: <select>.',
                    ],
                    [
                        'answer' => '<option>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is <select>.',
                    ],
                    [
                        'answer' => '<list>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is <select>.',
                    ],
                ],
            ],

            [
                'question' => 'Which cascading style sheet (CSS) rule approach isolates layout styles inside a standalone file linked to HTML documents via \\<link rel="stylesheet"> tags?',
                'options' => [
                    [
                        'answer' => 'Inline CSS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is External CSS.',
                    ],
                    [
                        'answer' => 'Internal CSS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is External CSS.',
                    ],
                    [
                        'answer' => 'External CSS',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: External CSS.',
                    ],
                    [
                        'answer' => 'Embedded Scripting',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is External CSS.',
                    ],
                ],
            ],

            [
                'question' => 'If a bank performs backups every night at 11:00 PM and a system crash occurs at 3:00 PM the next day, what is the maximum potential data loss experienced under this schedule?',
                'options' => [
                    [
                        'answer' => 'zero',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is 16 hr.',
                    ],
                    [
                        'answer' => '4 hr',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is 16 hr.',
                    ],
                    [
                        'answer' => '16 hr',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 16 hr.',
                    ],
                    [
                        'answer' => '24 hr',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is 16 hr.',
                    ],
                ],
            ],

            [
                'question' => 'To restore a system backed up using a Full backup on Sunday followed by daily Incremental backups through Thursday, which backup sets are required?',
                'options' => [
                    [
                        'answer' => 'Sunday Full + Every Incremental set from Monday through Thursday',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Sunday Full + Every Incremental set from Monday through Thursday.',
                    ],
                    [
                        'answer' => 'Sunday Full + Wednesday and Thursday Incremental sets',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Sunday Full + Every Incremental set from Monday through Thursday.',
                    ],
                    [
                        'answer' => 'Sunday Full + Thursday Incremental only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Sunday Full + Every Incremental set from Monday through Thursday.',
                    ],
                    [
                        'answer' => 'Thursday Incremental set only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Sunday Full + Every Incremental set from Monday through Thursday.',
                    ],
                ],
            ],

            [
                'question' => 'Adding a unique random string to a password prior to applying a cryptographic hash function is called:',
                'options' => [
                    [
                        'answer' => 'Encrypting',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Salting.',
                    ],
                    [
                        'answer' => 'Salting',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Salting.',
                    ],
                    [
                        'answer' => 'Masking',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Salting.',
                    ],
                    [
                        'answer' => 'Pepper',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Salting.',
                    ],
                ],
            ],

            [
                'question' => 'Which factor category does a fingerprint or iris scan belong to in authentication?',
                'options' => [
                    [
                        'answer' => 'Something You Know',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Something You Are.',
                    ],
                    [
                        'answer' => 'Something You Have',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Something You Are.',
                    ],
                    [
                        'answer' => 'Something You Are',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Something You Are.',
                    ],
                    [
                        'answer' => 'Somewhere You Are',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Something You Are.',
                    ],
                ],
            ],

            [
                'question' => 'Which network attack overloads targeted services by sending fragmented or modified IP packet flows designed to exhaust application memory pools?',
                'options' => [
                    [
                        'answer' => 'SQL Injection',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Denial of Service (DoS).',
                    ],
                    [
                        'answer' => 'Man-in-the-Middle',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Denial of Service (DoS).',
                    ],
                    [
                        'answer' => 'Cross-Site Scripting',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Denial of Service (DoS).',
                    ],
                    [
                        'answer' => 'Denial of Service (DoS)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Denial of Service (DoS).',
                    ],
                ],
            ],

            [
                'question' => 'A software security bug for which no vendor security patch currently exists is referred to as a:',
                'options' => [
                    [
                        'answer' => 'Rootkit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Zero-Day Vulnerability.',
                    ],
                    [
                        'answer' => 'Legacy Flaw',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Zero-Day Vulnerability.',
                    ],
                    [
                        'answer' => 'Insider Threat',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Zero-Day Vulnerability.',
                    ],
                    [
                        'answer' => 'Zero-Day Vulnerability',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Zero-Day Vulnerability.',
                    ],
                ],
            ],

            [
                'question' => 'What is the Number of members of the steering committee formed to implement ICT Policy2072?',
                'options' => [
                    [
                        'answer' => '10',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is 15.',
                    ],
                    [
                        'answer' => '11',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is 15.',
                    ],
                    [
                        'answer' => '14',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is 15.',
                    ],
                    [
                        'answer' => '15',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 15.',
                    ],
                ],
            ],

            [
                'question' => 'First fibre backbone ...?',
                'options' => [
                    [
                        'answer' => 'Kathmandu - Hetauda',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Kathmandu - Hetauda.',
                    ],
                    [
                        'answer' => 'Kathmandu-pokhara',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Kathmandu - Hetauda.',
                    ],
                    [
                        'answer' => 'kathmandu-Biratnagar',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Kathmandu - Hetauda.',
                    ],
                    [
                        'answer' => 'Kathmandu-Chitwan',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Kathmandu - Hetauda.',
                    ],
                ],
            ],

            [
                'question' => 'If an IS audit is outsourced to an external professional provider, who retains ultimate responsibility for audit planning, risk assessment, and follow-up?',
                'options' => [
                    [
                        'answer' => 'The external vendor',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is The Bank itself.',
                    ],
                    [
                        'answer' => 'The Bank itself',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: The Bank itself.',
                    ],
                    [
                        'answer' => 'Nepal Rastra Bank',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is The Bank itself.',
                    ],
                    [
                        'answer' => 'The Ministry of Finance',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is The Bank itself.',
                    ],
                ],
            ],

            [
                'question' => 'Under the Cyber Resilience Guidelines (2023) issued by NRB, what maximum timeframe is allowed for regulated financial entities to report significant cyber incidents to Nepal Rastra Bank after detection?',
                'options' => [
                    [
                        'answer' => 'Within 1 hour',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Within 4 hours.',
                    ],
                    [
                        'answer' => 'Within 48 hours',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Within 4 hours.',
                    ],
                    [
                        'answer' => 'Within 24 hours',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Within 4 hours.',
                    ],
                    [
                        'answer' => 'Within 4 hours',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Within 4 hours.',
                    ],
                ],
            ],

            [
                'question' => '... was issued date of  Cyber Resilience Guidelines 2023?',
                'options' => [
                    [
                        'answer' => '2079-10-05',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is 2080-10-05.',
                    ],
                    [
                        'answer' => '2080-10-05',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 2080-10-05.',
                    ],
                    [
                        'answer' => '2081-05-10',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is 2080-10-05.',
                    ],
                    [
                        'answer' => '2080-05-10',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is 2080-10-05.',
                    ],
                ],
            ],

            [
                'question' => 'Which core cybersecurity goal ensures that network services and banking resources remain accessible to authorized users when needed?',
                'options' => [
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Availability.',
                    ],
                    [
                        'answer' => 'Integrity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Availability.',
                    ],
                    [
                        'answer' => 'Availability',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Availability.',
                    ],
                    [
                        'answer' => 'Authenticity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Availability.',
                    ],
                ],
            ],

            [
                'question' => 'What is the fundamental target Recovery Time Objective (RTO) prescribed by the Guidelines for the safe resumption of critical operations following a cyber disruption?',
                'options' => [
                    [
                        'answer' => 'Resumption within 30 minutes',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Resumption within 2 hours.',
                    ],
                    [
                        'answer' => 'Resumption within 1 hour',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Resumption within 2 hours.',
                    ],
                    [
                        'answer' => 'Resumption within 2 hours',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Resumption within 2 hours.',
                    ],
                    [
                        'answer' => 'Resumption within end of business day',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The correct answer is Resumption within 2 hours.',
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
