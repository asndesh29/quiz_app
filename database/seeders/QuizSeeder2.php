<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder2 extends Seeder
{
    public function run(): void
    {


        $quiz = Quiz::create([
            'title' => 'Weekly Booster 2',
            'description' => 'Computer Fundamentals, Hardware, CPU Architecture, Memory, Storage, Motherboard and ICT in Nepal MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which memory component resides directly inside the CPU and exhibits the fastest access speed?',
                'options' => [
                    [
                        'answer' => 'Main Memory',
                        'is_correct' => false,
                        'explanation' => 'Main memory, typically DRAM, is slower than CPU registers because it is located outside the processor core.',
                    ],
                    [
                        'answer' => 'Registers',
                        'is_correct' => true,
                        'explanation' => 'CPU registers are located directly inside the processor and provide the fastest memory access available to the CPU.',
                    ],
                    [
                        'answer' => 'Cache Memory',
                        'is_correct' => false,
                        'explanation' => 'Cache memory is very fast and may be integrated into the CPU, but registers generally have lower access latency.',
                    ],
                    [
                        'answer' => 'Hard Disk',
                        'is_correct' => false,
                        'explanation' => 'A hard disk is secondary storage and is much slower than registers, cache, and main memory.',
                    ],
                ],
            ],

            [
                'question' => 'What happens to data stored in Static RAM (SRAM) when the main power supply to the computer system is switched off?',
                'options' => [
                    [
                        'answer' => 'Data is permanently saved',
                        'is_correct' => false,
                        'explanation' => 'SRAM is volatile memory and does not retain its contents without electrical power.',
                    ],
                    [
                        'answer' => 'Data is automatically backed up to ROM',
                        'is_correct' => false,
                        'explanation' => 'SRAM contents are not automatically copied to ROM when power is removed.',
                    ],
                    [
                        'answer' => 'Data is lost immediately',
                        'is_correct' => true,
                        'explanation' => 'SRAM is volatile, so its stored data is lost when electrical power is removed.',
                    ],
                    [
                        'answer' => 'Data is moved to secondary storage',
                        'is_correct' => false,
                        'explanation' => 'Data is not automatically transferred to secondary storage simply because the power is switched off.',
                    ],
                ],
            ],

            [
                'question' => 'Which type of cache memory is typically integrated directly on the processor core and offers the lowest latency?',
                'options' => [
                    [
                        'answer' => 'L1 Cache',
                        'is_correct' => true,
                        'explanation' => 'L1 cache is the smallest and fastest processor cache and is typically located directly on or very close to the CPU core.',
                    ],
                    [
                        'answer' => 'L2 Cache',
                        'is_correct' => false,
                        'explanation' => 'L2 cache is larger but generally slower than L1 cache.',
                    ],
                    [
                        'answer' => 'L3 Cache',
                        'is_correct' => false,
                        'explanation' => 'L3 cache is generally larger and slower than L1 and is often shared among multiple CPU cores.',
                    ],
                    [
                        'answer' => 'L4 Cache',
                        'is_correct' => false,
                        'explanation' => 'L4 cache is uncommon and is not normally the lowest-latency cache in modern processors.',
                    ],
                ],
            ],

            [
                'question' => 'Which memory component is non-volatile and contains the critical initial boot instructions (BIOS/UEFI) required to start up a computer?',
                'options' => [
                    [
                        'answer' => 'Dynamic RAM',
                        'is_correct' => false,
                        'explanation' => 'DRAM is volatile memory and loses its contents when power is removed.',
                    ],
                    [
                        'answer' => 'Cache Memory',
                        'is_correct' => false,
                        'explanation' => 'Cache memory is volatile and is not used as the persistent storage location for BIOS or UEFI firmware.',
                    ],
                    [
                        'answer' => 'Read-Only Memory (ROM)',
                        'is_correct' => true,
                        'explanation' => 'ROM is non-volatile memory historically used to store firmware such as BIOS. Modern firmware is commonly stored in flash memory, but ROM is the traditional answer.',
                    ],
                    [
                        'answer' => 'Virtual Memory',
                        'is_correct' => false,
                        'explanation' => 'Virtual memory uses secondary storage to extend the apparent memory available to applications and is not responsible for initial system boot firmware.',
                    ],
                ],
            ],

            [
                'question' => 'What is the primary architectural purpose of organizing storage devices into a Memory Hierarchy pyramid?',
                'options' => [
                    [
                        'answer' => 'To equalize the access time across all storage media',
                        'is_correct' => false,
                        'explanation' => 'Different levels of the memory hierarchy intentionally have different speeds, capacities, and costs.',
                    ],
                    [
                        'answer' => 'To achieve an optimal balance of cost, speed, and storage capacity',
                        'is_correct' => true,
                        'explanation' => 'Memory hierarchy places small, fast, expensive memory near the CPU and larger, slower, cheaper storage farther away.',
                    ],
                    [
                        'answer' => 'To replace physical RAM completely with optical disk storage',
                        'is_correct' => false,
                        'explanation' => 'Memory hierarchy does not eliminate or replace physical RAM.',
                    ],
                    [
                        'answer' => 'To ensure all computer memory components are volatile',
                        'is_correct' => false,
                        'explanation' => 'A memory hierarchy includes both volatile and non-volatile storage technologies.',
                    ],
                ],
            ],

            [
                'question' => 'A computer user notices that running several resource-heavy software applications simultaneously causes heavy disk access. Which mechanism allows the OS to execute programs larger than the available physical RAM?',
                'options' => [
                    [
                        'answer' => 'Read-Only Memory',
                        'is_correct' => false,
                        'explanation' => 'ROM stores persistent firmware and does not extend the available memory for running applications.',
                    ],
                    [
                        'answer' => 'Virtual Memory',
                        'is_correct' => true,
                        'explanation' => 'Virtual memory allows the operating system to use secondary storage as an extension of RAM, allowing programs to operate when physical RAM is insufficient.',
                    ],
                    [
                        'answer' => 'Write-Through Cache',
                        'is_correct' => false,
                        'explanation' => 'Write-through cache controls how writes are propagated to lower memory levels and does not provide additional virtual address space.',
                    ],
                    [
                        'answer' => 'Direct Memory Access',
                        'is_correct' => false,
                        'explanation' => 'DMA transfers data between memory and peripherals with reduced CPU involvement but does not extend the available memory capacity.',
                    ],
                ],
            ],

            [
                'question' => 'Which type of main memory requires periodic electrical refresh cycles using dynamic clock signals to prevent data loss from discharging capacitors?',
                'options' => [
                    [
                        'answer' => 'SRAM',
                        'is_correct' => false,
                        'explanation' => 'SRAM uses flip-flop circuits and does not require periodic refresh cycles in the same way as DRAM.',
                    ],
                    [
                        'answer' => 'DRAM',
                        'is_correct' => true,
                        'explanation' => 'DRAM stores bits as electrical charges in capacitors, which leak over time and therefore require periodic refreshing.',
                    ],
                    [
                        'answer' => 'EEPROM',
                        'is_correct' => false,
                        'explanation' => 'EEPROM is non-volatile memory and retains data without continuous power or periodic refresh.',
                    ],
                    [
                        'answer' => 'Flash Memory',
                        'is_correct' => false,
                        'explanation' => 'Flash memory is non-volatile and does not require periodic refresh cycles to retain stored data.',
                    ],
                ],
            ],

            [
                'question' => 'A processor searches for a word in memory. If cache access time is 2 ns, main memory access time is 20 ns, and the cache hit ratio is 0.9, what is the Effective Memory Access Time (EMAT)?',
                'options' => [
                    [
                        'answer' => '3.8 ns',
                        'is_correct' => true,
                        'explanation' => 'Using the given formula: (0.9 × 2) + (0.1 × 20) = 1.8 + 2.0 = 3.8 ns.',
                    ],
                    [
                        'answer' => '4.0 ns',
                        'is_correct' => false,
                        'explanation' => 'The calculated EMAT using the supplied formula is 3.8 ns, not 4.0 ns.',
                    ],
                    [
                        'answer' => '18.0 ns',
                        'is_correct' => false,
                        'explanation' => '18 ns does not result from applying the stated cache hit ratio and access times.',
                    ],
                    [
                        'answer' => '22.0 ns',
                        'is_correct' => false,
                        'explanation' => '22 ns would incorrectly add cache and main-memory times without considering the hit ratio.',
                    ],
                ],
            ],

            [
                'question' => 'Which dedicated component of the system bus is used by the CPU to specify the physical memory address or I/O port location it wants to access?',
                'options' => [
                    [
                        'answer' => 'Data Bus',
                        'is_correct' => false,
                        'explanation' => 'The data bus carries the actual data being transferred between the CPU, memory, and peripherals.',
                    ],
                    [
                        'answer' => 'Control Bus',
                        'is_correct' => false,
                        'explanation' => 'The control bus carries signals such as read, write, interrupt, and clock-related control information.',
                    ],
                    [
                        'answer' => 'Address Bus',
                        'is_correct' => true,
                        'explanation' => 'The address bus carries the address of the memory location or I/O port that the CPU wants to access.',
                    ],
                    [
                        'answer' => 'Expansion Bus',
                        'is_correct' => false,
                        'explanation' => 'An expansion bus connects additional hardware devices and expansion cards rather than specifically carrying CPU-generated addresses.',
                    ],
                ],
            ],

            [
                'question' => 'Why is the System Address Bus classified as a unidirectional bus in standard microprocessor execution?',
                'options' => [
                    [
                        'answer' => 'Data transfers flow from peripherals to memory only',
                        'is_correct' => false,
                        'explanation' => 'The address bus is concerned with addresses rather than the direction of data transfers.',
                    ],
                    [
                        'answer' => 'Address signals originate strictly from the CPU to select target memory/I/O locations',
                        'is_correct' => true,
                        'explanation' => 'The CPU normally places the address of the desired memory or I/O location onto the address bus.',
                    ],
                    [
                        'answer' => 'Addresses flow in both directions during instruction execution',
                        'is_correct' => false,
                        'explanation' => 'Standard system address buses are generally driven by the CPU or bus master toward the selected device.',
                    ],
                    [
                        'answer' => 'The control signal overrides address flow direction',
                        'is_correct' => false,
                        'explanation' => 'Control signals determine operations but do not make the address bus bidirectional.',
                    ],
                ],
            ],

            [
                'question' => 'If a microprocessor contains a 32-bit System Address Bus, what is the maximum byte-addressable primary memory capacity it can directly address?',
                'options' => [
                    [
                        'answer' => '2 GB',
                        'is_correct' => false,
                        'explanation' => 'A 32-bit address bus can represent 2^32 unique addresses, which is 4 GB for byte-addressable memory.',
                    ],
                    [
                        'answer' => '4 GB',
                        'is_correct' => true,
                        'explanation' => 'A 32-bit address bus provides 2^32 addresses. With byte addressing, this equals 4,294,967,296 bytes, or 4 GB.',
                    ],
                    [
                        'answer' => '8 GB',
                        'is_correct' => false,
                        'explanation' => '8 GB would require more than 32 address bits for direct byte addressing.',
                    ],
                    [
                        'answer' => '16 GB',
                        'is_correct' => false,
                        'explanation' => '16 GB requires a larger address space than a standard 32-bit address bus provides.',
                    ],
                ],
            ],

            [
                'question' => 'Which system bus line is explicitly responsible for transmitting Read/Write operation signals, Interrupt Request (IRQ) lines, and System Clock signals?',
                'options' => [
                    [
                        'answer' => 'Address Bus',
                        'is_correct' => false,
                        'explanation' => 'The address bus carries addresses identifying memory or I/O locations.',
                    ],
                    [
                        'answer' => 'Control Bus',
                        'is_correct' => true,
                        'explanation' => 'The control bus carries control and timing signals such as Read, Write, interrupt requests, and clock-related signals.',
                    ],
                    [
                        'answer' => 'Data Bus',
                        'is_correct' => false,
                        'explanation' => 'The data bus transfers actual data between components.',
                    ],
                    [
                        'answer' => 'Expansion Bus',
                        'is_correct' => false,
                        'explanation' => 'Expansion buses connect additional devices and are not the standard classification for CPU control signals.',
                    ],
                ],
            ],

            [
                'question' => 'Which type of bus interface allows external peripherals, high-speed graphics adapters, and expansion cards to communicate with the motherboard chipset?',
                'options' => [
                    [
                        'answer' => 'Data Bus',
                        'is_correct' => false,
                        'explanation' => 'The data bus transfers data but is not specifically the interface category for expansion devices.',
                    ],
                    [
                        'answer' => 'Internal CPU Bus',
                        'is_correct' => false,
                        'explanation' => 'An internal CPU bus connects components within the processor rather than external expansion cards.',
                    ],
                    [
                        'answer' => 'Expansion Bus',
                        'is_correct' => true,
                        'explanation' => 'An expansion bus provides connectivity for external peripherals and expansion devices such as graphics adapters and other cards.',
                    ],
                    [
                        'answer' => 'Control Bus',
                        'is_correct' => false,
                        'explanation' => 'The control bus carries control signals rather than serving as the general interface for expansion cards.',
                    ],
                ],
            ],

            [
                'question' => 'What is the fundamental functional difference between the System Data Bus and the System Address Bus?',
                'options' => [
                    [
                        'answer' => 'Data Bus transmits control signals; Address Bus transmits user data',
                        'is_correct' => false,
                        'explanation' => 'The data bus carries data while the control bus carries control signals.',
                    ],
                    [
                        'answer' => 'Data Bus is unidirectional; Address Bus is bidirectional',
                        'is_correct' => false,
                        'explanation' => 'The standard distinction is generally the opposite: data is bidirectional while the address bus is generally unidirectional from the CPU.',
                    ],
                    [
                        'answer' => 'Data Bus is bidirectional; Address Bus is unidirectional',
                        'is_correct' => true,
                        'explanation' => 'The data bus carries information to and from the CPU, while the address bus normally carries addresses from the CPU to the selected device.',
                    ],
                    [
                        'answer' => 'Data Bus defines memory capacity; Address Bus defines processor word size',
                        'is_correct' => false,
                        'explanation' => 'The address bus width determines the directly addressable memory space, while data bus width affects the amount of data transferred per bus operation.',
                    ],
                ],
            ],

            [
                'question' => 'A 64-bit microprocessor operates a Data Bus with a clock frequency of 800 MHz. What is the theoretical maximum bandwidth of this Data Bus in Megabytes per second (MB/s)?',
                'options' => [
                    [
                        'answer' => '800 MB/s',
                        'is_correct' => false,
                        'explanation' => 'A 64-bit bus transfers 8 bytes per clock cycle, so the theoretical rate is higher than 800 MB/s.',
                    ],
                    [
                        'answer' => '3200 MB/s',
                        'is_correct' => false,
                        'explanation' => '3200 MB/s would correspond to a 32-bit bus operating at 800 MHz.',
                    ],
                    [
                        'answer' => '6400 MB/s',
                        'is_correct' => true,
                        'explanation' => '64 bits equals 8 bytes. Therefore, 8 bytes × 800 million cycles/s = 6400 MB/s.',
                    ],
                    [
                        'answer' => '12800 MB/s',
                        'is_correct' => false,
                        'explanation' => '12800 MB/s would require 16 bytes transferred per clock cycle at 800 MHz.',
                    ],
                ],
            ],

            [
                'question' => 'Which foundational computer architecture relies on storing both executable program instructions and runtime data within the exact same unified physical memory space?',
                'options' => [
                    [
                        'answer' => 'Harvard Architecture',
                        'is_correct' => false,
                        'explanation' => 'Harvard architecture uses separate instruction and data memory spaces.',
                    ],
                    [
                        'answer' => 'Von Neumann Architecture',
                        'is_correct' => true,
                        'explanation' => 'Von Neumann architecture stores instructions and data in the same unified memory space.',
                    ],
                    [
                        'answer' => 'Dual Bus Architecture',
                        'is_correct' => false,
                        'explanation' => 'Dual-bus designs are not the standard architecture defined by a unified instruction and data memory.',
                    ],
                    [
                        'answer' => 'Dedicated Controller Architecture',
                        'is_correct' => false,
                        'explanation' => 'Dedicated controller architecture does not define the unified instruction/data memory model described.',
                    ],
                ],
            ],

            [
                'question' => 'What is the primary cause of the performance limitation commonly known as the Von Neumann Bottleneck?',
                'options' => [
                    [
                        'answer' => 'Insufficient electrical power delivery to the CPU core',
                        'is_correct' => false,
                        'explanation' => 'Power delivery is a separate processor design concern and is not the cause of the Von Neumann bottleneck.',
                    ],
                    [
                        'answer' => 'Sharing a single physical bus for both instruction fetching and data transfers',
                        'is_correct' => true,
                        'explanation' => 'In the classic Von Neumann model, instructions and data share the same memory path, limiting throughput.',
                    ],
                    [
                        'answer' => 'Incompatibility between software programs and hardware buses',
                        'is_correct' => false,
                        'explanation' => 'Software-hardware compatibility is not the defining cause of the Von Neumann bottleneck.',
                    ],
                    [
                        'answer' => 'Physical separation of primary RAM and secondary storage',
                        'is_correct' => false,
                        'explanation' => 'The Von Neumann bottleneck concerns the shared path between CPU and memory, not the separation of RAM and secondary storage.',
                    ],
                ],
            ],

            [
                'question' => 'Which computer architecture features physically separate memory modules and individual bus systems for instructions and data?',
                'options' => [
                    [
                        'answer' => 'Von Neumann Architecture',
                        'is_correct' => false,
                        'explanation' => 'Von Neumann architecture uses a unified memory space for instructions and data.',
                    ],
                    [
                        'answer' => 'Harvard Architecture',
                        'is_correct' => true,
                        'explanation' => 'Harvard architecture separates instruction memory and data memory and generally provides separate paths for accessing them.',
                    ],
                    [
                        'answer' => 'Princeton Architecture',
                        'is_correct' => false,
                        'explanation' => 'Princeton architecture is another term associated with the Von Neumann model of unified memory.',
                    ],
                    [
                        'answer' => 'Single Bus Architecture',
                        'is_correct' => false,
                        'explanation' => 'A single-bus architecture does not provide separate instruction and data paths as required by the classic Harvard model.',
                    ],
                ],
            ],

            [
                'question' => 'Why do modern high-performance microprocessors frequently implement a Modified Harvard Architecture internally while presenting a Von Neumann structure externally?',
                'options' => [
                    [
                        'answer' => 'To avoid using volatile system memory',
                        'is_correct' => false,
                        'explanation' => 'Modern processors still rely heavily on volatile system memory such as DRAM.',
                    ],
                    [
                        'answer' => 'To allow simultaneous instruction/data access in CPU caches while keeping external motherboard pin counts low',
                        'is_correct' => true,
                        'explanation' => 'Separate instruction and data caches allow parallel access internally while the external memory system can remain unified.',
                    ],
                    [
                        'answer' => 'To reduce internal CPU register speeds',
                        'is_correct' => false,
                        'explanation' => 'Modified Harvard architecture is intended to improve memory access performance, not reduce register performance.',
                    ],
                    [
                        'answer' => 'To eliminate the need for an instruction execution pipeline',
                        'is_correct' => false,
                        'explanation' => 'Pipelining remains an important feature of modern high-performance processors.',
                    ],
                ],
            ],

            [
                'question' => 'In a classic Von Neumann architecture computer, why can the processor NOT execute an instruction fetch and a data memory access within the exact same clock cycle?',
                'options' => [
                    [
                        'answer' => 'CPU registers cannot store memory addresses',
                        'is_correct' => false,
                        'explanation' => 'CPU registers can store addresses and other data required for memory operations.',
                    ],
                    [
                        'answer' => 'Instruction fetches and data accesses share the same physical bus lines',
                        'is_correct' => true,
                        'explanation' => 'The classic Von Neumann design uses a shared memory path, creating a structural limitation when instruction and data accesses compete for the same path.',
                    ],
                    [
                        'answer' => 'Data memory is restricted to non-volatile operations',
                        'is_correct' => false,
                        'explanation' => 'Data memory is generally volatile RAM and this characteristic does not prevent simultaneous access.',
                    ],
                    [
                        'answer' => 'The Arithmetic Logic Unit is disabled during fetches',
                        'is_correct' => false,
                        'explanation' => 'The ALU can operate independently of the fundamental shared-memory-path limitation.',
                    ],
                ],
            ],

            [
                'question' => 'High-speed Digital Signal Processors (DSPs) process heavy continuous data streams in real time. Which architecture is preferred in DSP design to enable parallel instruction and data fetching?',
                'options' => [
                    [
                        'answer' => 'Pure Von Neumann Architecture',
                        'is_correct' => false,
                        'explanation' => 'A pure Von Neumann architecture has a shared instruction and data path that can limit simultaneous access.',
                    ],
                    [
                        'answer' => 'Harvard Architecture',
                        'is_correct' => true,
                        'explanation' => 'Harvard architecture provides separate instruction and data paths, allowing DSPs to fetch instructions and data simultaneously.',
                    ],
                    [
                        'answer' => 'Serial Bus Architecture',
                        'is_correct' => false,
                        'explanation' => 'Serial bus architecture does not specifically provide the parallel instruction/data memory access required by DSP processing.',
                    ],
                    [
                        'answer' => 'Princeton Architecture',
                        'is_correct' => false,
                        'explanation' => 'Princeton architecture is associated with the unified-memory Von Neumann model.',
                    ],
                ],
            ],

            [
                'question' => 'Which defining architectural characteristic is associated with Reduced Instruction Set Computers (RISC)?',
                'options' => [
                    [
                        'answer' => 'Variable-length complex instruction formats',
                        'is_correct' => false,
                        'explanation' => 'Variable-length complex instructions are more strongly associated with traditional CISC architectures.',
                    ],
                    [
                        'answer' => 'Simple, fixed-length instruction sets designed for fast execution',
                        'is_correct' => true,
                        'explanation' => 'RISC architectures generally favor simple instructions, regular instruction formats, and efficient pipelining.',
                    ],
                    [
                        'answer' => 'Heavy reliance on microprogrammed control units',
                        'is_correct' => false,
                        'explanation' => 'Heavy microprogramming is traditionally associated more strongly with CISC designs.',
                    ],
                    [
                        'answer' => 'Direct memory-to-memory instruction execution',
                        'is_correct' => false,
                        'explanation' => 'RISC processors commonly follow a load/store model where arithmetic operations use registers rather than directly operating on memory operands.',
                    ],
                ],
            ],

            [
                'question' => 'Which processor design strategy relies heavily on a large collection of general-purpose CPU registers to minimize frequent accesses to main system RAM?',
                'options' => [
                    [
                        'answer' => 'CISC Architecture',
                        'is_correct' => false,
                        'explanation' => 'Traditional CISC architectures generally emphasize complex instructions and may allow more direct memory operands.',
                    ],
                    [
                        'answer' => 'RISC Architecture',
                        'is_correct' => true,
                        'explanation' => 'RISC designs commonly provide many general-purpose registers so computation can occur in registers and memory accesses can be minimized.',
                    ],
                    [
                        'answer' => 'Von Neumann Bus Controller',
                        'is_correct' => false,
                        'explanation' => 'A bus controller manages data transfers and is not an instruction-set architecture strategy based on a large register file.',
                    ],
                    [
                        'answer' => 'Accumulator-Only Architecture',
                        'is_correct' => false,
                        'explanation' => 'Accumulator-based architectures rely heavily on an accumulator rather than a large collection of general-purpose registers.',
                    ],
                ],
            ],

            [
                'question' => 'The desktop x86 processor family (such as Intel Core or AMD Ryzen) is historically classified under which computer instruction set architecture design?',
                'options' => [
                    [
                        'answer' => 'RISC',
                        'is_correct' => false,
                        'explanation' => 'x86 is historically categorized as a CISC instruction set architecture, although modern implementations internally use many RISC-like micro-operations.',
                    ],
                    [
                        'answer' => 'CISC',
                        'is_correct' => true,
                        'explanation' => 'The x86 instruction set is historically classified as CISC because it supports many complex and variable-length instructions.',
                    ],
                    [
                        'answer' => 'Very Long Instruction Word (VLIW)',
                        'is_correct' => false,
                        'explanation' => 'VLIW is a different architectural approach in which multiple operations are explicitly grouped into long instruction words.',
                    ],
                    [
                        'answer' => 'Minimal Instruction Set Computer (MISC)',
                        'is_correct' => false,
                        'explanation' => 'MISC is not the historical classification of the x86 instruction set.',
                    ],
                ],
            ],

            [
                'question' => 'Which processor design approach lowers the average Cycles Per Instruction (CPI) close to 1.0 by optimizing instruction execution pipelines?',
                'options' => [
                    [
                        'answer' => 'CISC Architecture',
                        'is_correct' => false,
                        'explanation' => 'CISC processors can use pipelining, but the simplified instruction model of RISC traditionally makes highly efficient pipelines easier to design.',
                    ],
                    [
                        'answer' => 'RISC Architecture',
                        'is_correct' => true,
                        'explanation' => 'RISC emphasizes simple, regular instructions that can be efficiently pipelined, historically targeting approximately one instruction per pipeline cycle under ideal conditions.',
                    ],
                    [
                        'answer' => 'Princeton Architecture',
                        'is_correct' => false,
                        'explanation' => 'Princeton architecture describes a memory organization model rather than an instruction execution strategy focused on CPI.',
                    ],
                    [
                        'answer' => 'Serial Control Architecture',
                        'is_correct' => false,
                        'explanation' => 'Serial control architecture is not the standard architectural approach associated with achieving low CPI through instruction pipelining.',
                    ],
                ],
            ],

            [
                'question' => 'How does a CISC processor process multi-step complex assembly instructions directly at the execution hardware level?',
                'options' => [
                    [
                        'answer' => 'By translating complex instructions into sequences of simple internal micro-operations (μops)',
                        'is_correct' => true,
                        'explanation' => 'Modern CISC processors such as x86 CPUs commonly decode complex instructions into simpler internal micro-operations that can be executed by the processor pipeline.',
                    ],
                    [
                        'answer' => 'By routing execution through fixed 32-bit RISC channels only',
                        'is_correct' => false,
                        'explanation' => 'Although modern CISC processors may internally use RISC-like micro-operations, they are not defined as executing only through fixed 32-bit RISC channels.',
                    ],
                    [
                        'answer' => 'By bypassing primary system RAM completely',
                        'is_correct' => false,
                        'explanation' => 'CISC processors still use main memory when required and do not bypass RAM completely.',
                    ],
                    [
                        'answer' => 'By disabling internal general-purpose registers',
                        'is_correct' => false,
                        'explanation' => 'Modern CISC processors use internal registers extensively during instruction execution.',
                    ],
                ],
            ],

            [
                'question' => 'Smartphones and mobile devices predominantly utilize ARM processor designs primarily due to which major architectural benefit of RISC?',
                'options' => [
                    [
                        'answer' => 'High microcode complexity',
                        'is_correct' => false,
                        'explanation' => 'High microcode complexity is not the primary reason ARM is widely used in mobile devices.',
                    ],
                    [
                        'answer' => 'High power efficiency and reduced silicon die area',
                        'is_correct' => true,
                        'explanation' => 'ARM-based RISC designs are known for efficient instruction execution and favorable power consumption, which are important for battery-powered devices.',
                    ],
                    [
                        'answer' => 'Support for complex variable-length instruction encodings',
                        'is_correct' => false,
                        'explanation' => 'Complex variable-length instruction encodings are more traditionally associated with CISC architectures such as x86.',
                    ],
                    [
                        'answer' => 'Direct memory-to-memory arithmetic processing capabilities',
                        'is_correct' => false,
                        'explanation' => 'Modern RISC architectures commonly follow a load/store model rather than direct memory-to-memory arithmetic.',
                    ],
                ],
            ],

            [
                'question' => 'What is the core principle of the Load/Store architecture model used in modern RISC microprocessors?',
                'options' => [
                    [
                        'answer' => 'Arithmetic instructions can directly operate on operands stored in RAM',
                        'is_correct' => false,
                        'explanation' => 'Load/store architectures generally require data to be loaded into registers before arithmetic operations are performed.',
                    ],
                    [
                        'answer' => 'Only dedicated Load and Store instructions access RAM; all computational operations run strictly on CPU registers',
                        'is_correct' => true,
                        'explanation' => 'The load/store model separates memory access from computation: load and store instructions access memory, while arithmetic instructions operate on registers.',
                    ],
                    [
                        'answer' => 'Executable code is loaded from disk directly into registers without going through RAM',
                        'is_correct' => false,
                        'explanation' => 'Programs are normally loaded into main memory before instructions are fetched and executed.',
                    ],
                    [
                        'answer' => 'Memory access operations bypass CPU caches completely',
                        'is_correct' => false,
                        'explanation' => 'Modern RISC processors generally use caches to accelerate memory accesses.',
                    ],
                ],
            ],

            [
                'question' => 'Which I/O transfer method involves the CPU continuously checking a peripheral device\'s status register in a software loop to determine if data is ready for transfer?',
                'options' => [
                    [
                        'answer' => 'Direct Memory Access (DMA)',
                        'is_correct' => false,
                        'explanation' => 'DMA allows peripherals to transfer data directly to or from memory with minimal continuous CPU involvement.',
                    ],
                    [
                        'answer' => 'Interrupt-Driven I/O',
                        'is_correct' => false,
                        'explanation' => 'Interrupt-driven I/O allows a device to notify the CPU when service is required instead of requiring continuous polling.',
                    ],
                    [
                        'answer' => 'Programmed I/O (Polling)',
                        'is_correct' => true,
                        'explanation' => 'In programmed I/O or polling, the CPU repeatedly checks a device status register until the device is ready.',
                    ],
                    [
                        'answer' => 'Memory-Mapped Buffering',
                        'is_correct' => false,
                        'explanation' => 'Memory-mapped I/O concerns how devices are addressed rather than specifically describing continuous status polling.',
                    ],
                ],
            ],

            [
                'question' => 'Which hardware component takes control of the system bus to transfer data blocks directly between main memory and peripheral devices without passing data through CPU registers?',
                'options' => [
                    [
                        'answer' => 'Interrupt Controller',
                        'is_correct' => false,
                        'explanation' => 'An interrupt controller manages interrupt requests rather than performing bulk memory-to-device data transfers.',
                    ],
                    [
                        'answer' => 'Direct Memory Access (DMA) Controller',
                        'is_correct' => true,
                        'explanation' => 'A DMA controller manages direct transfers between I/O devices and main memory while minimizing CPU involvement.',
                    ],
                    [
                        'answer' => 'Programmable Logic Controller',
                        'is_correct' => false,
                        'explanation' => 'A PLC is an industrial control device and is not the standard hardware component responsible for system DMA transfers.',
                    ],
                    [
                        'answer' => 'Arithmetic Logic Unit',
                        'is_correct' => false,
                        'explanation' => 'The ALU performs arithmetic and logical operations rather than controlling bulk I/O transfers.',
                    ],
                ],
            ],

            [
                'question' => 'What occurs when a peripheral device sends an Interrupt Request (IRQ) signal to the CPU during program execution?',
                'options' => [
                    [
                        'answer' => 'The system immediately performs a hard reboot',
                        'is_correct' => false,
                        'explanation' => 'An interrupt is a normal mechanism for requesting CPU attention and does not normally reboot the system.',
                    ],
                    [
                        'answer' => 'The CPU pauses current execution, saves its context, and jumps to an Interrupt Service Routine (ISR)',
                        'is_correct' => true,
                        'explanation' => 'When an interrupt is accepted, the CPU saves the necessary execution context and transfers control to an interrupt service routine.',
                    ],
                    [
                        'answer' => 'The system bus shuts down automatically',
                        'is_correct' => false,
                        'explanation' => 'The system bus continues operating as required while the interrupt is serviced.',
                    ],
                    [
                        'answer' => 'The I/O controller clears system RAM contents',
                        'is_correct' => false,
                        'explanation' => 'Interrupt handling does not clear system RAM.',
                    ],
                ],
            ],

            [
                'question' => 'Which temporary storage memory region is used to hold data while it is transferred between two devices operating at different data processing speeds?',
                'options' => [
                    [
                        'answer' => 'Spooler',
                        'is_correct' => false,
                        'explanation' => 'A spooler manages queued jobs, commonly for slower devices such as printers, rather than being the general temporary storage region described here.',
                    ],
                    [
                        'answer' => 'Buffer',
                        'is_correct' => true,
                        'explanation' => 'A buffer temporarily holds data while it moves between components operating at different speeds.',
                    ],
                    [
                        'answer' => 'Address Bus',
                        'is_correct' => false,
                        'explanation' => 'An address bus carries memory or I/O addresses and is not a temporary data storage region.',
                    ],
                    [
                        'answer' => 'Cache Line',
                        'is_correct' => false,
                        'explanation' => 'A cache line stores a block of data in cache for faster CPU access, but the general mechanism for handling speed differences between devices is a buffer.',
                    ],
                ],
            ],

            [
                'question' => 'What is the primary architectural difference between Memory-Mapped I/O and Port-Mapped (Isolated) I/O?',
                'options' => [
                    [
                        'answer' => 'Memory-Mapped I/O requires a DMA controller; Port-Mapped I/O does not',
                        'is_correct' => false,
                        'explanation' => 'Neither I/O addressing method inherently requires or excludes DMA.',
                    ],
                    [
                        'answer' => 'Memory-Mapped I/O shares the standard RAM address space; Port-Mapped I/O uses a distinct address space accessed via special I/O instructions',
                        'is_correct' => true,
                        'explanation' => 'Memory-mapped I/O assigns device registers addresses within the normal memory address space, while isolated I/O uses a separate I/O address space.',
                    ],
                    [
                        'answer' => 'Port-Mapped I/O uses software buffers; Memory-Mapped I/O uses physical registers',
                        'is_correct' => false,
                        'explanation' => 'Both methods can involve device registers; the key difference is their address-space organization.',
                    ],
                    [
                        'answer' => 'Memory-Mapped I/O operates only with non-volatile memory',
                        'is_correct' => false,
                        'explanation' => 'Memory-mapped I/O can be used with normal device registers and does not imply non-volatile memory.',
                    ],
                ],
            ],

            [
                'question' => 'A network interface card needs to transfer high-volume incoming data packets into RAM while keeping CPU utilization as low as possible. Which method is most efficient?',
                'options' => [
                    [
                        'answer' => 'Programmed I/O (Polling)',
                        'is_correct' => false,
                        'explanation' => 'Polling requires the CPU to repeatedly check device status and can consume significant CPU resources.',
                    ],
                    [
                        'answer' => 'Interrupt-Driven I/O without DMA',
                        'is_correct' => false,
                        'explanation' => 'Interrupts reduce unnecessary polling but high-volume transfers can still generate substantial CPU overhead without DMA.',
                    ],
                    [
                        'answer' => 'Direct Memory Access (DMA)',
                        'is_correct' => true,
                        'explanation' => 'DMA allows the NIC to transfer packet data directly into RAM with minimal CPU involvement, making it efficient for high-volume transfers.',
                    ],
                    [
                        'answer' => 'Serial Bit Spooling',
                        'is_correct' => false,
                        'explanation' => 'Serial bit spooling is not the standard high-performance mechanism for transferring network data directly into RAM.',
                    ],
                ],
            ],

            [
                'question' => 'Which print job management technique saves entire print files to disk queues and feeds them to a slow printer sequentially in the background?',
                'options' => [
                    [
                        'answer' => 'Buffering',
                        'is_correct' => false,
                        'explanation' => 'Buffering temporarily holds data to compensate for speed differences, but printer job queues are specifically associated with spooling.',
                    ],
                    [
                        'answer' => 'Spooling',
                        'is_correct' => true,
                        'explanation' => 'Spooling stores print jobs in a queue, often on disk, allowing applications to continue while the printer processes jobs sequentially.',
                    ],
                    [
                        'answer' => 'Polling',
                        'is_correct' => false,
                        'explanation' => 'Polling involves repeatedly checking a device status and is not a print-job queue management technique.',
                    ],
                    [
                        'answer' => 'Interrupt Masking',
                        'is_correct' => false,
                        'explanation' => 'Interrupt masking controls which interrupts the CPU temporarily ignores and is unrelated to printer job queuing.',
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
