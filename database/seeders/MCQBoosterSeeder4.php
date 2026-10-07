<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class MCQBoosterSeeder4 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'MCQ Booster 4',
            'description' => 'Computer Fundamentals, Hardware, CPU Architecture, Memory, Storage, Motherboard and ICT in Nepal MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which category of computers occupies the highest tier in processing capability, performing trillions of floating-point operations per second (FLOPS) for scientific modeling and complex simulations?',
                'options' => [
                    [
                        'answer' => 'Mainframe Computer',
                        'is_correct' => false,
                        'explanation' => 'Mainframe computers are designed for high-volume transaction processing and supporting many users, but supercomputers provide the highest computational performance.',
                    ],
                    [
                        'answer' => 'Supercomputer',
                        'is_correct' => true,
                        'explanation' => 'Supercomputers provide the highest level of computational performance and are used for scientific modeling, simulations, weather forecasting, and other computationally intensive tasks.',
                    ],
                    [
                        'answer' => 'Minicomputer',
                        'is_correct' => false,
                        'explanation' => 'Minicomputers are mid-range systems that historically served organizations and departments but do not match supercomputer performance.',
                    ],
                    [
                        'answer' => 'Microcomputer',
                        'is_correct' => false,
                        'explanation' => 'Microcomputers are personal computers such as desktops and laptops and have much lower processing capability than supercomputers.',
                    ],
                ],
            ],

            [
                'question' => 'What structural technology replaced vacuum tubes in Second-Generation computers, drastically reducing system physical size, heat output, and power consumption?',
                'options' => [
                    [
                        'answer' => 'Integrated Circuits (ICs)',
                        'is_correct' => false,
                        'explanation' => 'Integrated circuits became the defining technology of Third-Generation computers.',
                    ],
                    [
                        'answer' => 'Microprocessors',
                        'is_correct' => false,
                        'explanation' => 'Microprocessors became prominent in Fourth-Generation computers.',
                    ],
                    [
                        'answer' => 'Transistors',
                        'is_correct' => true,
                        'explanation' => 'Transistors replaced vacuum tubes in Second-Generation computers, making systems smaller, more reliable, cooler, and more energy efficient.',
                    ],
                    [
                        'answer' => 'Vacuum Diodes',
                        'is_correct' => false,
                        'explanation' => 'Vacuum-based components were part of the earlier technology and did not replace vacuum tubes in Second-Generation computers.',
                    ],
                ],
            ],

            [
                'question' => 'In Machine Learning, what evaluation metric represents the ratio of correctly predicted positive observations to the total predicted positive observations?',
                'options' => [
                    [
                        'answer' => 'Recall (Sensitivity)',
                        'is_correct' => false,
                        'explanation' => 'Recall measures the proportion of actual positive observations that were correctly identified.',
                    ],
                    [
                        'answer' => 'F1-Score',
                        'is_correct' => false,
                        'explanation' => 'F1-score is the harmonic mean of precision and recall.',
                    ],
                    [
                        'answer' => 'Accuracy',
                        'is_correct' => false,
                        'explanation' => 'Accuracy measures the proportion of all predictions that are correct.',
                    ],
                    [
                        'answer' => 'Precision',
                        'is_correct' => true,
                        'explanation' => 'Precision is the ratio of true positive predictions to all predicted positive observations: TP / (TP + FP).',
                    ],
                ],
            ],

            [
                'question' => 'In Blockchain networks, what type of node maintains a complete copy of the entire ledger history and independently validates all incoming blocks and transactions?',
                'options' => [
                    [
                        'answer' => 'Light Node (SPV)',
                        'is_correct' => false,
                        'explanation' => 'A light node generally stores limited blockchain information and relies on full nodes for verification data.',
                    ],
                    [
                        'answer' => 'Mining Pool Host',
                        'is_correct' => false,
                        'explanation' => 'A mining pool host coordinates mining activities but this term does not define the node type that independently maintains and validates the complete ledger.',
                    ],
                    [
                        'answer' => 'Full Node',
                        'is_correct' => true,
                        'explanation' => 'A full node maintains the blockchain data required by the protocol and independently validates blocks and transactions according to consensus rules.',
                    ],
                    [
                        'answer' => 'Pruned Client',
                        'is_correct' => false,
                        'explanation' => 'A pruned node validates the blockchain but removes older blockchain data to reduce storage requirements.',
                    ],
                ],
            ],

            [
                'question' => 'Which environmental hazard in a banking data center poses an immediate operational threat to computing hardware if left unmonitored by IT infrastructure sensors?',
                'options' => [
                    [
                        'answer' => 'Thermal Heat Accumulation and Water Leakage',
                        'is_correct' => true,
                        'explanation' => 'Excessive heat can damage or shut down hardware, while water leakage can cause electrical shorts, corrosion, and equipment failure.',
                    ],
                    [
                        'answer' => 'High Acoustic Noise Level',
                        'is_correct' => false,
                        'explanation' => 'High noise levels can affect personnel but are generally less immediately damaging to computing hardware than heat or water.',
                    ],
                    [
                        'answer' => 'Low Atmospheric Air Pressure',
                        'is_correct' => false,
                        'explanation' => 'Normal data-center operations are generally not threatened by ordinary variations in atmospheric pressure.',
                    ],
                    [
                        'answer' => 'Fluorescent Lighting Exposure',
                        'is_correct' => false,
                        'explanation' => 'Normal fluorescent lighting does not pose the same immediate operational threat to computing hardware as heat accumulation or water leakage.',
                    ],
                ],
            ],

            [
                'question' => 'Which Web Design technology handles dynamic client-side DOM manipulation, asynchronous network requests (AJAX), and interactive page behavior?',
                'options' => [
                    [
                        'answer' => 'HTML5',
                        'is_correct' => false,
                        'explanation' => 'HTML5 provides the structure and semantic elements of web pages but does not primarily provide dynamic behavior.',
                    ],
                    [
                        'answer' => 'CSS3',
                        'is_correct' => false,
                        'explanation' => 'CSS3 controls presentation, styling, layout, and visual effects.',
                    ],
                    [
                        'answer' => 'JavaScript',
                        'is_correct' => true,
                        'explanation' => 'JavaScript enables client-side logic, DOM manipulation, AJAX requests, event handling, and interactive web behavior.',
                    ],
                    [
                        'answer' => 'XML',
                        'is_correct' => false,
                        'explanation' => 'XML is a markup language commonly used for structured data representation and exchange.',
                    ],
                ],
            ],

            [
                'question' => 'What parameter describes the maximum memory block size that a Direct Memory Access (DMA) controller can transfer in a single continuous burst operation?',
                'options' => [
                    [
                        'answer' => 'Page Size',
                        'is_correct' => false,
                        'explanation' => 'Page size defines the size of virtual or physical memory pages and is not the DMA burst transfer limit.',
                    ],
                    [
                        'answer' => 'Sector Interleave',
                        'is_correct' => false,
                        'explanation' => 'Sector interleaving is a disk storage technique and is unrelated to DMA burst length.',
                    ],
                    [
                        'answer' => 'Word Size',
                        'is_correct' => false,
                        'explanation' => 'Word size specifies the processors natural data width rather than the maximum DMA burst size.',
                    ],
                    [
                        'answer' => 'Block/Burst Length Count',
                        'is_correct' => true,
                        'explanation' => 'The DMA block or burst length specifies how much data can be transferred during a continuous DMA operation.',
                    ],
                ],
            ],

            [
                'question' => 'Which register inside the CPU architecture stores the immediate results generated by the Arithmetic Logic Unit (ALU)?',
                'options' => [
                    [
                        'answer' => 'Memory Address Register (MAR)',
                        'is_correct' => false,
                        'explanation' => 'The MAR holds the memory address of the location being accessed.',
                    ],
                    [
                        'answer' => 'Instruction Register (IR)',
                        'is_correct' => false,
                        'explanation' => 'The instruction register holds the instruction currently being decoded or executed.',
                    ],
                    [
                        'answer' => 'Program Counter (PC)',
                        'is_correct' => false,
                        'explanation' => 'The program counter stores the address of the next instruction to be fetched.',
                    ],
                    [
                        'answer' => 'Accumulator (ACC)',
                        'is_correct' => true,
                        'explanation' => 'The accumulator is traditionally used to store intermediate and immediate arithmetic or logical results produced by the ALU.',
                    ],
                ],
            ],

            [
                'question' => 'What term describes the condition when data requested by the CPU is successfully found in the high-speed Cache memory?',
                'options' => [
                    [
                        'answer' => 'Cache Miss',
                        'is_correct' => false,
                        'explanation' => 'A cache miss occurs when the requested data is not found in the cache.',
                    ],
                    [
                        'answer' => 'Cache Hit',
                        'is_correct' => true,
                        'explanation' => 'A cache hit occurs when the CPU finds the requested data in the cache.',
                    ],
                    [
                        'answer' => 'Page Fault',
                        'is_correct' => false,
                        'explanation' => 'A page fault occurs when a required memory page is not currently available in physical memory.',
                    ],
                    [
                        'answer' => 'Cache Line Invalidation',
                        'is_correct' => false,
                        'explanation' => 'Cache line invalidation marks cached data as invalid and does not indicate a successful cache lookup.',
                    ],
                ],
            ],

            [
                'question' => 'In Hard Disk performance metrics, what term defines the rotational time required for the target disk sector to spin directly under the read/write head assembly?',
                'options' => [
                    [
                        'answer' => 'Seek Time',
                        'is_correct' => false,
                        'explanation' => 'Seek time is the time required to move the disk head to the desired track.',
                    ],
                    [
                        'answer' => 'Transfer Rate',
                        'is_correct' => false,
                        'explanation' => 'Transfer rate describes the speed at which data is transferred between the storage device and the system.',
                    ],
                    [
                        'answer' => 'Rotational Latency',
                        'is_correct' => true,
                        'explanation' => 'Rotational latency is the time waiting for the desired disk sector to rotate under the read/write head.',
                    ],
                    [
                        'answer' => 'Controller Overhead',
                        'is_correct' => false,
                        'explanation' => 'Controller overhead refers to processing time associated with the storage controller rather than disk rotation.',
                    ],
                ],
            ],

            [
                'question' => 'How does Memory-Mapped I/O differ functionally from Isolated (Port-Mapped) I/O in computer system architectures?',
                'options' => [
                    [
                        'answer' => 'Memory-mapped I/O uses dedicated CPU execution commands like IN and OUT.',
                        'is_correct' => false,
                        'explanation' => 'IN and OUT instructions are associated with isolated or port-mapped I/O on architectures that support them.',
                    ],
                    [
                        'answer' => 'Memory-mapped I/O treats I/O device ports as standard memory addresses within the unified system address space.',
                        'is_correct' => true,
                        'explanation' => 'Memory-mapped I/O assigns device registers addresses within the normal memory address space, allowing regular memory instructions to access them.',
                    ],
                    [
                        'answer' => 'Memory-mapped I/O disables address bus sharing completely.',
                        'is_correct' => false,
                        'explanation' => 'Memory-mapped I/O does not disable address bus sharing.',
                    ],
                    [
                        'answer' => 'Isolated I/O cannot utilize DMA controllers.',
                        'is_correct' => false,
                        'explanation' => 'DMA can be used with both memory-mapped and isolated I/O architectures.',
                    ],
                ],
            ],

            [
                'question' => 'What parameter determines the priority order of hardware interrupts when multiple peripheral devices trigger interrupt requests simultaneously?',
                'options' => [
                    [
                        'answer' => 'Interrupt Vector / Priority Arbiter Scheme',
                        'is_correct' => true,
                        'explanation' => 'Interrupt priority mechanisms such as priority arbiters and interrupt vector schemes determine which interrupt is serviced first.',
                    ],
                    [
                        'answer' => 'Baud Rate',
                        'is_correct' => false,
                        'explanation' => 'Baud rate measures signaling speed and does not determine hardware interrupt priority.',
                    ],
                    [
                        'answer' => 'Cache Size',
                        'is_correct' => false,
                        'explanation' => 'Cache size affects processor memory performance but does not determine interrupt priority.',
                    ],
                    [
                        'answer' => 'Sector Interleaving Factor',
                        'is_correct' => false,
                        'explanation' => 'Sector interleaving relates to disk storage organization and does not determine interrupt priority.',
                    ],
                ],
            ],

            [
                'question' => 'At which OSI model layer does a Router operate to evaluate IP packet headers and determine optimal forwarding paths across networks?',
                'options' => [
                    [
                        'answer' => 'Data Link Layer (Layer 2)',
                        'is_correct' => false,
                        'explanation' => 'Layer 2 handles frames and MAC addressing and is primarily associated with switches and bridges.',
                    ],
                    [
                        'answer' => 'Network Layer (Layer 3)',
                        'is_correct' => true,
                        'explanation' => 'Routers primarily operate at Layer 3, using network-layer addresses such as IP addresses to forward packets between networks.',
                    ],
                    [
                        'answer' => 'Transport Layer (Layer 4)',
                        'is_correct' => false,
                        'explanation' => 'Layer 4 provides end-to-end transport services using protocols such as TCP and UDP.',
                    ],
                    [
                        'answer' => 'Application Layer (Layer 7)',
                        'is_correct' => false,
                        'explanation' => 'Layer 7 provides network services directly to applications.',
                    ],
                ],
            ],

            [
                'question' => 'Which error detection protocol creates a 16-bit or 32-bit mathematical remainder by performing modulo-2 binary division on transmitted data streams?',
                'options' => [
                    [
                        'answer' => 'Simple Parity',
                        'is_correct' => false,
                        'explanation' => 'Parity adds a bit to indicate whether the number of set bits is even or odd.',
                    ],
                    [
                        'answer' => 'Checksum',
                        'is_correct' => false,
                        'explanation' => 'A checksum uses arithmetic calculations over data units rather than modulo-2 polynomial division.',
                    ],
                    [
                        'answer' => 'Cyclic Redundancy Check (CRC)',
                        'is_correct' => true,
                        'explanation' => 'CRC performs polynomial division using modulo-2 arithmetic and transmits the resulting remainder for error detection.',
                    ],
                    [
                        'answer' => 'Hamming Weight',
                        'is_correct' => false,
                        'explanation' => 'Hamming weight counts the number of 1 bits in a binary representation and is not an error detection protocol.',
                    ],
                ],
            ],

            [
                'question' => 'In IPv4 addressing, what range of numbers in the first octet identifies a Class A network address?',
                'options' => [
                    [
                        'answer' => '1 – 126',
                        'is_correct' => true,
                        'explanation' => 'Class A addresses traditionally use first-octet values from 1 through 126. 0 and 127 are reserved for special purposes.',
                    ],
                    [
                        'answer' => '128 – 191',
                        'is_correct' => false,
                        'explanation' => '128 through 191 corresponds to the traditional Class B range.',
                    ],
                    [
                        'answer' => '192 – 223',
                        'is_correct' => false,
                        'explanation' => '192 through 223 corresponds to the traditional Class C range.',
                    ],
                    [
                        'answer' => '224 – 239',
                        'is_correct' => false,
                        'explanation' => '224 through 239 corresponds to the traditional Class D multicast range.',
                    ],
                ],
            ],

            [
                'question' => 'What is the loopback IPv4 address used by host operating systems to test local TCP/IP stack configuration?',
                'options' => [
                    [
                        'answer' => '0.0.0.0',
                        'is_correct' => false,
                        'explanation' => '0.0.0.0 is a special unspecified address and is not the standard IPv4 loopback address.',
                    ],
                    [
                        'answer' => '127.0.0.1',
                        'is_correct' => true,
                        'explanation' => '127.0.0.1 is the standard IPv4 loopback address used to test communication with the local host.',
                    ],
                    [
                        'answer' => '192.168.0.1',
                        'is_correct' => false,
                        'explanation' => '192.168.0.1 is commonly used as a private LAN address but is not the standard loopback address.',
                    ],
                    [
                        'answer' => '255.255.255.255',
                        'is_correct' => false,
                        'explanation' => '255.255.255.255 is the limited broadcast address in IPv4.',
                    ],
                ],
            ],

            [
                'question' => 'Which protocol automatically converts human-readable computer domain names into machine-routable IP addresses?',
                'options' => [
                    [
                        'answer' => 'DHCP',
                        'is_correct' => false,
                        'explanation' => 'DHCP automatically provides network configuration such as IP addresses, subnet masks, and gateways.',
                    ],
                    [
                        'answer' => 'DNS',
                        'is_correct' => true,
                        'explanation' => 'DNS translates domain names such as example.com into corresponding IP addresses.',
                    ],
                    [
                        'answer' => 'ARP',
                        'is_correct' => false,
                        'explanation' => 'ARP maps IPv4 addresses to MAC addresses on a local network.',
                    ],
                    [
                        'answer' => 'ICMP',
                        'is_correct' => false,
                        'explanation' => 'ICMP is used for network control, diagnostics, and error reporting.',
                    ],
                ],
            ],

            [
                'question' => 'What type of cryptographic mechanism creates a fixed-size digest value from variable-size input data, where even a single-bit input change drastically alters the output?',
                'options' => [
                    [
                        'answer' => 'Symmetric Cipher',
                        'is_correct' => false,
                        'explanation' => 'A symmetric cipher encrypts and decrypts data using a shared secret key.',
                    ],
                    [
                        'answer' => 'Cryptographic Hash (Avalanche Effect)',
                        'is_correct' => true,
                        'explanation' => 'Cryptographic hash functions produce fixed-size digests, and the avalanche effect means a small input change can produce a substantially different digest.',
                    ],
                    [
                        'answer' => 'Asymmetric Cipher',
                        'is_correct' => false,
                        'explanation' => 'Asymmetric cryptography uses related public and private keys for encryption, decryption, signatures, or key exchange.',
                    ],
                    [
                        'answer' => 'Stream Cipher',
                        'is_correct' => false,
                        'explanation' => 'A stream cipher encrypts data as a stream of bits or bytes rather than producing a fixed-size hash digest.',
                    ],
                ],
            ],

            [
                'question' => 'Which of the following is an example of a Stream Cipher?',
                'options' => [
                    [
                        'answer' => 'AES',
                        'is_correct' => false,
                        'explanation' => 'AES is a symmetric block cipher.',
                    ],
                    [
                        'answer' => 'RC4',
                        'is_correct' => true,
                        'explanation' => 'RC4 is a well-known stream cipher that generates a keystream for encryption.',
                    ],
                    [
                        'answer' => 'DES',
                        'is_correct' => false,
                        'explanation' => 'DES is a symmetric block cipher.',
                    ],
                    [
                        'answer' => '3DES',
                        'is_correct' => false,
                        'explanation' => '3DES is a block cipher based on repeated applications of DES.',
                    ],
                ],
            ],

            [
                'question' => 'Which hashing algorithm produces a 256-bit fixed digest output?',
                'options' => [
                    [
                        'answer' => 'SHA-256',
                        'is_correct' => true,
                        'explanation' => 'SHA-256 produces a fixed-length 256-bit hash digest.',
                    ],
                    [
                        'answer' => 'CRC32',
                        'is_correct' => false,
                        'explanation' => 'CRC32 produces a 32-bit cyclic redundancy check value and is not a cryptographic hash algorithm.',
                    ],
                    [
                        'answer' => 'SHA-1',
                        'is_correct' => false,
                        'explanation' => 'SHA-1 produces a 160-bit digest.',
                    ],
                    [
                        'answer' => 'MD5',
                        'is_correct' => false,
                        'explanation' => 'MD5 produces a 128-bit digest and is considered cryptographically broken for security applications.',
                    ],
                ],
            ],

            [
                'question' => 'Which wireless network topology connects client devices directly to one another without passing traffic through a central Wireless Access Point (WAP)?',
                'options' => [
                    [
                        'answer' => 'Infrastructure Mode',
                        'is_correct' => false,
                        'explanation' => 'Infrastructure mode uses a central wireless access point to coordinate wireless communication.',
                    ],
                    [
                        'answer' => 'Mesh Gateway Mode',
                        'is_correct' => false,
                        'explanation' => 'Mesh networking normally involves multiple interconnected nodes and does not specifically describe simple peer-to-peer wireless communication.',
                    ],
                    [
                        'answer' => 'Star Topology',
                        'is_correct' => false,
                        'explanation' => 'A star topology uses a central connecting device, making it different from direct peer-to-peer communication.',
                    ],
                    [
                        'answer' => 'Ad-Hoc (Peer-to-Peer) Mode',
                        'is_correct' => true,
                        'explanation' => 'Ad-hoc wireless networks allow devices to communicate directly with one another without requiring a central access point.',
                    ],
                ],
            ],

            [
                'question' => 'What physical transmission medium uses light pulses traveling through glass or plastic cores to deliver high-speed, long-distance network bandwidth immune to electromagnetic interference (EMI)?',
                'options' => [
                    [
                        'answer' => 'Unshielded Twisted Pair (UTP)',
                        'is_correct' => false,
                        'explanation' => 'UTP uses copper conductors and is more susceptible to electromagnetic interference than fiber optic cable.',
                    ],
                    [
                        'answer' => 'Coaxial Cable',
                        'is_correct' => false,
                        'explanation' => 'Coaxial cable uses copper conductors and electrical signals.',
                    ],
                    [
                        'answer' => 'Fiber Optic Cable',
                        'is_correct' => true,
                        'explanation' => 'Fiber optic cable transmits data using light through glass or plastic fibers and is highly resistant to electromagnetic interference.',
                    ],
                    [
                        'answer' => 'Shielded Twisted Pair (STP)',
                        'is_correct' => false,
                        'explanation' => 'STP uses copper conductors with shielding to reduce interference but does not transmit data using light.',
                    ],
                ],
            ],

            [
                'question' => 'Which application protocol is used by network administration software to monitor, manage, and collect telemetry data from hardware devices like switches and routers?',
                'options' => [
                    [
                        'answer' => 'SMTP (Simple Mail Transfer Protocol)',
                        'is_correct' => false,
                        'explanation' => 'SMTP is primarily used to send email messages between mail servers and clients.',
                    ],
                    [
                        'answer' => 'SNMP (Simple Network Management Protocol)',
                        'is_correct' => true,
                        'explanation' => 'SNMP is designed to monitor and manage network devices and collect operational information.',
                    ],
                    [
                        'answer' => 'NTP (Network Time Protocol)',
                        'is_correct' => false,
                        'explanation' => 'NTP synchronizes clocks across networked devices.',
                    ],
                    [
                        'answer' => 'LDAP (Lightweight Directory Access Protocol)',
                        'is_correct' => false,
                        'explanation' => 'LDAP is used to access and manage directory services and directory-based information.',
                    ],
                ],
            ],

            [
                'question' => 'In symmetric key management, how many unique key pairs are required to support secure encrypted communications between N distinct nodes in a network?',
                'options' => [
                    [
                        'answer' => 'N',
                        'is_correct' => false,
                        'explanation' => 'N keys would not provide a unique shared key for every pair of nodes in a traditional pairwise symmetric-key arrangement.',
                    ],
                    [
                        'answer' => 'N^2',
                        'is_correct' => false,
                        'explanation' => 'N² is larger than the number of unique unordered pairs required for pairwise communication.',
                    ],
                    [
                        'answer' => 'N(N-1)/2',
                        'is_correct' => true,
                        'explanation' => 'Every pair of distinct nodes requires one unique shared symmetric key, resulting in N(N-1)/2 unique keys.',
                    ],
                    [
                        'answer' => '2^N',
                        'is_correct' => false,
                        'explanation' => '2^N is not the standard count of unique pairwise symmetric keys.',
                    ],
                ],
            ],

            [
                'question' => 'What type of switching mechanism holds an entire message block in intermediate storage buffers at each network node before evaluating routing paths and forwarding to the next hop?',
                'options' => [
                    [
                        'answer' => 'Store-and-Forward (Message Switching)',
                        'is_correct' => true,
                        'explanation' => 'Message switching stores the complete message at an intermediate node before forwarding it to the next destination.',
                    ],
                    [
                        'answer' => 'Circuit Switching',
                        'is_correct' => false,
                        'explanation' => 'Circuit switching establishes a dedicated communication path before data transmission.',
                    ],
                    [
                        'answer' => 'Virtual Circuit Switching',
                        'is_correct' => false,
                        'explanation' => 'Virtual circuit switching establishes a logical path through the network rather than requiring each complete message to be stored and forwarded as a single block.',
                    ],
                    [
                        'answer' => 'Cell Relay',
                        'is_correct' => false,
                        'explanation' => 'Cell relay divides traffic into fixed-size cells instead of forwarding entire messages as one block.',
                    ],
                ],
            ],

            [
                'question' => 'Which process execution state describes a process that has been created and loaded into main memory, waiting to be allocated CPU execution time by the scheduler?',
                'options' => [
                    [
                        'answer' => 'Ready',
                        'is_correct' => true,
                        'explanation' => 'A ready process is in main memory and prepared to execute but is waiting for CPU allocation.',
                    ],
                    [
                        'answer' => 'Running',
                        'is_correct' => false,
                        'explanation' => 'A running process is currently executing on the CPU.',
                    ],
                    [
                        'answer' => 'Waiting (Blocked)',
                        'is_correct' => false,
                        'explanation' => 'A blocked process is waiting for an event or resource, such as I/O completion.',
                    ],
                    [
                        'answer' => 'Terminated',
                        'is_correct' => false,
                        'explanation' => 'A terminated process has completed execution or has been stopped.',
                    ],
                ],
            ],

            [
                'question' => 'Which non-preemptive CPU scheduling algorithm executes processes strictly in order of their arrival time in the ready queue?',
                'options' => [
                    [
                        'answer' => 'Shortest Job First (SJF)',
                        'is_correct' => false,
                        'explanation' => 'SJF selects the process with the shortest expected CPU burst rather than strictly following arrival order.',
                    ],
                    [
                        'answer' => 'Round Robin (RR)',
                        'is_correct' => false,
                        'explanation' => 'Round Robin uses time slices and is generally a preemptive scheduling algorithm.',
                    ],
                    [
                        'answer' => 'First-Come, First-Served (FCFS)',
                        'is_correct' => true,
                        'explanation' => 'FCFS schedules processes in the order they arrive in the ready queue and is non-preemptive.',
                    ],
                    [
                        'answer' => 'Priority Scheduling',
                        'is_correct' => false,
                        'explanation' => 'Priority scheduling selects processes according to assigned priority rather than simply arrival order.',
                    ],
                ],
            ],

            [
                'question' => 'What term describes the execution phenomenon where a long, CPU-bound process blocks several short, I/O-bound processes in an FCFS queue, degrading system responsiveness?',
                'options' => [
                    [
                        'answer' => 'Starvation',
                        'is_correct' => false,
                        'explanation' => 'Starvation occurs when a process waits indefinitely or for an excessively long time because other processes continually receive service.',
                    ],
                    [
                        'answer' => 'Priority Inversion',
                        'is_correct' => false,
                        'explanation' => 'Priority inversion occurs when a higher-priority process is indirectly blocked by lower-priority work.',
                    ],
                    [
                        'answer' => 'Thrashing',
                        'is_correct' => false,
                        'explanation' => 'Thrashing occurs when excessive paging or swapping consumes system resources and severely reduces performance.',
                    ],
                    [
                        'answer' => 'Convoy Effect',
                        'is_correct' => true,
                        'explanation' => 'The convoy effect occurs in FCFS when a long CPU-bound process causes many shorter processes to wait behind it.',
                    ],
                ],
            ],

            [
                'question' => 'In UNIX/Linux file systems, which command creates a new, empty directory path?',
                'options' => [
                    [
                        'answer' => 'mkdir',
                        'is_correct' => true,
                        'explanation' => 'mkdir creates a new directory in UNIX/Linux systems.',
                    ],
                    [
                        'answer' => 'touch',
                        'is_correct' => false,
                        'explanation' => 'touch is commonly used to create an empty file or update file timestamps.',
                    ],
                    [
                        'answer' => 'rmdir',
                        'is_correct' => false,
                        'explanation' => 'rmdir removes an empty directory.',
                    ],
                    [
                        'answer' => 'cd',
                        'is_correct' => false,
                        'explanation' => 'cd changes the current working directory.',
                    ],
                ],
            ],

            [
                'question' => 'Which MS-DOS command updates or changes the active volume label assigned to a physical storage drive partition?',
                'options' => [
                    [
                        'answer' => 'VOL',
                        'is_correct' => false,
                        'explanation' => 'VOL displays the current volume label and serial number but does not primarily change the label.',
                    ],
                    [
                        'answer' => 'SYS',
                        'is_correct' => false,
                        'explanation' => 'SYS transfers system files to a disk to make it bootable.',
                    ],
                    [
                        'answer' => 'FORMAT',
                        'is_correct' => false,
                        'explanation' => 'FORMAT prepares a disk for use and may allow a volume label to be specified, but it is not the dedicated command for changing an existing label.',
                    ],
                    [
                        'answer' => 'LABEL',
                        'is_correct' => true,
                        'explanation' => 'The LABEL command creates, changes, or deletes the volume label of a disk drive.',
                    ],
                ],
            ],

            [
                'question' => 'In Operating System memory management, what phenomenon occurs when main memory becomes fragmented into small, non-contiguous free blocks that cannot satisfy allocation requests for large single process spaces?',
                'options' => [
                    [
                        'answer' => 'Internal Fragmentation',
                        'is_correct' => false,
                        'explanation' => 'Internal fragmentation occurs when allocated memory contains unused space within an allocated block.',
                    ],
                    [
                        'answer' => 'External Fragmentation',
                        'is_correct' => true,
                        'explanation' => 'External fragmentation occurs when free memory is divided into small, non-contiguous blocks that cannot satisfy a large allocation request.',
                    ],
                    [
                        'answer' => 'Page Faulting',
                        'is_correct' => false,
                        'explanation' => 'A page fault occurs when a required page is not currently present in physical memory.',
                    ],
                    [
                        'answer' => 'Segmentation Violation',
                        'is_correct' => false,
                        'explanation' => 'A segmentation violation generally occurs when a program accesses memory outside its permitted address space.',
                    ],
                ],
            ],

            [
                'question' => 'In Relational Database Management Systems, what property guarantees that once a transaction commits successfully, its updates persist even across subsequent hardware or power failures?',
                'options' => [
                    [
                        'answer' => 'Atomicity',
                        'is_correct' => false,
                        'explanation' => 'Atomicity ensures that a transaction is treated as an all-or-nothing operation.',
                    ],
                    [
                        'answer' => 'Consistency',
                        'is_correct' => false,
                        'explanation' => 'Consistency ensures that transactions preserve database rules and integrity constraints.',
                    ],
                    [
                        'answer' => 'Isolation',
                        'is_correct' => false,
                        'explanation' => 'Isolation controls how concurrently executing transactions interact with one another.',
                    ],
                    [
                        'answer' => 'Durability',
                        'is_correct' => true,
                        'explanation' => 'Durability guarantees that committed transaction changes persist even after system failures.',
                    ],
                ],
            ],

            [
                'question' => 'Which database key consists of two or more combined attributes that together uniquely identify a specific row record in a relational table?',
                'options' => [
                    [
                        'answer' => 'Foreign Key',
                        'is_correct' => false,
                        'explanation' => 'A foreign key references a key in another table and establishes a relationship between tables.',
                    ],
                    [
                        'answer' => 'Composite Key',
                        'is_correct' => true,
                        'explanation' => 'A composite key consists of two or more attributes that collectively provide unique identification of a record.',
                    ],
                    [
                        'answer' => 'Surrogate Key',
                        'is_correct' => false,
                        'explanation' => 'A surrogate key is an artificial identifier, often a generated numeric or UUID value.',
                    ],
                    [
                        'answer' => 'Alternate Key',
                        'is_correct' => false,
                        'explanation' => 'An alternate key is a candidate key that was not selected as the primary key.',
                    ],
                ],
            ],

            [
                'question' => 'A relational table is in Third Normal Form (3NF) if it is already in 2NF and contains NO:',
                'options' => [
                    [
                        'answer' => 'Partial dependencies',
                        'is_correct' => false,
                        'explanation' => '2NF removes partial dependencies on part of a composite candidate key.',
                    ],
                    [
                        'answer' => 'Transitive functional dependencies',
                        'is_correct' => true,
                        'explanation' => '3NF requires the removal of transitive dependencies of non-key attributes on a key.',
                    ],
                    [
                        'answer' => 'Multi-valued attributes',
                        'is_correct' => false,
                        'explanation' => 'Eliminating multi-valued dependencies is associated primarily with higher normalization forms such as 4NF.',
                    ],
                    [
                        'answer' => 'Duplicate rows',
                        'is_correct' => false,
                        'explanation' => 'Duplicate rows are undesirable but their absence is not the defining condition for 3NF.',
                    ],
                ],
            ],

            [
                'question' => 'What is the main structural difference between OLTP (Online Transaction Processing) and Data Warehousing OLAP systems?',
                'options' => [
                    [
                        'answer' => 'OLTP handles high volumes of simple operational transactions; Data Warehousing processes complex historical analytical queries across integrated datasets.',
                        'is_correct' => true,
                        'explanation' => 'OLTP systems are optimized for frequent operational transactions, while OLAP and data warehouses are optimized for complex analysis of integrated historical data.',
                    ],
                    [
                        'answer' => 'Data Warehousing processes fast live updates; OLTP handles historical trends.',
                        'is_correct' => false,
                        'explanation' => 'This reverses the primary purposes of OLTP and OLAP systems.',
                    ],
                    [
                        'answer' => 'OLTP systems use highly denormalized database schemas.',
                        'is_correct' => false,
                        'explanation' => 'OLTP databases commonly use normalized schemas to reduce redundancy and support transaction integrity.',
                    ],
                    [
                        'answer' => 'Data Warehouses perform continuous row-by-row updates on active production tables.',
                        'is_correct' => false,
                        'explanation' => 'Data warehouses are primarily optimized for analytical queries rather than continuous operational row-by-row transaction processing.',
                    ],
                ],
            ],

            [
                'question' => 'Which HTML attribute is used inside an <img> tag to supply alternative text display if the linked image file fails to load?',
                'options' => [
                    [
                        'answer' => 'alt',
                        'is_correct' => true,
                        'explanation' => 'The alt attribute provides alternative text for an image and improves accessibility when the image cannot be displayed.',
                    ],
                    [
                        'answer' => 'title',
                        'is_correct' => false,
                        'explanation' => 'The title attribute can provide supplementary information but is not the standard alternative text mechanism for images.',
                    ],
                    [
                        'answer' => 'src',
                        'is_correct' => false,
                        'explanation' => 'The src attribute specifies the image resource location.',
                    ],
                    [
                        'answer' => 'href',
                        'is_correct' => false,
                        'explanation' => 'The href attribute specifies a hyperlink destination and is not the normal image-source attribute.',
                    ],
                ],
            ],

            [
                'question' => 'What type of Disaster Recovery Backup site maintains pre-installed hardware servers, networking equipment, and infrastructure configured with periodically restored backup data, requiring short setup time before resuming operations?',
                'options' => [
                    [
                        'answer' => 'Cold Site',
                        'is_correct' => false,
                        'explanation' => 'A cold site generally provides basic facilities but requires significant setup and equipment configuration before operations can resume.',
                    ],
                    [
                        'answer' => 'Warm Site',
                        'is_correct' => true,
                        'explanation' => 'A warm site has pre-installed infrastructure and equipment with data restored periodically, requiring some additional preparation before full operations resume.',
                    ],
                    [
                        'answer' => 'Hot Site',
                        'is_correct' => false,
                        'explanation' => 'A hot site is maintained in a highly ready state and can generally support rapid or near-immediate recovery.',
                    ],
                    [
                        'answer' => 'Cloud Mirror Site',
                        'is_correct' => false,
                        'explanation' => 'A cloud mirror may provide replicated services in the cloud but is not the standard definition of the traditional warm-site category.',
                    ],
                ],
            ],

            [
                'question' => 'In Disaster Recovery Planning, how are RPO (Recovery Point Objective) and RTO (Recovery Time Objective) measured?',
                'options' => [
                    [
                        'answer' => 'Both are measured in financial currency amounts (NPR).',
                        'is_correct' => false,
                        'explanation' => 'RPO and RTO are time-based recovery objectives, although their business impact can be expressed financially.',
                    ],
                    [
                        'answer' => 'RPO measures maximum tolerable data loss in time; RTO measures maximum tolerable operational downtime in time.',
                        'is_correct' => true,
                        'explanation' => 'RPO defines the maximum acceptable amount of data loss measured in time, while RTO defines the maximum acceptable time to restore operations.',
                    ],
                    [
                        'answer' => 'RPO measures network speed; RTO measures CPU throughput.',
                        'is_correct' => false,
                        'explanation' => 'Neither RPO nor RTO measures network speed or CPU throughput.',
                    ],
                    [
                        'answer' => 'Both measure disk backup capacity gigabytes.',
                        'is_correct' => false,
                        'explanation' => 'RPO and RTO are measured in time rather than storage capacity.',
                    ],
                ],
            ],

            [
                'question' => 'Which backup strategy backs up all files and data blocks selected on the host system regardless of when they were last modified, clearing archive bits afterwards?',
                'options' => [
                    [
                        'answer' => 'Incremental Backup',
                        'is_correct' => false,
                        'explanation' => 'An incremental backup generally backs up data changed since the last backup and then updates the archive state.',
                    ],
                    [
                        'answer' => 'Differential Backup',
                        'is_correct' => false,
                        'explanation' => 'A differential backup generally backs up data changed since the last full backup.',
                    ],
                    [
                        'answer' => 'Full Backup',
                        'is_correct' => true,
                        'explanation' => 'A full backup copies all selected files or data blocks regardless of when they were last changed and commonly resets archive bits in traditional backup systems.',
                    ],
                    [
                        'answer' => 'Snapshot Replication',
                        'is_correct' => false,
                        'explanation' => 'Snapshot replication creates or replicates point-in-time states and is conceptually different from a traditional full backup.',
                    ],
                ],
            ],

            [
                'question' => 'What cyber security threat involves secret software that monitors user keystrokes, capturing account credentials and credit card details without authorization?',
                'options' => [
                    [
                        'answer' => 'Spyware / Keylogger',
                        'is_correct' => true,
                        'explanation' => 'A keylogger is software or hardware that records keystrokes and can capture sensitive information such as passwords and payment details.',
                    ],
                    [
                        'answer' => 'Ransomware',
                        'is_correct' => false,
                        'explanation' => 'Ransomware typically encrypts or blocks access to data and demands payment for restoration.',
                    ],
                    [
                        'answer' => 'Computer Worm',
                        'is_correct' => false,
                        'explanation' => 'A worm is malware capable of self-propagating across systems or networks.',
                    ],
                    [
                        'answer' => 'Logic Bomb',
                        'is_correct' => false,
                        'explanation' => 'A logic bomb is malicious code designed to execute when a specified condition or trigger occurs.',
                    ],
                ],
            ],

            [
                'question' => 'What type of social engineering attack targets employees by dropping infected USB drives in corporate parking lots, relying on curiosity to trick targets into plugging them into internal workstations?',
                'options' => [
                    [
                        'answer' => 'Spear Phishing',
                        'is_correct' => false,
                        'explanation' => 'Spear phishing is a targeted phishing attack that typically uses personalized electronic communications to deceive specific individuals.',
                    ],
                    [
                        'answer' => 'Baiting',
                        'is_correct' => true,
                        'explanation' => 'Baiting uses an enticing physical or digital lure, such as an infected USB drive, to trick victims into taking an unsafe action.',
                    ],
                    [
                        'answer' => 'Pretexting',
                        'is_correct' => false,
                        'explanation' => 'Pretexting involves creating a fabricated scenario or identity to persuade a target to disclose information or perform an action.',
                    ],
                    [
                        'answer' => 'Water Hole Attack',
                        'is_correct' => false,
                        'explanation' => 'A water hole attack compromises websites frequently visited by a target group rather than relying on dropped USB drives.',
                    ],
                ],
            ],

            [
                'question' => 'Which network security attack injects malicious scripts into trusted websites, executing unauthorized JavaScript code inside a victim\'s web browser session?',
                'options' => [
                    [
                        'answer' => 'SQL Injection (SQLi)',
                        'is_correct' => false,
                        'explanation' => 'SQL injection targets database queries by injecting malicious SQL syntax through application inputs.',
                    ],
                    [
                        'answer' => 'Buffer Overflow',
                        'is_correct' => false,
                        'explanation' => 'A buffer overflow occurs when data exceeds the bounds of a memory buffer, potentially causing crashes or code execution.',
                    ],
                    [
                        'answer' => 'Denial of Service (DoS)',
                        'is_correct' => false,
                        'explanation' => 'DoS attacks attempt to make systems or services unavailable to legitimate users.',
                    ],
                    [
                        'answer' => 'Cross-Site Scripting (XSS)',
                        'is_correct' => true,
                        'explanation' => 'XSS injects malicious scripts into web content so that they execute in a victim\'s browser within the context of a trusted site.',
                    ],
                ],
            ],

            [
                'question' => 'What access control scheme grants permissions based strictly on rules defined by central system administrators, preventing individual resource owners from altering authorization permissions?',
                'options' => [
                    [
                        'answer' => 'Discretionary Access Control (DAC)',
                        'is_correct' => false,
                        'explanation' => 'DAC allows resource owners to control or delegate access permissions.',
                    ],
                    [
                        'answer' => 'Role-Based Access Control (RBAC)',
                        'is_correct' => false,
                        'explanation' => 'RBAC grants permissions based on organizational roles rather than directly on individual resource ownership.',
                    ],
                    [
                        'answer' => 'Mandatory Access Control (MAC)',
                        'is_correct' => true,
                        'explanation' => 'MAC enforces centrally defined access policies and prevents ordinary resource owners from arbitrarily changing authorization rules.',
                    ],
                    [
                        'answer' => 'Rule-Based Access Control',
                        'is_correct' => false,
                        'explanation' => 'Rule-based access control can enforce centrally defined rules, but the description specifically matches the traditional Mandatory Access Control model.',
                    ],
                ],
            ],

            [
                'question' => 'What should be included in application for license by CA?',
                'options' => [
                    [
                        'answer' => 'Company registration certificate',
                        'is_correct' => false,
                        'explanation' => 'The company registration certificate can be one of the required supporting documents, but it is not the complete answer when all listed documents are required.',
                    ],
                    [
                        'answer' => 'Original copy of bank guarantee',
                        'is_correct' => false,
                        'explanation' => 'The original bank guarantee can be a required supporting document for licensing, but it is only one component of the application.',
                    ],
                    [
                        'answer' => 'Document to certify paid up capital of company',
                        'is_correct' => false,
                        'explanation' => 'Proof of paid-up capital can be required as part of the licensing documentation, but it is not the complete answer by itself.',
                    ],
                    [
                        'answer' => 'All of the above',
                        'is_correct' => true,
                        'explanation' => 'The application requires the listed supporting documents, including company registration, the original bank guarantee, and proof of paid-up capital.',
                    ],
                ],
            ],

            [
                'question' => 'According to NRB IT Guidelines, what access control practice requires two distinct authorized individuals to execute critical financial operations or configuration updates?',
                'options' => [
                    [
                        'answer' => 'Single User Authorization',
                        'is_correct' => false,
                        'explanation' => 'Single-user authorization allows one person to perform the action and does not provide dual authorization.',
                    ],
                    [
                        'answer' => 'Anonymous Delegation',
                        'is_correct' => false,
                        'explanation' => 'Anonymous delegation does not provide controlled dual authorization for critical operations.',
                    ],
                    [
                        'answer' => 'Role Escalation',
                        'is_correct' => false,
                        'explanation' => 'Role escalation refers to gaining higher privileges and does not itself provide two-person authorization.',
                    ],
                    [
                        'answer' => 'Dual Control / Maker-Checker Principle',
                        'is_correct' => true,
                        'explanation' => 'Dual control or maker-checker requires separate authorized individuals to initiate and approve critical transactions or changes.',
                    ],
                ],
            ],

            [
                'question' => 'Under NRB IT Guidelines, how should financial institutions secure sensitive data stored on removable backup media during transit?',
                'options' => [
                    [
                        'answer' => 'Mandate strong hardware/software encryption for data on transport media',
                        'is_correct' => true,
                        'explanation' => 'Sensitive backup data on removable media should be protected with strong encryption during transportation to reduce the impact of loss or unauthorized access.',
                    ],
                    [
                        'answer' => 'Use unencrypted transport media in sealed envelopes',
                        'is_correct' => false,
                        'explanation' => 'Physical sealing alone does not adequately protect sensitive information if the media is lost or accessed without authorization.',
                    ],
                    [
                        'answer' => 'Transport storage drives without logging physical custody transfers',
                        'is_correct' => false,
                        'explanation' => 'Lack of custody logging weakens accountability and chain-of-custody controls.',
                    ],
                    [
                        'answer' => 'Use public courier services without tracking controls',
                        'is_correct' => false,
                        'explanation' => 'Uncontrolled courier transport introduces unnecessary physical security and accountability risks.',
                    ],
                ],
            ],

            [
                'question' => 'According to the NRB Cyber Resilience Guidelines (2023), what role does the Chief Information Security Officer (CISO) serve within a bank\'s risk organization?',
                'options' => [
                    [
                        'answer' => 'Leading independent operational management of cyber risk security strategies reporting to executive governance',
                        'is_correct' => true,
                        'explanation' => 'The CISO is responsible for leading and coordinating information and cyber security risk management and providing appropriate reporting to senior governance.',
                    ],
                    [
                        'answer' => 'Operating as head of software sales',
                        'is_correct' => false,
                        'explanation' => 'Software sales is a commercial function and is not the responsibility of the CISO.',
                    ],
                    [
                        'answer' => 'Managing daily branch teller operations',
                        'is_correct' => false,
                        'explanation' => 'Branch teller operations are part of banking operations and are not the CISO\'s primary role.',
                    ],
                    [
                        'answer' => 'Performing external financial accounting audits',
                        'is_correct' => false,
                        'explanation' => 'External financial audits are performed by independent auditors rather than the CISO.',
                    ],
                ],
            ],

            [
                'question' => 'Under the NRB Cyber Resilience Guidelines (2023), how should financial entities manage third-party vendor cyber risks?',
                'options' => [
                    [
                        'answer' => 'Relying on vendor self-certifications without auditing',
                        'is_correct' => false,
                        'explanation' => 'Vendor self-certification alone does not provide sufficient assurance of ongoing security compliance.',
                    ],
                    [
                        'answer' => 'Conducting vendor risk assessments, enforcing contractual security clauses, and performing periodic compliance audits',
                        'is_correct' => true,
                        'explanation' => 'Third-party cyber risk should be managed through risk assessments, contractual security requirements, monitoring, and appropriate periodic reviews or audits.',
                    ],
                    [
                        'answer' => 'Delegating all cyber liability to third-party suppliers',
                        'is_correct' => false,
                        'explanation' => 'Financial institutions remain responsible for managing the risks associated with outsourced services and cannot simply transfer all cyber responsibility to vendors.',
                    ],
                    [
                        'answer' => 'Excluding third-party network connections from internal security monitoring',
                        'is_correct' => false,
                        'explanation' => 'Third-party connections can introduce significant security risks and should be appropriately monitored and controlled.',
                    ],
                ],
            ],

            [
                'question' => 'What security property guarantees that incoming network messages or data files have not been maliciously modified, altered, or deleted during transmission?',
                'options' => [
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => false,
                        'explanation' => 'Confidentiality protects information from unauthorized disclosure.',
                    ],
                    [
                        'answer' => 'Availability',
                        'is_correct' => false,
                        'explanation' => 'Availability ensures that authorized users can access systems and information when needed.',
                    ],
                    [
                        'answer' => 'Integrity',
                        'is_correct' => true,
                        'explanation' => 'Integrity ensures that data remains accurate, complete, and unaltered by unauthorized parties.',
                    ],
                    [
                        'answer' => 'Non-repudiation',
                        'is_correct' => false,
                        'explanation' => 'Non-repudiation provides evidence that a party performed or authorized a particular action and cannot credibly deny it.',
                    ],
                ],
            ],

            [
                'question' => 'Controller is appointed for...... Year according to ETA?',
                'options' => [
                    [
                        'answer' => '1 years',
                        'is_correct' => false,
                        'explanation' => 'The Electronic Transactions Act does not specify a one-year appointment term for the Controller.',
                    ],
                    [
                        'answer' => '2 years',
                        'is_correct' => false,
                        'explanation' => 'The Controller is not appointed for a two-year term under the relevant provision.',
                    ],
                    [
                        'answer' => '3 years',
                        'is_correct' => true,
                        'explanation' => 'Under Nepal’s Electronic Transactions Act (ETA), the Controller is appointed for a three-year term.',
                    ],
                    [
                        'answer' => '5 years',
                        'is_correct' => false,
                        'explanation' => 'The appointment period specified by the ETA is not five years.',
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
