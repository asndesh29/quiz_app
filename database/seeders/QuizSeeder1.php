<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder1 extends Seeder
{
    public function run(): void
    {


        $quiz = Quiz::create([
            'title' => 'Weekly Booster 1',
            'description' => 'Computer Fundamentals, Hardware, CPU Architecture, Memory, Storage, Motherboard and ICT in Nepal MCQs.',
        ]);

        $questions = [
            [
                'question' => 'The first computer introduced in Nepal was:',
                'options' => [
                    [
                        'answer' => 'ICL 2950/10',
                        'is_correct' => true,
                        'explanation' => 'ICL 2950/10 is generally recognized as the first computer introduced in Nepal. It was brought for census data processing.',
                    ],
                    [
                        'answer' => 'IBM 1401',
                        'is_correct' => false,
                        'explanation' => 'IBM 1401 was an important second-generation computer, but it was not the first computer introduced in Nepal.',
                    ],
                    [
                        'answer' => 'Apple II',
                        'is_correct' => false,
                        'explanation' => 'Apple II was a personal computer introduced much later and was not the first computer used in Nepal.',
                    ],
                    [
                        'answer' => 'Facit',
                        'is_correct' => false,
                        'explanation' => 'Facit was an electronic calculating machine used for census-related work, but it is not generally identified as the first computer introduced in Nepal.',
                    ],
                ],
            ],

            [
                'question' => "In which year was the electronic calculating machine 'Facit' used for census in Nepal?",
                'options' => [
                    [
                        'answer' => '2018 B.S.',
                        'is_correct' => true,
                        'explanation' => 'The Facit electronic calculating machine was used in Nepal for census-related calculations in 2018 B.S.',
                    ],
                    [
                        'answer' => '2028 B.S.',
                        'is_correct' => false,
                        'explanation' => '2028 B.S. is not the year generally associated with the use of Facit for census calculations in Nepal.',
                    ],
                    [
                        'answer' => '2038 B.S.',
                        'is_correct' => false,
                        'explanation' => '2038 B.S. was later than the period when Facit was used for census calculations.',
                    ],
                    [
                        'answer' => '2048 B.S.',
                        'is_correct' => false,
                        'explanation' => '2048 B.S. is not associated with the historical use of Facit in Nepal.',
                    ],
                ],
            ],

            [
                'question' => 'First Internet Banking was launched in Nepal in:',
                'options' => [
                    [
                        'answer' => '2055 B.S.',
                        'is_correct' => false,
                        'explanation' => '2055 B.S. is not generally identified as the year Internet banking was first launched in Nepal.',
                    ],
                    [
                        'answer' => '2061 B.S.',
                        'is_correct' => true,
                        'explanation' => 'Internet banking in Nepal is commonly associated with its introduction around 2061 B.S.',
                    ],
                    [
                        'answer' => '2054 B.S.',
                        'is_correct' => false,
                        'explanation' => '2054 B.S. predates the commonly cited introduction of Internet banking in Nepal.',
                    ],
                    [
                        'answer' => '2075 B.S.',
                        'is_correct' => false,
                        'explanation' => '2075 B.S. is much later than the initial introduction of Internet banking in Nepal.',
                    ],
                ],
            ],

            [
                'question' => 'Which institution introduced the first ATM in Nepal?',
                'options' => [
                    [
                        'answer' => 'Nepal Bank Limited',
                        'is_correct' => false,
                        'explanation' => 'Nepal Bank Limited is a major Nepali bank, but it is not generally credited with introducing the first ATM in Nepal.',
                    ],
                    [
                        'answer' => 'Rastriya Banijya Bank',
                        'is_correct' => false,
                        'explanation' => 'Rastriya Banijya Bank introduced various banking technologies, but it is not generally cited as the first ATM provider.',
                    ],
                    [
                        'answer' => 'Nabil Bank',
                        'is_correct' => false,
                        'explanation' => 'Nabil Bank was an early adopter of electronic banking technologies, but the first ATM is generally credited to Himalayan Bank.',
                    ],
                    [
                        'answer' => 'Himalayan Bank',
                        'is_correct' => true,
                        'explanation' => 'Himalayan Bank is generally credited with introducing the first ATM in Nepal in the mid-1990s.',
                    ],
                ],
            ],

            [
                'question' => 'The official Nagarik App was launched on which date?',
                'options' => [
                    [
                        'answer' => 'Magh 2, 2077 B.S.',
                        'is_correct' => true,
                        'explanation' => 'The Nagarik App was officially launched on Magh 2, 2077 B.S., as a government digital service platform.',
                    ],
                    [
                        'answer' => 'Falgun 7, 2076 B.S.',
                        'is_correct' => false,
                        'explanation' => 'Falgun 7, 2076 B.S. is not the official launch date of the Nagarik App.',
                    ],
                    [
                        'answer' => 'Baishakh 1, 2078 B.S.',
                        'is_correct' => false,
                        'explanation' => 'Baishakh 1, 2078 B.S. is later than the official launch of the Nagarik App.',
                    ],
                    [
                        'answer' => 'Poush 17, 2073 B.S.',
                        'is_correct' => false,
                        'explanation' => 'Poush 17, 2073 B.S. predates the launch of the Nagarik App.',
                    ],
                ],
            ],

            [
                'question' => 'The Government Integrated Data Center (GIDC) is located at:',
                'options' => [
                    [
                        'answer' => 'Harihar Bhawan',
                        'is_correct' => false,
                        'explanation' => 'Harihar Bhawan is a government complex but is not the commonly identified location of the Government Integrated Data Center.',
                    ],
                    [
                        'answer' => 'Singha Durbar',
                        'is_correct' => false,
                        'explanation' => 'Singha Durbar houses many government offices, but the GIDC is located at IT Park, Banepa.',
                    ],
                    [
                        'answer' => 'IT Park Banepa',
                        'is_correct' => true,
                        'explanation' => 'The Government Integrated Data Center is located at the IT Park in Banepa, Kavrepalanchok.',
                    ],
                    [
                        'answer' => 'Pulchowk',
                        'is_correct' => false,
                        'explanation' => 'Pulchowk hosts several government and technology institutions, but it is not the main location identified for GIDC.',
                    ],
                ],
            ],

            [
                'question' => 'ConnectIPS was launched by NCHL for interbank transfers in:',
                'options' => [
                    [
                        'answer' => '2063 B.S.',
                        'is_correct' => false,
                        'explanation' => '2063 B.S. predates the launch of ConnectIPS.',
                    ],
                    [
                        'answer' => '2073 B.S.',
                        'is_correct' => false,
                        'explanation' => '2073 B.S. predates the launch of ConnectIPS as a retail payment platform.',
                    ],
                    [
                        'answer' => '2076 B.S.',
                        'is_correct' => true,
                        'explanation' => 'ConnectIPS was launched by Nepal Clearing House Limited around 2076 B.S. to facilitate interoperable account-to-account payments and transfers.',
                    ],
                    [
                        'answer' => '2065 B.S.',
                        'is_correct' => false,
                        'explanation' => '2065 B.S. is earlier than the launch of ConnectIPS.',
                    ],
                ],
            ],

            [
                'question' => 'NRB implemented Real-Time Gross Settlement (RTGS) in:',
                'options' => [
                    [
                        'answer' => '2061 B.S.',
                        'is_correct' => false,
                        'explanation' => '2061 B.S. predates the implementation of RTGS in Nepal.',
                    ],
                    [
                        'answer' => '2073 B.S.',
                        'is_correct' => false,
                        'explanation' => '2073 B.S. is earlier than the commonly cited implementation period of RTGS in Nepal.',
                    ],
                    [
                        'answer' => '2075 B.S.',
                        'is_correct' => false,
                        'explanation' => '2075 B.S. predates the implementation of RTGS by Nepal Rastra Bank.',
                    ],
                    [
                        'answer' => '2076 B.S.',
                        'is_correct' => true,
                        'explanation' => 'Nepal Rastra Bank implemented the Real-Time Gross Settlement system around 2076 B.S. for high-value and time-critical payments.',
                    ],
                ],
            ],

            [
                'question' => 'What unit is used to measure the processing speed of a supercomputer?',
                'options' => [
                    [
                        'answer' => 'MIPS',
                        'is_correct' => false,
                        'explanation' => 'MIPS means Millions of Instructions Per Second and is used to describe instruction-processing performance, but FLOPS is the standard measure for supercomputer floating-point performance.',
                    ],
                    [
                        'answer' => 'FLOPS',
                        'is_correct' => true,
                        'explanation' => 'FLOPS means Floating-Point Operations Per Second and is widely used to measure the computational performance of supercomputers.',
                    ],
                    [
                        'answer' => 'Hertz',
                        'is_correct' => false,
                        'explanation' => 'Hertz measures frequency, such as CPU clock frequency, rather than overall supercomputer computational performance.',
                    ],
                    [
                        'answer' => 'Clock Cycles',
                        'is_correct' => false,
                        'explanation' => 'Clock cycles represent processor timing events but are not the standard unit for expressing supercomputer processing performance.',
                    ],
                ],
            ],

            [
                'question' => 'What is the full form of AT in the context of computer architecture models?',
                'options' => [
                    [
                        'answer' => 'Advanced Telecommunication',
                        'is_correct' => false,
                        'explanation' => 'Advanced Telecommunication is not the expansion of AT in computer architecture terminology.',
                    ],
                    [
                        'answer' => 'Automatic Technology',
                        'is_correct' => false,
                        'explanation' => 'Automatic Technology is not the standard expansion of AT in this context.',
                    ],
                    [
                        'answer' => 'Advanced Technology',
                        'is_correct' => true,
                        'explanation' => 'AT stands for Advanced Technology. The term is associated with IBM PC/AT architecture and related hardware terminology.',
                    ],
                    [
                        'answer' => 'Array Technology',
                        'is_correct' => false,
                        'explanation' => 'Array Technology is not the standard meaning of AT in computer architecture models.',
                    ],
                ],
            ],

            [
                'question' => "Which system is widely recognized as the world's first commercially successful minicomputer?",
                'options' => [
                    [
                        'answer' => 'Altair 8800',
                        'is_correct' => false,
                        'explanation' => 'The Altair 8800 was an influential early microcomputer but was not the first commercially successful minicomputer.',
                    ],
                    [
                        'answer' => 'DEC PDP-8',
                        'is_correct' => true,
                        'explanation' => 'The DEC PDP-8, introduced by Digital Equipment Corporation in 1965, is widely regarded as the first commercially successful minicomputer.',
                    ],
                    [
                        'answer' => 'CRAY-1',
                        'is_correct' => false,
                        'explanation' => 'CRAY-1 was a pioneering supercomputer rather than a minicomputer.',
                    ],
                    [
                        'answer' => 'IBM 1401',
                        'is_correct' => false,
                        'explanation' => 'IBM 1401 was a successful business computer but was not the first commercially successful minicomputer.',
                    ],
                ],
            ],

            [
                'question' => 'Who is known as the father of supercomputing?',
                'options' => [
                    [
                        'answer' => 'John von Neumann',
                        'is_correct' => false,
                        'explanation' => 'John von Neumann made major contributions to computer architecture but is not generally known as the father of supercomputing.',
                    ],
                    [
                        'answer' => 'Seymour Cray',
                        'is_correct' => true,
                        'explanation' => 'Seymour Cray pioneered high-performance computing and designed several landmark supercomputers, earning recognition as the father of supercomputing.',
                    ],
                    [
                        'answer' => 'Charles Babbage',
                        'is_correct' => false,
                        'explanation' => 'Charles Babbage is known as the father of the computer for his work on the Analytical Engine.',
                    ],
                    [
                        'answer' => 'Alan Turing',
                        'is_correct' => false,
                        'explanation' => 'Alan Turing made foundational contributions to computer science and computing theory but is not specifically known as the father of supercomputing.',
                    ],
                ],
            ],

            [
                'question' => 'A computer designed explicitly for a single user at a time is categorized by size as a:',
                'options' => [
                    [
                        'answer' => 'Mainframe Computer',
                        'is_correct' => false,
                        'explanation' => 'Mainframes are designed to support large numbers of users and process large volumes of data.',
                    ],
                    [
                        'answer' => 'Minicomputer',
                        'is_correct' => false,
                        'explanation' => 'Minicomputers are mid-range systems historically designed to support multiple users.',
                    ],
                    [
                        'answer' => 'Microcomputer',
                        'is_correct' => true,
                        'explanation' => 'Microcomputers are generally designed for individual users and include personal computers such as desktops and laptops.',
                    ],
                    [
                        'answer' => 'Supercomputer',
                        'is_correct' => false,
                        'explanation' => 'Supercomputers are designed for extremely intensive computational workloads rather than ordinary single-user computing.',
                    ],
                ],
            ],

            [
                'question' => 'Which of the following is NOT a characteristic of a Digital Computer?',
                'options' => [
                    [
                        'answer' => 'Continuous signal processing',
                        'is_correct' => true,
                        'explanation' => 'Continuous signal processing is characteristic of analog computers. Digital computers primarily process discrete binary values.',
                    ],
                    [
                        'answer' => 'High storage capacity',
                        'is_correct' => false,
                        'explanation' => 'Modern digital computers can provide very large storage capacities through memory and secondary storage devices.',
                    ],
                    [
                        'answer' => 'Discrete state logic',
                        'is_correct' => false,
                        'explanation' => 'Digital computers use discrete states, commonly represented using binary 0 and 1.',
                    ],
                    [
                        'answer' => 'Stored-program memory',
                        'is_correct' => false,
                        'explanation' => 'Digital computers commonly use stored-program architecture, where instructions and data are stored in memory.',
                    ],
                ],
            ],

            [
                'question' => 'Continuous signal measurement is handled by an Analog unit, which then passes data through an ADC. This entire system is a:',
                'options' => [
                    [
                        'answer' => 'Supercomputer',
                        'is_correct' => false,
                        'explanation' => 'A supercomputer is classified according to computational performance, not the combination of analog and digital processing.',
                    ],
                    [
                        'answer' => 'Digital computer',
                        'is_correct' => false,
                        'explanation' => 'A digital computer processes discrete digital values and does not by definition combine analog measurement with digital processing.',
                    ],
                    [
                        'answer' => 'Hybrid computer',
                        'is_correct' => true,
                        'explanation' => 'A hybrid computer combines analog components for continuous signal measurement with digital components for processing converted data.',
                    ],
                    [
                        'answer' => 'Mainframe computer',
                        'is_correct' => false,
                        'explanation' => 'A mainframe is a high-capacity computer designed for large-scale processing and is not defined by analog-digital integration.',
                    ],
                ],
            ],

            [
                'question' => 'What is a platter in the context of a hard disk drive?',
                'options' => [
                    [
                        'answer' => 'The electronic circuit board that controls the flow of data',
                        'is_correct' => false,
                        'explanation' => 'The electronic circuit board is the HDD controller or PCB, not the platter.',
                    ],
                    [
                        'answer' => 'The mechanical arm that moves the read/write heads',
                        'is_correct' => false,
                        'explanation' => 'The actuator arm moves the read/write heads across the disk surface.',
                    ],
                    [
                        'answer' => 'A circular, rigid disk coated with magnetic material where data is stored',
                        'is_correct' => true,
                        'explanation' => 'A platter is a rigid circular disk with a magnetic coating used to store data in a hard disk drive.',
                    ],
                    [
                        'answer' => 'A temporary memory cache used to speed up data access',
                        'is_correct' => false,
                        'explanation' => 'The HDD cache is a separate memory area and is not the physical platter.',
                    ],
                ],
            ],

            [
                'question' => 'What is a cylinder in hard disk geometry?',
                'options' => [
                    [
                        'answer' => 'A single ring of data on one side of a platter',
                        'is_correct' => false,
                        'explanation' => 'A single circular ring on one platter surface is called a track.',
                    ],
                    [
                        'answer' => 'A wedge-shaped division of a track containing a fixed amount of data',
                        'is_correct' => false,
                        'explanation' => 'A wedge-shaped subdivision of a track is a sector.',
                    ],
                    [
                        'answer' => 'The set of corresponding tracks on all platters stacked vertically',
                        'is_correct' => true,
                        'explanation' => 'A cylinder consists of tracks at the same radius across all recording surfaces of a hard disk.',
                    ],
                    [
                        'answer' => 'The casing that protects the hard drive’s moving parts',
                        'is_correct' => false,
                        'explanation' => 'The protective enclosure houses the drive components but is not called a cylinder.',
                    ],
                ],
            ],

            [
                'question' => 'How many read/write heads are typically used to access data on a single hard disk platter that utilizes both sides?',
                'options' => [
                    [
                        'answer' => 'One',
                        'is_correct' => false,
                        'explanation' => 'A double-sided platter typically has a separate read/write head for each usable recording surface.',
                    ],
                    [
                        'answer' => 'Two',
                        'is_correct' => true,
                        'explanation' => 'A platter using both surfaces typically has one read/write head for each side, giving two heads.',
                    ],
                    [
                        'answer' => 'Four',
                        'is_correct' => false,
                        'explanation' => 'Four heads would normally correspond to two double-sided platters or another configuration, not a single two-sided platter.',
                    ],
                    [
                        'answer' => 'Eight',
                        'is_correct' => false,
                        'explanation' => 'Eight heads would imply a much larger multi-surface configuration and not a single double-sided platter.',
                    ],
                ],
            ],

            [
                'question' => 'If a hard drive has 1024 cylinders, 16 heads, 63 sectors per track, and 512 bytes per sector, what is its approximate storage capacity?',
                'options' => [
                    [
                        'answer' => '256 MB',
                        'is_correct' => false,
                        'explanation' => 'The calculated capacity is approximately 504 MiB, which is closer to 504 MB than 256 MB.',
                    ],
                    [
                        'answer' => '504 MB',
                        'is_correct' => true,
                        'explanation' => 'Capacity = 1024 × 16 × 63 × 512 bytes = 528,482,304 bytes, approximately 504 MiB (commonly rounded to about 504 MB).',
                    ],
                    [
                        'answer' => '1 GB',
                        'is_correct' => false,
                        'explanation' => 'The calculated capacity is approximately half of 1 GiB.',
                    ],
                    [
                        'answer' => '2 GB',
                        'is_correct' => false,
                        'explanation' => 'The calculated capacity is far below 2 GB.',
                    ],
                ],
            ],

            [
                'question' => 'In the context of disk geometry, what is "seek time"?',
                'options' => [
                    [
                        'answer' => 'The time it takes for a full rotation of the disk platter',
                        'is_correct' => false,
                        'explanation' => 'The time associated with a full rotation is related to rotational latency, not seek time.',
                    ],
                    [
                        'answer' => 'The time required to transmit data from the hard drive to the motherboard',
                        'is_correct' => false,
                        'explanation' => 'Data transfer time describes the period required to transfer data after the required location has been reached.',
                    ],
                    [
                        'answer' => 'The time it takes for the read/write head to settle into the correct sector after finding the correct track',
                        'is_correct' => false,
                        'explanation' => 'This description is closer to rotational latency or settling/positioning details after reaching the track.',
                    ],
                    [
                        'answer' => 'The time it takes for the actuator arm to physically position the read/write head over the desired track',
                        'is_correct' => true,
                        'explanation' => 'Seek time is the time required for the actuator mechanism to move the read/write head to the desired track.',
                    ],
                ],
            ],

            [
                'question' => 'Which slots on the motherboard are used to install system memory?',
                'options' => [
                    [
                        'answer' => 'DIMM slots',
                        'is_correct' => true,
                        'explanation' => 'DIMM slots are motherboard sockets designed to hold RAM modules used as system memory.',
                    ],
                    [
                        'answer' => 'PCIe slots',
                        'is_correct' => false,
                        'explanation' => 'PCIe slots are primarily used for expansion cards such as graphics, network, and storage controllers.',
                    ],
                    [
                        'answer' => 'SATA ports',
                        'is_correct' => false,
                        'explanation' => 'SATA ports connect storage devices such as SATA hard drives and SSDs.',
                    ],
                    [
                        'answer' => 'USB ports',
                        'is_correct' => false,
                        'explanation' => 'USB ports connect external peripherals and are not used to install internal system RAM.',
                    ],
                ],
            ],

            [
                'question' => 'What is the primary function of the chipset on a motherboard?',
                'options' => [
                    [
                        'answer' => 'Cool down the system',
                        'is_correct' => false,
                        'explanation' => 'Cooling is handled by heatsinks, fans, liquid cooling systems, and related thermal components.',
                    ],
                    [
                        'answer' => 'Store user files permanently',
                        'is_correct' => false,
                        'explanation' => 'Permanent user files are stored on storage devices such as SSDs and hard drives.',
                    ],
                    [
                        'answer' => 'Control communication between the CPU and other devices',
                        'is_correct' => true,
                        'explanation' => 'The motherboard chipset provides communication and control pathways between the processor and various hardware components and peripherals.',
                    ],
                    [
                        'answer' => 'Supply electrical power to the screen',
                        'is_correct' => false,
                        'explanation' => 'Power is supplied through the power supply and motherboard power circuitry rather than being the primary role of the chipset.',
                    ],
                ],
            ],

            [
                'question' => 'Which expansion slot is most commonly used for modern graphics cards?',
                'options' => [
                    [
                        'answer' => 'PCI slot',
                        'is_correct' => false,
                        'explanation' => 'Conventional PCI is an older expansion interface and is not the standard slot for modern high-performance graphics cards.',
                    ],
                    [
                        'answer' => 'PCIe x16 slot',
                        'is_correct' => true,
                        'explanation' => 'Modern discrete graphics cards commonly use a PCI Express x16 slot because it provides high-bandwidth communication with the system.',
                    ],
                    [
                        'answer' => 'AGP slot',
                        'is_correct' => false,
                        'explanation' => 'AGP was historically used for graphics cards but has been replaced by PCI Express.',
                    ],
                    [
                        'answer' => 'ISA slot',
                        'is_correct' => false,
                        'explanation' => 'ISA is an obsolete expansion bus and is not used for modern graphics cards.',
                    ],
                ],
            ],

            [
                'question' => 'The communication pathway or set of parallel wires used to transfer data between the CPU and memory on a motherboard is called:',
                'options' => [
                    [
                        'answer' => 'Chipset',
                        'is_correct' => false,
                        'explanation' => 'The chipset manages communication among components but is not itself the communication pathway called the system bus.',
                    ],
                    [
                        'answer' => 'Expansion slot',
                        'is_correct' => false,
                        'explanation' => 'An expansion slot provides an interface for installing expansion cards.',
                    ],
                    [
                        'answer' => 'System Bus',
                        'is_correct' => true,
                        'explanation' => 'The system bus is the collection of communication pathways used to transfer data, addresses, and control signals between major computer components.',
                    ],
                    [
                        'answer' => 'Port',
                        'is_correct' => false,
                        'explanation' => 'A port is a connection interface, usually for peripheral devices, and is not the general internal CPU-memory communication pathway.',
                    ],
                ],
            ],

            [
                'question' => 'In computer hardware, what is the full form of the POST sequence executed by the BIOS during startup?',
                'options' => [
                    [
                        'answer' => 'Program On System Test',
                        'is_correct' => false,
                        'explanation' => 'Program On System Test is not the correct expansion of POST.',
                    ],
                    [
                        'answer' => 'Power-On Self-Test',
                        'is_correct' => true,
                        'explanation' => 'POST stands for Power-On Self-Test and checks essential hardware components during system startup.',
                    ],
                    [
                        'answer' => 'Primary Operating System Test',
                        'is_correct' => false,
                        'explanation' => 'POST occurs before the operating system is normally loaded and does not mean Primary Operating System Test.',
                    ],
                    [
                        'answer' => 'Process Optimization System Tool',
                        'is_correct' => false,
                        'explanation' => 'Process Optimization System Tool is not the meaning of POST.',
                    ],
                ],
            ],

            [
                'question' => 'The main integrated circuit chip on the motherboard that acts as a traffic controller between the CPU, RAM, and storage devices is known as the:',
                'options' => [
                    [
                        'answer' => 'Microprocessor',
                        'is_correct' => false,
                        'explanation' => 'The microprocessor is the CPU itself and executes instructions rather than serving as the motherboard chipset.',
                    ],
                    [
                        'answer' => 'Chipset',
                        'is_correct' => true,
                        'explanation' => 'The chipset provides communication and control functions between the CPU and other motherboard components. Modern systems integrate many former chipset functions into the CPU and platform controller hub.',
                    ],
                    [
                        'answer' => 'CMOS',
                        'is_correct' => false,
                        'explanation' => 'CMOS commonly refers to the technology used for low-power circuitry and, in traditional PC terminology, the memory storing BIOS configuration settings.',
                    ],
                    [
                        'answer' => 'BIOS Controller',
                        'is_correct' => false,
                        'explanation' => 'BIOS is firmware that initializes hardware and starts the boot process; BIOS Controller is not the standard name for the motherboard traffic-management chip.',
                    ],
                ],
            ],

            [
                'question' => 'What does the acronym UEFI stand for, which has largely replaced the traditional legacy BIOS on newer motherboards?',
                'options' => [
                    [
                        'answer' => 'Universal Extended Firmware Interface',
                        'is_correct' => false,
                        'explanation' => 'This is not the correct expansion of UEFI.',
                    ],
                    [
                        'answer' => 'Unified Extensible Firmware Interface',
                        'is_correct' => true,
                        'explanation' => 'UEFI stands for Unified Extensible Firmware Interface and provides a modern firmware interface for initializing hardware and booting operating systems.',
                    ],
                    [
                        'answer' => 'United Ethernet Firmware Integration',
                        'is_correct' => false,
                        'explanation' => 'United Ethernet Firmware Integration is not the meaning of UEFI.',
                    ],
                    [
                        'answer' => 'Universal Electronic File Interface',
                        'is_correct' => false,
                        'explanation' => 'Universal Electronic File Interface is not the correct expansion of UEFI.',
                    ],
                ],
            ],

            [
                'question' => 'The temporary storage register inside the ALU that holds intermediate arithmetic and logical results is known as the:',
                'options' => [
                    [
                        'answer' => 'Program Counter',
                        'is_correct' => false,
                        'explanation' => 'The Program Counter stores the address of the next instruction to be fetched.',
                    ],
                    [
                        'answer' => 'Instruction Register',
                        'is_correct' => false,
                        'explanation' => 'The Instruction Register stores the instruction currently being decoded or executed.',
                    ],
                    [
                        'answer' => 'Accumulator',
                        'is_correct' => true,
                        'explanation' => 'The accumulator is a CPU register traditionally used to hold intermediate arithmetic and logical results.',
                    ],
                    [
                        'answer' => 'Memory Address Register',
                        'is_correct' => false,
                        'explanation' => 'The Memory Address Register stores the address of the memory location being accessed.',
                    ],
                ],
            ],

            [
                'question' => 'Which register holds the actual data item or instruction that has just been read from, or is about to be written to, primary memory?',
                'options' => [
                    [
                        'answer' => 'MAR (Memory Address Register)',
                        'is_correct' => false,
                        'explanation' => 'MAR stores the address of the memory location being accessed, not the actual data.',
                    ],
                    [
                        'answer' => 'MDR (Memory Data Register)',
                        'is_correct' => true,
                        'explanation' => 'The Memory Data Register, also called the Memory Buffer Register, temporarily holds data being transferred between the CPU and memory.',
                    ],
                    [
                        'answer' => 'PC (Program Counter)',
                        'is_correct' => false,
                        'explanation' => 'The Program Counter stores the address of the next instruction to be fetched.',
                    ],
                    [
                        'answer' => 'IR (Instruction Register)',
                        'is_correct' => false,
                        'explanation' => 'The Instruction Register holds the current instruction after it has been fetched, rather than general data being transferred to or from memory.',
                    ],
                ],
            ],

            [
                'question' => 'Which type of processor register is visible to programmers and can be used to hold operands or addresses during software execution?',
                'options' => [
                    [
                        'answer' => 'Control Register',
                        'is_correct' => false,
                        'explanation' => 'Control registers manage processor operation and system control functions rather than serving as general operand storage.',
                    ],
                    [
                        'answer' => 'General-Purpose Register',
                        'is_correct' => true,
                        'explanation' => 'General-purpose registers are programmer-visible registers used to hold operands, intermediate values, and sometimes addresses during program execution.',
                    ],
                    [
                        'answer' => 'Status Register',
                        'is_correct' => false,
                        'explanation' => 'The status register contains condition codes and processor state flags rather than general operands.',
                    ],
                    [
                        'answer' => 'Internal Temp Register',
                        'is_correct' => false,
                        'explanation' => 'Temporary internal registers are typically implementation-specific and are not normally programmer-visible.',
                    ],
                ],
            ],

            [
                'question' => 'In the CPU instruction cycle, which register is automatically incremented immediately after a fetch operation?',
                'options' => [
                    [
                        'answer' => 'Accumulator',
                        'is_correct' => false,
                        'explanation' => 'The accumulator holds arithmetic and logical values and is not automatically incremented as part of the normal instruction fetch.',
                    ],
                    [
                        'answer' => 'Memory Data Register',
                        'is_correct' => false,
                        'explanation' => 'The MDR temporarily holds data transferred between memory and the CPU.',
                    ],
                    [
                        'answer' => 'Program Counter',
                        'is_correct' => true,
                        'explanation' => 'The Program Counter is normally incremented after fetching an instruction so it points to the next instruction.',
                    ],
                    [
                        'answer' => 'Stack Pointer',
                        'is_correct' => false,
                        'explanation' => 'The Stack Pointer changes when stack operations occur and is not automatically incremented simply because an instruction is fetched.',
                    ],
                ],
            ],

            [
                'question' => 'Which memory component requires the fewest clock cycles for the CPU to access its stored data?',
                'options' => [
                    [
                        'answer' => 'L1 Cache',
                        'is_correct' => false,
                        'explanation' => 'L1 cache is extremely fast, but CPU registers are normally even faster to access.',
                    ],
                    [
                        'answer' => 'L2 Cache',
                        'is_correct' => false,
                        'explanation' => 'L2 cache is slower than L1 cache and processor registers.',
                    ],
                    [
                        'answer' => 'Internal Registers',
                        'is_correct' => true,
                        'explanation' => 'CPU registers are located inside the processor and generally provide the fastest data access available to the CPU.',
                    ],
                    [
                        'answer' => 'System RAM',
                        'is_correct' => false,
                        'explanation' => 'System RAM is considerably slower to access than CPU registers and cache memory.',
                    ],
                ],
            ],

            [
                'question' => 'When the CPU requests data from memory and finds that the specific data is already stored within the cache, it is termed a:',
                'options' => [
                    [
                        'answer' => 'Cache Miss',
                        'is_correct' => false,
                        'explanation' => 'A cache miss occurs when the requested data is not present in the cache.',
                    ],
                    [
                        'answer' => 'Cache Hit',
                        'is_correct' => true,
                        'explanation' => 'A cache hit occurs when the requested data is found in the cache, allowing faster access.',
                    ],
                    [
                        'answer' => 'Cache Flush',
                        'is_correct' => false,
                        'explanation' => 'Cache flushing removes or invalidates cached data; it does not describe finding requested data in the cache.',
                    ],
                    [
                        'answer' => 'Cache Latency',
                        'is_correct' => false,
                        'explanation' => 'Cache latency refers to the time required to access data from the cache.',
                    ],
                ],
            ],

            [
                'question' => 'In cache write policies, if data is written simultaneously to both the cache memory and the main memory, the policy is called:',
                'options' => [
                    [
                        'answer' => 'Write-back',
                        'is_correct' => false,
                        'explanation' => 'Write-back updates main memory later, usually when the modified cache block is evicted.',
                    ],
                    [
                        'answer' => 'Write-through',
                        'is_correct' => true,
                        'explanation' => 'Write-through updates both the cache and main memory at the time of the write operation.',
                    ],
                    [
                        'answer' => 'Write-allocate',
                        'is_correct' => false,
                        'explanation' => 'Write-allocate describes how a cache handles a write miss by bringing the relevant block into the cache before writing.',
                    ],
                    [
                        'answer' => 'Lazy-write',
                        'is_correct' => false,
                        'explanation' => 'Lazy writing delays the update of main memory and is therefore conceptually closer to write-back behavior.',
                    ],
                ],
            ],

            [
                'question' => 'Which common cache replacement policy discards the data block that has not been accessed for the longest period of time when the cache becomes full?',
                'options' => [
                    [
                        'answer' => 'FIFO (First-In, First-Out)',
                        'is_correct' => false,
                        'explanation' => 'FIFO removes the block that entered the cache first, regardless of when it was most recently accessed.',
                    ],
                    [
                        'answer' => 'LFU (Least Frequently Used)',
                        'is_correct' => false,
                        'explanation' => 'LFU removes the block with the lowest access frequency rather than the one that has been unused for the longest time.',
                    ],
                    [
                        'answer' => 'LRU (Least Recently Used)',
                        'is_correct' => true,
                        'explanation' => 'LRU replaces the cache block that has not been accessed for the longest period of time.',
                    ],
                    [
                        'answer' => 'Random Replacement',
                        'is_correct' => false,
                        'explanation' => 'Random replacement chooses a block without considering its access history.',
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
