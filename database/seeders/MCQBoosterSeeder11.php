<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class McqBoosterSeeder11 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'MCQ Booster 11',
            'description' => 'Computer Fundamentals, Computer Architecture, Networking, Operating Systems, Database, Web Technology, AI, Cybersecurity, ICT Policy, Electronic Transactions and NRB Guidelines MCQs.',
        ]);

        $questions = [
            [
                'question' => 'An IT officer at RBB needs to process continuous real-time telemetry from environmental sensors while simultaneously running high-speed discrete statistical calculations. Which type of computing system is best suited for this application?',
                'options' => [
                    [
                        'answer' => 'Digital Computer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A digital computer processes discrete data but does not inherently combine analog and digital processing.',
                    ],
                    [
                        'answer' => 'Analog Computer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An analog computer processes continuous physical quantities but is not ideal for the combined requirements described.',
                    ],
                    [
                        'answer' => 'Hybrid Computer',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Hybrid Computer. It combines analog processing for continuous signals with digital processing for discrete calculations.',
                    ],
                    [
                        'answer' => 'Mainframe Computer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A mainframe is designed primarily for high-volume transaction processing and large-scale data workloads.',
                    ],
                ],
            ],
            [
                'question' => 'If an RBB core application requires processing 50,000 concurrent online customer transactions per second without crashing, which architectural metric and computer type should the bank deploy?',
                'options' => [
                    [
                        'answer' => 'FLOPS / Supercomputer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. FLOPS measures floating-point computational performance, commonly emphasized in scientific computing.',
                    ],
                    [
                        'answer' => 'MIPS / Mainframe Computer',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: MIPS / Mainframe Computer. Mainframes are designed for high-volume transaction processing, reliability, and large numbers of concurrent users. MIPS measures millions of instructions per second.',
                    ],
                    [
                        'answer' => 'Clock Speed / Workstation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Clock speed alone does not establish transaction-processing capacity, and a workstation is not the typical choice for this workload.',
                    ],
                    [
                        'answer' => 'RPM / Hybrid Computer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. RPM measures rotational speed, not transaction-processing performance.',
                    ],
                ],
            ],
            [
                'question' => 'A machine learning model deployed for RBB fraud detection flags 90 out of 100 actual fraudulent transactions, but 20 legitimate transactions are accidentally flagged as fraud. What is the Recall (Sensitivity) of this model?',
                'options' => [
                    [
                        'answer' => '81.8%',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the recall calculated from the actual fraudulent transactions detected.',
                    ],
                    [
                        'answer' => '90.0%',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 90.0%. Recall = TP / (TP + FN) = 90 / 100 × 100 = 90%. False positives do not affect recall.',
                    ],
                    [
                        'answer' => '75.0%',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Recall is not calculated using the number of legitimate transactions incorrectly flagged.',
                    ],
                    [
                        'answer' => '80.0%',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The model correctly identifies 90 of the 100 actual fraudulent transactions.',
                    ],
                ],
            ],
            [
                'question' => 'In a permissioned enterprise Blockchain used for interbank clearing, why is the SHA-256 hash of the previous block header included in the current block header?',
                'options' => [
                    [
                        'answer' => 'To compress transaction payload size',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A previous block hash does not primarily compress transaction payloads.',
                    ],
                    [
                        'answer' => 'To create an immutable tamper-evident chain link',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: To create an immutable tamper-evident chain link. Changing a previous block changes its hash and breaks the subsequent hash linkage unless the chain is recomputed.',
                    ],
                    [
                        'answer' => 'To encrypt user account balances',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hashing is not encryption and does not conceal account balances.',
                    ],
                    [
                        'answer' => 'To speed up network routing table lookups',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Blockchain hashes do not serve as network routing table lookup mechanisms.',
                    ],
                ],
            ],
            [
                'question' => 'During a summer power grid failure in Kathmandu, RBB\'s primary Data Center switched to battery power. Which component ensures clean continuous power supply while the diesel generator boots up?',
                'options' => [
                    [
                        'answer' => 'Automatic Voltage Regulator (AVR)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An AVR regulates voltage but does not normally provide the required battery-backed power during an outage.',
                    ],
                    [
                        'answer' => 'Uninterruptible Power Supply (UPS)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Uninterruptible Power Supply (UPS). It provides immediate battery-backed power and power conditioning while the generator starts.',
                    ],
                    [
                        'answer' => 'Switched-Mode Power Supply (SMPS)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An SMPS converts electrical power to the voltages required by equipment but is not a substitute for a UPS.',
                    ],
                    [
                        'answer' => 'Surge Suppressor Strip',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A surge suppressor protects against voltage spikes but does not provide sustained backup power.',
                    ],
                ],
            ],
            [
                'question' => 'A web application developer at RBB needs to build an interactive dashboard where account summaries update automatically without refreshing the page. Which web technology combination must be implemented?',
                'options' => [
                    [
                        'answer' => 'Static HTML & XML Schema',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Static HTML does not independently provide dynamic asynchronous updates.',
                    ],
                    [
                        'answer' => 'JavaScript & AJAX',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: JavaScript & AJAX. They allow asynchronous requests and dynamic page updates without a full page reload.',
                    ],
                    [
                        'answer' => 'CSS inline styles & HTTP GET',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CSS controls presentation, and HTTP GET alone does not implement the dashboard update logic.',
                    ],
                    [
                        'answer' => 'HTML Forms & PostScript',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. HTML forms collect user input, while PostScript is a page description language.',
                    ],
                ],
            ],
            [
                'question' => 'The write policy that updates both cache and main memory simultaneously is called:',
                'options' => [
                    [
                        'answer' => 'Write-Back',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Write-Back updates main memory later, usually when a modified cache line is evicted.',
                    ],
                    [
                        'answer' => 'Write-Through',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Write-Through. Each write updates both the cache and main memory.',
                    ],
                    [
                        'answer' => 'Write-Allocate',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Write-Allocate determines whether a cache line is brought into the cache following a write miss.',
                    ],
                    [
                        'answer' => 'Lazy Write',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Lazy or deferred writing does not mean that both cache and main memory are updated simultaneously.',
                    ],
                ],
            ],
            [
                'question' => 'Which architecture relies heavily on optimizing compiler design to schedule instructions?',
                'options' => [
                    [
                        'answer' => 'CISC',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CISC emphasizes a rich instruction set and complex instructions.',
                    ],
                    [
                        'answer' => 'Microcoded CPU',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Microcoded CPUs use internal microinstructions to implement machine instructions.',
                    ],
                    [
                        'answer' => 'RISC',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: RISC. Its relatively simple instruction design makes compiler optimization and efficient instruction scheduling important.',
                    ],
                    [
                        'answer' => 'Vacuum Tube Computers',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Vacuum tubes describe an early hardware technology, not the instruction-set architecture in question.',
                    ],
                ],
            ],
            [
                'question' => 'Which architecture allows simultaneous fetching of instructions and data?',
                'options' => [
                    [
                        'answer' => 'Princeton Architecture',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Princeton architecture is another name for the Von Neumann architecture, which traditionally shares instruction and data memory paths.',
                    ],
                    [
                        'answer' => 'Turing Machine',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A Turing machine is an abstract computational model.',
                    ],
                    [
                        'answer' => 'Harvard Architecture',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Harvard Architecture. Separate instruction and data memory paths allow simultaneous instruction fetching and data access.',
                    ],
                    [
                        'answer' => 'Von Neumann Architecture',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Traditional Von Neumann architecture uses a shared memory path for instructions and data.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following represents the correct sequence of memory levels arranged from fastest to slowest access speed?',
                'options' => [
                    [
                        'answer' => 'CPU Registers → Cache Memory → Main Memory (RAM) → Secondary Memory',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: CPU Registers → Cache Memory → Main Memory (RAM) → Secondary Memory. Registers are generally fastest, followed by cache, RAM, and secondary storage.',
                    ],
                    [
                        'answer' => 'Cache Memory → CPU Registers → RAM → Hard Disk',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CPU registers are generally faster than cache memory.',
                    ],
                    [
                        'answer' => 'Main Memory (RAM) → Cache Memory → CPU Registers → Optical Disk',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. RAM is slower than cache and CPU registers.',
                    ],
                    [
                        'answer' => 'CPU Registers → Main Memory (RAM) → Cache Memory → Magnetic Tape',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cache memory is generally faster than main memory.',
                    ],
                ],
            ],
            [
                'question' => 'When an I/O device triggers an external hardware interrupt, what is the immediate first step taken by the CPU?',
                'options' => [
                    [
                        'answer' => 'Execute the device driver software',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The CPU normally saves the required execution state and transfers control to the interrupt handler before the driver performs its work.',
                    ],
                    [
                        'answer' => 'Reset the system bus clock',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A hardware interrupt does not normally require resetting the system bus clock.',
                    ],
                    [
                        'answer' => 'Save the current execution context onto the system stack',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Save the current execution context onto the system stack. Interrupt entry preserves the necessary processor state so execution can resume afterward. Exact hardware behavior varies by architecture.',
                    ],
                    [
                        'answer' => 'Clear the cache memory lines',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An interrupt does not normally require clearing cache memory.',
                    ],
                ],
            ],
            [
                'question' => 'Why is Spooling used when multiple banking terminals send print requests to a single shared network printer?',
                'options' => [
                    [
                        'answer' => 'It speeds up the mechanical printing head.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Spooling does not increase the printer mechanism speed.',
                    ],
                    [
                        'answer' => 'It queues print jobs on secondary storage so applications can return to work immediately without waiting for slow printing execution.',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: It queues print jobs on secondary storage so applications can continue while the printer processes the jobs sequentially.',
                    ],
                    [
                        'answer' => 'It encrypts the paper printouts.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Spooling manages queued jobs; it does not encrypt printed pages.',
                    ],
                    [
                        'answer' => 'It compresses image files to prevent memory fragmentation.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Spooling does not primarily compress images or prevent memory fragmentation.',
                    ],
                ],
            ],
            [
                'question' => 'An RBB branch network requires connecting 50 desktop PCs in a local subnet so that data frames are delivered strictly to target MAC addresses without flooding all ports. Which Layer 2 device must be deployed?',
                'options' => [
                    [
                        'answer' => 'Passive Hub',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A hub repeats incoming signals to all its other ports.',
                    ],
                    [
                        'answer' => 'Network Switch',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Network Switch. A Layer 2 switch learns MAC addresses and forwards known unicast frames to the appropriate port.',
                    ],
                    [
                        'answer' => 'Signal Repeater',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A repeater regenerates signals but does not perform MAC-address-based forwarding.',
                    ],
                    [
                        'answer' => 'Access Point in Ad-Hoc mode',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An access point provides wireless connectivity rather than serving as the primary wired Layer 2 switching device described.',
                    ],
                ],
            ],
            [
                'question' => 'Which buffering strategy uses two alternating buffers to achieve concurrent processing?',
                'options' => [
                    [
                        'answer' => 'Circular Buffering',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Circular buffering reuses a fixed-size buffer in a circular arrangement.',
                    ],
                    [
                        'answer' => 'Spooling',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Spooling queues jobs, commonly using secondary storage.',
                    ],
                    [
                        'answer' => 'Single Buffering',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Single buffering uses one buffer and generally provides less opportunity for overlapping input/output and processing.',
                    ],
                    [
                        'answer' => 'Double Buffering',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Double Buffering. One buffer can be filled while the other is processed.',
                    ],
                ],
            ],
            [
                'question' => 'An RBB network administrator assigns an IP address 172.16.50.10 with a subnet mask of 255.255.0.0. What is the Network ID of this address?',
                'options' => [
                    [
                        'answer' => '172.0.0.0',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This is not the network address obtained using the supplied subnet mask.',
                    ],
                    [
                        'answer' => '172.16.0.0',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 172.16.0.0. Applying the /16 subnet mask to 172.16.50.10 gives the network address 172.16.0.0.',
                    ],
                    [
                        'answer' => '172.16.50.0',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. This network address would correspond to a /24 mask, not the supplied /16 mask.',
                    ],
                    [
                        'answer' => '255.255.0.0',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 255.255.0.0 is the subnet mask, not the network ID.',
                    ],
                ],
            ],
            [
                'question' => 'What does a non-zero remainder indicate at the receiver during CRC verification?',
                'options' => [
                    [
                        'answer' => 'Transmission was successful',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A successful CRC verification normally produces a zero remainder under the agreed CRC procedure.',
                    ],
                    [
                        'answer' => 'Data is uncorrupted',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A non-zero remainder indicates that the received data fails the CRC check.',
                    ],
                    [
                        'answer' => 'Error occurred in transmission',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Error occurred in transmission. A non-zero CRC remainder indicates a detected error, although CRC cannot detect every possible corruption pattern.',
                    ],
                    [
                        'answer' => 'Frame needs no acknowledgment',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A CRC result alone does not determine whether an acknowledgment is required.',
                    ],
                ],
            ],
            [
                'question' => 'Which feature allows external USB devices to be plugged in or unplugged while the computer system is running without causing damage or requiring a reboot?',
                'options' => [
                    [
                        'answer' => 'Bus Pipelining',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Bus pipelining overlaps stages of bus operations.',
                    ],
                    [
                        'answer' => 'Hot-Swapping / Hot-Plugging',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Hot-Swapping / Hot-Plugging. Supported interfaces such as USB allow compatible devices to be connected or disconnected while the system is running.',
                    ],
                    [
                        'answer' => 'Bus Snooping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Bus snooping is commonly associated with monitoring bus transactions for cache coherence.',
                    ],
                    [
                        'answer' => 'Daisy Chaining',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Daisy chaining connects devices in sequence and does not itself define hot-plugging support.',
                    ],
                ],
            ],
            [
                'question' => 'In Public Key Infrastructure (PKI), if User A wants to send a confidential encrypted message to User B, which key must User A use to encrypt the payload?',
                'options' => [
                    [
                        'answer' => 'User A\'s Private Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. User A\'s private key is kept secret and is not the key used to provide confidentiality for User B.',
                    ],
                    [
                        'answer' => 'User A\'s Public Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Encrypting with User A\'s public key would make the message decryptable by User A\'s corresponding private key, not User B\'s.',
                    ],
                    [
                        'answer' => 'User B\'s Public Key',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: User B\'s Public Key. In public-key encryption, the recipient\'s public key is used to protect confidentiality, and the recipient\'s private key decrypts the message.',
                    ],
                    [
                        'answer' => 'User B\'s Private Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. User B must keep their private key secret; it is used for decryption, not shared encryption by User A.',
                    ],
                ],
            ],
            [
                'question' => 'When an RBB customer signs a digital banking transaction using their Private Key, which security properties are established?',
                'options' => [
                    [
                        'answer' => 'Confidentiality and Speed',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A digital signature does not inherently provide confidentiality or faster processing.',
                    ],
                    [
                        'answer' => 'Origin Authenticity, Data Integrity, and Non-repudiation',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Origin Authenticity, Data Integrity, and Non-repudiation. A valid digital signature can establish these properties when the key and identity are properly managed.',
                    ],
                    [
                        'answer' => 'Anonymity and Redundancy',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Digital signatures do not inherently guarantee anonymity or redundancy.',
                    ],
                    [
                        'answer' => 'High Availability and Compression',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Digital signatures do not inherently provide high availability or data compression.',
                    ],
                ],
            ],
            [
                'question' => 'A stateful firewall deployed at RBB network boundaries blocks incoming traffic addressed to port 23 by default. Which insecure service is being blocked?',
                'options' => [
                    [
                        'answer' => 'Telnet',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Telnet. It traditionally uses TCP port 23 and transmits credentials and session data without encryption.',
                    ],
                    [
                        'answer' => 'SSH',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SSH normally uses TCP port 22 and provides encrypted remote access.',
                    ],
                    [
                        'answer' => 'HTTPS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. HTTPS normally uses TCP port 443.',
                    ],
                    [
                        'answer' => 'SFTP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SFTP typically operates over SSH, usually on TCP port 22.',
                    ],
                ],
            ],
            [
                'question' => 'An RBB branch is installing Cat6 UTP copper cabling for workstations. What is the maximum recommended physical segment length for a Cat6 Ethernet run without using a repeater/switch?',
                'options' => [
                    [
                        'answer' => '10 meters',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Ten meters is shorter than the standard maximum Ethernet channel length.',
                    ],
                    [
                        'answer' => '100 meters',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 100 meters. Standard twisted-pair Ethernet structured cabling commonly supports a channel length of up to 100 meters, subject to the applicable Ethernet standard.',
                    ],
                    [
                        'answer' => '500 meters',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A 500-meter run exceeds the standard twisted-pair Ethernet channel length.',
                    ],
                    [
                        'answer' => '1000 meters',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A 1000-meter copper Ethernet run exceeds the standard channel length.',
                    ],
                ],
            ],
            [
                'question' => 'Which switching technology breaks application data into fixed or variable packets and routes each packet independently across shared network links based on destination IP addresses?',
                'options' => [
                    [
                        'answer' => 'Circuit Switching',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Circuit switching establishes a dedicated communication path for the duration of a connection.',
                    ],
                    [
                        'answer' => 'Packet Switching',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Packet Switching. In datagram networks, packets can be forwarded independently according to destination addresses and may take different routes.',
                    ],
                    [
                        'answer' => 'Message Switching',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Message switching stores and forwards complete messages rather than dividing all communication into independently routed network packets in the manner described.',
                    ],
                    [
                        'answer' => 'Permanent Virtual Circuit (PVC)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A PVC is a logically established path in a virtual-circuit network rather than the general datagram packet-switching approach.',
                    ],
                ],
            ],
            [
                'question' => 'What technology creates a secure, encrypted tunnel over an untrusted public network?',
                'options' => [
                    [
                        'answer' => 'LAN',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A LAN connects devices within a limited geographical area.',
                    ],
                    [
                        'answer' => 'VLAN',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A VLAN logically segments a Layer 2 network but does not inherently create an encrypted tunnel.',
                    ],
                    [
                        'answer' => 'VPN',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: VPN (Virtual Private Network). It can create an encrypted tunnel across an untrusted network.',
                    ],
                    [
                        'answer' => 'MAN',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A MAN connects networks across a metropolitan area.',
                    ],
                ],
            ],
            [
                'question' => 'An IT audit reveals that 5 distinct branch routers need dedicated encrypted communication channels between every pair of routers. How many total symmetric key pairs must be generated?',
                'options' => [
                    [
                        'answer' => '5 keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Five keys would provide only one key per router, not a unique shared key for every pair.',
                    ],
                    [
                        'answer' => '10 keys',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 10 keys. The number of unique router pairs is n(n - 1) / 2 = 5 × 4 / 2 = 10. Each pair requires one shared symmetric key.',
                    ],
                    [
                        'answer' => '20 keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Twenty counts both directions separately, although a symmetric key is shared by each pair.',
                    ],
                    [
                        'answer' => '25 keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Twenty-five would include five self-pairs, which are not needed.',
                    ],
                ],
            ],
            [
                'question' => 'How many collision domains are present in an 8-port Hub?',
                'options' => [
                    [
                        'answer' => '8',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A hub does not isolate collision domains by port.',
                    ],
                    [
                        'answer' => '4',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The ports of a hub share one collision domain.',
                    ],
                    [
                        'answer' => '1',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 1. A hub repeats signals across its ports, so all connected devices share one collision domain.',
                    ],
                    [
                        'answer' => '0',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A hub-based half-duplex Ethernet segment has a shared collision domain.',
                    ],
                ],
            ],
            [
                'question' => 'An operating system scheduler uses Round-Robin scheduling with a time quantum of 4 ms. If Process P1 requires 10 ms of CPU burst time, how many context switches will P1 undergo before completing execution?',
                'options' => [
                    [
                        'answer' => '1',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. P1 needs three CPU time slices: 4 ms, 4 ms, and 2 ms.',
                    ],
                    [
                        'answer' => '3',
                        'is_correct' => false,
                        'explanation' => 'Incorrect under the conventional interpretation of switches caused by quantum expiration. P1 is preempted twice before its final slice.',
                    ],
                    [
                        'answer' => '2',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 2, counting the two preemptions after the first and second 4 ms time slices. If switches into P1 or the final switch away from P1 are also counted, the total depends on the scheduling context.',
                    ],
                    [
                        'answer' => '4',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The process completes in three CPU slices, with two quantum expirations before completion.',
                    ],
                ],
            ],
            [
                'question' => 'Three processes (P1, P2, P3) arrive at time 0 with burst times of 24 ms, 3 ms, and 3 ms respectively. Under FCFS scheduling, what is the Average Waiting Time?',
                'options' => [
                    [
                        'answer' => '17 ms',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 17 ms. Waiting times are 0 ms, 24 ms, and 27 ms. Average = (0 + 24 + 27) / 3 = 17 ms.',
                    ],
                    [
                        'answer' => '27 ms',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Twenty-seven milliseconds is P3’s waiting time, not the average.',
                    ],
                    [
                        'answer' => '30 ms',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Thirty milliseconds is the sum of the two shorter burst times, not the average waiting time.',
                    ],
                    [
                        'answer' => '9 ms',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The average waiting time must include the waiting times of all three processes.',
                    ],
                ],
            ],
            [
                'question' => 'Four processes are competing for resources. A system is declared to be in a "Deadlock State" if which of the following conditions holds true?',
                'options' => [
                    [
                        'answer' => 'Only Mutual Exclusion is present.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Mutual exclusion alone is not sufficient to establish deadlock.',
                    ],
                    [
                        'answer' => 'All four Coffman conditions (Mutual Exclusion, Hold & Wait, No Preemption, Circular Wait) hold simultaneously.',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: All four Coffman conditions hold simultaneously. These necessary conditions are mutual exclusion, hold and wait, no preemption, and circular wait.',
                    ],
                    [
                        'answer' => 'Paging memory is completely full.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Full memory or paging space does not by itself establish deadlock.',
                    ],
                    [
                        'answer' => 'The CPU clock frequency drops below threshold limits.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CPU clock frequency is not a Coffman deadlock condition.',
                    ],
                ],
            ],
            [
                'question' => 'In a UNIX terminal, a system administrator enters the command chmod 755 script.sh. What access rights are assigned to Group members for this file?',
                'options' => [
                    [
                        'answer' => 'Read, Write, Execute (rwx)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The digit 7 grants read, write, and execute permissions to the owner, not the group.',
                    ],
                    [
                        'answer' => 'Read and Execute (r-x)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Read and Execute (r-x). In mode 755, the group permission digit is 5, representing read (4) plus execute (1).',
                    ],
                    [
                        'answer' => 'Read only (r--)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Read-only permission corresponds to digit 4.',
                    ],
                    [
                        'answer' => 'Write only (-w-)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Write-only permission corresponds to digit 2.',
                    ],
                ],
            ],
            [
                'question' => 'What is POSIX?',
                'options' => [
                    [
                        'answer' => 'A standard file system for Microsoft Windows',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. POSIX is not a Windows file system.',
                    ],
                    [
                        'answer' => 'A standard API set for Unix-like operating systems',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: A standard API set for Unix-like operating systems. POSIX specifies portable operating system interfaces, including APIs and shell utilities.',
                    ],
                    [
                        'answer' => 'A physical CPU register',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. POSIX is a family of operating system interface standards.',
                    ],
                    [
                        'answer' => 'A type of device driver',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. POSIX defines standardized interfaces rather than a device driver type.',
                    ],
                ],
            ],
            [
                'question' => 'The process of switching CPU context from one process to another is managed by the:',
                'options' => [
                    [
                        'answer' => 'CPU Scheduler / OS Kernel',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: CPU Scheduler / OS Kernel. The scheduler selects the next process, and kernel routines perform the context switch.',
                    ],
                    [
                        'answer' => 'Compiler',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A compiler translates source code into another representation or machine code.',
                    ],
                    [
                        'answer' => 'Assembler',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An assembler translates assembly language into machine code.',
                    ],
                    [
                        'answer' => 'Hard Disk',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A hard disk provides persistent storage and does not manage CPU scheduling.',
                    ],
                ],
            ],
            [
                'question' => 'In an RBB Core Banking System transaction, money is debited from Account A, but a network crash occurs before crediting Account B. Which database ACID property mandates that the debit must be rolled back completely?',
                'options' => [
                    [
                        'answer' => 'Atomicity',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Atomicity. A transaction is treated as an indivisible unit: either all its operations commit or none of them do.',
                    ],
                    [
                        'answer' => 'Consistency',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Consistency requires transactions to preserve database rules and integrity constraints.',
                    ],
                    [
                        'answer' => 'Isolation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Isolation governs how concurrent transactions interact.',
                    ],
                    [
                        'answer' => 'Durability',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Durability ensures that committed transactions persist despite failures.',
                    ],
                ],
            ],
            [
                'question' => 'In database table design, if an attribute Manager_ID in an EMPLOYEE table references the Employee_ID primary key of the MANAGER table, what type of key constraint is Manager_ID?',
                'options' => [
                    [
                        'answer' => 'Primary Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A primary key uniquely identifies a record in its own table.',
                    ],
                    [
                        'answer' => 'Candidate Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A candidate key is a minimal attribute set that uniquely identifies a record.',
                    ],
                    [
                        'answer' => 'Foreign Key',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Foreign Key. Manager_ID references a key in another table and establishes a referential relationship.',
                    ],
                    [
                        'answer' => 'Composite Key',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A composite key consists of two or more attributes used together as a key.',
                    ],
                ],
            ],
            [
                'question' => 'A table LOAN_RECORDS contains columns (Branch_ID, Loan_ID, Customer_Name, Branch_City). If Branch_City depends on Branch_ID, which is only part of the composite primary key (Branch_ID, Loan_ID), which normal form is violated?',
                'options' => [
                    [
                        'answer' => 'First Normal Form (1NF)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The stated dependency does not by itself establish a violation of first normal form.',
                    ],
                    [
                        'answer' => 'Second Normal Form (2NF)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Second Normal Form (2NF). Branch_City depends on only part of the composite key, creating a partial dependency.',
                    ],
                    [
                        'answer' => 'Third Normal Form (3NF)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The direct issue described is a partial dependency, which violates 2NF.',
                    ],
                    [
                        'answer' => 'BCNF',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The immediate normalization violation identified by the question is the violation of 2NF.',
                    ],
                ],
            ],
            [
                'question' => 'RBB management requires generating multi-dimensional quarterly credit analysis reports across historical branch datasets spanning 10 years. Which data architecture is appropriate?',
                'options' => [
                    [
                        'answer' => 'Operational OLTP System',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. OLTP systems are optimized primarily for routine operational transactions.',
                    ],
                    [
                        'answer' => 'Data Warehouse with an OLAP Cube Engine',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Data Warehouse with an OLAP Cube Engine. It supports historical analysis, multidimensional queries, aggregation, and reporting.',
                    ],
                    [
                        'answer' => 'Flat CSV file indexer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Flat files do not inherently provide the integrated analytical architecture described.',
                    ],
                    [
                        'answer' => 'Local Access Database',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A local desktop database is not the typical enterprise architecture for large-scale historical analytics.',
                    ],
                ],
            ],
            [
                'question' => 'Which HTML input tag attribute specifies that a text field must be filled out before submitting a web banking form?',
                'options' => [
                    [
                        'answer' => 'placeholder',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The placeholder attribute displays a hint inside an input field.',
                    ],
                    [
                        'answer' => 'readonly',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The readonly attribute prevents users from editing a field but does not require them to fill it out.',
                    ],
                    [
                        'answer' => 'required',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: required. It enables browser-side constraint validation requiring a value before form submission.',
                    ],
                    [
                        'answer' => 'disabled',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A disabled input cannot normally be edited and is not submitted with the form.',
                    ],
                ],
            ],
            [
                'question' => 'Which CSS selector targets an element with a specific unique identifier named header-box on a web page?',
                'options' => [
                    [
                        'answer' => '.header-box',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A period selects elements by class name.',
                    ],
                    [
                        'answer' => '#header-box',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: #header-box. The hash symbol selects the element whose ID is header-box.',
                    ],
                    [
                        'answer' => '*header-box',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The asterisk is the universal selector; this is not the correct ID selector syntax.',
                    ],
                    [
                        'answer' => '&header-box',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The ampersand is used as a parent selector reference in certain CSS preprocessing and nesting contexts, not as a standard ID selector.',
                    ],
                ],
            ],
            [
                'question' => 'RBB establishes a Disaster Recovery metric stipulating that in the event of a system crash, financial transaction databases must be restored to a state no older than 15 minutes prior to the crash. What metric is defined?',
                'options' => [
                    [
                        'answer' => 'Recovery Time Objective (RTO) = 15 minutes',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. RTO defines the target time within which a system or service should be restored.',
                    ],
                    [
                        'answer' => 'Recovery Point Objective (RPO) = 15 minutes',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Recovery Point Objective (RPO) = 15 minutes. RPO defines the maximum acceptable amount of data loss measured in time.',
                    ],
                    [
                        'answer' => 'Service Level Agreement (SLA) = 15 minutes',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. An SLA specifies agreed service commitments and is not the particular recovery data-loss metric described.',
                    ],
                    [
                        'answer' => 'Mean Time To Repair (MTTR) = 15 minutes',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. MTTR measures the average time required to repair a failed system or component.',
                    ],
                ],
            ],
            [
                'question' => 'An RBB backup policy specifies performing a Full Backup every Sunday midnight, and daily Differential Backups from Monday through Saturday. If a storage failure occurs on Thursday afternoon, which backups are required for full system recovery?',
                'options' => [
                    [
                        'answer' => 'Sunday Full Backup only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Sunday full backup alone does not include the changes captured by subsequent differential backups.',
                    ],
                    [
                        'answer' => 'Sunday Full Backup + Wednesday Differential Backup',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Sunday Full Backup + Wednesday Differential Backup. Assuming the Wednesday differential is the latest completed backup available, it contains changes made since Sunday. Any Thursday changes after that backup may be lost.',
                    ],
                    [
                        'answer' => 'Sunday Full Backup + Monday, Tuesday, and Wednesday Differential Backups',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Differential backups accumulate changes since the last full backup, so restoring the latest available differential normally makes earlier differentials unnecessary.',
                    ],
                    [
                        'answer' => 'Thursday Differential Backup only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A differential backup requires the corresponding full backup as its baseline, and a Thursday backup may not yet have completed when the failure occurs.',
                    ],
                ],
            ],
            [
                'question' => 'An employee receives a call from someone claiming to be an RBB central IT administrator requesting their domain password to resolve an urgent server bug. What type of social engineering attack is this?',
                'options' => [
                    [
                        'answer' => 'Spear Phishing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Spear phishing is a targeted phishing attack, usually delivered through deceptive electronic messages.',
                    ],
                    [
                        'answer' => 'Pretexting / Vishing',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Pretexting / Vishing. The attacker invents an IT support scenario and uses a phone call to trick the employee into revealing a password.',
                    ],
                    [
                        'answer' => 'Watering Hole Attack',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A watering hole attack compromises a website frequented by the intended victims.',
                    ],
                    [
                        'answer' => 'Tailgating',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Tailgating involves gaining unauthorized physical access by following an authorized person.',
                    ],
                ],
            ],
            [
                'question' => 'A user attempts to access a banking web page, but is redirected to a malicious cloned site because the attacker poisoned the local network\'s DNS cache mapping. What type of cyber attack occurred?',
                'options' => [
                    [
                        'answer' => 'Phishing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Phishing typically tricks users into visiting fraudulent sites or disclosing sensitive information, but the DNS poisoning mechanism specifically describes pharming.',
                    ],
                    [
                        'answer' => 'Pharming',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Pharming. DNS cache poisoning can redirect users from a legitimate domain to a malicious destination.',
                    ],
                    [
                        'answer' => 'Smishing',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Smishing is phishing conducted through SMS or text messages.',
                    ],
                    [
                        'answer' => 'Man-in-the-Middle SQLi',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SQL injection targets database queries, while the described attack manipulates DNS resolution.',
                    ],
                ],
            ],
            [
                'question' => 'An attacker inputs \' OR \'1\'=\'1 into an online banking login input box, bypassing authentication controls and retrieving internal database tables. What vulnerability was exploited?',
                'options' => [
                    [
                        'answer' => 'Cross-Site Scripting (XSS)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. XSS injects malicious client-side scripts into web content.',
                    ],
                    [
                        'answer' => 'SQL Injection (SQLi)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: SQL Injection (SQLi). Unsafe construction of database queries can allow attacker-controlled input to alter SQL logic.',
                    ],
                    [
                        'answer' => 'Buffer Overflow',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A buffer overflow occurs when data exceeds the bounds of an allocated memory buffer.',
                    ],
                    [
                        'answer' => 'Cross-Site Request Forgery (CSRF)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CSRF tricks an authenticated user\'s browser into making an unwanted request to a site where the user is authenticated.',
                    ],
                ],
            ],
            [
                'question' => 'An RBB branch teller can view customer account balances but cannot authorize credit loan disbursements, whereas a Branch Manager can perform both actions. Which access control scheme is enforced?',
                'options' => [
                    [
                        'answer' => 'Discretionary Access Control (DAC)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DAC allows resource owners or authorized principals to grant access permissions.',
                    ],
                    [
                        'answer' => 'Role-Based Access Control (RBAC)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Role-Based Access Control (RBAC). Permissions are assigned to roles, such as Teller and Branch Manager, and users receive permissions through their assigned roles.',
                    ],
                    [
                        'answer' => 'Mandatory Access Control (MAC)',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. MAC enforces centrally defined access rules based on security labels or classifications.',
                    ],
                    [
                        'answer' => 'Rule-Based Access Control',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Rule-based access control relies on predefined system rules or conditions rather than primarily assigning permissions through job roles.',
                    ],
                ],
            ],
            [
                'question' => 'Which preceding national policy first paved the way for the liberalization of the telecommunication sector in Nepal, as cited in ICT Policy 2072?',
                'options' => [
                    [
                        'answer' => 'Industrial Policy 1990',
                        'is_correct' => false,
                        'explanation' => 'Incorrect according to the supplied answer key. Industrial policy is not the specified communication-sector policy.',
                    ],
                    [
                        'answer' => 'National Communication Policy 1992',
                        'is_correct' => true,
                        'explanation' => 'Correct answer according to the supplied quiz: National Communication Policy 1992.',
                    ],
                    [
                        'answer' => 'Telecommunications Policy 1999',
                        'is_correct' => false,
                        'explanation' => 'Incorrect according to the supplied answer key. The question identifies an earlier national communication policy.',
                    ],
                    [
                        'answer' => 'IT Policy 2000',
                        'is_correct' => false,
                        'explanation' => 'Incorrect according to the supplied answer key. IT Policy 2000 is not the specified National Communication Policy.',
                    ],
                ],
            ],
            [
                'question' => 'What computing infrastructure does the policy specify to roll out for enabling deployment of cloud-based services?',
                'options' => [
                    [
                        'answer' => 'Public Data Grid',
                        'is_correct' => false,
                        'explanation' => 'Incorrect according to the supplied answer key. This is not the specified infrastructure option.',
                    ],
                    [
                        'answer' => 'Distributed Ledger Infrastructure',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Distributed ledger infrastructure supports blockchain-style systems but is not the infrastructure described for cloud services.',
                    ],
                    [
                        'answer' => 'Central Government Mainframe System',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A centralized mainframe is not the specified shared cloud-computing infrastructure.',
                    ],
                    [
                        'answer' => 'Shared/Cloud Computing Infrastructure',
                        'is_correct' => true,
                        'explanation' => 'Correct answer according to the supplied quiz: Shared/Cloud Computing Infrastructure.',
                    ],
                ],
            ],
            [
                'question' => 'Unless otherwise agreed upon, where is an electronic record deemed to be dispatched and received under Section 11?',
                'options' => [
                    [
                        'answer' => 'Dispatched from the location of the ISP server; received at the domain registrar',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The location of an ISP server or domain registrar does not determine dispatch and receipt under the stated rule.',
                    ],
                    [
                        'answer' => 'Dispatched from where the originator has their place of business; received at where the addressee has their place of business',
                        'is_correct' => true,
                        'explanation' => 'Correct answer according to the supplied quiz: The electronic record is deemed dispatched from the originator\'s place of business and received at the addressee\'s place of business, subject to the applicable statutory rules and any contrary agreement.',
                    ],
                    [
                        'answer' => 'Dispatched from the residence of the originator; received at the office of the Controller',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The specified rule concerns the relevant places of business, not necessarily a residence or the Controller\'s office.',
                    ],
                    [
                        'answer' => 'Dispatched from Nepal; received at any foreign destination',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The rule does not establish these fixed geographical locations for every electronic record.',
                    ],
                ],
            ],
            [
                'question' => 'If data pertaining to Nepalese banking operations is stored or processed abroad, what right does NRB reserve under Section 2.16 of the IT Guideline?',
                'options' => [
                    [
                        'answer' => 'Right to cause an inspection to be made on the data centre and system',
                        'is_correct' => true,
                        'explanation' => 'Correct answer according to the supplied quiz: Right to cause an inspection to be made on the data centre and system.',
                    ],
                    [
                        'answer' => 'Right to demand complete ownership of foreign servers',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Inspection rights do not inherently confer ownership of foreign servers.',
                    ],
                    [
                        'answer' => 'Right to revoke the bank\'s operational license immediately',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The stated inspection right does not automatically mean immediate license revocation.',
                    ],
                    [
                        'answer' => 'Right to restrict international fund transfers completely',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The stated provision concerns regulatory inspection, not a blanket prohibition on international fund transfers.',
                    ],
                ],
            ],
            [
                'question' => 'According to Section 2.24 of the IT Guideline, what rule applies to electronic cards and their PINs during production and delivery?',
                'options' => [
                    [
                        'answer' => 'They must be mailed in the same sealed envelope',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Sending cards and PINs together increases the risk of compromise.',
                    ],
                    [
                        'answer' => 'PINs must be printed directly on the back of the card',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Printing a PIN on the card would compromise its confidentiality.',
                    ],
                    [
                        'answer' => 'They can be handled by a single trusted officer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Single-person control weakens segregation of duties and increases the risk of misuse.',
                    ],
                    [
                        'answer' => 'They must not be under the control of a single person and must not be together at any point before reaching the customer',
                        'is_correct' => true,
                        'explanation' => 'Correct answer according to the supplied quiz: Cards and PINs must be handled separately, with appropriate segregation of duties, until they reach the customer.',
                    ],
                ],
            ],
            [
                'question' => 'What policy should be strictly applied for software installation on critical systems to prevent unauthorized applications from executing?',
                'options' => [
                    [
                        'answer' => 'Blacklisting policy with automatic script blocker',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Blacklisting blocks known prohibited applications but may allow unknown or unlisted applications.',
                    ],
                    [
                        'answer' => 'Permit-all with warning alerts',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. A permit-all policy allows applications by default and relies on warnings rather than strict prevention.',
                    ],
                    [
                        'answer' => 'Whitelisting capabilities configured with a deny-all, permit-by-exception policy',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Whitelisting capabilities configured with a deny-all, permit-by-exception policy. Only explicitly authorized applications are permitted to execute.',
                    ],
                    [
                        'answer' => 'Heuristic anti-virus installation without administrative locking',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Antivirus detection alone does not guarantee that only authorized applications can execute.',
                    ],
                ],
            ],
            [
                'question' => 'What core security principle restricts user and system access rights to strictly the bare minimum required to perform authorized tasks?',
                'options' => [
                    [
                        'answer' => 'Principle of Separation of Duties',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Separation of duties divides sensitive responsibilities among multiple people to reduce fraud and error.',
                    ],
                    [
                        'answer' => 'Principle of Least Privilege',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Principle of Least Privilege. Users, applications, and systems receive only the permissions necessary to perform their authorized tasks.',
                    ],
                    [
                        'answer' => 'Four-Eyes Principle',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. The Four-Eyes Principle requires a second authorized person to review or approve specified actions.',
                    ],
                    [
                        'answer' => 'Non-repudiation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Non-repudiation provides evidence that a party performed or authorized an action and cannot credibly deny it.',
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
