<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class McqBoosterSeeder10 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'MCQ Booster 8',
            'description' => 'Computer Fundamentals, Computer Architecture, Networking, Operating Systems, Database, Web Technology, AI, Cybersecurity, ICT Policy, Electronic Transactions and NRB Guidelines MCQs.',
        ]);

        $questions = [
            [
                'question' => 'An RBB data engineer is deploying an automated predictive model to identify credit card fraud. The training dataset consists of historical transactions manually tagged as "Legitimate" or "Fraudulent". Which machine learning paradigm applies?',
                'options' => [
                    [
                        'answer' => 'Unsupervised Clustering',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Unsupervised Clustering is not the correct answer.',
                    ],
                    [
                        'answer' => 'Supervised Learning',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Supervised Learning.',
                    ],
                    [
                        'answer' => 'Semi-Supervised Association',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Semi-Supervised Association is not the correct answer.',
                    ],
                    [
                        'answer' => 'Reinforcement Q-Learning',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Reinforcement Q-Learning is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'In which year B.S. was the electronic calculating machine \'Facit\' used for census in Nepal?',
                'options' => [
                    [
                        'answer' => '2018 B.S.',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 2018 B.S..',
                    ],
                    [
                        'answer' => '2028 B.S.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 2028 B.S. is not the correct answer.',
                    ],
                    [
                        'answer' => '2038 B.S.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 2038 B.S. is not the correct answer.',
                    ],
                    [
                        'answer' => '2048 B.S.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 2048 B.S. is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'The official Nagarik App was launched on which date?',
                'options' => [
                    [
                        'answer' => 'Poush 17, 2073 B.S',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Poush 17, 2073 B.S is not the correct answer.',
                    ],
                    [
                        'answer' => 'Falgun 7, 2076 B.S.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Falgun 7, 2076 B.S. is not the correct answer.',
                    ],
                    [
                        'answer' => 'Magh 2, 2077 B.S.',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Magh 2, 2077 B.S..',
                    ],
                    [
                        'answer' => 'Baishakh 1, 2078 B.S',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Baishakh 1, 2078 B.S is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'A spam filter that categorizes emails as either "Spam" or "Not Spam" is an example of:',
                'options' => [
                    [
                        'answer' => 'Unsupervised Learning',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Unsupervised Learning is not the correct answer.',
                    ],
                    [
                        'answer' => 'Supervised Classification',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Supervised Classification is not the correct answer.',
                    ],
                    [
                        'answer' => 'Supervised Regression',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Supervised Regression.',
                    ],
                    [
                        'answer' => 'Reinforcement Learning',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Reinforcement Learning is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'High Bias and Low Variance in a Machine Learning model leads to:',
                'options' => [
                    [
                        'answer' => 'High Accuracy',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. High Accuracy is not the correct answer.',
                    ],
                    [
                        'answer' => 'Optimal Fitting',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Optimal Fitting is not the correct answer.',
                    ],
                    [
                        'answer' => 'Overfitting',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Overfitting is not the correct answer.',
                    ],
                    [
                        'answer' => 'Underfitting',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Underfitting.',
                    ],
                ],
            ],
            [
                'question' => 'Which protocol operates as a stateful, connection-oriented protocol at the Transport layer of TCP/IP?',
                'options' => [
                    [
                        'answer' => 'UDP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. UDP is not the correct answer.',
                    ],
                    [
                        'answer' => 'ICMP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. ICMP is not the correct answer.',
                    ],
                    [
                        'answer' => 'TCP',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: TCP.',
                    ],
                    [
                        'answer' => 'IP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IP is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which section of an email header allows sending copies to secondary recipients while hiding their email addresses from all other recipients?',
                'options' => [
                    [
                        'answer' => 'BCC',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: BCC.',
                    ],
                    [
                        'answer' => 'CC',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CC is not the correct answer.',
                    ],
                    [
                        'answer' => 'Subject',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Subject is not the correct answer.',
                    ],
                    [
                        'answer' => 'From',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. From is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is considered a primary physical security control rather than a logical security control?',
                'options' => [
                    [
                        'answer' => 'Encryption of data at rest',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Encryption of data at rest is not the correct answer.',
                    ],
                    [
                        'answer' => 'Biometric door access system',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Biometric door access system.',
                    ],
                    [
                        'answer' => 'Intrusion Prevention System',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Intrusion Prevention System is not the correct answer.',
                    ],
                    [
                        'answer' => 'Multi-Factor Authentication for cloud access',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Multi-Factor Authentication for cloud access is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'A 32-bit address bus allows a processor to directly access a maximum main memory capacity of:',
                'options' => [
                    [
                        'answer' => '2 GB',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 2 GB is not the correct answer.',
                    ],
                    [
                        'answer' => '4 GB',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 4 GB.',
                    ],
                    [
                        'answer' => '8 GB',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 8 GB is not the correct answer.',
                    ],
                    [
                        'answer' => '64 GB',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 64 GB is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following registers is transparent (invisible) to the assembly language programmer?',
                'options' => [
                    [
                        'answer' => 'General Purpose Register R1',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. General Purpose Register R1 is not the correct answer.',
                    ],
                    [
                        'answer' => 'Program Counter',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Program Counter is not the correct answer.',
                    ],
                    [
                        'answer' => 'Accumulator',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Accumulator is not the correct answer.',
                    ],
                    [
                        'answer' => 'Instruction Register',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Instruction Register.',
                    ],
                ],
            ],
            [
                'question' => 'Which type of access method is used by Magnetic Tape drives?',
                'options' => [
                    [
                        'answer' => 'Direct Access',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Direct Access is not the correct answer.',
                    ],
                    [
                        'answer' => 'Random Access',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Random Access is not the correct answer.',
                    ],
                    [
                        'answer' => 'Sequential Access',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Sequential Access.',
                    ],
                    [
                        'answer' => 'Index Sequential Access',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Index Sequential Access is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'As we move from top to bottom in the Memory Hierarchy pyramid:',
                'options' => [
                    [
                        'answer' => 'Capacity increases, Access time increases',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Capacity increases, Access time increases.',
                    ],
                    [
                        'answer' => 'Speed increases, Access time decreases',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Speed increases, Access time decreases is not the correct answer.',
                    ],
                    [
                        'answer' => 'Cost per bit increases, Speed increases',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cost per bit increases, Speed increases is not the correct answer.',
                    ],
                    [
                        'answer' => 'Capacity decreases, Cost per bit decreases',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Capacity decreases, Cost per bit decreases is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which level of cache is shared among all cores of a modern processor?',
                'options' => [
                    [
                        'answer' => 'L0 Cache',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. L0 Cache is not the correct answer.',
                    ],
                    [
                        'answer' => 'L1 Cache',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. L1 Cache is not the correct answer.',
                    ],
                    [
                        'answer' => 'L2 Cache',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. L2 Cache is not the correct answer.',
                    ],
                    [
                        'answer' => 'L3 Cache',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: L3 Cache.',
                    ],
                ],
            ],
            [
                'question' => 'Which cache mapping technique allows a block of RAM to be placed in ANY cache line?',
                'options' => [
                    [
                        'answer' => 'Direct Mapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Direct Mapping is not the correct answer.',
                    ],
                    [
                        'answer' => 'Set Associative Mapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Set Associative Mapping is not the correct answer.',
                    ],
                    [
                        'answer' => 'Fully Associative Mapping',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Fully Associative Mapping.',
                    ],
                    [
                        'answer' => 'Block Mapping',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Block Mapping is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which type of error occurs when two or more bits in a data unit are altered during transmission?',
                'options' => [
                    [
                        'answer' => 'Single-bit error',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Single-bit error is not the correct answer.',
                    ],
                    [
                        'answer' => 'Burst error',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Burst error.',
                    ],
                    [
                        'answer' => 'Parity error',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Parity error is not the correct answer.',
                    ],
                    [
                        'answer' => 'Inverted error',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Inverted error is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which disk scheduling algorithm is also known as the Elevator Algorithm?',
                'options' => [
                    [
                        'answer' => 'FCFS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. FCFS is not the correct answer.',
                    ],
                    [
                        'answer' => 'SSTF',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. SSTF is not the correct answer.',
                    ],
                    [
                        'answer' => 'SCAN',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: SCAN.',
                    ],
                    [
                        'answer' => 'C-LOOK',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. C-LOOK is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which device category processes continuous streams of individual bytes rather than data blocks?',
                'options' => [
                    [
                        'answer' => 'Hard Disk Drive',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hard Disk Drive is not the correct answer.',
                    ],
                    [
                        'answer' => 'Solid State Drive',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Solid State Drive is not the correct answer.',
                    ],
                    [
                        'answer' => 'Keyboard',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Keyboard.',
                    ],
                    [
                        'answer' => 'Optical Storage',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Optical Storage is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'What signal does a hardware controller trigger to alert the CPU that an operation has completed?',
                'options' => [
                    [
                        'answer' => 'Polling Flag',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Polling Flag is not the correct answer.',
                    ],
                    [
                        'answer' => 'Interrupt Request Query',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Interrupt Request Query.',
                    ],
                    [
                        'answer' => 'System Call',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. System Call is not the correct answer.',
                    ],
                    [
                        'answer' => 'Trap Code',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Trap Code is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'In Isolated I/O addressing, which assembly instructions are typically used for data transfers?',
                'options' => [
                    [
                        'answer' => 'PUSH and POP',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. PUSH and POP is not the correct answer.',
                    ],
                    [
                        'answer' => 'MOV and LEA',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. MOV and LEA is not the correct answer.',
                    ],
                    [
                        'answer' => 'LOAD and STORE',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. LOAD and STORE is not the correct answer.',
                    ],
                    [
                        'answer' => 'IN and OUT',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: IN and OUT.',
                    ],
                ],
            ],
            [
                'question' => 'Which key group includes Ctrl, Alt, and Shift on a standard PC keyboard?',
                'options' => [
                    [
                        'answer' => 'Function Keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Function Keys is not the correct answer.',
                    ],
                    [
                        'answer' => 'Toggle Keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Toggle Keys is not the correct answer.',
                    ],
                    [
                        'answer' => 'Modifier Keys',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Modifier Keys.',
                    ],
                    [
                        'answer' => 'Navigation Keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Navigation Keys is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is classified as an Impact Printer?',
                'options' => [
                    [
                        'answer' => 'Laser Printer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Laser Printer is not the correct answer.',
                    ],
                    [
                        'answer' => 'Thermal Printer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Thermal Printer is not the correct answer.',
                    ],
                    [
                        'answer' => 'Dot Matrix Printer',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Dot Matrix Printer.',
                    ],
                    [
                        'answer' => 'Inkjet Printer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Inkjet Printer is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'A PCI Express x16 slot has how many operational data lanes?',
                'options' => [
                    [
                        'answer' => '1 lane',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 1 lane is not the correct answer.',
                    ],
                    [
                        'answer' => '4 lanes',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 4 lanes is not the correct answer.',
                    ],
                    [
                        'answer' => '16 lanes',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 16 lanes.',
                    ],
                    [
                        'answer' => '32 lanes',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 32 lanes is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'What does RISC stand for?',
                'options' => [
                    [
                        'answer' => 'Reduced Instruction Set Computer',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Reduced Instruction Set Computer.',
                    ],
                    [
                        'answer' => 'Reduced Instruction System Code',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Reduced Instruction System Code is not the correct answer.',
                    ],
                    [
                        'answer' => 'Random Instruction Set Computer',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Random Instruction Set Computer is not the correct answer.',
                    ],
                    [
                        'answer' => 'Rapid Instruction Set Compiler',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Rapid Instruction Set Compiler is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'The Harvard Architecture was first used in which computer?',
                'options' => [
                    [
                        'answer' => 'UNIVAC I',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. UNIVAC I is not the correct answer.',
                    ],
                    [
                        'answer' => 'ENIAC',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. ENIAC is not the correct answer.',
                    ],
                    [
                        'answer' => 'Harvard Architecture',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Harvard Architecture is not the correct answer.',
                    ],
                    [
                        'answer' => 'Harvard Mark I',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Harvard Mark I.',
                    ],
                ],
            ],
            [
                'question' => 'Which device is used to connect two completely different logical networks?',
                'options' => [
                    [
                        'answer' => 'Repeater',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Repeater is not the correct answer.',
                    ],
                    [
                        'answer' => 'Hub',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hub is not the correct answer.',
                    ],
                    [
                        'answer' => 'Switch',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Switch is not the correct answer.',
                    ],
                    [
                        'answer' => 'Router',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Router.',
                    ],
                ],
            ],
            [
                'question' => 'Which type of Kernel keeps essential services like process management in kernel space while running file systems and device drivers in user space?',
                'options' => [
                    [
                        'answer' => 'Monolithic Kernel',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Monolithic Kernel is not the correct answer.',
                    ],
                    [
                        'answer' => 'Microkernel',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Microkernel.',
                    ],
                    [
                        'answer' => 'Hybrid Kernel',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hybrid Kernel is not the correct answer.',
                    ],
                    [
                        'answer' => 'Macrokernel',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Macrokernel is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Restarting a computer system using Ctrl + Alt + Del key combination is called:',
                'options' => [
                    [
                        'answer' => 'Cold Booting',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cold Booting is not the correct answer.',
                    ],
                    [
                        'answer' => 'Hard Booting',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hard Booting is not the correct answer.',
                    ],
                    [
                        'answer' => 'Warm Booting',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Warm Booting.',
                    ],
                    [
                        'answer' => 'Flash Booting',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Flash Booting is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'The degree of multiprogramming is controlled by which scheduler?',
                'options' => [
                    [
                        'answer' => 'Short-Term Scheduler',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Short-Term Scheduler is not the correct answer.',
                    ],
                    [
                        'answer' => 'Medium-Term Scheduler',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Medium-Term Scheduler is not the correct answer.',
                    ],
                    [
                        'answer' => 'Long-Term Scheduler',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Long-Term Scheduler.',
                    ],
                    [
                        'answer' => 'Dispatcher',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Dispatcher is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which CPU scheduling algorithm gives the minimum average waiting time for a given set of processes?',
                'options' => [
                    [
                        'answer' => 'FCFS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. FCFS is not the correct answer.',
                    ],
                    [
                        'answer' => 'Round Robin',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Round Robin is not the correct answer.',
                    ],
                    [
                        'answer' => 'Shortest Job First',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Shortest Job First.',
                    ],
                    [
                        'answer' => 'Priority Scheduling',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Priority Scheduling is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which operating system file in MS-DOS interprets user commands?',
                'options' => [
                    [
                        'answer' => 'IO.SYS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. IO.SYS is not the correct answer.',
                    ],
                    [
                        'answer' => 'COMMAND.COM',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: COMMAND.COM.',
                    ],
                    [
                        'answer' => 'MSDOS.SYS',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. MSDOS.SYS is not the correct answer.',
                    ],
                    [
                        'answer' => 'AUTOEXEC.BAT',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. AUTOEXEC.BAT is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'UNIX operating system was rewritten in C language in which year?',
                'options' => [
                    [
                        'answer' => '1969',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 1969 is not the correct answer.',
                    ],
                    [
                        'answer' => '1973',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 1973.',
                    ],
                    [
                        'answer' => '1980',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 1980 is not the correct answer.',
                    ],
                    [
                        'answer' => '1985',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 1985 is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'In a time-sharing system, the main goal of CPU scheduling is to minimize:',
                'options' => [
                    [
                        'answer' => 'CPU utilization',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CPU utilization is not the correct answer.',
                    ],
                    [
                        'answer' => 'Throughput',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Throughput is not the correct answer.',
                    ],
                    [
                        'answer' => 'Context switching overhead only',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Context switching overhead only is not the correct answer.',
                    ],
                    [
                        'answer' => 'Response time',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Response time.',
                    ],
                ],
            ],
            [
                'question' => 'Which property of ACID guarantees that a committed transaction\'s updates persist through system crashes?',
                'options' => [
                    [
                        'answer' => 'Isolation',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Isolation is not the correct answer.',
                    ],
                    [
                        'answer' => 'Consistency',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Consistency is not the correct answer.',
                    ],
                    [
                        'answer' => 'Durability',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Durability.',
                    ],
                    [
                        'answer' => 'Atomicity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Atomicity is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'In Association Rule Mining, what does Confidence measure?',
                'options' => [
                    [
                        'answer' => 'Total frequency of the itemset in the entire database',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Total frequency of the itemset in the entire database is not the correct answer.',
                    ],
                    [
                        'answer' => 'Conditional probability that a transaction contains Y given it contains X',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Conditional probability that a transaction contains Y given it contains X.',
                    ],
                    [
                        'answer' => 'Independent probability of purchasing Y',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Independent probability of purchasing Y is not the correct answer.',
                    ],
                    [
                        'answer' => 'Total count of all transactions',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Total count of all transactions is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => '"Garbage In, Garbage Out" (GIGO) in Data Mining highlights the critical importance of:',
                'options' => [
                    [
                        'answer' => 'High computational processing speed',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. High computational processing speed is not the correct answer.',
                    ],
                    [
                        'answer' => 'Data Quality and Preprocessing',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Data Quality and Preprocessing.',
                    ],
                    [
                        'answer' => 'High Lift rules',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. High Lift rules is not the correct answer.',
                    ],
                    [
                        'answer' => 'Complex Neural Network hidden layers',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Complex Neural Network hidden layers is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'What type of database design is typically utilized in an operational OLTP database?',
                'options' => [
                    [
                        'answer' => 'Star Schema',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Star Schema is not the correct answer.',
                    ],
                    [
                        'answer' => 'Denormalized Model',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Denormalized Model is not the correct answer.',
                    ],
                    [
                        'answer' => 'Normalized Model (3NF)',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Normalized Model (3NF).',
                    ],
                    [
                        'answer' => 'Snowflake Schema',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Snowflake Schema is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Deletion anomaly occurs when deleting a tuple leads to',
                'options' => [
                    [
                        'answer' => 'Unintended loss of essential independent data',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Unintended loss of essential independent data.',
                    ],
                    [
                        'answer' => 'Automatic updating of secondary keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Automatic updating of secondary keys is not the correct answer.',
                    ],
                    [
                        'answer' => 'Creation of duplicate primary keys',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Creation of duplicate primary keys is not the correct answer.',
                    ],
                    [
                        'answer' => 'Database crash',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Database crash is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following statements about indexes is FALSE?',
                'options' => [
                    [
                        'answer' => 'Indexes speed up SELECT statement execution.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Indexes speed up SELECT statement execution. is not the correct answer.',
                    ],
                    [
                        'answer' => 'Indexes consume extra disk space.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Indexes consume extra disk space. is not the correct answer.',
                    ],
                    [
                        'answer' => 'Indexes speed up INSERT and UPDATE operations.',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Indexes speed up INSERT and UPDATE operations..',
                    ],
                    [
                        'answer' => 'Primary Key automatically creates an index.',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Primary Key automatically creates an index. is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is an empty (void) tag in HTML?',
                'options' => [
                    [
                        'answer' => '<div>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. <div> is not the correct answer.',
                    ],
                    [
                        'answer' => '<p>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. <p> is not the correct answer.',
                    ],
                    [
                        'answer' => '<br>',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: <br>.',
                    ],
                    [
                        'answer' => '<span>',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. <span> is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'What HTTP status code is returned by a Web Server when a requested page or file cannot be located on the server?',
                'options' => [
                    [
                        'answer' => '200 OK',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 200 OK is not the correct answer.',
                    ],
                    [
                        'answer' => '301 Moved Permanently',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 301 Moved Permanently is not the correct answer.',
                    ],
                    [
                        'answer' => '403 Forbidden',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 403 Forbidden is not the correct answer.',
                    ],
                    [
                        'answer' => '404 Not Found',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 404 Not Found.',
                    ],
                ],
            ],
            [
                'question' => 'Which disaster recovery site option offers near-instantaneous recovery speeds at the highest financial cost?',
                'options' => [
                    [
                        'answer' => 'Warm Site',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Warm Site is not the correct answer.',
                    ],
                    [
                        'answer' => 'Cold Site',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Cold Site is not the correct answer.',
                    ],
                    [
                        'answer' => 'Hot Site',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hot Site is not the correct answer.',
                    ],
                    [
                        'answer' => 'Mobile Facility',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Mobile Facility.',
                    ],
                ],
            ],
            [
                'question' => 'What relationship must strictly exist between RTO and MTD?',
                'options' => [
                    [
                        'answer' => 'RTO>MTD',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. RTO>MTD is not the correct answer.',
                    ],
                    [
                        'answer' => 'RTO≤MTD',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: RTO≤MTD.',
                    ],
                    [
                        'answer' => 'RTO=MTBF',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. RTO=MTBF is not the correct answer.',
                    ],
                    [
                        'answer' => 'RTO+RPO=MTD',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. RTO+RPO=MTD is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'A Trojan Horse differs fundamentally from a Computer Worm because a Trojan:',
                'options' => [
                    [
                        'answer' => 'Does not carry a malicious payload',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Does not carry a malicious payload is not the correct answer.',
                    ],
                    [
                        'answer' => 'Does not self-replicate across networks',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Does not self-replicate across networks.',
                    ],
                    [
                        'answer' => 'Requires administrative rights to run',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Requires administrative rights to run is not the correct answer.',
                    ],
                    [
                        'answer' => 'Is completely harmless',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Is completely harmless is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'What is the primary operational advantage of DDoS over single-source DoS attacks?',
                'options' => [
                    [
                        'answer' => 'DDoS attacks originate from distributed sources, making IP-based blocking ineffective',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: DDoS attacks originate from distributed sources, making IP-based blocking ineffective.',
                    ],
                    [
                        'answer' => 'DDoS attacks do not require network connectivity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DDoS attacks do not require network connectivity is not the correct answer.',
                    ],
                    [
                        'answer' => 'DDoS attacks automatically corrupt hard drives',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DDoS attacks automatically corrupt hard drives is not the correct answer.',
                    ],
                    [
                        'answer' => 'DDoS attacks only target offline devices',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. DDoS attacks only target offline devices is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'What was the targeted broadband access population percentage to be achieved by the year 2020 as per the policy?',
                'options' => [
                    [
                        'answer' => '75%',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 75% is not the correct answer.',
                    ],
                    [
                        'answer' => '80%',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 80% is not the correct answer.',
                    ],
                    [
                        'answer' => '90%',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: 90%.',
                    ],
                    [
                        'answer' => '100%',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. 100% is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'According to Section 9 in ETA, an electronic record is attributed to the originator if it was sent:',
                'options' => [
                    [
                        'answer' => 'By the originator, a person authorized by the originator, or an information system programmed by or on behalf of the originator',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: By the originator, a person authorized by the originator, or an information system programmed by or on behalf of the originator.',
                    ],
                    [
                        'answer' => 'By an unauthorized third party using the originator\'s network',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. By an unauthorized third party using the originator\'s network is not the correct answer.',
                    ],
                    [
                        'answer' => 'Exclusively by the Controller on behalf of the subscriber',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Exclusively by the Controller on behalf of the subscriber is not the correct answer.',
                    ],
                    [
                        'answer' => 'By an ISP during maintenance operations',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. By an ISP during maintenance operations is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'Entering a password and receiving a 6-digit OTP on a registered mobile phone is an example of:',
                'options' => [
                    [
                        'answer' => 'Single-Factor Authentication',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Single-Factor Authentication is not the correct answer.',
                    ],
                    [
                        'answer' => 'Two-Factor Authentication',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Two-Factor Authentication.',
                    ],
                    [
                        'answer' => 'Knowledge-Only Authentication',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Knowledge-Only Authentication is not the correct answer.',
                    ],
                    [
                        'answer' => 'Biometric Authentication',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Biometric Authentication is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'What is the rule regarding CCTV installation at ATM locations according to the guidelines?',
                'options' => [
                    [
                        'answer' => 'CCTV must record the keypad while customers enter their PIN',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CCTV must record the keypad while customers enter their PIN is not the correct answer.',
                    ],
                    [
                        'answer' => 'CCTV must capture clear pictures of the person but MUST NOT capture the PIN entered',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: CCTV must capture clear pictures of the person but MUST NOT capture the PIN entered.',
                    ],
                    [
                        'answer' => 'CCTV is optional if an security guard is posted',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CCTV is optional if an security guard is posted is not the correct answer.',
                    ],
                    [
                        'answer' => 'CCTV is required only inside the core bank branches',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. CCTV is required only inside the core bank branches is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'What arrangement is recommended for banks to ensure continuity of critical applications if a software vendor goes out of business?',
                'options' => [
                    [
                        'answer' => 'Obtaining source code or executing a Software Escrow Agreement',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Obtaining source code or executing a Software Escrow Agreement.',
                    ],
                    [
                        'answer' => 'Migrating to open-source software immediately',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Migrating to open-source software immediately is not the correct answer.',
                    ],
                    [
                        'answer' => 'Purchasing 3 % shares of the vendor company',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Purchasing 3 % shares of the vendor company is not the correct answer.',
                    ],
                    [
                        'answer' => 'Hiring all software programmers from the vendor',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Hiring all software programmers from the vendor is not the correct answer.',
                    ],
                ],
            ],
            [
                'question' => 'What strategy requires integrating security controls into systems and software from the earliest stages of conceptualization and design throughout their life cycle?',
                'options' => [
                    [
                        'answer' => 'Defense-in-depth',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Defense-in-depth is not the correct answer.',
                    ],
                    [
                        'answer' => 'Resilience by design',
                        'is_correct' => true,
                        'explanation' => 'Correct answer: Resilience by design.',
                    ],
                    [
                        'answer' => 'Zero Trust Architecture',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Zero Trust Architecture is not the correct answer.',
                    ],
                    [
                        'answer' => 'Security by Obscurity',
                        'is_correct' => false,
                        'explanation' => 'Incorrect. Security by Obscurity is not the correct answer.',
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
