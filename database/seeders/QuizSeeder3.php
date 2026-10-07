<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder3 extends Seeder
{
    public function run(): void
    {


        $quiz = Quiz::create([
            'title' => 'Weekly Booster 3',
            'description' => 'Computer Fundamentals, Hardware, CPU Architecture, Memory, Storage, Motherboard and ICT in Nepal MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which of the following banking technologies utilizes special magnetic ink containing iron oxide to scan and process cheques automatically?',
                'options' => [
                    [
                        'answer' => 'Optical Character Recognition (OCR)',
                        'is_correct' => false,
                        'explanation' => 'OCR recognizes printed or handwritten characters optically and does not specifically use magnetic ink for cheque processing.',
                    ],
                    [
                        'answer' => 'Magnetic Ink Character Recognition (MICR)',
                        'is_correct' => true,
                        'explanation' => 'MICR uses magnetically readable ink containing iron oxide to identify and process characters printed on bank cheques.',
                    ],
                    [
                        'answer' => 'Optical Mark Recognition (OMR)',
                        'is_correct' => false,
                        'explanation' => 'OMR detects marked areas such as shaded bubbles on forms and answer sheets.',
                    ],
                    [
                        'answer' => 'Barcode Reader (BCR)',
                        'is_correct' => false,
                        'explanation' => 'Barcode readers scan printed barcodes and do not use magnetic ink to process bank cheques.',
                    ],
                ],
            ],

            [
                'question' => 'A Dot Matrix Printer is classified as an impact printer primarily because:',
                'options' => [
                    [
                        'answer' => 'It uses a high-energy laser beam to melt toner onto paper',
                        'is_correct' => false,
                        'explanation' => 'Laser printers use laser technology to create an electrostatic image that attracts toner to the paper.',
                    ],
                    [
                        'answer' => 'It uses thermal heating pins on heat-sensitive paper',
                        'is_correct' => false,
                        'explanation' => 'Thermal printers use heat-sensitive paper or thermal transfer techniques rather than physically striking an inked ribbon.',
                    ],
                    [
                        'answer' => 'Its print head pins physically strike an inked ribbon against paper',
                        'is_correct' => true,
                        'explanation' => 'A dot matrix printer uses pins that mechanically strike an inked ribbon against paper, making it an impact printer.',
                    ],
                    [
                        'answer' => 'It sprays tiny charged ink droplets directly onto paper',
                        'is_correct' => false,
                        'explanation' => 'Inkjet printers produce characters by spraying tiny droplets of ink onto the paper.',
                    ],
                ],
            ],

            [
                'question' => 'Which printer type is most suitable for printing continuous multi-part carbon copy forms in banking transaction counters?',
                'options' => [
                    [
                        'answer' => 'Laser Printer',
                        'is_correct' => false,
                        'explanation' => 'Laser printers provide high-quality page printing but are not designed to physically impact multiple layers of continuous forms.',
                    ],
                    [
                        'answer' => 'Inkjet Printer',
                        'is_correct' => false,
                        'explanation' => 'Inkjet printers spray ink onto paper and are not suitable for traditional multi-part carbon copy forms.',
                    ],
                    [
                        'answer' => 'Dot Matrix Printer',
                        'is_correct' => true,
                        'explanation' => 'Dot matrix printers physically strike an inked ribbon, allowing the impact to transfer through multiple layers of continuous carbon-copy forms.',
                    ],
                    [
                        'answer' => 'Thermal Printer',
                        'is_correct' => false,
                        'explanation' => 'Thermal printers generally require thermal paper and cannot produce traditional multi-part carbon copies through mechanical impact.',
                    ],
                ],
            ],

            [
                'question' => 'Which of the following statements correctly distinguishes between a Touchscreen and a Standard Monitor?',
                'options' => [
                    [
                        'answer' => 'A touchscreen acts strictly as an output device, whereas a monitor is an I/O device.',
                        'is_correct' => false,
                        'explanation' => 'A touchscreen provides both display output and touch-based input, while a standard monitor is primarily an output device.',
                    ],
                    [
                        'answer' => 'A touchscreen functions as both an input and output device simultaneously, whereas a monitor is strictly an output device.',
                        'is_correct' => true,
                        'explanation' => 'A touchscreen displays information as output and detects user touches as input. A standard monitor normally provides output only.',
                    ],
                    [
                        'answer' => 'A monitor requires a digitizer driver, while a touchscreen needs no software drivers.',
                        'is_correct' => false,
                        'explanation' => 'Touchscreens commonly require appropriate drivers or operating-system support to interpret touch input.',
                    ],
                    [
                        'answer' => 'A touchscreen cannot display raster images, whereas a monitor can.',
                        'is_correct' => false,
                        'explanation' => 'Touchscreens can display raster images just like conventional monitors.',
                    ],
                ],
            ],

            [
                'question' => 'Consider the following statements regarding Plotters: 1. Plotters use continuous line-drawing pens to produce high-precision vector graphics, engineering drawings, and blueprints. 2. Plotters belong to the family of optical scanning input devices. Which of the statements given above is/are correct?',
                'options' => [
                    [
                        'answer' => '1 only',
                        'is_correct' => true,
                        'explanation' => 'Traditional plotters are output devices used to produce precise drawings, diagrams, engineering designs, and blueprints. They are not optical scanning input devices.',
                    ],
                    [
                        'answer' => '2 only',
                        'is_correct' => false,
                        'explanation' => 'Plotters are output devices rather than optical scanning input devices.',
                    ],
                    [
                        'answer' => 'Both 1 and 2',
                        'is_correct' => false,
                        'explanation' => 'Only statement 1 is correct because plotters are output devices.',
                    ],
                    [
                        'answer' => 'Neither 1 nor 2',
                        'is_correct' => false,
                        'explanation' => 'Statement 1 correctly describes traditional plotters.',
                    ],
                ],
            ],

            [
                'question' => 'During Biometric Verification at a bank counter, a fingerprint sensor captures the ridge patterns of a customer\'s finger. What is the exact role of the sensor hardware during this process?',
                'options' => [
                    [
                        'answer' => 'It converts analog biological measurements into digital data for software matching.',
                        'is_correct' => true,
                        'explanation' => 'The fingerprint sensor captures physical ridge characteristics and converts the sensed information into digital data that software can analyze and compare.',
                    ],
                    [
                        'answer' => 'It directly queries the database server to approve transaction clearance.',
                        'is_correct' => false,
                        'explanation' => 'Database querying and transaction authorization are software or system-level functions, not the primary role of the sensor hardware.',
                    ],
                    [
                        'answer' => 'It executes the encryption algorithm inside the printer memory.',
                        'is_correct' => false,
                        'explanation' => 'Fingerprint sensors are responsible for capturing biometric information rather than executing printer-based encryption algorithms.',
                    ],
                    [
                        'answer' => 'It acts as an output interface displaying match probability score.',
                        'is_correct' => false,
                        'explanation' => 'The sensor primarily captures biometric input. Displaying a match result is handled by another user-interface component.',
                    ],
                ],
            ],

            [
                'question' => 'Which technology is primarily used by Public Service Examinations (Loksewa Aayog) to automatically evaluate objective answer sheets containing shaded oval marks?',
                'options' => [
                    [
                        'answer' => 'Optical Character Recognition (OCR)',
                        'is_correct' => false,
                        'explanation' => 'OCR recognizes printed or handwritten characters rather than detecting shaded answer bubbles.',
                    ],
                    [
                        'answer' => 'Optical Mark Recognition (OMR)',
                        'is_correct' => true,
                        'explanation' => 'OMR detects marked or shaded areas on specially designed forms and is commonly used to evaluate objective examination answer sheets.',
                    ],
                    [
                        'answer' => 'Barcode Reader (BCR)',
                        'is_correct' => false,
                        'explanation' => 'Barcode readers identify encoded barcode patterns rather than shaded answer choices.',
                    ],
                    [
                        'answer' => 'Magnetic Stripe Reader (MSR)',
                        'is_correct' => false,
                        'explanation' => 'Magnetic stripe readers retrieve information encoded magnetically on cards.',
                    ],
                ],
            ],

            [
                'question' => 'What is the correct execution order when a user application program requests to read data from a disk drive?',
                'options' => [
                    [
                        'answer' => 'Device Driver → Application Program → Operating System Kernel → Disk Hardware',
                        'is_correct' => false,
                        'explanation' => 'The application initiates the request before the operating system and device driver process the hardware operation.',
                    ],
                    [
                        'answer' => 'Application Program → System Call → OS Kernel → Device Driver → Disk Hardware',
                        'is_correct' => true,
                        'explanation' => 'The application requests the operation through a system call. The kernel handles the request and communicates with the disk through the appropriate device driver.',
                    ],
                    [
                        'answer' => 'Disk Hardware → Device Driver → System Call → Application Program',
                        'is_correct' => false,
                        'explanation' => 'This reverses the normal direction of an application-initiated I/O request.',
                    ],
                    [
                        'answer' => 'OS Kernel → Application Program → Device Driver → Disk Hardware',
                        'is_correct' => false,
                        'explanation' => 'The application normally initiates the request, which then enters the operating system through a system call.',
                    ],
                ],
            ],

            [
                'question' => 'Which type of I/O request mechanism causes the calling process to enter a Waiting/Blocked state until the requested I/O operation completely finishes?',
                'options' => [
                    [
                        'answer' => 'Asynchronous Non-blocking I/O',
                        'is_correct' => false,
                        'explanation' => 'Non-blocking I/O allows the calling process to continue execution without waiting for the complete I/O operation.',
                    ],
                    [
                        'answer' => 'Synchronous Blocking I/O',
                        'is_correct' => true,
                        'explanation' => 'In synchronous blocking I/O, the calling process waits or becomes blocked until the requested I/O operation completes.',
                    ],
                    [
                        'answer' => 'Polled Interrupt-driven I/O',
                        'is_correct' => false,
                        'explanation' => 'Polling and interrupts describe mechanisms for detecting I/O events and do not specifically define the blocking behavior described.',
                    ],
                    [
                        'answer' => 'Memory-Mapped Virtual I/O',
                        'is_correct' => false,
                        'explanation' => 'Memory-mapped I/O describes how I/O registers are addressed and does not inherently mean that the calling process must block.',
                    ],
                ],
            ],

            [
                'question' => 'In Programmed I/O (Polling), how does the CPU determine if an I/O device is ready to transfer data?',
                'options' => [
                    [
                        'answer' => 'The device raises an explicit hardware interrupt signal line on the bus.',
                        'is_correct' => false,
                        'explanation' => 'That describes interrupt-driven I/O rather than programmed I/O polling.',
                    ],
                    [
                        'answer' => 'The DMA controller sends a signal to the CPU cache.',
                        'is_correct' => false,
                        'explanation' => 'DMA is a separate mechanism for transferring data directly between devices and memory.',
                    ],
                    [
                        'answer' => 'The CPU continuously loops and polls the status register of the device controller.',
                        'is_correct' => true,
                        'explanation' => 'In polling, the CPU repeatedly reads the device controller status register until it determines that the device is ready.',
                    ],
                    [
                        'answer' => 'The Operating System schedules a timer interrupt every 10 milliseconds.',
                        'is_correct' => false,
                        'explanation' => 'Polling does not fundamentally depend on a fixed timer interrupt interval.',
                    ],
                ],
            ],

            [
                'question' => 'Why is Direct Memory Access (DMA) preferred over Interrupt-Driven I/O for high-speed data transfers such as hard disk or gigabit Ethernet transfer?',
                'options' => [
                    [
                        'answer' => 'DMA eliminates the physical memory bus entirely.',
                        'is_correct' => false,
                        'explanation' => 'DMA actually uses the system memory bus to transfer data between I/O devices and memory.',
                    ],
                    [
                        'answer' => 'DMA enables bulk data transfer directly between I/O device and main memory without invoking CPU interrupt overhead for every single byte.',
                        'is_correct' => true,
                        'explanation' => 'DMA transfers blocks of data directly between an I/O device and main memory, greatly reducing CPU involvement and interrupt overhead.',
                    ],
                    [
                        'answer' => 'DMA forces the CPU to execute instructions in kernel mode faster.',
                        'is_correct' => false,
                        'explanation' => 'DMA does not increase the CPU execution speed or specifically accelerate kernel-mode instructions.',
                    ],
                    [
                        'answer' => 'DMA processes I/O requests without requiring a device driver.',
                        'is_correct' => false,
                        'explanation' => 'Operating systems still use device drivers to configure and manage DMA-capable hardware.',
                    ],
                ],
            ],

            [
                'question' => 'A Device Driver is best defined as:',
                'options' => [
                    [
                        'answer' => 'A hardware chip mounted on the motherboard to speed up graphics processing.',
                        'is_correct' => false,
                        'explanation' => 'A device driver is software, not a hardware graphics-processing chip.',
                    ],
                    [
                        'answer' => 'Specialized software that acts as a translator between the Operating System and specific hardware peripherals.',
                        'is_correct' => true,
                        'explanation' => 'A device driver provides the software interface that allows the operating system to communicate with and control specific hardware.',
                    ],
                    [
                        'answer' => 'An application program that scans disk drives for malware.',
                        'is_correct' => false,
                        'explanation' => 'Antivirus software performs malware scanning; it is not a device driver.',
                    ],
                    [
                        'answer' => 'A firmware component stored inside the CPU register.',
                        'is_correct' => false,
                        'explanation' => 'Device drivers are generally software modules stored in system storage and loaded into memory as needed.',
                    ],
                ],
            ],

            [
                'question' => 'Which set of registers is typically contained within a standard I/O Device Controller interface?',
                'options' => [
                    [
                        'answer' => 'Data Register, Status Register, Control Register',
                        'is_correct' => true,
                        'explanation' => 'A typical I/O controller provides data registers for transferring data, status registers for reporting device conditions, and control registers for issuing commands or configuration settings.',
                    ],
                    [
                        'answer' => 'Program Counter, Instruction Register, Accumulator',
                        'is_correct' => false,
                        'explanation' => 'These are CPU-related registers rather than the standard register set of an I/O device controller.',
                    ],
                    [
                        'answer' => 'Base Register, Limit Register, Segment Register',
                        'is_correct' => false,
                        'explanation' => 'These registers are associated with memory management or address translation rather than standard I/O controllers.',
                    ],
                    [
                        'answer' => 'Stack Pointer, Index Register, Status Register',
                        'is_correct' => false,
                        'explanation' => 'Stack pointer and index registers are CPU registers and are not the standard I/O controller interface set.',
                    ],
                ],
            ],

            [
                'question' => 'In Memory-Mapped I/O, how does the CPU address I/O ports compared to physical memory locations?',
                'options' => [
                    [
                        'answer' => 'Special CPU instructions like IN and OUT are required to access I/O ports.',
                        'is_correct' => false,
                        'explanation' => 'IN and OUT are associated with isolated or port-mapped I/O on architectures that support such instructions.',
                    ],
                    [
                        'answer' => 'I/O registers share the same address space as RAM, using standard memory access instructions such as MOV or LOAD.',
                        'is_correct' => true,
                        'explanation' => 'Memory-mapped I/O assigns I/O registers addresses within the normal memory address space, allowing standard memory instructions to access them.',
                    ],
                    [
                        'answer' => 'Memory-Mapped I/O bypasses the system bus entirely using dedicated I/O lines.',
                        'is_correct' => false,
                        'explanation' => 'Memory-mapped I/O normally uses the system address, data, and control pathways used for memory operations.',
                    ],
                    [
                        'answer' => 'Memory-Mapped I/O can only be used by secondary storage devices, not keyboards.',
                        'is_correct' => false,
                        'explanation' => 'Memory-mapped I/O can be used by many types of peripherals, including keyboards and other input/output devices.',
                    ],
                ],
            ],

            [
                'question' => 'What primary function does an I/O Port serve in computer architecture?',
                'options' => [
                    [
                        'answer' => 'It provides a physical or logical interface point through which data is transferred between CPU/memory and peripheral devices.',
                        'is_correct' => true,
                        'explanation' => 'An I/O port provides an interface through which the processor and peripheral devices exchange data, status information, or control commands.',
                    ],
                    [
                        'answer' => 'It increases the physical clock frequency of the CPU cores.',
                        'is_correct' => false,
                        'explanation' => 'I/O ports do not increase CPU clock frequency.',
                    ],
                    [
                        'answer' => 'It stores permanent system boot instructions like BIOS/UEFI.',
                        'is_correct' => false,
                        'explanation' => 'BIOS or UEFI firmware is stored in non-volatile firmware memory rather than an I/O port.',
                    ],
                    [
                        'answer' => 'It acts as an internal cooling system for system RAM.',
                        'is_correct' => false,
                        'explanation' => 'I/O ports provide communication interfaces and have no cooling function.',
                    ],
                ],
            ],

            [
                'question' => 'What happens when an I/O device controller raises a Hardware Interrupt line while the CPU is executing a user program?',
                'options' => [
                    [
                        'answer' => 'The CPU immediately terminates the running user program and shuts down.',
                        'is_correct' => false,
                        'explanation' => 'A hardware interrupt does not normally terminate the system or running program permanently.',
                    ],
                    [
                        'answer' => 'The CPU suspends execution of the current process, saves its state, and transfers control to the Interrupt Service Routine (ISR).',
                        'is_correct' => true,
                        'explanation' => 'The CPU responds to an accepted interrupt by preserving the necessary execution context and transferring control to the appropriate interrupt service routine.',
                    ],
                    [
                        'answer' => 'The CPU ignores the signal until the application program voluntarily finishes.',
                        'is_correct' => false,
                        'explanation' => 'Hardware interrupts are specifically designed to allow devices to request CPU attention without waiting for the current application to finish.',
                    ],
                    [
                        'answer' => 'The device driver formatting gets erased from memory.',
                        'is_correct' => false,
                        'explanation' => 'Interrupt handling does not erase device driver code from memory.',
                    ],
                ],
            ],

            [
                'question' => 'Which of the following is an advantage of Isolated (Port-Mapped) I/O over Memory-Mapped I/O?',
                'options' => [
                    [
                        'answer' => 'It simplifies assembly programming by treating I/O devices like RAM locations.',
                        'is_correct' => false,
                        'explanation' => 'Treating I/O devices like ordinary memory locations is an advantage of memory-mapped I/O.',
                    ],
                    [
                        'answer' => 'It preserves the valuable primary memory (RAM) address space by placing I/O ports in a completely separate I/O address space.',
                        'is_correct' => true,
                        'explanation' => 'Port-mapped I/O uses a separate I/O address space, preserving the processor\'s normal memory address space for RAM and other memory.',
                    ],
                    [
                        'answer' => 'It requires no hardware decoder circuits on the system bus.',
                        'is_correct' => false,
                        'explanation' => 'Port-mapped I/O still requires appropriate hardware logic to identify and access I/O ports.',
                    ],
                    [
                        'answer' => 'It eliminates the need for status registers in peripheral controllers.',
                        'is_correct' => false,
                        'explanation' => 'I/O controllers still require status information regardless of whether port-mapped or memory-mapped addressing is used.',
                    ],
                ],
            ],

            [
                'question' => 'Which OS management function is responsible for allocation, deallocation, tracking free memory spaces, and swapping processes between RAM and virtual disk space?',
                'options' => [
                    [
                        'answer' => 'Process Management',
                        'is_correct' => false,
                        'explanation' => 'Process management handles process creation, scheduling, synchronization, and termination.',
                    ],
                    [
                        'answer' => 'Memory Management',
                        'is_correct' => true,
                        'explanation' => 'Memory management allocates and frees memory, tracks memory usage, handles virtual memory, and manages swapping or paging.',
                    ],
                    [
                        'answer' => 'File Management',
                        'is_correct' => false,
                        'explanation' => 'File management handles files, directories, storage organization, and access permissions.',
                    ],
                    [
                        'answer' => 'Security Management',
                        'is_correct' => false,
                        'explanation' => 'Security management controls authentication, authorization, protection, and other security policies.',
                    ],
                ],
            ],

            [
                'question' => 'When an Operating System switches CPU execution from one process to another process, saving the state of the old process and loading the saved state for the new process, this operation is called:',
                'options' => [
                    [
                        'answer' => 'Spooling',
                        'is_correct' => false,
                        'explanation' => 'Spooling temporarily queues data, commonly for slow peripheral devices such as printers.',
                    ],
                    [
                        'answer' => 'Context Switching',
                        'is_correct' => true,
                        'explanation' => 'Context switching saves the CPU state of the currently running process and restores the saved state of another process.',
                    ],
                    [
                        'answer' => 'Thrashing',
                        'is_correct' => false,
                        'explanation' => 'Thrashing occurs when excessive paging or swapping consumes significant system resources and reduces useful CPU work.',
                    ],
                    [
                        'answer' => 'Paging',
                        'is_correct' => false,
                        'explanation' => 'Paging is a memory-management technique that divides memory into fixed-size pages and frames.',
                    ],
                ],
            ],

            [
                'question' => 'What is the main purpose of SPOOLING (Simultaneous Peripheral Operations On-Line) in operating systems?',
                'options' => [
                    [
                        'answer' => 'To encrypt financial files transferred across banking networks.',
                        'is_correct' => false,
                        'explanation' => 'Encryption protects information confidentiality and is unrelated to the primary purpose of spooling.',
                    ],
                    [
                        'answer' => 'To act as a temporary buffer on disk so that slow output devices like printers can receive print jobs without stalling fast CPU applications.',
                        'is_correct' => true,
                        'explanation' => 'Spooling stores jobs in a queue, commonly on disk, allowing fast applications to continue while a slower peripheral processes the queued work.',
                    ],
                    [
                        'answer' => 'To compile high-level programming code into machine code.',
                        'is_correct' => false,
                        'explanation' => 'Compilers translate source code into machine code or another intermediate representation.',
                    ],
                    [
                        'answer' => 'To balance network bandwidth between two remote servers.',
                        'is_correct' => false,
                        'explanation' => 'Network load balancing manages traffic distribution and is unrelated to operating-system spooling.',
                    ],
                ],
            ],

            [
                'question' => 'Which function of the Operating System is continuously active to ensure system stability by monitoring hardware/software failures such as parity errors, memory faults, arithmetic overflows, or missing paper in a printer and taking corrective action?',
                'options' => [
                    [
                        'answer' => 'Resource Allocation',
                        'is_correct' => false,
                        'explanation' => 'Resource allocation determines how system resources such as CPU time, memory, and devices are assigned to processes.',
                    ],
                    [
                        'answer' => 'Error Detection and Handling',
                        'is_correct' => true,
                        'explanation' => 'The operating system detects hardware and software errors and takes appropriate corrective or recovery actions to maintain system reliability.',
                    ],
                    [
                        'answer' => 'Accounting',
                        'is_correct' => false,
                        'explanation' => 'Accounting tracks resource usage by users or processes for monitoring, reporting, or billing purposes.',
                    ],
                    [
                        'answer' => 'Job Scheduling',
                        'is_correct' => false,
                        'explanation' => 'Job scheduling determines when jobs or processes should receive system resources rather than primarily handling hardware and software errors.',
                    ],
                ],
            ],

            [
                'question' => 'Which OS function manages directory structures, file access permissions (Read/Write/Execute), and mapping logical files onto physical storage sectors?',
                'options' => [
                    [
                        'answer' => 'Device Management',
                        'is_correct' => false,
                        'explanation' => 'Device management controls and coordinates hardware devices and their associated drivers.',
                    ],
                    [
                        'answer' => 'Protection Management',
                        'is_correct' => false,
                        'explanation' => 'Protection management controls access to system resources but does not encompass the complete management of files and directories.',
                    ],
                    [
                        'answer' => 'File Management',
                        'is_correct' => true,
                        'explanation' => 'File management handles file creation, deletion, organization, permissions, directories, and mapping logical files to physical storage.',
                    ],
                    [
                        'answer' => 'System Call Interface',
                        'is_correct' => false,
                        'explanation' => 'The system call interface provides a controlled mechanism for applications to request operating-system services.',
                    ],
                ],
            ],

            [
                'question' => 'When an OS executes a program that requires more memory than the physically installed RAM in the system, it uses:',
                'options' => [
                    [
                        'answer' => 'Direct Memory Access',
                        'is_correct' => false,
                        'explanation' => 'DMA is an I/O data-transfer mechanism and does not expand the apparent memory available to processes.',
                    ],
                    [
                        'answer' => 'Virtual Memory',
                        'is_correct' => true,
                        'explanation' => 'Virtual memory allows the operating system to provide processes with an address space larger than physical RAM by using secondary storage as backing storage.',
                    ],
                    [
                        'answer' => 'Cache Coherence',
                        'is_correct' => false,
                        'explanation' => 'Cache coherence ensures consistency among multiple CPU caches and is unrelated to expanding available memory.',
                    ],
                    [
                        'answer' => 'Read-Only Memory',
                        'is_correct' => false,
                        'explanation' => 'ROM is non-volatile memory used primarily for firmware and does not provide additional working memory for applications.',
                    ],
                ],
            ],

            [
                'question' => 'What is the core, central component of an Operating System that resides permanently in main memory and directly manages system hardware, processes, and memory?',
                'options' => [
                    [
                        'answer' => 'Shell',
                        'is_correct' => false,
                        'explanation' => 'The shell provides a command or user interface but is not the central component responsible for managing all hardware resources.',
                    ],
                    [
                        'answer' => 'Kernel',
                        'is_correct' => true,
                        'explanation' => 'The kernel is the core component of the operating system that manages hardware resources, processes, memory, and system calls.',
                    ],
                    [
                        'answer' => 'Text Editor',
                        'is_correct' => false,
                        'explanation' => 'A text editor is an application used to create or modify text files.',
                    ],
                    [
                        'answer' => 'Compiler',
                        'is_correct' => false,
                        'explanation' => 'A compiler translates source code into machine code or another executable representation and is not the OS core.',
                    ],
                ],
            ],

            [
                'question' => 'Which OS component acts as the Command Interpreter that accepts user commands from the command line or GUI and passes them to the kernel for execution?',
                'options' => [
                    [
                        'answer' => 'System Call Interface',
                        'is_correct' => false,
                        'explanation' => 'The system call interface allows programs to request kernel services but is not itself the command interpreter.',
                    ],
                    [
                        'answer' => 'Device Driver',
                        'is_correct' => false,
                        'explanation' => 'Device drivers provide communication between the operating system and specific hardware devices.',
                    ],
                    [
                        'answer' => 'Shell',
                        'is_correct' => true,
                        'explanation' => 'A shell acts as a command interpreter, accepting user commands and initiating the appropriate programs or operating-system services.',
                    ],
                    [
                        'answer' => 'BIOS',
                        'is_correct' => false,
                        'explanation' => 'BIOS or UEFI firmware initializes hardware and starts the boot process rather than serving as the normal command interpreter.',
                    ],
                ],
            ],

            [
                'question' => 'How does a user application program request a privileged service such as writing to a file or creating a process from the Operating System kernel?',
                'options' => [
                    [
                        'answer' => 'By invoking a System Call',
                        'is_correct' => true,
                        'explanation' => 'A system call provides a controlled interface through which a user program requests services from the operating system kernel.',
                    ],
                    [
                        'answer' => 'By directly accessing physical hardware registers in User Mode',
                        'is_correct' => false,
                        'explanation' => 'User-mode programs generally cannot directly perform privileged hardware operations and must use operating-system interfaces.',
                    ],
                    [
                        'answer' => 'By modifying the CPU instruction register directly',
                        'is_correct' => false,
                        'explanation' => 'Application programs do not directly modify CPU control registers to request normal operating-system services.',
                    ],
                    [
                        'answer' => 'By calling a Shell command line utility directly inside memory',
                        'is_correct' => false,
                        'explanation' => 'Shell commands are not the fundamental interface used by application programs to request privileged kernel services.',
                    ],
                ],
            ],

            [
                'question' => 'Disk Defragmenter, System Restore, Disk Cleanup, and Task Manager are examples of which OS component category?',
                'options' => [
                    [
                        'answer' => 'Microkernel primitives',
                        'is_correct' => false,
                        'explanation' => 'Microkernel primitives are minimal kernel-level functions and are not general system utilities.',
                    ],
                    [
                        'answer' => 'System Utilities / System Programs',
                        'is_correct' => true,
                        'explanation' => 'These tools provide useful system-management and maintenance functions and are classified as system utilities or system programs.',
                    ],
                    [
                        'answer' => 'Hardware Abstraction Layer',
                        'is_correct' => false,
                        'explanation' => 'The hardware abstraction layer provides a standardized software interface to hardware rather than user-facing maintenance utilities.',
                    ],
                    [
                        'answer' => 'Bootloaders',
                        'is_correct' => false,
                        'explanation' => 'Bootloaders initialize the system and load the operating system kernel during startup.',
                    ],
                ],
            ],

            [
                'question' => 'What is the main architectural difference between a Monolithic Kernel and a Microkernel?',
                'options' => [
                    [
                        'answer' => 'A Monolithic Kernel runs entirely in user mode, whereas a Microkernel runs in hypervisor mode.',
                        'is_correct' => false,
                        'explanation' => 'Kernel components normally execute with privileged access, while user applications execute in user mode.',
                    ],
                    [
                        'answer' => 'A Monolithic Kernel executes almost all OS services in a single large kernel space, while a Microkernel keeps only minimal functions in kernel space.',
                        'is_correct' => true,
                        'explanation' => 'Monolithic kernels place many operating-system services inside kernel space, whereas microkernels minimize kernel responsibilities and move many services to user space.',
                    ],
                    [
                        'answer' => 'A Microkernel is larger in file size than a Monolithic kernel.',
                        'is_correct' => false,
                        'explanation' => 'Kernel architecture is not defined simply by executable file size.',
                    ],
                    [
                        'answer' => 'A Monolithic Kernel cannot support multi-threading.',
                        'is_correct' => false,
                        'explanation' => 'Monolithic kernels can support multithreading and multiprocessing.',
                    ],
                ],
            ],

            [
                'question' => 'Which OS component maintains data structures like the Process Control Block (PCB) to keep track of process execution state, PID, registers, and memory boundaries?',
                'options' => [
                    [
                        'answer' => 'User Interface Manager',
                        'is_correct' => false,
                        'explanation' => 'The user interface manager handles interaction with users and does not primarily maintain process-control structures.',
                    ],
                    [
                        'answer' => 'Process Management System / Scheduler',
                        'is_correct' => true,
                        'explanation' => 'Process management maintains process-related structures such as PCBs and coordinates process scheduling, execution, suspension, and termination.',
                    ],
                    [
                        'answer' => 'File Allocation Table',
                        'is_correct' => false,
                        'explanation' => 'The File Allocation Table manages file storage allocation information rather than process execution state.',
                    ],
                    [
                        'answer' => 'Device Controller',
                        'is_correct' => false,
                        'explanation' => 'A device controller manages communication with a specific hardware device and does not maintain PCBs.',
                    ],
                ],
            ],

            [
                'question' => 'Which type of Operating System executes similar jobs in batches without human interactive intervention during job execution?',
                'options' => [
                    [
                        'answer' => 'Time-Sharing OS',
                        'is_correct' => false,
                        'explanation' => 'A time-sharing operating system is designed to provide interactive access to multiple users or processes through CPU time slicing.',
                    ],
                    [
                        'answer' => 'Real-Time OS',
                        'is_correct' => false,
                        'explanation' => 'A real-time operating system is designed to meet timing constraints for processing events.',
                    ],
                    [
                        'answer' => 'Batch Operating System',
                        'is_correct' => true,
                        'explanation' => 'A batch operating system collects similar jobs and processes them in batches without requiring continuous user interaction during execution.',
                    ],
                    [
                        'answer' => 'Distributed OS',
                        'is_correct' => false,
                        'explanation' => 'A distributed operating system coordinates resources across multiple networked computers and presents an integrated system environment.',
                    ],
                ],
            ],

            [
                'question' => 'What is the primary operational distinction between Multiprogramming and Multitasking (Time-sharing) operating systems?',
                'options' => [
                    [
                        'answer' => 'Multiprogramming allows multiple CPUs; Multitasking allows only one CPU.',
                        'is_correct' => false,
                        'explanation' => 'Multiprogramming and multitasking describe CPU scheduling and utilization techniques, not the number of physical CPUs.',
                    ],
                    [
                        'answer' => 'Multiprogramming keeps multiple jobs in memory to keep the CPU busy, switching primarily when a running job waits for I/O, whereas Multitasking uses rapid CPU time-slicing for interactive execution.',
                        'is_correct' => true,
                        'explanation' => 'Multiprogramming aims to maximize CPU utilization by switching among jobs, while time-sharing emphasizes responsive interactive execution through frequent time slices.',
                    ],
                    [
                        'answer' => 'Multitasking does not support secondary storage memory.',
                        'is_correct' => false,
                        'explanation' => 'Multitasking operating systems can use secondary storage and virtual memory.',
                    ],
                    [
                        'answer' => 'Multiprogramming is used only in embedded microcontrollers.',
                        'is_correct' => false,
                        'explanation' => 'Multiprogramming has been used in many general-purpose operating systems and is not restricted to embedded systems.',
                    ],
                ],
            ],

            [
                'question' => 'Air Traffic Control systems, Anti-lock Braking Systems (ABS), and Medical Pacemakers require an OS that guarantees execution within strict, fixed time constraints. Which type of OS is mandatory here?',
                'options' => [
                    [
                        'answer' => 'Soft Real-Time OS',
                        'is_correct' => false,
                        'explanation' => 'Soft real-time systems prioritize deadlines but occasional deadline misses may be tolerated.',
                    ],
                    [
                        'answer' => 'Hard Real-Time OS',
                        'is_correct' => true,
                        'explanation' => 'Hard real-time systems require critical operations to complete within specified deadlines because missing deadlines can have serious consequences.',
                    ],
                    [
                        'answer' => 'Distributed Time-Sharing OS',
                        'is_correct' => false,
                        'explanation' => 'Time-sharing focuses on interactive resource sharing and does not guarantee strict deterministic deadlines.',
                    ],
                    [
                        'answer' => 'Network Operating System',
                        'is_correct' => false,
                        'explanation' => 'A network operating system primarily provides services and resource sharing over a network and does not inherently guarantee hard real-time deadlines.',
                    ],
                ],
            ],

            [
                'question' => 'An operating system that runs across multiple independent physical computers connected via a network, but presents a single, unified system view to the user, is called a:',
                'options' => [
                    [
                        'answer' => 'Network Operating System (NOS)',
                        'is_correct' => false,
                        'explanation' => 'A network operating system provides network services but generally allows users to recognize and manage individual networked machines.',
                    ],
                    [
                        'answer' => 'Distributed Operating System (DOS)',
                        'is_correct' => true,
                        'explanation' => 'A distributed operating system coordinates multiple networked computers and attempts to present their resources as a unified system to users.',
                    ],
                    [
                        'answer' => 'Multi-user Batch OS',
                        'is_correct' => false,
                        'explanation' => 'A multi-user batch system does not necessarily provide a unified distributed computing environment.',
                    ],
                    [
                        'answer' => 'Embedded Operating System',
                        'is_correct' => false,
                        'explanation' => 'An embedded operating system is designed for dedicated devices rather than presenting multiple networked computers as one unified system.',
                    ],
                ],
            ],

            [
                'question' => 'An Operating System installed inside appliances like Smart ATMs, washing machines, router firmware, and automotive control units is classified as:',
                'options' => [
                    [
                        'answer' => 'Embedded Operating System',
                        'is_correct' => true,
                        'explanation' => 'Embedded operating systems are designed for dedicated-purpose devices and typically operate with specific hardware and resource constraints.',
                    ],
                    [
                        'answer' => 'Multi-tenant Cloud OS',
                        'is_correct' => false,
                        'explanation' => 'Cloud operating environments manage virtualized or cloud resources rather than dedicated appliance hardware.',
                    ],
                    [
                        'answer' => 'Batch Processing System',
                        'is_correct' => false,
                        'explanation' => 'Batch systems process groups of jobs and are not defined by being installed in dedicated appliances.',
                    ],
                    [
                        'answer' => 'Mainframe OS',
                        'is_correct' => false,
                        'explanation' => 'Mainframe operating systems are designed for large enterprise computers rather than embedded appliance controllers.',
                    ],
                ],
            ],

            [
                'question' => 'Which term describes an OS capability where two or more physical CPUs or cores reside on the same motherboard and simultaneously execute instructions in parallel?',
                'options' => [
                    [
                        'answer' => 'Multiprogramming',
                        'is_correct' => false,
                        'explanation' => 'Multiprogramming keeps multiple programs available so the CPU can switch among them, but it does not specifically mean multiple physical processors executing in parallel.',
                    ],
                    [
                        'answer' => 'Multithreading',
                        'is_correct' => false,
                        'explanation' => 'Multithreading allows multiple threads within processes to execute concurrently, but the term does not specifically mean multiple physical CPUs or cores.',
                    ],
                    [
                        'answer' => 'Multiprocessing',
                        'is_correct' => true,
                        'explanation' => 'Multiprocessing refers to using two or more processors or CPU cores to execute instructions concurrently and in parallel.',
                    ],
                    [
                        'answer' => 'Multitasking',
                        'is_correct' => false,
                        'explanation' => 'Multitasking allows multiple tasks to make progress through CPU scheduling and does not specifically require multiple physical CPUs or cores.',
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
