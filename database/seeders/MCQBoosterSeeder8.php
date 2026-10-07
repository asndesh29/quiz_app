<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class MCQBoosterSeeder8 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'MCQ Booster 8',
            'description' => 'Computer Fundamentals, Computer Architecture, Networking, Operating Systems, Database, Web Technology, AI, Cybersecurity, ICT Policy, Electronic Transactions and NRB Guidelines MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which of the following input devices interprets pencil marks on paper?',
                'options' => [
                    [
                        'answer' => 'Punch card reader',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A punch card reader reads information encoded as punched holes in cards.',
                    ],
                    [
                        'answer' => 'Optical Mark Reader',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Optical Mark Reader. OMR detects and interprets marked areas, such as pencil marks, on specially designed forms.',
                    ],
                    [
                        'answer' => 'Hand writing detector',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A handwriting recognition system interprets handwritten characters rather than specifically detecting marked positions on forms.',
                    ],
                    [
                        'answer' => 'Optical scanner',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An optical scanner captures images or documents, while an OMR specifically detects marked areas.',
                    ],
                ],
            ],
            [
                'question' => 'The term GIGO is related to which characteristic of a computer?',
                'options' => [
                    [
                        'answer' => 'Speed',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Speed refers to how quickly a computer processes instructions and data.',
                    ],
                    [
                        'answer' => 'Automatic',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Automatic operation refers to a computer performing tasks with minimal human intervention.',
                    ],
                    [
                        'answer' => 'Accuracy',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Accuracy. GIGO means Garbage In, Garbage Out, emphasizing that incorrect input produces incorrect output.',
                    ],
                    [
                        'answer' => 'Reliability',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Reliability refers to the ability of a computer system to operate consistently and correctly over time.',
                    ],
                ],
            ],
            [
                'question' => 'Which branch of AI allows computers to interpret visual information from digital images or videos?',
                'options' => [
                    [
                        'answer' => 'Computer Vision',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Computer Vision. It enables computers to analyze and interpret images, videos, and other visual information.',
                    ],
                    [
                        'answer' => 'Natural Language Processing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. NLP focuses on understanding and processing human language.',
                    ],
                    [
                        'answer' => 'Robotics',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Robotics focuses on designing and controlling machines that interact with the physical world.',
                    ],
                    [
                        'answer' => 'Expert Systems',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Expert systems emulate decision-making by using knowledge bases and inference rules.',
                    ],
                ],
            ],
            [
                'question' => 'In a decentralized Blockchain architecture, what cryptographic mechanism generates a single fixed-length root hash from all transactions within a block header?',
                'options' => [
                    [
                        'answer' => 'Circular Linked List',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A circular linked list is a data structure and is not used to generate a blockchain transaction root hash.',
                    ],
                    [
                        'answer' => 'Merkle Tree (Hash Tree)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Merkle Tree (Hash Tree). A Merkle tree recursively hashes transaction data to produce a single Merkle root representing all transactions.',
                    ],
                    [
                        'answer' => 'B-Tree Index',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. B-trees are indexing data structures commonly used in databases and file systems.',
                    ],
                    [
                        'answer' => 'Parity Matrix',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A parity matrix is related to error detection/correction rather than blockchain transaction hashing.',
                    ],
                ],
            ],
            [
                'question' => 'What technical hazard directly increases inside a server room when relative humidity drops below 30%?',
                'options' => [
                    [
                        'answer' => 'Condensation buildup on circuit boards',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Condensation is more commonly associated with excessive humidity or temperature changes rather than very low humidity.',
                    ],
                    [
                        'answer' => 'Rapid oxidation of copper pins',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Low humidity does not directly cause rapid copper oxidation.',
                    ],
                    [
                        'answer' => 'Overheating of power supplies',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Low humidity itself is not the direct cause of power-supply overheating.',
                    ],
                    [
                        'answer' => 'Electrostatic Discharge',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Electrostatic Discharge. Very low humidity increases static electricity buildup, raising the risk of ESD damage to electronic components.',
                    ],
                ],
            ],
            [
                'question' => 'Which DNS record type maps a domain name directly to an IPv4 address?',
                'options' => [
                    [
                        'answer' => 'AAAA Record',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An AAAA record maps a domain name to an IPv6 address.',
                    ],
                    [
                        'answer' => 'MX Record',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An MX record identifies mail servers responsible for receiving email for a domain.',
                    ],
                    [
                        'answer' => 'A Record',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: A Record. An A record maps a domain or hostname to an IPv4 address.',
                    ],
                    [
                        'answer' => 'CNAME Record',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A CNAME record maps one domain name to another canonical domain name.',
                    ],
                ],
            ],
            [
                'question' => 'During the fetch phase of an instruction cycle, the contents of the Program Counter are transferred to:',
                'options' => [
                    [
                        'answer' => 'Memory Address Register (MAR)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Memory Address Register (MAR). The address held in the Program Counter is transferred to the MAR so the corresponding instruction can be fetched from memory.',
                    ],
                    [
                        'answer' => 'Accumulator (ACC)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The accumulator stores intermediate or arithmetic/logic results.',
                    ],
                    [
                        'answer' => 'Memory Buffer Register (MBR)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The MBR/MDR temporarily holds data or instructions being transferred to or from memory.',
                    ],
                    [
                        'answer' => 'Instruction Register (IR)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The fetched instruction is eventually loaded into the Instruction Register, but the PC address first goes to the MAR.',
                    ],
                ],
            ],
            [
                'question' => 'Cache memory operates primarily on which fundamental principle?',
                'options' => [
                    [
                        'answer' => 'Principle of Relativity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Principle of Relativity is a physics concept and is unrelated to cache operation.',
                    ],
                    [
                        'answer' => 'Memory Swapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Memory swapping is an operating-system technique for moving processes/pages between memory and storage.',
                    ],
                    [
                        'answer' => 'Locality of Reference',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Locality of Reference. Cache relies on temporal and spatial locality, expecting recently or nearby accessed data to be accessed again.',
                    ],
                    [
                        'answer' => 'Serialization Principle',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Serialization is not the fundamental principle behind CPU cache operation.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following best defines a Computer Bus in computer architecture?',
                'options' => [
                    [
                        'answer' => 'A dedicated mechanical link that supplies power to the CPU',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A computer bus carries signals and data rather than primarily supplying electrical power.',
                    ],
                    [
                        'answer' => 'A collection of physical wires or signal lines used to transfer data, address, and control signals between components',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: A collection of physical wires or signal lines used to transfer data, address, and control signals between components.',
                    ],
                    [
                        'answer' => 'A software protocol used for routing network packets inside the operating system',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A computer bus is a hardware communication pathway, not a software routing protocol.',
                    ],
                    [
                        'answer' => 'A high-speed cache memory unit located inside the Arithmetic Logic Unit (ALU)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cache memory is separate from the ALU and is not itself a computer bus.',
                    ],
                ],
            ],
            [
                'question' => 'Which bus line is responsible for indicating whether a Read or Write operation is being performed on memory?',
                'options' => [
                    [
                        'answer' => 'Control Bus',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Control Bus. Control signals such as Read and Write are carried by the control bus.',
                    ],
                    [
                        'answer' => 'Data Bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The data bus carries the actual data being transferred.',
                    ],
                    [
                        'answer' => 'Address Bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The address bus carries memory or I/O addresses.',
                    ],
                    [
                        'answer' => 'Expansion Bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An expansion bus provides communication between the computer and expansion devices; it is not specifically the Read/Write control line.',
                    ],
                ],
            ],
            [
                'question' => 'What type of architecture is primarily used inside microcontrollers like PIC and AVR (Arduino)?',
                'options' => [
                    [
                        'answer' => 'Von Neumann Architecture',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The specified PIC and AVR microcontroller families primarily use Harvard-style architectures.',
                    ],
                    [
                        'answer' => 'Harvard Architecture',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Harvard Architecture. Harvard architecture separates instruction and data memory/access paths, a design used in many microcontrollers including PIC and AVR families.',
                    ],
                    [
                        'answer' => 'CISC Architecture only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CISC/RISC describes instruction-set design and does not describe the primary memory architecture in this question.',
                    ],
                    [
                        'answer' => 'Mainframe Architecture',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Mainframe architecture refers to large enterprise computer systems, not the memory organization of these microcontrollers.',
                    ],
                ],
            ],
            [
                'question' => 'What system bus controller component resolves simultaneous hardware access requests between the CPU and Direct Memory Access (DMA) controllers?',
                'options' => [
                    [
                        'answer' => 'Bus Arbiter',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Bus Arbiter. It coordinates competing requests for control of a shared system bus.',
                    ],
                    [
                        'answer' => 'Interrupt Vector Table',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An Interrupt Vector Table contains addresses or references to interrupt service routines.',
                    ],
                    [
                        'answer' => 'Arithmetic Logic Unit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The ALU performs arithmetic and logical operations.',
                    ],
                    [
                        'answer' => 'Disk Controller',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A disk controller manages communication between the computer and storage devices.',
                    ],
                ],
            ],
            [
                'question' => 'Dynamic RAM (DRAM) requires periodic refreshing because its cells store charge in:',
                'options' => [
                    [
                        'answer' => 'Magnetic Cores',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Magnetic cores were used in older core-memory technology.',
                    ],
                    [
                        'answer' => 'Resistors',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DRAM cells do not use resistors as their primary charge-storage element.',
                    ],
                    [
                        'answer' => 'Flip-flops',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SRAM cells use flip-flop circuits and do not require periodic refresh in the same way DRAM does.',
                    ],
                    [
                        'answer' => 'Capacitors',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Capacitors. DRAM stores each bit as electrical charge in a capacitor, which gradually leaks and therefore requires refreshing.',
                    ],
                ],
            ],
            [
                'question' => 'Modulo-2 division used in CRC relies on which logical operation?',
                'options' => [
                    [
                        'answer' => 'OR',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CRC modulo-2 arithmetic does not use ordinary OR operations for division.',
                    ],
                    [
                        'answer' => 'AND',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CRC modulo-2 division primarily uses XOR rather than AND.',
                    ],
                    [
                        'answer' => 'XOR',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: XOR. Modulo-2 arithmetic treats addition and subtraction as XOR operations.',
                    ],
                    [
                        'answer' => 'NOT',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. NOT is a bitwise complement operation and is not the core operation used in CRC modulo-2 division.',
                    ],
                ],
            ],
            [
                'question' => 'Which device breaks down a network into multiple collision domains per port?',
                'options' => [
                    [
                        'answer' => 'Hub',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A hub creates a single shared collision domain among its ports.',
                    ],
                    [
                        'answer' => 'Passive Splitter',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A passive splitter divides a physical signal and does not create separate switched collision domains.',
                    ],
                    [
                        'answer' => 'Repeater',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A repeater regenerates signals and does not create a separate collision domain per port.',
                    ],
                    [
                        'answer' => 'Switch',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Switch. Each switch port normally represents a separate collision domain in traditional Ethernet networks.',
                    ],
                ],
            ],
            [
                'question' => 'Which switching technology guarantees constant bandwidth and zero queuing delay during transfer?',
                'options' => [
                    [
                        'answer' => 'Datagram Switching',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Datagram switching is connectionless and packets may experience variable delay and queuing.',
                    ],
                    [
                        'answer' => 'Circuit Switching',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Circuit Switching. A dedicated path and reserved resources can provide predictable bandwidth and avoid packet queuing during the established circuit.',
                    ],
                    [
                        'answer' => 'Message Switching',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Message switching uses store-and-forward techniques and can experience significant delays.',
                    ],
                    [
                        'answer' => 'Packet Switching',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Packet switching shares network resources and can experience variable queuing delays.',
                    ],
                ],
            ],
            [
                'question' => 'Which mechanism translates internal private IP addresses to a single external public IP using port numbers?',
                'options' => [
                    [
                        'answer' => 'Static NAT',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Static NAT maps private addresses to public addresses using fixed one-to-one mappings.',
                    ],
                    [
                        'answer' => 'Dynamic NAT',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Dynamic NAT maps private addresses to addresses from a public address pool.',
                    ],
                    [
                        'answer' => 'CIDR',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CIDR is a method for IP address allocation and routing prefix representation.',
                    ],
                    [
                        'answer' => 'PAT (Port Address Translation)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: PAT. PAT allows many private hosts to share one public IP by distinguishing connections using port numbers.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is NOT a characteristic of a Cryptographic Hash Function?',
                'options' => [
                    [
                        'answer' => 'Irreversible (One-way)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cryptographic hash functions are designed to be computationally infeasible to reverse.',
                    ],
                    [
                        'answer' => 'Requires a secret key for calculation',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Requires a secret key for calculation. Standard cryptographic hash functions do not require a secret key; keyed hashes such as HMAC are a separate construction.',
                    ],
                    [
                        'answer' => 'Deterministic output',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A hash function produces the same output for the same input.',
                    ],
                    [
                        'answer' => 'High collision resistance',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A secure cryptographic hash function is designed to make finding collisions computationally difficult.',
                    ],
                ],
            ],
            [
                'question' => 'Which protocol is an unencrypted alternative to SSH that operates over TCP port 23?',
                'options' => [
                    [
                        'answer' => 'SFTP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SFTP provides secure file transfer over an SSH connection.',
                    ],
                    [
                        'answer' => 'SNMP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SNMP is used for network management and monitoring.',
                    ],
                    [
                        'answer' => 'RDP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. RDP is Microsofts Remote Desktop Protocol.',
                    ],
                    [
                        'answer' => 'Telnet',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Telnet. Telnet traditionally uses TCP port 23 and transmits sessions without SSH-level encryption.',
                    ],
                ],
            ],
            [
                'question' => 'What is the unit of measurement for signal state changes per second?',
                'options' => [
                    [
                        'answer' => 'bps',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Bits per second measures the number of bits transmitted per second.',
                    ],
                    [
                        'answer' => 'Bit rate',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Bit rate describes bits transmitted per second rather than signal symbols/state changes per second.',
                    ],
                    [
                        'answer' => 'Baud rate',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Baud rate. Baud measures the number of symbols or signal changes transmitted per second.',
                    ],
                    [
                        'answer' => 'Hertz',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hertz measures cycles or occurrences per second and is used broadly for frequency, while baud specifically measures symbols per second.',
                    ],
                ],
            ],
            [
                'question' => 'Which software/hardware table is used by a Switch to map physical ports to hardware addresses?',
                'options' => [
                    [
                        'answer' => 'DNS Table',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DNS maps domain names to network information such as IP addresses.',
                    ],
                    [
                        'answer' => 'ARP Table',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An ARP table maps IP addresses to MAC addresses, rather than being the switch forwarding table that maps MAC addresses to ports.',
                    ],
                    [
                        'answer' => 'Routing Table',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A routing table maps network destinations to routes and next hops.',
                    ],
                    [
                        'answer' => 'CAM / MAC Table',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: CAM / MAC Table. A Layer 2 switch uses its MAC/CAM table to associate learned MAC addresses with switch ports.',
                    ],
                ],
            ],
            [
                'question' => 'Which institution introduced the first ATM in Nepal?',
                'options' => [
                    [
                        'answer' => 'Nepal Bank Limited',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The first ATM in Nepal is attributed to Himalayan Bank.',
                    ],
                    [
                        'answer' => 'Nabil Bank',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The first ATM in Nepal is attributed to Himalayan Bank.',
                    ],
                    [
                        'answer' => 'Himalayan Bank',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Himalayan Bank. Himalayan Bank introduced the first ATM in Nepal.',
                    ],
                    [
                        'answer' => 'Rastriya Banijya Bank',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The first ATM in Nepal is attributed to Himalayan Bank.',
                    ],
                ],
            ],
            [
                'question' => 'In Datagram Packet Switching, packet reassembly is performed at:',
                'options' => [
                    [
                        'answer' => 'The first switch node',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Datagram packets are independently routed and are not normally reassembled at the first switch.',
                    ],
                    [
                        'answer' => 'Every intermediate switch node',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Intermediate switches forward packets independently and do not normally perform final reassembly.',
                    ],
                    [
                        'answer' => 'The central gateway server',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Datagram networks do not require a central gateway to perform packet reassembly.',
                    ],
                    [
                        'answer' => 'The destination host',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: The destination host. Packets may take different routes and are reassembled by the receiving system.',
                    ],
                ],
            ],
            [
                'question' => 'Which bus connection carries the device address to activate a specific I/O interface?',
                'options' => [
                    [
                        'answer' => 'Data Bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The data bus carries the actual data being transferred.',
                    ],
                    [
                        'answer' => 'Control Bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The control bus carries control signals such as read/write commands.',
                    ],
                    [
                        'answer' => 'Address Bus',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Address Bus. It carries the address used to select a particular memory location or I/O device/interface.',
                    ],
                    [
                        'answer' => 'Expansion Bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An expansion bus connects expansion devices to the system but is not specifically the bus responsible for carrying the selected I/O address.',
                    ],
                ],
            ],
            [
                'question' => 'The vertical components of a table are referred to as:',
                'options' => [
                    [
                        'answer' => 'Rows',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Rows are the horizontal records/tuples in a relational table.',
                    ],
                    [
                        'answer' => 'Tuples',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A tuple represents a row in a relational table.',
                    ],
                    [
                        'answer' => 'Fields',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Fields. Fields or attributes represent the vertical columns of a table.',
                    ],
                    [
                        'answer' => 'Instances',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An instance generally represents the current collection/state of data in a database.',
                    ],
                ],
            ],
            [
                'question' => 'What happens when a user program makes a System Call?',
                'options' => [
                    [
                        'answer' => 'The system shuts down',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A system call is a normal mechanism for requesting operating-system services.',
                    ],
                    [
                        'answer' => 'CPU switches from User Mode to Kernel Mode',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: CPU switches from User Mode to Kernel Mode. A system call transfers execution to privileged OS code so the requested service can be performed.',
                    ],
                    [
                        'answer' => 'The Shell terminates execution',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A system call does not inherently terminate the shell.',
                    ],
                    [
                        'answer' => 'Device driver switches to BIOS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. System calls transfer control to the operating-system kernel, not directly from a device driver to BIOS.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is the primary role of an Operating System?',
                'options' => [
                    [
                        'answer' => 'Compiling high-level code into machine code',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Compilation is primarily performed by compilers, which are application/development software.',
                    ],
                    [
                        'answer' => 'Managing computer hardware and resources',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Managing computer hardware and resources. The OS manages CPU, memory, storage, devices, processes, and provides services to applications.',
                    ],
                    [
                        'answer' => 'Connecting network cables',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Physical network cabling is a hardware/network installation task.',
                    ],
                    [
                        'answer' => 'Designing graphics and word documents',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Graphics and word processing are functions of application software.',
                    ],
                ],
            ],
            [
                'question' => 'An operating system that guarantees response within a fixed strict deadline is known as:',
                'options' => [
                    [
                        'answer' => 'Real-Time OS',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Real-Time OS. A real-time operating system is designed to respond to events within specified timing constraints.',
                    ],
                    [
                        'answer' => 'Multiprogramming OS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Multiprogramming keeps multiple programs in memory to improve CPU utilization.',
                    ],
                    [
                        'answer' => 'Distributed OS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A distributed OS manages resources across multiple interconnected computers.',
                    ],
                    [
                        'answer' => 'Time-Sharing OS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Time-sharing provides interactive access by allocating CPU time slices among users/processes but does not guarantee strict deadlines.',
                    ],
                ],
            ],
            [
                'question' => 'Which symbol is used in UNIX to channel the output of one command as input to another?',
                'options' => [
                    [
                        'answer' => '>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The > operator redirects output to a file, typically replacing its contents.',
                    ],
                    [
                        'answer' => '&',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The ampersand can be used to run a command in the background in many Unix shells.',
                    ],
                    [
                        'answer' => '<',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The < operator redirects input from a file.',
                    ],
                    [
                        'answer' => '|',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: |. The pipe operator sends the standard output of one command to the standard input of another command.',
                    ],
                ],
            ],
            [
                'question' => 'Which system utility is used in Linux to check and repair file system inconsistencies?',
                'options' => [
                    [
                        'answer' => 'fdisk',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. fdisk is used to create and manage disk partitions.',
                    ],
                    [
                        'answer' => 'chkdsk',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CHKDSK is primarily a Windows/DOS utility for checking file systems and disks.',
                    ],
                    [
                        'answer' => 'defrag',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Defragmentation reorganizes fragmented data and is not the standard Linux file-system repair utility.',
                    ],
                    [
                        'answer' => 'fsck',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: fsck. File System Consistency Check examines and can repair supported Linux file systems.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following operating system types does not implement multitasking truly, allowing only one program to run in memory at a time?',
                'options' => [
                    [
                        'answer' => 'UNIX',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. UNIX supports multitasking and can run multiple processes concurrently.',
                    ],
                    [
                        'answer' => 'MS-DOS',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: MS-DOS. Traditional MS-DOS was primarily a single-tasking operating system.',
                    ],
                    [
                        'answer' => 'Windows 10',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Windows 10 is a multitasking operating system.',
                    ],
                    [
                        'answer' => 'Linux',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Linux supports preemptive multitasking and multiple concurrent processes.',
                    ],
                ],
            ],
            [
                'question' => 'In which operating system are similar jobs grouped together into batches and submitted to the processor using offline devices like punch cards?',
                'options' => [
                    [
                        'answer' => 'Interactive OS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Interactive systems are designed to provide direct interaction and quick responses to users.',
                    ],
                    [
                        'answer' => 'Time-Sharing OS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Time-sharing systems allocate CPU time among interactive users and processes.',
                    ],
                    [
                        'answer' => 'Multiprogramming OS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Multiprogramming keeps multiple jobs in memory to improve CPU utilization.',
                    ],
                    [
                        'answer' => 'Batch Processing OS',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Batch Processing OS. Similar jobs are collected into batches and processed with little or no direct user interaction.',
                    ],
                ],
            ],
            [
                'question' => 'In the ANSI-SPARC three-schema architecture, the level closest to the end-user is the:',
                'options' => [
                    [
                        'answer' => 'Internal Level',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The internal level describes the physical storage and implementation details of the database.',
                    ],
                    [
                        'answer' => 'Physical Level',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The physical/internal level is concerned with how data is stored.',
                    ],
                    [
                        'answer' => 'Conceptual Level',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The conceptual level provides a community-wide logical view of the entire database.',
                    ],
                    [
                        'answer' => 'External Level',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: External Level. It represents user-specific views of the database and is closest to end users.',
                    ],
                ],
            ],
            [
                'question' => 'Which metric measures the quantitative impurity or randomness in a Decision Tree node?',
                'options' => [
                    [
                        'answer' => 'Gini Index',
                        'is_correct' => false,
                        'explanation' => 'Incorrect as the exclusive answer. Gini Index measures node impurity, but Entropy also measures impurity/randomness.',
                    ],
                    [
                        'answer' => 'Entropy',
                        'is_correct' => false,
                        'explanation' => 'Incorrect as the exclusive answer. Entropy measures impurity/randomness, but Gini Index does as well.',
                    ],
                    [
                        'answer' => 'Lift',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Lift is commonly used to evaluate association rules, not Decision Tree node impurity.',
                    ],
                    [
                        'answer' => 'Both A and B',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Both A and B. Both Gini Index and Entropy are impurity measures used in Decision Tree learning.',
                    ],
                ],
            ],
            [
                'question' => 'A bank wants to predict the numeric continuous amount of credit limit for a customer. Which task should it use?',
                'options' => [
                    [
                        'answer' => 'Association Rule Mining',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Association rule mining discovers relationships or co-occurrence patterns between items or attributes.',
                    ],
                    [
                        'answer' => 'Clustering',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Clustering groups similar observations without requiring a predefined target value.',
                    ],
                    [
                        'answer' => 'Regression',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Regression. Regression predicts continuous numeric values such as a customer credit limit.',
                    ],
                    [
                        'answer' => 'Classification',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Classification predicts discrete categories or classes rather than continuous numeric values.',
                    ],
                ],
            ],
            [
                'question' => 'Which web server architecture is renowned for its event-driven, asynchronous processing model capable of handling thousands of concurrent connections with low memory usage?',
                'options' => [
                    [
                        'answer' => 'Apache HTTP Server (pre-fork)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Apache can support high concurrency, but its traditional prefork architecture uses separate processes and is not the event-driven model described here.',
                    ],
                    [
                        'answer' => 'Nginx',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Nginx. Nginx uses an event-driven, asynchronous architecture designed to efficiently handle many concurrent connections.',
                    ],
                    [
                        'answer' => 'Microsoft IIS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IIS is Microsoft\'s web server platform and does not match the specific architecture described in the question.',
                    ],
                    [
                        'answer' => 'Tomcat',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Tomcat is primarily a Java servlet/JSP container rather than the event-driven web server architecture described.',
                    ],
                ],
            ],
            [
                'question' => 'A situation where a requested item is located inside a proxy server\'s temporary cache storage and served immediately to the client is termed a:',
                'options' => [
                    [
                        'answer' => 'Cache Eviction',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cache eviction is the removal of an item from the cache.',
                    ],
                    [
                        'answer' => 'Cache Bypassing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cache bypassing occurs when a request avoids using cached content.',
                    ],
                    [
                        'answer' => 'Cache Miss',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A cache miss occurs when the requested item is not found in the cache.',
                    ],
                    [
                        'answer' => 'Cache Hit',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Cache Hit. A cache hit occurs when the requested resource is found in the cache and can be served directly.',
                    ],
                ],
            ],
            [
                'question' => 'Which tag is used to create the largest heading in HTML?',
                'options' => [
                    [
                        'answer' => '<head>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The <head> element contains document metadata and other information not normally displayed as page content.',
                    ],
                    [
                        'answer' => '<h6>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. <h6> represents the smallest heading level among the standard HTML heading elements.',
                    ],
                    [
                        'answer' => '<h1>',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: <h1>. It represents the highest-level heading in HTML.',
                    ],
                    [
                        'answer' => '<heading>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. <heading> is not a standard HTML heading element.',
                    ],
                ],
            ],
            [
                'question' => 'Which tag is used to define an unordered list?',
                'options' => [
                    [
                        'answer' => '<ol>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. <ol> creates an ordered list, normally displayed with numbers or letters.',
                    ],
                    [
                        'answer' => '<ul>',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: <ul>. The <ul> element defines an unordered list, typically displayed using bullet points.',
                    ],
                    [
                        'answer' => '<dl>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. <dl> defines a description/definition list.',
                    ],
                    [
                        'answer' => '<list>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. <list> is not a standard HTML list element.',
                    ],
                ],
            ],
            [
                'question' => 'The total count of rows in a table is called its:',
                'options' => [
                    [
                        'answer' => 'Domain',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A domain defines the permitted values for an attribute.',
                    ],
                    [
                        'answer' => 'Degree',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The degree of a relation is the number of attributes/columns.',
                    ],
                    [
                        'answer' => 'Cardinality',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Cardinality. In a relational table, cardinality is the number of rows/tuples.',
                    ],
                    [
                        'answer' => 'Schema',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A schema describes the structure or design of the database.',
                    ],
                ],
            ],
            [
                'question' => 'A Primary Key composed of two or more columns is referred to as a:',
                'options' => [
                    [
                        'answer' => 'Composite Key',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Composite Key. A composite key uses two or more attributes together to uniquely identify a row.',
                    ],
                    [
                        'answer' => 'Surrogate Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A surrogate key is an artificial/system-generated identifier, typically with no business meaning.',
                    ],
                    [
                        'answer' => 'Candidate Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A candidate key is any minimal set of attributes capable of uniquely identifying a row; it may be single or composite.',
                    ],
                    [
                        'answer' => 'Foreign Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A foreign key references a key in another table to establish a relationship.',
                    ],
                ],
            ],
            [
                'question' => 'Which type of UPS topology provides absolute zero transfer time (0 ms) during a utility power failure?',
                'options' => [
                    [
                        'answer' => 'Standby UPS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A standby UPS normally switches from utility power to battery/inverter power when the utility supply fails, causing a transfer interval.',
                    ],
                    [
                        'answer' => 'Off-line UPS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Off-line UPS systems have a transfer time when switching to battery operation.',
                    ],
                    [
                        'answer' => 'Line-Interactive UPS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Line-interactive UPS systems also have a small transfer time when moving to battery operation.',
                    ],
                    [
                        'answer' => 'Online Double-Conversion UPS',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Online Double-Conversion UPS. The load is continuously supplied through the inverter, so there is effectively no transfer time during utility failure.',
                    ],
                ],
            ],
            [
                'question' => 'An email disguised as an official communication from a bank, asking the recipient to click a link and verify their login details immediately, is an example of:',
                'options' => [
                    [
                        'answer' => 'Pharming',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Pharming redirects users to fraudulent websites, often by manipulating DNS or host information.',
                    ],
                    [
                        'answer' => 'Phishing',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Phishing. Phishing uses deceptive messages or websites to trick users into revealing credentials or sensitive information.',
                    ],
                    [
                        'answer' => 'IP Spoofing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IP spoofing involves falsifying the source IP address of network packets.',
                    ],
                    [
                        'answer' => 'Smishing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Smishing is phishing conducted through SMS or text messages.',
                    ],
                ],
            ],
            [
                'question' => 'What does the term "Malware" stand for?',
                'options' => [
                    [
                        'answer' => 'Main Allocation Software',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the meaning of malware.',
                    ],
                    [
                        'answer' => 'Malfunctioning Hardware',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Malware refers to malicious software, not malfunctioning hardware.',
                    ],
                    [
                        'answer' => 'Macro Execution Code',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the expansion of malware.',
                    ],
                    [
                        'answer' => 'Malicious Software',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Malicious Software. Malware is a general term for software intentionally designed to harm, exploit, disrupt, or gain unauthorized access.',
                    ],
                ],
            ],
            [
                'question' => 'Under the institutional arrangement of ICT Policy 2072, who chairs the National Information and Communication Technology Council (NICTC)?',
                'options' => [
                    [
                        'answer' => 'Ministry of Information and Communications',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The NICTC is chaired at the highest executive level by the Prime Minister.',
                    ],
                    [
                        'answer' => 'Prime Minister',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Prime Minister. Under the ICT Policy 2072 institutional arrangement, the Prime Minister chairs the NICTC.',
                    ],
                    [
                        'answer' => 'Chief Secretary of Government of Nepal',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Chief Secretary has important administrative responsibilities but does not chair the NICTC.',
                    ],
                    [
                        'answer' => 'Chairman of Nepal Telecommunications Authority',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The NTA Chairperson is not the chair of the NICTC.',
                    ],
                ],
            ],
            [
                'question' => 'What is the jurisdictional applicability of the Electronic Transactions Act, 2063?',
                'options' => [
                    [
                        'answer' => 'Throughout Nepal, and to any person residing anywhere who commits an offence under this Act outside Nepal involving computer resources located in Nepal',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Throughout Nepal, and to any person residing anywhere who commits an offence under this Act outside Nepal involving computer resources located in Nepal.',
                    ],
                    [
                        'answer' => 'Only to citizens residing within the geographic territory of Nepal',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Act can have extraterritorial applicability in specified circumstances involving computer resources located in Nepal.',
                    ],
                    [
                        'answer' => 'Exclusively to registered financial institutions and IT firms in Nepal',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Act is not limited only to financial institutions and IT companies.',
                    ],
                    [
                        'answer' => 'To all government agencies of Nepal only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Act applies more broadly than only to government agencies.',
                    ],
                ],
            ],
            [
                'question' => 'According to the Cyber Resilience Guidelines (CRG) 2023 issued by Nepal Rastra Bank, which legal/monetary policy provision provided the authority to issue this guideline?',
                'options' => [
                    [
                        'answer' => 'Monetary Policy 2021/22, Policy Number 105',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The referenced provision for the CRG 2023 is Monetary Policy 2022/23, Policy Number 128.',
                    ],
                    [
                        'answer' => 'Monetary Policy 2022/23, Policy Number 128',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Monetary Policy 2022/23, Policy Number 128.',
                    ],
                    [
                        'answer' => 'Payment and Settlement Act 2075, Section 12',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the specific monetary policy provision cited as the authority for the guideline.',
                    ],
                    [
                        'answer' => 'NRB Act 2058, Section 79',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The question specifically refers to the monetary policy provision associated with issuance of the CRG 2023.',
                    ],
                ],
            ],
            [
                'question' => 'What legal status is granted to electronic records under Section 4 of the Act?',
                'options' => [
                    [
                        'answer' => 'They are treated as secondary hearsay evidence requiring oral testimony',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Section 4 provides legal recognition to electronic records rather than treating them merely as secondary hearsay evidence.',
                    ],
                    [
                        'answer' => 'They are valid only if produced before a High Court',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Electronic records do not require production before a High Court simply to have legal validity.',
                    ],
                    [
                        'answer' => 'They carry equal legal validity, enforceability, and effect as written or printed records',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: They carry equal legal validity, enforceability, and effect as written or printed records.',
                    ],
                    [
                        'answer' => 'They are invalid unless authenticated by a notary public',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Act does not make notarization a universal prerequisite for the legal recognition of electronic records.',
                    ],
                ],
            ],
            [
                'question' => 'Which international IT control framework is encouraged by NRB for implementation in commercial banks?',
                'options' => [
                    [
                        'answer' => 'NIST',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. NIST provides widely used cybersecurity frameworks, but the framework specifically identified in the question is COBIT.',
                    ],
                    [
                        'answer' => 'COBIT',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: COBIT. COBIT is an IT governance and control framework used to align IT processes with organizational objectives.',
                    ],
                    [
                        'answer' => 'TOGAF',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. TOGAF is primarily an enterprise architecture framework.',
                    ],
                    [
                        'answer' => 'ITIL',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. ITIL is primarily a framework for IT service management rather than the specific IT control framework referenced here.',
                    ],
                ],
            ],
            [
                'question' => 'Mobile banking services provided by commercial banks in Nepal are restricted to accounts in which currency?',
                'options' => [
                    [
                        'answer' => 'US Dollars only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Mobile banking services are not restricted to US Dollar accounts only.',
                    ],
                    [
                        'answer' => 'Nepalese Currency only',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Nepalese Currency only. The stated restriction for mobile banking services provided by commercial banks in Nepal is for Nepalese currency accounts.',
                    ],
                    [
                        'answer' => 'Both US and Nepalese currency',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. According to the stated question and answer key, the restriction is to Nepalese currency.',
                    ],
                    [
                        'answer' => 'Indian and Nepalese currency',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. According to the stated question and answer key, the restriction is to Nepalese currency.',
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
