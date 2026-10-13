<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class McqBoosterSeeder12 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'MCQ Booster 12',
            'description' => 'Computer Fundamentals, Computer Architecture, Networking, Operating Systems, Database, Web Technology, AI, Cybersecurity, ICT Policy, Electronic Transactions and NRB Guidelines MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Microcomputers (PCs) like Apple and Vector were first imported into Nepal around:',
                'options' => [
                    [
                        'answer' => '2028 B.S.',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 2028 B.S.',
                    ],
                    [
                        'answer' => '2039 B.S.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 2039 B.S. is not the provided correct answer.',
                    ],
                    [
                        'answer' => '2051 B.S.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 2051 B.S. is not the provided correct answer.',
                    ],
                    [
                        'answer' => '2060 B.S.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 2060 B.S. is not the provided correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'The Government Integrated Data Center (GIDC) is located at:',
                'options' => [
                    [
                        'answer' => 'Singha Durbar',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Singha Durbar.',
                    ],
                    [
                        'answer' => 'Harihar Bhawan',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Harihar Bhawan is not the provided correct answer.',
                    ],
                    [
                        'answer' => 'IT Park Banepa',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IT Park Banepa is not the provided correct answer.',
                    ],
                    [
                        'answer' => 'Pulchowk',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Pulchowk is not the provided correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which computer bus is strictly unidirectional under normal processing conditions?',
                'options' => [
                    [
                        'answer' => 'Data Bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The data bus is generally bidirectional.',
                    ],
                    [
                        'answer' => 'Control Bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The control bus carries signals in different directions depending on the operation.',
                    ],
                    [
                        'answer' => 'Expansion Bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An expansion bus can support bidirectional communication.',
                    ],
                    [
                        'answer' => 'Address Bus',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Address Bus. In the traditional processor model, addresses are sent from the CPU to memory or I/O devices.',
                    ],
                ],
            ],
            [
                'question' => 'Which algorithm constructs a set of decision trees and merges their results to obtain a more accurate prediction?',
                'options' => [
                    [
                        'answer' => 'Linear Regression',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Linear Regression models relationships between variables using a linear equation.',
                    ],
                    [
                        'answer' => 'K-Means Clustering',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. K-Means Clustering groups data into clusters.',
                    ],
                    [
                        'answer' => 'Random Forest',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Random Forest. It combines predictions from multiple decision trees.',
                    ],
                    [
                        'answer' => 'Vector Forest',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Random Forest is the established ensemble learning algorithm described.',
                    ],
                ],
            ],
            [
                'question' => 'What is the genesis block in a Blockchain?',
                'options' => [
                    [
                        'answer' => 'The first block of a Blockchain network',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: The first block of a Blockchain network.',
                    ],
                    [
                        'answer' => 'The most recently mined block',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The most recently mined block is a later block in the chain.',
                    ],
                    [
                        'answer' => 'A rejected block during consensus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A rejected block is not the genesis block.',
                    ],
                    [
                        'answer' => 'A block containing invalid transactions',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The genesis block is the initial block of the blockchain.',
                    ],
                ],
            ],
            [
                'question' => 'Which organization handles domain name allocations and IP address administration globally?',
                'options' => [
                    [
                        'answer' => 'IEEE (Institute of Electrical and Electronics Engineers)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IEEE develops technical standards and supports engineering research.',
                    ],
                    [
                        'answer' => 'W3C (World Wide Web Consortium)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. W3C develops standards for the World Wide Web.',
                    ],
                    [
                        'answer' => 'ICANN (Internet Corporation for Assigned Names and Numbers)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: ICANN. It coordinates the global DNS and IP address allocation system through the relevant registry organizations.',
                    ],
                    [
                        'answer' => 'IETF (Internet Engineering Task Force)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IETF develops Internet technical standards and protocols.',
                    ],
                ],
            ],
            [
                'question' => 'Why is Class ABC Dry Chemical Powder strongly discouraged for use inside server rooms?',
                'options' => [
                    [
                        'answer' => 'It is highly conductive to electricity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Electrical conductivity is not the primary reason for avoiding ABC dry chemical powder in server rooms.',
                    ],
                    [
                        'answer' => 'It leaves a fine corrosive residue that ruins electronic components',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: It leaves a fine corrosive residue that can contaminate and damage sensitive electronic equipment.',
                    ],
                    [
                        'answer' => 'It ignites upon contact with silicone',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Ignition upon contact with silicone is not the reason.',
                    ],
                    [
                        'answer' => 'It increases room humidity instantly',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Increased humidity is not the primary concern.',
                    ],
                ],
            ],
            [
                'question' => 'Which bit is used in Write-Back cache to indicate that a cache line has been modified?',
                'options' => [
                    [
                        'answer' => 'Valid Bit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The valid bit indicates whether a cache line contains valid data.',
                    ],
                    [
                        'answer' => 'Parity Bit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A parity bit is used for error detection.',
                    ],
                    [
                        'answer' => 'Dirty Bit',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Dirty Bit. It indicates that a cache line has been modified and may need to be written back to main memory.',
                    ],
                    [
                        'answer' => 'Reference Bit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A reference bit typically tracks whether a cache line or memory page has been accessed.',
                    ],
                ],
            ],
            [
                'question' => 'Cache memory is:',
                'options' => [
                    [
                        'answer' => 'Non-volatile',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Typical CPU cache memory loses its contents when power is removed.',
                    ],
                    [
                        'answer' => 'Volatile',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Volatile. Cache memory typically uses SRAM and requires power to retain data.',
                    ],
                    [
                        'answer' => 'Permanent',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cache memory does not permanently retain its contents.',
                    ],
                    [
                        'answer' => 'Magnetic',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Modern CPU cache memory is semiconductor memory, typically SRAM.',
                    ],
                ],
            ],
            [
                'question' => 'Which component acts as a bridge between the high-speed CPU/RAM bus and the slower peripheral expansion buses (like PCI/USB) in traditional motherboard chipsets?',
                'options' => [
                    [
                        'answer' => 'Southbridge',
                        'is_correct' => true,
                        'explanation' => 'Correct answer according to the supplied quiz: Southbridge. Traditionally, the Southbridge handles lower-speed I/O interfaces, while the Northbridge connects the CPU to RAM and high-speed buses.',
                    ],
                    [
                        'answer' => 'Northbridge',
                        'is_correct' => false,
                        'explanation' => 'Incorrect according to the supplied quiz. Traditionally, the Northbridge connects the CPU with RAM and high-speed components.',
                    ],
                    [
                        'answer' => 'Super I/O Controller',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A Super I/O controller manages selected legacy interfaces and peripheral functions.',
                    ],
                    [
                        'answer' => 'Power Supply Unit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A Power Supply Unit provides electrical power to computer components.',
                    ],
                ],
            ],
            [
                'question' => 'Small Computer System Interface (SCSI) is best classified as which type of bus?',
                'options' => [
                    [
                        'answer' => 'Internal CPU local bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SCSI is primarily an interface for connecting peripheral devices.',
                    ],
                    [
                        'answer' => 'High-performance Parallel/Serial bus used primarily for storage peripherals and servers',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: High-performance Parallel/Serial bus used primarily for storage peripherals and servers.',
                    ],
                    [
                        'answer' => 'Video expansion bus designed exclusively for graphics cards',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SCSI is not an interface exclusively designed for graphics cards.',
                    ],
                    [
                        'answer' => 'Memory-only caching bus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SCSI is used to connect storage and other supported peripherals.',
                    ],
                ],
            ],
            [
                'question' => 'Which device is best suited for printing large-scale engineering drawings and cadastral maps?',
                'options' => [
                    [
                        'answer' => 'Laser Printer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Standard laser printers are generally less suitable for oversized technical drawings.',
                    ],
                    [
                        'answer' => 'Thermal Printer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Thermal printers are commonly used for receipts, labels, and similar outputs.',
                    ],
                    [
                        'answer' => 'Plotter',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Plotter. Large-format plotters are designed for engineering drawings, maps, and technical plans.',
                    ],
                    [
                        'answer' => 'Dot Matrix Printer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Dot matrix printers are impact printers commonly used for multipart forms and continuous paper.',
                    ],
                ],
            ],
            [
                'question' => 'Computer bootup routines (BIOS) are permanently stored in which memory type?',
                'options' => [
                    [
                        'answer' => 'RAM',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. RAM is volatile and does not retain its contents when power is removed.',
                    ],
                    [
                        'answer' => 'Virtual Memory',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Virtual memory is a memory-management technique that uses address translation and storage.',
                    ],
                    [
                        'answer' => 'ROM',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: ROM. Traditionally, BIOS firmware was stored in ROM; modern systems generally use flash memory.',
                    ],
                    [
                        'answer' => 'Hard Disk',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The traditional BIOS firmware is stored in non-volatile firmware memory rather than the hard disk.',
                    ],
                ],
            ],
            [
                'question' => 'Which component inside an I/O interface determines whether a received address matches that specific interface?',
                'options' => [
                    [
                        'answer' => 'Data Buffer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A data buffer temporarily stores data being transferred.',
                    ],
                    [
                        'answer' => 'Status Register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A status register stores flags describing the interface state.',
                    ],
                    [
                        'answer' => 'Address Decoder',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Address Decoder. It determines whether the received address corresponds to the particular I/O interface.',
                    ],
                    [
                        'answer' => 'Timing Circuit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A timing circuit coordinates the timing of interface operations.',
                    ],
                ],
            ],
            [
                'question' => 'Which register in an I/O interface holds state flags such as BUSY, READY, and ERROR?',
                'options' => [
                    [
                        'answer' => 'Control Register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A control register typically stores commands and configuration settings.',
                    ],
                    [
                        'answer' => 'Data Register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A data register holds data being transferred.',
                    ],
                    [
                        'answer' => 'Address Register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An address register holds an address used in an operation.',
                    ],
                    [
                        'answer' => 'Status Register',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Status Register. It stores flags indicating conditions such as BUSY, READY, and ERROR.',
                    ],
                ],
            ],
            [
                'question' => 'What disk scheduling algorithm offers minimum average seek time but risks starvation?',
                'options' => [
                    [
                        'answer' => 'SSTF',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: SSTF (Shortest Seek Time First). It services the request closest to the current head position but can cause starvation for distant requests.',
                    ],
                    [
                        'answer' => 'SCAN',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SCAN services requests while moving the disk head in both directions, generally reducing starvation.',
                    ],
                    [
                        'answer' => 'FCFS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. FCFS services requests in arrival order and does not prioritize the shortest seek distance.',
                    ],
                    [
                        'answer' => 'C-SCAN',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. C-SCAN services requests in one direction and returns to the beginning, providing more uniform waiting times.',
                    ],
                ],
            ],
            [
                'question' => 'Modern high-speed SSD protocol replacing legacy SATA AHCI is called:',
                'options' => [
                    [
                        'answer' => 'SCSI',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SCSI is a storage interface family and is not the protocol described in this question.',
                    ],
                    [
                        'answer' => 'IDE',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IDE is an older storage interface.',
                    ],
                    [
                        'answer' => 'PATA',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. PATA is an older parallel storage interface.',
                    ],
                    [
                        'answer' => 'NVMe',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: NVMe (Non-Volatile Memory Express). It is designed for high-performance storage devices, commonly over PCIe.',
                    ],
                ],
            ],
            [
                'question' => 'How is data erased in an EPROM (Erasable Programmable Read-Only Memory) chip?',
                'options' => [
                    [
                        'answer' => 'By applying a high electrical current pulse to the erase pin',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Traditional EPROM chips are erased using ultraviolet light.',
                    ],
                    [
                        'answer' => 'By exposing the chip to strong Ultraviolet (UV) light through its quartz window',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: By exposing the chip to strong ultraviolet light through its quartz window.',
                    ],
                    [
                        'answer' => 'By executing a specialized software command in the BIOS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Traditional EPROM cannot be erased using an ordinary BIOS software command.',
                    ],
                    [
                        'answer' => 'By placing the chip in a strong magnetic field',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Magnetic fields are not used to erase EPROM chips.',
                    ],
                ],
            ],
            [
                'question' => 'The condition status of an arithmetic calculation (e.g., zero result, carry generated) is stored in the:',
                'options' => [
                    [
                        'answer' => 'Accumulator',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The accumulator stores arithmetic and logical operation results.',
                    ],
                    [
                        'answer' => 'Instruction Register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The instruction register holds the current instruction.',
                    ],
                    [
                        'answer' => 'Flag Register / CCR',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Flag Register / CCR. It stores condition flags such as zero, carry, sign, and overflow.',
                    ],
                    [
                        'answer' => 'Temporary Register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A temporary register holds intermediate values during processing.',
                    ],
                ],
            ],
            [
                'question' => 'The "Load/Store" architecture is an exclusive characteristic of:',
                'options' => [
                    [
                        'answer' => 'CISC',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Traditional CISC architectures may allow instructions to operate directly on memory operands.',
                    ],
                    [
                        'answer' => 'RISC',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: RISC. Load/store architectures perform memory access through explicit load and store instructions, while arithmetic operations generally use registers.',
                    ],
                    [
                        'answer' => 'Mainframe Processors',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Mainframe processors are a class of systems and are not defined exclusively by this architectural feature.',
                    ],
                    [
                        'answer' => 'Accumulator Processors',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Accumulator architectures organize many operations around a dedicated accumulator register.',
                    ],
                ],
            ],
            [
                'question' => 'What is the main advantage of Von Neumann Architecture over Harvard Architecture?',
                'options' => [
                    [
                        'answer' => 'Faster execution throughput',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Separate instruction and data paths can give Harvard architecture higher throughput.',
                    ],
                    [
                        'answer' => 'Dual parallel bus paths',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Separate instruction and data paths are a characteristic of Harvard architecture.',
                    ],
                    [
                        'answer' => 'Flexible memory usage and lower hardware cost',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Flexible memory usage and lower hardware cost. Von Neumann architecture uses a shared memory space for instructions and data.',
                    ],
                    [
                        'answer' => 'No memory bottleneck',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Von Neumann architecture can experience the Von Neumann bottleneck because instructions and data share a path.',
                    ],
                ],
            ],
            [
                'question' => 'How many collision domains are present in an 8-port Switch?',
                'options' => [
                    [
                        'answer' => '8',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 8. In the traditional Ethernet switching model, each switch port represents a separate collision domain.',
                    ],
                    [
                        'answer' => '4',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Each switch port, rather than each pair of ports, represents a separate collision domain.',
                    ],
                    [
                        'answer' => '1',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A switch separates collision domains between its ports.',
                    ],
                    [
                        'answer' => '0',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Each switch port is considered a separate collision domain, even though full-duplex links eliminate collisions in normal operation.',
                    ],
                ],
            ],
            [
                'question' => 'The conversion of a digital signal into an analog signal by a modem is called:',
                'options' => [
                    [
                        'answer' => 'Compression',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Compression reduces the amount of data needed to represent information.',
                    ],
                    [
                        'answer' => 'Encryption',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Encryption transforms information to protect its confidentiality.',
                    ],
                    [
                        'answer' => 'Demodulation',
                        'is_correct' => true,
                        'explanation' => 'Correct answer according to the supplied quiz: Demodulation. Technically, modulation converts information into a suitable modulated signal, while demodulation extracts information from a modulated carrier.',
                    ],
                    [
                        'answer' => 'Modulation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect according to the supplied quiz. Technically, modulation is the process used to encode information onto a carrier signal.',
                    ],
                ],
            ],
            [
                'question' => 'Class D IP addresses are explicitly reserved for:',
                'options' => [
                    [
                        'answer' => 'Experimental research',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Class D addresses are not reserved for experimental research.',
                    ],
                    [
                        'answer' => 'Unicast host routing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Unicast traffic generally uses Class A, B, or C addresses in the historical classful addressing model.',
                    ],
                    [
                        'answer' => 'Default gateway routing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Default gateway routing does not define Class D addresses.',
                    ],
                    [
                        'answer' => 'Multicasting',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Multicasting. Class D IPv4 addresses occupy the range 224.0.0.0 to 239.255.255.255.',
                    ],
                ],
            ],
            [
                'question' => 'What vulnerability occurs when an attacker captures valid authentication packets and retransmits them later?',
                'options' => [
                    [
                        'answer' => 'Replay Attack',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Replay Attack. The attacker retransmits previously captured valid messages to attempt unauthorized access or repeat an operation.',
                    ],
                    [
                        'answer' => 'Brute Force Attack',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A brute-force attack tries many possible passwords or keys.',
                    ],
                    [
                        'answer' => 'Phishing Attack',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Phishing attempts to trick users into revealing information or taking unsafe actions.',
                    ],
                    [
                        'answer' => 'SQL Injection',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SQL injection involves manipulating database queries through unsafe input handling.',
                    ],
                ],
            ],
            [
                'question' => 'What happens to packets in Datagram Packet Switching if an intermediate route fails?',
                'options' => [
                    [
                        'answer' => 'Entire call drops completely',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Datagram packet switching does not establish a dedicated circuit for the entire communication.',
                    ],
                    [
                        'answer' => 'Transmission halts forever',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Network routing can adapt to failures when alternative routes are available.',
                    ],
                    [
                        'answer' => 'Subsequent packets are dynamically rerouted via alternative paths',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Subsequent packets are dynamically rerouted via alternative paths when routing updates and alternative routes permit.',
                    ],
                    [
                        'answer' => 'Packets are discarded with no recovery option',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Packet loss can occur, but the network may reroute subsequent packets and higher-layer protocols may retransmit lost data.',
                    ],
                ],
            ],
            [
                'question' => 'Why is Message Switching unsuitable for interactive voice traffic?',
                'options' => [
                    [
                        'answer' => 'High hardware costs',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. High hardware costs are not the primary limitation described.',
                    ],
                    [
                        'answer' => 'Excessive queuing and storage delays at intermediate nodes',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Excessive queuing and storage delays at intermediate nodes. Message switching can introduce delays that are unsuitable for real-time voice communication.',
                    ],
                    [
                        'answer' => 'Lack of security protocols',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Security protocols are not the defining reason message switching is unsuitable for interactive voice.',
                    ],
                    [
                        'answer' => 'Inability to transmit digital bits',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Message switching can transmit digital information.',
                    ],
                ],
            ],
            [
                'question' => 'Which element is NOT part of the classic WIMP architecture in Graphical User Interfaces?',
                'options' => [
                    [
                        'answer' => 'Windows',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Windows is the W in WIMP.',
                    ],
                    [
                        'answer' => 'Icons',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Icons is the I in WIMP.',
                    ],
                    [
                        'answer' => 'Menus',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Menus is the M in WIMP.',
                    ],
                    [
                        'answer' => 'Processes',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Processes. WIMP stands for Windows, Icons, Menus, and Pointer.',
                    ],
                ],
            ],
            [
                'question' => 'A situation where a faulty kernel-mode driver crashes the entire system is most commonly associated with:',
                'options' => [
                    [
                        'answer' => 'Monolithic Kernels',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Monolithic Kernels. Kernel-mode drivers share the kernel address space, so a serious driver fault can crash the whole operating system.',
                    ],
                    [
                        'answer' => 'Microkernels',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Microkernels aim to isolate many services in user space, reducing the impact of some component failures.',
                    ],
                    [
                        'answer' => 'Virtual Machines',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A virtual machine is an isolated computing environment and is not the kernel architecture described.',
                    ],
                    [
                        'answer' => 'Command Line Interfaces',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A command-line interface is a way to interact with a system, not a kernel architecture.',
                    ],
                ],
            ],
            [
                'question' => 'A process is best defined as:',
                'options' => [
                    [
                        'answer' => 'A program stored permanently on disk',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A program stored on disk is a passive set of instructions.',
                    ],
                    [
                        'answer' => 'A program in execution loaded in memory',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: A program in execution loaded in memory. A process also includes execution state and associated operating system resources.',
                    ],
                    [
                        'answer' => 'A text file containing commands',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A text file containing commands is not necessarily an executing process.',
                    ],
                    [
                        'answer' => 'An electrical signal inside CPU',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A process is an operating system abstraction, not an individual electrical signal.',
                    ],
                ],
            ],
            [
                'question' => 'What security mechanism prompts Windows users for permission when an application attempts administrative system changes?',
                'options' => [
                    [
                        'answer' => 'Access Control List (ACL)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An ACL specifies permissions for objects and resources.',
                    ],
                    [
                        'answer' => 'Data Execution Prevention (DEP)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DEP helps prevent code execution from certain memory regions.',
                    ],
                    [
                        'answer' => 'User Account Control (UAC)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: User Account Control (UAC). It prompts for consent or credentials when an operation requires elevation.',
                    ],
                    [
                        'answer' => 'Firewall',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A firewall controls network traffic according to security rules.',
                    ],
                ],
            ],
            [
                'question' => 'Operating system feature ASLR stands for:',
                'options' => [
                    [
                        'answer' => 'Address Space Layout Randomization',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Address Space Layout Randomization. It randomizes the memory locations used by program components to make exploitation more difficult.',
                    ],
                    [
                        'answer' => 'Automated Security Log Reporting',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the expansion of ASLR.',
                    ],
                    [
                        'answer' => 'Advanced System Level Recovery',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the expansion of ASLR.',
                    ],
                    [
                        'answer' => 'Access System Level Restriction',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the expansion of ASLR.',
                    ],
                ],
            ],
            [
                'question' => 'Indefinite waiting or starvation in Priority Scheduling can be solved using:',
                'options' => [
                    [
                        'answer' => 'Paging',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Paging is a memory management technique.',
                    ],
                    [
                        'answer' => 'Context Switching',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Context switching saves and restores process execution state but does not inherently prevent starvation.',
                    ],
                    [
                        'answer' => 'Aging',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Aging. It gradually increases the priority of waiting processes so that they eventually receive CPU time.',
                    ],
                    [
                        'answer' => 'Round Robin',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Round Robin is a separate scheduling algorithm; aging is the standard solution for starvation in priority scheduling.',
                    ],
                ],
            ],
            [
                'question' => 'What is the primary objective of a Multiprogramming Operating System?',
                'options' => [
                    [
                        'answer' => 'Minimize CPU response time for interactive users',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Minimizing interactive response time is more closely associated with time-sharing systems.',
                    ],
                    [
                        'answer' => 'Provide real-time response to industrial sensor events',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is a primary concern of real-time operating systems.',
                    ],
                    [
                        'answer' => 'Allow multiple CPUs to process a single task simultaneously',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Multiprocessing involves multiple processors or CPU cores.',
                    ],
                    [
                        'answer' => 'Maximize CPU utilization by keeping multiple jobs in main memory',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Maximize CPU utilization by keeping multiple jobs in main memory so another job can run when one waits for I/O.',
                    ],
                ],
            ],
            [
                'question' => 'Which organization developed UNIX originally?',
                'options' => [
                    [
                        'answer' => 'Microsoft',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. UNIX was not originally developed by Microsoft.',
                    ],
                    [
                        'answer' => 'IBM',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. UNIX was originally developed at AT&T Bell Labs.',
                    ],
                    [
                        'answer' => 'AT&T Bell Labs',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: AT&T Bell Labs. UNIX was developed by Ken Thompson, Dennis Ritchie, and colleagues at Bell Labs.',
                    ],
                    [
                        'answer' => 'Xerox PARC',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Xerox PARC is known for important innovations in graphical interfaces and computing.',
                    ],
                ],
            ],
            [
                'question' => 'What is the correct syntax for an HTML comment?',
                'options' => [
                    [
                        'answer' => '// This is a comment',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Double-slash comments are used in languages such as JavaScript, not as HTML comments.',
                    ],
                    [
                        'answer' => '/* This is a comment */',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is the comment syntax used in CSS and several programming languages.',
                    ],
                    [
                        'answer' => '<!-- This is a comment -->',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: <!-- This is a comment -->.',
                    ],
                    [
                        'answer' => '<comment>This is a comment</comment>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the standard HTML comment syntax.',
                    ],
                ],
            ],
            [
                'question' => 'Which event occurs when a user clicks on an HTML element?',
                'options' => [
                    [
                        'answer' => 'onchange',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The onchange event occurs when a value changes and the event conditions are met.',
                    ],
                    [
                        'answer' => 'onload',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The onload event occurs when a resource or page has finished loading.',
                    ],
                    [
                        'answer' => 'onclick',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: onclick. It is the event handler associated with a click event.',
                    ],
                    [
                        'answer' => 'onmouseover',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The onmouseover event occurs when the pointer moves over an element.',
                    ],
                ],
            ],
            [
                'question' => 'Which software is classified as an open-source Relational Database Management System?',
                'options' => [
                    [
                        'answer' => 'Oracle Database',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Oracle Database is proprietary software.',
                    ],
                    [
                        'answer' => 'Microsoft SQL Server',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Microsoft SQL Server is proprietary database software.',
                    ],
                    [
                        'answer' => 'IBM DB2',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IBM Db2 is proprietary database software.',
                    ],
                    [
                        'answer' => 'MySQL',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: MySQL. It is an open-source relational database management system available under the GNU GPL and commercial licensing options.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is NOT a data preprocessing technique?',
                'options' => [
                    [
                        'answer' => 'Pattern Evaluation',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Pattern Evaluation. It is generally associated with evaluating discovered patterns in data mining rather than preprocessing data.',
                    ],
                    [
                        'answer' => 'Data Integration',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Data Integration combines data from multiple sources and is a preprocessing technique.',
                    ],
                    [
                        'answer' => 'Data Cleaning',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Data Cleaning identifies and corrects missing, inaccurate, or inconsistent data.',
                    ],
                    [
                        'answer' => 'Data Transformation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Data Transformation converts data into suitable formats or representations for analysis.',
                    ],
                ],
            ],
            [
                'question' => 'Which table in a dimensional schema contains numerical metrics that can be aggregated?',
                'options' => [
                    [
                        'answer' => 'Dimension Table',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Dimension tables generally contain descriptive attributes used to categorize and filter data.',
                    ],
                    [
                        'answer' => 'Fact Table',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Fact Table. It stores measurable business events and numerical measures that can often be aggregated.',
                    ],
                    [
                        'answer' => 'Metadata Table',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Metadata tables describe data structures, definitions, or other information about data.',
                    ],
                    [
                        'answer' => 'Look-up Table',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A lookup table typically maps codes or keys to descriptive values.',
                    ],
                ],
            ],
            [
                'question' => 'What term describes automatically switching processing operations from a failed primary database to a secondary standby server?',
                'options' => [
                    [
                        'answer' => 'Rollback',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Rollback reverses a transaction or restores a previous state.',
                    ],
                    [
                        'answer' => 'Hot Swapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hot swapping involves replacing a component without shutting down the system.',
                    ],
                    [
                        'answer' => 'Failback',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Failback is the process of returning operations to the original or preferred system after recovery.',
                    ],
                    [
                        'answer' => 'Failover',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Failover. It transfers processing to a standby or secondary system when the primary system fails.',
                    ],
                ],
            ],
            [
                'question' => 'Which technology distributes incoming user requests across a pool of redundant application servers to prevent system overload?',
                'options' => [
                    [
                        'answer' => 'Database Replication',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Database replication maintains copies of database data across multiple systems.',
                    ],
                    [
                        'answer' => 'Load Balancer',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Load Balancer. It distributes incoming requests across multiple servers to improve availability and performance.',
                    ],
                    [
                        'answer' => 'Disk Mirroring',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Disk mirroring maintains duplicate copies of data on storage devices.',
                    ],
                    [
                        'answer' => 'Storage Array Network',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A Storage Area Network provides block-level storage connectivity to servers.',
                    ],
                ],
            ],
            [
                'question' => 'What is the primary purpose of indexing in a database?',
                'options' => [
                    [
                        'answer' => 'To take system backups',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Database backups create recoverable copies of data.',
                    ],
                    [
                        'answer' => 'To reduce disk storage footprint',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Indexes generally require additional storage space.',
                    ],
                    [
                        'answer' => 'To accelerate query search retrieval performance',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: To accelerate query search retrieval performance. Indexes help databases locate matching records without scanning every row in many queries.',
                    ],
                    [
                        'answer' => 'To prevent unauthorized logins',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Authentication and access-control mechanisms prevent unauthorized logins.',
                    ],
                ],
            ],
            [
                'question' => 'An administrator wishes to restrict employees in a bank branch from browsing social media websites during office hours. Which device or service should be deployed?',
                'options' => [
                    [
                        'answer' => 'Forward Proxy with Content Filtering',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Forward Proxy with Content Filtering. It can enforce browsing policies by restricting access to specified websites or categories.',
                    ],
                    [
                        'answer' => 'Database Server',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A database server stores and manages data rather than directly enforcing web browsing policies.',
                    ],
                    [
                        'answer' => 'Web Server',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A web server hosts and delivers web content.',
                    ],
                    [
                        'answer' => 'Authoritative DNS Server',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An authoritative DNS server provides DNS records for the domains it serves.',
                    ],
                ],
            ],
            [
                'question' => 'Which fundamental human right principle on the Internet does the ICT Policy 2072 explicitly uphold in its Guiding Principles?',
                'options' => [
                    [
                        'answer' => 'Absolute anonymity of all users',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Absolute anonymity of all users is not the stated principle in the supplied quiz.',
                    ],
                    [
                        'answer' => 'Freedom of expression on the Internet and net neutrality',
                        'is_correct' => true,
                        'explanation' => 'Correct answer according to the supplied quiz: Freedom of expression on the Internet and net neutrality.',
                    ],
                    [
                        'answer' => 'Mandatory identity verification for all internet access',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Mandatory identity verification for all Internet access is not the stated principle in the supplied quiz.',
                    ],
                    [
                        'answer' => 'Government pre-censorship of social media content',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Government pre-censorship of social media content is not the stated principle in the supplied quiz.',
                    ],
                ],
            ],
            [
                'question' => 'According to ETA Under Section 12, who appoints the "Controller of Certifying Authorities" and Deputy Controllers?',
                'options' => [
                    [
                        'answer' => 'The Supreme Court of Nepal',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Supreme Court is not the appointing authority specified in the supplied quiz.',
                    ],
                    [
                        'answer' => 'The Public Service Commission (Lok Sewa Aayog)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Public Service Commission is not the appointing authority specified in the supplied quiz.',
                    ],
                    [
                        'answer' => 'The Government of Nepal',
                        'is_correct' => true,
                        'explanation' => 'Correct answer according to the supplied quiz: The Government of Nepal.',
                    ],
                    [
                        'answer' => 'Nepal Rastra Bank',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Nepal Rastra Bank is not the appointing authority specified in the supplied quiz.',
                    ],
                ],
            ],
            [
                'question' => 'To ensure software continuity if a software vendor goes out of business, what agreement should banks arrange according to Section 5.9 of the IT Guideline?',
                'options' => [
                    [
                        'answer' => 'Service Level Agreement (SLA)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An SLA defines service expectations and performance commitments but does not by itself ensure access to software source code if a vendor ceases operations.',
                    ],
                    [
                        'answer' => 'Non-Disclosure Agreement (NDA)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An NDA establishes confidentiality obligations.',
                    ],
                    [
                        'answer' => 'Software Escrow Agreement',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Software Escrow Agreement. It allows designated software materials, often source code, to be held by a third party and released when agreed conditions are met.',
                    ],
                    [
                        'answer' => 'Joint Venture Agreement',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A joint venture agreement establishes terms for cooperation between parties.',
                    ],
                ],
            ],
            [
                'question' => 'Which critical system operations MUST be performed under joint custody according to Section 6.3 of the IT Guideline?',
                'options' => [
                    [
                        'answer' => 'Creating master passwords, cryptographic keys, and modifying contingency plans',
                        'is_correct' => true,
                        'explanation' => 'Correct answer according to the supplied quiz: Creating master passwords, cryptographic keys, and modifying contingency plans. Joint custody provides oversight and reduces the risk of unilateral misuse.',
                    ],
                    [
                        'answer' => 'Sending promotional SMS messages to customers',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Promotional messaging is not the critical system operation described in the supplied quiz.',
                    ],
                    [
                        'answer' => 'Routine printing of daily account balance statements',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Routine printing is not the critical system operation described in the supplied quiz.',
                    ],
                    [
                        'answer' => 'Entering individual customer cash deposit entries',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Routine transaction entry is not the critical system operation described in the supplied quiz.',
                    ],
                ],
            ],
            [
                'question' => 'An attacker pretends to be an IT support desk worker calling employees to offer software fixes in exchange for their passwords. This is an example of:',
                'options' => [
                    [
                        'answer' => 'Quid Pro Quo',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Quid Pro Quo. This social engineering technique offers a benefit or service in exchange for sensitive information or an action.',
                    ],
                    [
                        'answer' => 'Smishing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Smishing is phishing conducted through SMS or text messages.',
                    ],
                    [
                        'answer' => 'Pharming',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Pharming redirects users to fraudulent websites, often by manipulating DNS resolution or local configurations.',
                    ],
                    [
                        'answer' => 'Logic Bombing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A logic bomb is malicious code triggered by a specified condition or event.',
                    ],
                ],
            ],
            [
                'question' => 'To prevent operational risks, how should an LI structure its IT environments regarding development, testing, and production systems?',
                'options' => [
                    [
                        'answer' => 'Combine development and testing environments, but isolate production',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The supplied quiz requires separation of all three environments.',
                    ],
                    [
                        'answer' => 'Separate (physically and/or logically) the development, testing, and production environments',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Separate (physically and/or logically) the development, testing, and production environments. Separation reduces unauthorized access, accidental changes, and operational risks.',
                    ],
                    [
                        'answer' => 'Host all three environments on a single server with role-based folder permissions',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Folder permissions alone do not necessarily provide the required separation between environments.',
                    ],
                    [
                        'answer' => 'Allow developers real-time write access to the production environment for swift bug patching',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Unrestricted developer write access to production increases operational and security risks.',
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
