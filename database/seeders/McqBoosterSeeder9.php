<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class MCQBoosterSeeder9 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'MCQ Booster 9',
            'description' => 'Computer Fundamentals, Computer Architecture, Networking, Operating Systems, Database, Web Technology, AI, Cybersecurity, ICT Policy, Electronic Transactions and NRB Guidelines MCQs.',
        ]);

        $questions = [
            // Q1
            [
                'question' => 'An IT infrastructure team at RBB is evaluating CPU options for high-throughput batch processing servers. Which architectural metric explicitly measures the maximum rate of scalar operations a CPU core can execute per second regardless of I/O latency?',
                'options' => [
                    [
                        'answer' => 'Direct Memory Latency',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Direct memory latency measures the delay involved in accessing memory, not the CPU instruction execution rate.',
                    ],
                    [
                        'answer' => 'Baud Rate',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Baud rate measures the number of signal symbols transmitted per second.',
                    ],
                    [
                        'answer' => 'Instructions Per Second (MIPS) / FLOPS',
                        'is_correct' => true,
                        'explanation' => 'Correct. MIPS measures millions of instructions per second, while FLOPS measures floating-point operations per second.',
                    ],
                    [
                        'answer' => 'Bus Clock Multiplier',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The bus clock multiplier helps determine CPU clock frequency but does not directly measure completed operations per second.',
                    ],
                ],
            ],

            // Q2
            [
                'question' => 'The first computer introduced in Nepal was:',
                'options' => [
                    [
                        'answer' => 'ICL 2950/10',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. ICL 2950/10 was not the first computer introduced in Nepal.',
                    ],
                    [
                        'answer' => 'IBM 1401',
                        'is_correct' => true,
                        'explanation' => 'Correct. The IBM 1401 was introduced in Nepal in 2028 B.S. for census data processing.',
                    ],
                    [
                        'answer' => 'Apple II',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Apple II was a personal computer introduced later than the IBM 1401.',
                    ],
                    [
                        'answer' => 'Facit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Facit is not the standard answer to the question about the first computer introduced in Nepal.',
                    ],
                ],
            ],

            // Q3
            [
                'question' => 'In Artificial Intelligence, which activation function is widely used in artificial neural networks to solve non-linear multi-class classification tasks by mapping output vectors into probabilities that sum to 1?',
                'options' => [
                    [
                        'answer' => 'Step Threshold',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A step threshold function produces discrete outputs and is not typically used to generate multi-class probability distributions.',
                    ],
                    [
                        'answer' => 'Rectified Continuous Multiplier',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the standard name of an activation function used to normalize multi-class outputs into probabilities.',
                    ],
                    [
                        'answer' => 'Linear Identity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The identity function returns the input unchanged and does not normalize outputs into probabilities.',
                    ],
                    [
                        'answer' => 'Softmax Function',
                        'is_correct' => true,
                        'explanation' => 'Correct. Softmax converts a vector of scores into probabilities whose sum equals 1, making it useful for multi-class classification.',
                    ],
                ],
            ],

            // Q4
            [
                'question' => 'In a private interbank Blockchain ledger, what cryptographic mechanism allows participants to verify transaction validity without revealing the underlying transfer amounts or account balances?',
                'options' => [
                    [
                        'answer' => 'Symmetric Key Exchange',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Symmetric key exchange establishes or distributes shared cryptographic keys but does not itself provide privacy-preserving transaction verification.',
                    ],
                    [
                        'answer' => 'Cyclic Redundancy Check',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CRC is primarily used for detecting accidental transmission errors, not proving private transaction validity.',
                    ],
                    [
                        'answer' => 'Public Cleartext Logging',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cleartext logging exposes transaction information rather than protecting sensitive financial data.',
                    ],
                    [
                        'answer' => 'Zero-Knowledge Proofs (ZKP)',
                        'is_correct' => true,
                        'explanation' => 'Correct. Zero-knowledge proofs allow a party to demonstrate that a statement is valid without revealing the underlying confidential information.',
                    ],
                ],
            ],

            // Q5
            [
                'question' => 'Which environmental control component in a tier-3 Data Center prevents static electricity buildup on circuit boards by adding moisture to the ambient airflow?',
                'options' => [
                    [
                        'answer' => 'Industrial Precision Humidification System',
                        'is_correct' => true,
                        'explanation' => 'Correct. Controlled humidification helps prevent excessively dry air and reduces electrostatic discharge risk when maintained within appropriate environmental limits.',
                    ],
                    [
                        'answer' => 'Uninterruptible Power Battery',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. UPS batteries provide backup electrical power rather than controlling ambient humidity.',
                    ],
                    [
                        'answer' => 'Precision Dehumidifier',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A dehumidifier removes moisture from the air and may increase static electricity risk if humidity becomes too low.',
                    ],
                    [
                        'answer' => 'Inert Gas Suppression Nozzle',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Inert gas suppression equipment is designed for fire protection, not humidity control.',
                    ],
                ],
            ],

            // Q6
            [
                'question' => 'In modern responsive Web Design, which CSS technique uses fluid layouts and rule queries to adapt page elements automatically to screen viewports ranging from mobile phones to high-resolution desktop displays?',
                'options' => [
                    [
                        'answer' => 'Fixed Pixel Canvas Mapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Fixed pixel layouts do not automatically adapt effectively to different viewport sizes.',
                    ],
                    [
                        'answer' => 'Server-side Cookie Injectors',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cookies store or transmit application state and are not a CSS responsive layout technique.',
                    ],
                    [
                        'answer' => 'CSS Media Queries & Flexbox/Grid',
                        'is_correct' => true,
                        'explanation' => 'Correct. Media queries apply styles based on viewport or device conditions, while Flexbox and Grid create flexible layouts.',
                    ],
                    [
                        'answer' => 'Static Inline Table Alignment',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Static table alignment does not provide the flexibility required for modern responsive layouts.',
                    ],
                ],
            ],

            // Q7
            [
                'question' => 'Which control register inside the CPU holds the specific memory address of a system instruction currently being fetched from main RAM?',
                'options' => [
                    [
                        'answer' => 'Flag Register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The flag register stores processor status conditions such as zero, carry, and overflow.',
                    ],
                    [
                        'answer' => 'Memory Address Register (MAR)',
                        'is_correct' => true,
                        'explanation' => 'Correct. MAR holds the memory address involved in a memory read or write operation, including instruction fetching.',
                    ],
                    [
                        'answer' => 'Memory Buffer Register (MBR)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. MBR, also called MDR, temporarily holds data or instructions being transferred to or from memory.',
                    ],
                    [
                        'answer' => 'Accumulator (ACC)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The accumulator primarily holds intermediate arithmetic and logical results.',
                    ],
                ],
            ],

            // Q8
            [
                'question' => 'A system utilizes a 2-way Set-Associative Cache. If the cache memory contains 64 total lines, how many sets exist in this cache structure?',
                'options' => [
                    [
                        'answer' => '16 sets',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Sixteen sets would provide only 32 cache lines in a 2-way set-associative cache.',
                    ],
                    [
                        'answer' => '64 sets',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Sixty-four sets would require 128 cache lines in a 2-way set-associative cache.',
                    ],
                    [
                        'answer' => '32 sets',
                        'is_correct' => true,
                        'explanation' => 'Correct. Number of sets = total cache lines / associativity = 64 / 2 = 32 sets.',
                    ],
                    [
                        'answer' => '128 sets',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A cache containing 128 sets with two lines per set would require 256 cache lines.',
                    ],
                ],
            ],

            // Q9
            [
                'question' => 'In Hard Disk performance calculation, if a disk drive has a Seek Time of 6 ms, Rotational Latency of 4 ms, and Controller Delay of 1 ms, what is its total Data Access Time before transfer begins?',
                'options' => [
                    [
                        'answer' => '24 ms',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The sum of the given access-time components is not 24 ms.',
                    ],
                    [
                        'answer' => '5 ms',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This value does not include all three access-time components.',
                    ],
                    [
                        'answer' => '11 ms',
                        'is_correct' => true,
                        'explanation' => 'Correct. Total access time = seek time + rotational latency + controller delay = 6 + 4 + 1 = 11 ms.',
                    ],
                    [
                        'answer' => '10 ms',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This value omits 1 ms from the total of the three specified components.',
                    ],
                ],
            ],

            // Q10
            [
                'question' => 'First commercial email service in Nepal was introduced by:',
                'options' => [
                    [
                        'answer' => 'Nepal Telecom',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Nepal Telecom is a major telecommunications provider but is not the expected answer for Nepal’s first commercial email service.',
                    ],
                    [
                        'answer' => 'InfoTech Nepal',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. InfoTech Nepal is not the expected answer in the commonly cited history of commercial email services in Nepal.',
                    ],
                    [
                        'answer' => 'WorldLink',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. WorldLink is a major internet service provider but is not the standard answer to this historical question.',
                    ],
                    [
                        'answer' => 'Mercantile Communications',
                        'is_correct' => true,
                        'explanation' => 'Correct. Mercantile Communications is commonly credited with introducing commercial email services in Nepal in the early 1990s.',
                    ],
                ],
            ],

            // Q11
            [
                'question' => 'Which hardware interrupt vectoring method requires the interrupting device controller to supply its explicit vector address to the CPU over data bus lines during the Interrupt Acknowledge (INTA) cycle?',
                'options' => [
                    [
                        'answer' => 'Software Trapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A software trap is generated by software execution rather than by a hardware device supplying an interrupt vector.',
                    ],
                    [
                        'answer' => 'Vectored Interrupt',
                        'is_correct' => true,
                        'explanation' => 'Correct. In a vectored interrupt system, the CPU obtains an interrupt vector that identifies the appropriate interrupt service routine.',
                    ],
                    [
                        'answer' => 'Polled Interrupt',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Polling requires the CPU to examine device status to determine which device needs service.',
                    ],
                    [
                        'answer' => 'Non-maskable Priority Loop',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the standard name of the interrupt vectoring method described.',
                    ],
                ],
            ],

            // Q12
            [
                'question' => 'In I/O management, how does Double Buffering improve throughput compared to Single Buffering during continuous data streaming?',
                'options' => [
                    [
                        'answer' => 'By compressing transmission data blocks prior to memory writes',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Compression may reduce data volume but is not the defining mechanism of double buffering.',
                    ],
                    [
                        'answer' => 'By converting digital inputs to analog waveforms',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Digital-to-analog conversion is unrelated to the basic operation of double buffering.',
                    ],
                    [
                        'answer' => 'By allowing one buffer to be filled by an I/O device while the CPU processes data simultaneously from the second buffer',
                        'is_correct' => true,
                        'explanation' => 'Correct. Double buffering overlaps I/O and CPU processing, reducing idle time and improving throughput.',
                    ],
                    [
                        'answer' => 'By allocating hardware caches directly to optical storage devices',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Double buffering does not require allocating CPU cache directly to optical storage.',
                    ],
                ],
            ],

            // Q13
            [
                'question' => 'At which OSI layer does a Network Bridge operate to filter traffic based on source and destination MAC physical addresses?',
                'options' => [
                    [
                        'answer' => 'Network Layer (Layer 3)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Layer 3 is primarily responsible for logical addressing and routing between networks.',
                    ],
                    [
                        'answer' => 'Session Layer (Layer 5)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The session layer concerns session establishment and management rather than MAC-based frame forwarding.',
                    ],
                    [
                        'answer' => 'Data Link Layer (Layer 2)',
                        'is_correct' => true,
                        'explanation' => 'Correct. A network bridge operates at Layer 2 and forwards or filters frames using MAC addresses.',
                    ],
                    [
                        'answer' => 'Physical Layer (Layer 1)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The physical layer transmits raw bits over a physical medium.',
                    ],
                ],
            ],

            // Q14
            [
                'question' => 'If a transmitter appends a 2-dimensional Longitudinal Redundancy Check (LRC) block to a stream of data bytes, what specific error condition can it detect and correct automatically without retransmission?',
                'options' => [
                    [
                        'answer' => 'Frame sequence loss',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. LRC is primarily an error-detection technique and does not inherently identify missing frame sequences.',
                    ],
                    [
                        'answer' => 'Single-bit transmission errors',
                        'is_correct' => true,
                        'explanation' => 'Correct. Two-dimensional parity can identify and locate a single-bit error using the intersecting erroneous row and column, allowing correction under the basic scheme.',
                    ],
                    [
                        'answer' => 'Triple-bit inversion errors',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Two-dimensional parity does not guarantee reliable correction of arbitrary triple-bit errors.',
                    ],
                    [
                        'answer' => 'All possible multi-bit burst errors',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. LRC cannot detect and correct every possible multi-bit burst error.',
                    ],
                ],
            ],

            // Q15
            [
                'question' => 'An RBB branch network uses the IP address 10.100.50.25 with a custom subnet mask of 255.255.240.0 (/20). What is the Broadcast Address for this subnet?',
                'options' => [
                    [
                        'answer' => '10.100.15.255',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This address belongs to a different third-octet range.',
                    ],
                    [
                        'answer' => '10.100.255.255',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the broadcast address of the specified /20 subnet.',
                    ],
                    [
                        'answer' => '10.100.50.255',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The /20 mask covers a block of 16 values in the third octet, not just one third-octet value.',
                    ],
                    [
                        'answer' => '10.100.63.255',
                        'is_correct' => true,
                        'explanation' => 'Correct. The third octet 50 belongs to the /20 block 48–63, making 10.100.63.255 the broadcast address.',
                    ],
                ],
            ],

            // Q16
            [
                'question' => 'Which network protocol operates at the Transport Layer (Layer 4) using a 3-way handshake (SYN, SYN-ACK, ACK) to establish reliable, stateful connection streams?',
                'options' => [
                    [
                        'answer' => 'Address Resolution Protocol (ARP)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. ARP resolves IPv4 addresses to link-layer MAC addresses on a local network.',
                    ],
                    [
                        'answer' => 'Transmission Control Protocol (TCP)',
                        'is_correct' => true,
                        'explanation' => 'Correct. TCP establishes connections through the SYN, SYN-ACK, and ACK handshake and provides reliable, ordered data delivery.',
                    ],
                    [
                        'answer' => 'User Datagram Protocol (UDP)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. UDP is connectionless and does not use TCP’s three-way handshake.',
                    ],
                    [
                        'answer' => 'Internet Control Message Protocol (ICMP)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. ICMP carries network diagnostic and error-reporting messages rather than establishing TCP-style connections.',
                    ],
                ],
            ],

            // Q17
            [
                'question' => 'Which network diagnostic protocol uses Type 8 (Echo Request) and Type 0 (Echo Reply) control messages to verify network reachability via the ping utility?',
                'options' => [
                    [
                        'answer' => 'ARP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. ARP resolves IPv4 addresses to MAC addresses and does not use ICMP Echo Request and Echo Reply messages.',
                    ],
                    [
                        'answer' => 'IGMP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IGMP manages IPv4 multicast group membership.',
                    ],
                    [
                        'answer' => 'ICMP',
                        'is_correct' => true,
                        'explanation' => 'Correct. ICMP uses Echo Request (Type 8) and Echo Reply (Type 0) messages in IPv4 ping diagnostics.',
                    ],
                    [
                        'answer' => 'SNMP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SNMP is used to monitor and manage network devices.',
                    ],
                ],
            ],

            // Q18
            [
                'question' => 'Which modern asymmetric key algorithm relies on the algebraic structure of elliptic curves over finite fields to offer security comparable to 3072-bit RSA using only a 256-bit key length?',
                'options' => [
                    [
                        'answer' => 'Triple DES',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Triple DES is a symmetric encryption algorithm, not an elliptic-curve asymmetric algorithm.',
                    ],
                    [
                        'answer' => 'SHA-512',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SHA-512 is a cryptographic hash function, not an asymmetric key algorithm.',
                    ],
                    [
                        'answer' => 'AES-256',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. AES-256 is a symmetric encryption algorithm rather than an elliptic-curve public-key algorithm.',
                    ],
                    [
                        'answer' => 'Elliptic Curve Cryptography (ECC)',
                        'is_correct' => true,
                        'explanation' => 'Correct. ECC uses elliptic-curve mathematics to provide strong public-key security with relatively short keys; a 256-bit ECC key is commonly compared with approximately 3072-bit RSA.',
                    ],
                ],
            ],

            // Q19
            [
                'question' => 'What is the main structural function of a Raised Floor system inside a data center hall?',
                'options' => [
                    [
                        'answer' => 'To increase building earthquake resistance',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A raised floor is not primarily intended to provide seismic reinforcement to the building.',
                    ],
                    [
                        'answer' => 'To create an under-floor plenum for cable routing and cold air distribution',
                        'is_correct' => true,
                        'explanation' => 'Correct. Raised floors can provide space for power and network cabling and, in suitable designs, distribute conditioned air beneath server racks.',
                    ],
                    [
                        'answer' => 'To prevent biometric access failure',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Biometric access systems are separate physical security controls.',
                    ],
                    [
                        'answer' => 'To isolate servers from cosmic radiation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Raised flooring does not provide meaningful protection against cosmic radiation.',
                    ],
                ],
            ],

            // Q20
            [
                'question' => 'What operational mechanism differentiates an Application Layer (Layer 7) Gateway Firewall from a standard Stateful Network Firewall?',
                'options' => [
                    [
                        'answer' => 'Application Gateways do not support Access Control Lists.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Application gateways can enforce access-control rules and policies.',
                    ],
                    [
                        'answer' => 'Stateful Firewalls decrypt all asymmetric keys automatically.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Stateful firewalls do not automatically decrypt all asymmetric keys; encryption inspection depends on their capabilities and configuration.',
                    ],
                    [
                        'answer' => 'Application Gateways inspect complete application payload contents and protocol commands (e.g., HTTP headers, SQL queries) rather than just IP/port headers.',
                        'is_correct' => true,
                        'explanation' => 'Correct. Layer 7 gateways can inspect application protocols and payloads, while ordinary stateful filtering primarily evaluates connection state and network or transport-layer information.',
                    ],
                    [
                        'answer' => 'Application Gateways operate exclusively on physical MAC addresses.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. MAC-based frame filtering is associated with Layer 2 devices, not exclusively with application gateways.',
                    ],
                ],
            ],

            // Q21
            [
                'question' => 'Which high-speed guided transmission medium utilizes total internal reflection of light waves through a pure silica glass core wrapped in cladding material?',
                'options' => [
                    [
                        'answer' => 'Coaxial Cable',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Coaxial cable transmits electrical signals through a copper conductor.',
                    ],
                    [
                        'answer' => 'Optical Fiber Cable',
                        'is_correct' => true,
                        'explanation' => 'Correct. Optical fiber guides light through a core and cladding using total internal reflection or the equivalent guiding behavior described by fiber optics.',
                    ],
                    [
                        'answer' => 'Twinaxial Copper',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Twinaxial copper carries electrical signals rather than guided light.',
                    ],
                    [
                        'answer' => 'Shielded Twisted Pair (STP)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. STP uses insulated copper conductors to transmit electrical signals.',
                    ],
                ],
            ],

            // Q22
            [
                'question' => 'In digital signal modulation, what modem technique varies the frequency of a constant-amplitude carrier wave to represent binary 0s and 1s?',
                'options' => [
                    [
                        'answer' => 'Pulse Code Modulation (PCM)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. PCM represents sampled analog signals as digital values rather than varying a carrier frequency to encode binary symbols.',
                    ],
                    [
                        'answer' => 'Frequency Shift Keying (FSK)',
                        'is_correct' => true,
                        'explanation' => 'Correct. FSK represents digital symbols using different carrier frequencies while maintaining a constant amplitude in the basic scheme.',
                    ],
                    [
                        'answer' => 'Amplitude Shift Keying (ASK)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. ASK encodes digital information by varying carrier amplitude.',
                    ],
                    [
                        'answer' => 'Quadrature Phase Shift Keying (QPSK)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. QPSK encodes symbols through changes in carrier phase.',
                    ],
                ],
            ],

            // Q23
            [
                'question' => 'Which short-range wireless standard operates under IEEE 802.15.4 to provide low-data-rate, ultra-low-power mesh networking for IoT sensors?',
                'options' => [
                    [
                        'answer' => 'WiMAX',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. WiMAX is associated with broadband wireless access rather than IEEE 802.15.4 low-power sensor networking.',
                    ],
                    [
                        'answer' => 'Zigbee',
                        'is_correct' => true,
                        'explanation' => 'Correct. Zigbee builds on IEEE 802.15.4 PHY and MAC technologies to support low-power wireless networking, including mesh networks.',
                    ],
                    [
                        'answer' => 'Wi-Fi (IEEE 802.11)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Wi-Fi uses the IEEE 802.11 family of standards.',
                    ],
                    [
                        'answer' => 'Bluetooth (IEEE 802.15.1)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Bluetooth is a separate wireless technology and is not the IEEE 802.15.4-based technology described.',
                    ],
                ],
            ],

            // Q24
            [
                'question' => 'An IT security analyst calculates that a network of 12 internal servers requires private symmetric encryption channels between every server pair. How many total secret keys must be generated and managed?',
                'options' => [
                    [
                        'answer' => '144 keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Twelve squared counts ordered pairs, including self-pairs, rather than distinct server pairs.',
                    ],
                    [
                        'answer' => '12 keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. One key per server would not provide a separate shared key for every distinct pair.',
                    ],
                    [
                        'answer' => '132 keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is twice the number of distinct server pairs.',
                    ],
                    [
                        'answer' => '66 keys',
                        'is_correct' => true,
                        'explanation' => 'Correct. The number of distinct pairs is n(n-1)/2 = 12 × 11 / 2 = 66 shared secret keys.',
                    ],
                ],
            ],

            // Q25
            [
                'question' => 'Which one-way cryptographic hash algorithm produces a 160-bit output digest and is designated as deprecated due to theoretical collision vulnerabilities?',
                'options' => [
                    [
                        'answer' => 'BLAKE2',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. BLAKE2 is a modern hash-function family and is not the 160-bit deprecated algorithm described.',
                    ],
                    [
                        'answer' => 'SHA-3',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SHA-3 is a modern hash standard whose commonly specified digest sizes include 224, 256, 384, and 512 bits.',
                    ],
                    [
                        'answer' => 'SHA-1',
                        'is_correct' => true,
                        'explanation' => 'Correct. SHA-1 produces a 160-bit digest and is deprecated for security-sensitive applications because practical collision attacks have been demonstrated.',
                    ],
                    [
                        'answer' => 'SHA-256',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SHA-256 produces a 256-bit digest and is not the 160-bit algorithm described.',
                    ],
                ],
            ],

            // Q26
            [
                'question' => 'In an Operating System, what kernel data structure stores critical control execution data for an active process, including its Program Counter, CPU registers, stack pointers, and I/O status flags?',
                'options' => [
                    [
                        'answer' => 'System Service Descriptor',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A system service descriptor relates to system-call dispatch rather than storing the complete execution context of an individual process.',
                    ],
                    [
                        'answer' => 'Process Control Block (PCB)',
                        'is_correct' => true,
                        'explanation' => 'Correct. The PCB stores process-management information, including execution state, CPU context, scheduling data, and relevant I/O information.',
                    ],
                    [
                        'answer' => 'Memory Translation Table',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Memory translation structures map virtual addresses to physical memory and do not serve as the complete process control record.',
                    ],
                    [
                        'answer' => 'Interrupt Vector Array',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An interrupt vector array identifies interrupt handlers rather than maintaining the complete execution state of each process.',
                    ],
                ],
            ],

            // Q27
            [
                'question' => 'Three processes arrive at time zero with execution burst times of 15 ms, 5 ms, and 2 ms. If the OS executes them using Non-Preemptive Shortest Job First (SJF) scheduling, what is the Average Waiting Time?',
                'options' => [
                    [
                        'answer' => '7.33 ms',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The average waiting time is not 7.33 ms when the processes are executed in ascending burst-time order.',
                    ],
                    [
                        'answer' => '0.00 ms',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Only the first process has a waiting time of zero; the other processes must wait.',
                    ],
                    [
                        'answer' => '3.00 ms',
                        'is_correct' => true,
                        'explanation' => 'Correct. SJF executes the 2 ms, 5 ms, and 15 ms processes in that order. Waiting times are 0, 2, and 7 ms, so the average is (0 + 2 + 7) / 3 = 3 ms.',
                    ],
                    [
                        'answer' => '4.67 ms',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The calculated average waiting time under non-preemptive SJF is 3 ms.',
                    ],
                ],
            ],

            // Q28
            [
                'question' => 'What deadlock condition occurs when resources cannot be forcibly confiscated from a process while it is holding them, requiring the process to release them voluntarily?',
                'options' => [
                    [
                        'answer' => 'Circular Wait',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Circular wait occurs when processes form a cycle in which each process waits for a resource held by another.',
                    ],
                    [
                        'answer' => 'Mutual Exclusion',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Mutual exclusion means a resource can be held by only one process at a time.',
                    ],
                    [
                        'answer' => 'No Preemption',
                        'is_correct' => true,
                        'explanation' => 'Correct. No preemption means resources cannot be forcibly taken from a process and must be released voluntarily.',
                    ],
                    [
                        'answer' => 'Hold and Wait',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hold and wait occurs when a process retains resources while requesting additional resources.',
                    ],
                ],
            ],

            // Q29
            [
                'question' => 'In a UNIX/Linux file system, what octal mask value is set via chmod to grant the file Owner full permissions (rwx), Group members read/execute (r-x), and Others read-only (r--)?',
                'options' => [
                    [
                        'answer' => '644',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 644 grants the owner read/write and grants group and others read-only access.',
                    ],
                    [
                        'answer' => '750',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 750 grants the owner full access, the group read/execute access, and others no permissions.',
                    ],
                    [
                        'answer' => '754',
                        'is_correct' => true,
                        'explanation' => 'Correct. 7 = rwx for the owner, 5 = r-x for the group, and 4 = r-- for others.',
                    ],
                    [
                        'answer' => '777',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 777 grants read, write, and execute permissions to the owner, group, and others.',
                    ],
                ],
            ],

            // Q30
            [
                'question' => 'Which internal MS-DOS command modifies file header properties to mark a file as Hidden (+H) or Read-Only (+R)?',
                'options' => [
                    [
                        'answer' => 'LABEL',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. LABEL is used to create, change, or remove a disk volume label.',
                    ],
                    [
                        'answer' => 'FORMAT',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. FORMAT prepares a disk for use by creating a file system.',
                    ],
                    [
                        'answer' => 'ATTRIB',
                        'is_correct' => true,
                        'explanation' => 'Correct. ATTRIB displays or changes file attributes such as Read-only, Hidden, System, and Archive.',
                    ],
                    [
                        'answer' => 'CHKDSK',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CHKDSK checks a disk or file system for errors.',
                    ],
                ],
            ],

            // Q31
            [
                'question' => 'An OS uses Virtual Memory Paging with 32-bit logical addresses and a 4 KB Page Size. How many bits in the logical address are reserved for the Page Offset?',
                'options' => [
                    [
                        'answer' => '8 bits',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Eight offset bits address only 256 bytes, which is insufficient for a 4 KB page.',
                    ],
                    [
                        'answer' => '16 bits',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Sixteen offset bits would address a 64 KB page.',
                    ],
                    [
                        'answer' => '12 bits',
                        'is_correct' => true,
                        'explanation' => 'Correct. A 4 KB page contains 4096 = 2^12 bytes, requiring 12 offset bits.',
                    ],
                    [
                        'answer' => '20 bits',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Twenty offset bits would address a 1 MB page.',
                    ],
                ],
            ],

            // Q32
            [
                'question' => 'In an RBB banking database, if a customer updates their phone number in one table, the system must ensure that all queries across dependent views immediately reflect the updated value. Which ACID property governs state consistency before and after commit execution?',
                'options' => [
                    [
                        'answer' => 'Durability',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Durability ensures committed changes persist despite failures.',
                    ],
                    [
                        'answer' => 'Isolation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Isolation governs how concurrent transactions interact and what intermediate states they can observe.',
                    ],
                    [
                        'answer' => 'Consistency',
                        'is_correct' => true,
                        'explanation' => 'Correct. Consistency requires a transaction to preserve database rules and constraints, moving the database from one valid state to another.',
                    ],
                    [
                        'answer' => 'Atomicity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Atomicity ensures that a transaction’s operations succeed as a whole or are rolled back as a whole.',
                    ],
                ],
            ],

            // Q33
            [
                'question' => 'What type of SQL constraint prevents duplicate values from being inserted into a specific table column while still permitting a single NULL value?',
                'options' => [
                    [
                        'answer' => 'Foreign Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A foreign key enforces referential integrity between related tables.',
                    ],
                    [
                        'answer' => 'Check Constraint',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A CHECK constraint validates whether values satisfy a specified condition.',
                    ],
                    [
                        'answer' => 'Unique Constraint',
                        'is_correct' => true,
                        'explanation' => 'Correct. A UNIQUE constraint prevents duplicate non-NULL values. NULL handling varies by database system; some systems permit multiple NULLs, while others behave differently.',
                    ],
                    [
                        'answer' => 'Primary Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A primary key prevents duplicates but also prohibits NULL values.',
                    ],
                ],
            ],

            // Q34
            [
                'question' => 'A table BRANCH_EXPENSE contains columns (Branch_ID, Expense_ID, Branch_Name, Expense_Amount). If Branch_Name depends functionally on Branch_ID (which is part of the composite primary key (Branch_ID, Expense_ID)), which normal form is violated?',
                'options' => [
                    [
                        'answer' => 'BCNF',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The most immediate violation described is a partial dependency, which violates 2NF; BCNF may also be violated.',
                    ],
                    [
                        'answer' => 'Second Normal Form (2NF)',
                        'is_correct' => true,
                        'explanation' => 'Correct. Branch_Name depends on only part of the composite primary key, Branch_ID, creating a partial dependency that violates 2NF.',
                    ],
                    [
                        'answer' => 'First Normal Form (1NF)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The question does not describe repeating groups or non-atomic attribute values, which are typical 1NF violations.',
                    ],
                    [
                        'answer' => 'Third Normal Form (3NF)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The primary issue is a partial dependency that already violates 2NF.',
                    ],
                ],
            ],

            // Q35
            [
                'question' => 'What primary functional role does an Operational Data Store (ODS) perform in enterprise Data Warehousing architectures?',
                'options' => [
                    [
                        'answer' => 'It performs symmetrical block encryption.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Symmetric encryption is a cryptographic function rather than the primary role of an ODS.',
                    ],
                    [
                        'answer' => 'It generates client HTML scripts.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. HTML generation is a web application function unrelated to the main purpose of an ODS.',
                    ],
                    [
                        'answer' => 'It archives cold optical tape backups.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cold backup archiving is a storage and backup function, not the primary role of an ODS.',
                    ],
                    [
                        'answer' => 'It acts as an interim staging database holding cleansed operational data for near-real-time reporting before loading into the main data warehouse.',
                        'is_correct' => true,
                        'explanation' => 'Correct. An ODS consolidates relatively current operational data for integrated reporting and can supply data to an enterprise data warehouse.',
                    ],
                ],
            ],

            // Q36
            [
                'question' => 'Which HTML5 tag defines navigation link bars containing major site navigation links?',
                'options' => [
                    [
                        'answer' => '<section>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The section element groups related thematic content.',
                    ],
                    [
                        'answer' => '<aside>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The aside element represents tangentially related content, such as a sidebar.',
                    ],
                    [
                        'answer' => '<nav>',
                        'is_correct' => true,
                        'explanation' => 'Correct. The nav element identifies a section containing major navigation links.',
                    ],
                    [
                        'answer' => '<header>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The header element represents introductory content or navigational aids for a page or section, but it is not the specific navigation element.',
                    ],
                ],
            ],

            // Q37
            [
                'question' => 'Which CSS property controls the inner spacing distance between an HTML elements content border and its inner textual data?',
                'options' => [
                    [
                        'answer' => 'outline-offset',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. outline-offset controls the distance between an element and its outline.',
                    ],
                    [
                        'answer' => 'padding',
                        'is_correct' => true,
                        'explanation' => 'Correct. Padding controls the space between an element’s content and its border.',
                    ],
                    [
                        'answer' => 'margin',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Margin controls the space outside an element’s border.',
                    ],
                    [
                        'answer' => 'border-width',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. border-width controls the thickness of the border itself.',
                    ],
                ],
            ],

            // Q38
            [
                'question' => 'Which data backup technique captures only files that have changed since the last backup of ANY type and resets the archive bit?',
                'options' => [
                    [
                        'answer' => 'Full Backup',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A full backup copies all selected data rather than only files changed since the previous backup.',
                    ],
                    [
                        'answer' => 'Differential Backup',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A differential backup captures changes since the last full backup and generally does not reset the archive bit.',
                    ],
                    [
                        'answer' => 'Incremental Backup',
                        'is_correct' => true,
                        'explanation' => 'Correct. An incremental backup captures changes since the last backup of any type. In traditional archive-bit-based systems, it resets the archive bit for backed-up files.',
                    ],
                    [
                        'answer' => 'Mirror Backup',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A mirror backup maintains a copy of the selected data rather than specifically capturing only changes since the last backup of any type.',
                    ],
                ],
            ],

            // Q39
            [
                'question' => 'An RBB backup policy specifies taking a Full Backup on the 1st of every month, and Daily Incremental Backups every midnight. If a server storage crash occurs on the 10th of the month at 10 AM, how many backup media sets are required to restore full system operations?',
                'options' => [
                    [
                        'answer' => '1 Full Backup only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The full backup alone does not contain changes made after the 1st of the month.',
                    ],
                    [
                        'answer' => '10 Incremental Backups only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Incremental backups depend on a full backup as the recovery baseline.',
                    ],
                    [
                        'answer' => '1 Full Backup + 9 Incremental Backups (10 total sets)',
                        'is_correct' => true,
                        'explanation' => 'Correct. Assuming the full backup occurred on the 1st and incremental backups ran at midnight from the 2nd through the 10th, recovery requires the full backup plus nine incremental backups.',
                    ],
                    [
                        'answer' => '1 Full Backup + 1 Incremental Backup (2 total sets)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is insufficient because incremental backups must be applied in sequence from the full backup through the latest available incremental backup.',
                    ],
                ],
            ],

            // Q40
            [
                'question' => 'A transaction processing system (like an ATM withdrawal system) is an example of:',
                'options' => [
                    [
                        'answer' => 'OLAP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. OLAP supports multidimensional analytical queries rather than routine transaction processing.',
                    ],
                    [
                        'answer' => 'Data Warehouse',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A data warehouse primarily consolidates historical data for analysis and reporting.',
                    ],
                    [
                        'answer' => 'OLTP',
                        'is_correct' => true,
                        'explanation' => 'Correct. Online Transaction Processing (OLTP) handles frequent operational transactions such as deposits, withdrawals, and account updates.',
                    ],
                    [
                        'answer' => 'Decision Support System',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A decision support system primarily assists analytical and managerial decision-making.',
                    ],
                ],
            ],

            // Q41
            [
                'question' => 'Which technique is most effective for detecting credit card fraud in real-time?',
                'options' => [
                    [
                        'answer' => 'Sequential Pattern Mining',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Sequential pattern mining identifies recurring sequences of events and is not necessarily the primary technique for real-time anomaly detection.',
                    ],
                    [
                        'answer' => 'Hierarchical Clustering',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hierarchical clustering groups observations into a hierarchy but is not inherently the most direct real-time fraud detection technique.',
                    ],
                    [
                        'answer' => 'Descriptive Summarization',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Descriptive summarization presents data characteristics rather than directly identifying suspicious transactions.',
                    ],
                    [
                        'answer' => 'Outlier / Anomaly Detection',
                        'is_correct' => true,
                        'explanation' => 'Correct. Anomaly detection identifies transactions that deviate significantly from expected behavior and can support real-time fraud screening.',
                    ],
                ],
            ],

            // Q42
            [
                'question' => 'Which Denial of Service attack vector floods target server ports with high volumes of unacknowledged TCP connection requests (SYN packets) to exhaust connection queue tables?',
                'options' => [
                    [
                        'answer' => 'HTTP Slowloris',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Slowloris holds application-layer HTTP connections open by sending incomplete requests slowly.',
                    ],
                    [
                        'answer' => 'TCP SYN Flood',
                        'is_correct' => true,
                        'explanation' => 'Correct. A SYN flood sends large numbers of TCP SYN requests and can exhaust resources reserved for half-open connections.',
                    ],
                    [
                        'answer' => 'UDP Flood',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A UDP flood overwhelms a target with UDP traffic rather than TCP SYN requests.',
                    ],
                    [
                        'answer' => 'ICMP Smurf Attack',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A Smurf attack uses spoofed ICMP echo requests and amplification through broadcast networks.',
                    ],
                ],
            ],

            // Q43
            [
                'question' => 'Which identity access management framework delegates access privileges based on dynamic contextual attributes (such as user job role, current time, IP location, and device health status)?',
                'options' => [
                    [
                        'answer' => 'Static Role Mapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Static role mapping typically assigns permissions through predefined roles and does not inherently evaluate multiple dynamic contextual attributes.',
                    ],
                    [
                        'answer' => 'Mandatory Access Control (MAC)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. MAC generally bases access decisions on centrally enforced security labels and classifications.',
                    ],
                    [
                        'answer' => 'Attribute-Based Access Control (ABAC)',
                        'is_correct' => true,
                        'explanation' => 'Correct. ABAC evaluates attributes associated with users, resources, actions, and environmental context when making access decisions.',
                    ],
                    [
                        'answer' => 'Discretionary Access Control (DAC)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DAC allows resource owners or authorized users to control access permissions, rather than inherently evaluating dynamic contextual attributes.',
                    ],
                ],
            ],

            // Q44
            [
                'question' => 'Which committee is responsible for coordinating policy implementation under the Minister for Information and Communications as per ICT Policy 2072?',
                'options' => [
                    [
                        'answer' => 'ICT Executive Steering Body',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the standard name of the policy coordination committee described in the question.',
                    ],
                    [
                        'answer' => 'ICT Coordination Committee (ICTC)',
                        'is_correct' => true,
                        'explanation' => 'Correct. The ICT Coordination Committee is the expected answer for coordinating ICT policy implementation under the responsible minister.',
                    ],
                    [
                        'answer' => 'Electronic Governance Steering Committee',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the expected committee name for the coordination responsibility described.',
                    ],
                    [
                        'answer' => 'National IT Development Board',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the standard answer for the specified ICT Policy 2072 coordination committee.',
                    ],
                ],
            ],

            // Q45
            [
                'question' => 'Under Section 2(f), "Certifying Authority" means a person or entity that has obtained a license to issue what?',
                'options' => [
                    [
                        'answer' => 'Digital Signature Certificates',
                        'is_correct' => true,
                        'explanation' => 'Correct. Under Nepal’s Electronic Transactions Act terminology, a Certifying Authority is licensed to issue digital signature certificates.',
                    ],
                    [
                        'answer' => 'Encryption hardware modules',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A Certifying Authority is not defined simply as an organization licensed to issue encryption hardware.',
                    ],
                    [
                        'answer' => 'Domain name registrations',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Domain registration is a separate administrative service.',
                    ],
                    [
                        'answer' => 'Software licenses',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Software licensing is unrelated to the statutory definition of a Certifying Authority.',
                    ],
                ],
            ],

            // Q46
            [
                'question' => 'According to Section 2.4, on what core principle must access authorization for bank information be based?',
                'options' => [
                    [
                        'answer' => 'First Come First Served',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Access to sensitive banking information must be governed by security requirements rather than the order of requests.',
                    ],
                    [
                        'answer' => 'Managerial discretion',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Managerial discretion alone does not provide the required least-privilege access control.',
                    ],
                    [
                        'answer' => '"Need to know" basis and least privilege',
                        'is_correct' => true,
                        'explanation' => 'Correct. Access should be restricted to information required for authorized duties, with users receiving only the minimum necessary privileges.',
                    ],
                    [
                        'answer' => 'Position hierarchy only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Seniority or position alone does not justify unrestricted access to banking information.',
                    ],
                ],
            ],

            // Q47
            [
                'question' => 'What security technology is required by Section 2.9 to protect customer PINs, passwords, and sensitive data in networks and storage?',
                'options' => [
                    [
                        'answer' => 'Strong cryptography and end-to-end encryption',
                        'is_correct' => true,
                        'explanation' => 'Correct. Strong cryptographic protections safeguard sensitive information against unauthorized disclosure during transmission and storage, as applicable to the guideline.',
                    ],
                    [
                        'answer' => 'Two-factor authentication only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Two-factor authentication strengthens identity verification but does not by itself encrypt stored or transmitted sensitive data.',
                    ],
                    [
                        'answer' => 'Hashing only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hashing is not reversible encryption and does not alone protect all sensitive data in transit and storage.',
                    ],
                    [
                        'answer' => 'Secure File Transfer Protocol (SFTP) only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SFTP protects file transfers but does not provide comprehensive protection for every network communication and stored data item.',
                    ],
                ],
            ],

            // Q48
            [
                'question' => 'Which malware type requires a human user to run an infected host executable file before it can infect the system?',
                'options' => [
                    [
                        'answer' => 'Worm',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Worms are capable of self-replication and can spread between systems without requiring a user to run an infected host file in the traditional sense.',
                    ],
                    [
                        'answer' => 'Virus',
                        'is_correct' => true,
                        'explanation' => 'Correct. A traditional computer virus attaches to a host file or program and commonly activates when the infected host is executed.',
                    ],
                    [
                        'answer' => 'Rootkit',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A rootkit is designed to conceal malicious activity or maintain privileged access and does not inherently require an infected host executable.',
                    ],
                    [
                        'answer' => 'Spyware',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Spyware collects information without authorization and does not inherently require infection through an executable host file.',
                    ],
                ],
            ],

            // Q49
            [
                'question' => 'Which core CIA triad security pillar is violated if an unauthorized attacker intercepts and modifies the payload amount of a wire transfer in transit?',
                'options' => [
                    [
                        'answer' => 'Non-repudiation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Non-repudiation helps prevent parties from denying actions or transactions, but the direct violation described is unauthorized modification of data.',
                    ],
                    [
                        'answer' => 'Availability',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Availability concerns ensuring that systems and information remain accessible when required.',
                    ],
                    [
                        'answer' => 'Integrity',
                        'is_correct' => true,
                        'explanation' => 'Correct. Integrity ensures that data remains accurate and unaltered by unauthorized parties.',
                    ],
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Confidentiality protects information against unauthorized disclosure; the question specifically describes unauthorized alteration.',
                    ],
                ],
            ],

            // Q50
            [
                'question' => 'In the context of "Identification", what methodology must an LI perform to quantify the exact operational impact of potential disruptions on its critical operations?',
                'options' => [
                    [
                        'answer' => 'Cyber Threat Assessment (CTA)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cyber threat assessment identifies and evaluates cyber threats rather than comprehensively quantifying business disruption impacts.',
                    ],
                    [
                        'answer' => 'Business Impact Analysis (BIA)',
                        'is_correct' => true,
                        'explanation' => 'Correct. BIA evaluates how disruptions affect critical business operations, services, dependencies, and recovery priorities.',
                    ],
                    [
                        'answer' => 'Vulnerability Assessment and Penetration Testing (VAPT)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. VAPT identifies and tests security weaknesses rather than primarily measuring operational impacts of business disruptions.',
                    ],
                    [
                        'answer' => 'Risk Appetite Evaluation (RAE)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Risk appetite defines the amount and type of risk an organization is willing to accept; it is not a substitute for a business impact analysis.',
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
