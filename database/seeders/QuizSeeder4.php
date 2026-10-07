<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder4 extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'Weekly Booster 4',
            'description' => 'Computer Fundamentals, Hardware, CPU Architecture, Memory, Storage, Motherboard and ICT in Nepal MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which of the following best defines a process in an operating system?',
                'options' => [
                    [
                        'answer' => 'A program saved in secondary memory',
                        'is_correct' => false,
                        'explanation' => 'A program stored in secondary memory is a passive program or executable file; it becomes a process when it is loaded and executed.',
                    ],
                    [
                        'answer' => 'A program in execution',
                        'is_correct' => true,
                        'explanation' => 'A process is a program that is currently being executed, along with its associated state, resources, memory, and execution context.',
                    ],
                    [
                        'answer' => 'A set of hardware instructions',
                        'is_correct' => false,
                        'explanation' => 'Hardware instructions are machine-level instructions executed by the processor and do not themselves define a process.',
                    ],
                    [
                        'answer' => 'A high-level language source file',
                        'is_correct' => false,
                        'explanation' => 'A source file contains program code written in a programming language and must be compiled or interpreted before execution.',
                    ],
                ],
            ],

            [
                'question' => 'Which data structure is maintained by the operating system to store all the information related to a specific process?',
                'options' => [
                    [
                        'answer' => 'Process Control Block (PCB)',
                        'is_correct' => true,
                        'explanation' => 'The Process Control Block stores important process information such as process ID, process state, CPU registers, scheduling information, and memory-management details.',
                    ],
                    [
                        'answer' => 'Translation Lookaside Buffer (TLB)',
                        'is_correct' => false,
                        'explanation' => 'The TLB is a CPU memory-management cache used to speed up virtual-to-physical address translation.',
                    ],
                    [
                        'answer' => 'Master File Table (MFT)',
                        'is_correct' => false,
                        'explanation' => 'The MFT is a data structure used by the NTFS file system to store information about files and directories.',
                    ],
                    [
                        'answer' => 'Interrupt Vector Table (IVT)',
                        'is_correct' => false,
                        'explanation' => 'The Interrupt Vector Table contains addresses or references to interrupt service routines rather than complete process information.',
                    ],
                ],
            ],

            [
                'question' => 'During a context switch, which component of the operating system is responsible for giving control of the CPU to the process selected by the short-term scheduler?',
                'options' => [
                    [
                        'answer' => 'Long-term scheduler',
                        'is_correct' => false,
                        'explanation' => 'The long-term scheduler controls admission of processes into the system and influences the degree of multiprogramming.',
                    ],
                    [
                        'answer' => 'Dispatcher',
                        'is_correct' => true,
                        'explanation' => 'The dispatcher gives CPU control to the process selected by the short-term scheduler and performs tasks such as context switching and switching to user mode.',
                    ],
                    [
                        'answer' => 'Medium-term scheduler',
                        'is_correct' => false,
                        'explanation' => 'The medium-term scheduler manages process suspension and resumption, often through swapping.',
                    ],
                    [
                        'answer' => 'Interrupt Handler',
                        'is_correct' => false,
                        'explanation' => 'An interrupt handler services hardware or software interrupts and is not the component primarily responsible for dispatching the selected process.',
                    ],
                ],
            ],

            [
                'question' => 'Which CPU scheduling algorithm allocates the CPU to the process that arrives first in the ready queue and is strictly non-preemptive?',
                'options' => [
                    [
                        'answer' => 'Shortest Job First (SJF)',
                        'is_correct' => false,
                        'explanation' => 'SJF selects the process with the shortest CPU burst rather than simply selecting the process that arrived first.',
                    ],
                    [
                        'answer' => 'Round Robin (RR)',
                        'is_correct' => false,
                        'explanation' => 'Round Robin uses a fixed time quantum and is preemptive.',
                    ],
                    [
                        'answer' => 'First-Come, First-Served (FCFS)',
                        'is_correct' => true,
                        'explanation' => 'FCFS schedules processes according to their arrival order and is normally implemented as a non-preemptive scheduling algorithm.',
                    ],
                    [
                        'answer' => 'Priority Scheduling',
                        'is_correct' => false,
                        'explanation' => 'Priority scheduling selects processes based on priority rather than strictly according to arrival order.',
                    ],
                ],
            ],

            [
                'question' => 'Which CPU scheduling algorithm relies on a fixed time unit called a "Time Quantum" to prevent any single process from monopolizing the CPU?',
                'options' => [
                    [
                        'answer' => 'Priority Scheduling',
                        'is_correct' => false,
                        'explanation' => 'Priority scheduling selects processes according to their assigned priority and does not fundamentally depend on a fixed time quantum.',
                    ],
                    [
                        'answer' => 'Round Robin (RR)',
                        'is_correct' => true,
                        'explanation' => 'Round Robin assigns each ready process a fixed time quantum and rotates through processes, providing fair CPU access.',
                    ],
                    [
                        'answer' => 'Shortest Remaining Time First (SRTF)',
                        'is_correct' => false,
                        'explanation' => 'SRTF selects the process with the smallest remaining CPU burst time and does not use a fixed time quantum as its defining mechanism.',
                    ],
                    [
                        'answer' => 'First-Come, First-Served (FCFS)',
                        'is_correct' => false,
                        'explanation' => 'FCFS executes processes in arrival order and does not use time quantum-based rotation.',
                    ],
                ],
            ],

            [
                'question' => 'Consider three processes P1, P2, and P3 arriving at time 0 with CPU burst times of 6 ms, 2 ms, and 1 ms respectively. Using non-preemptive Shortest Job First (SJF), what is the average waiting time?',
                'options' => [
                    [
                        'answer' => '1.0 ms',
                        'is_correct' => false,
                        'explanation' => 'This is not the average waiting time for the given SJF execution order.',
                    ],
                    [
                        'answer' => '1.33 ms',
                        'is_correct' => true,
                        'explanation' => 'SJF executes P3, P2, then P1. Waiting times are 0 ms, 1 ms, and 3 ms respectively. The average is (0 + 1 + 3) / 3 = 1.33 ms.',
                    ],
                    [
                        'answer' => '2.33 ms',
                        'is_correct' => false,
                        'explanation' => 'This value does not result from calculating the average waiting time using the SJF order P3, P2, and P1.',
                    ],
                    [
                        'answer' => '3.0 ms',
                        'is_correct' => false,
                        'explanation' => '3 ms is the waiting time of P1 alone, not the average waiting time of all three processes.',
                    ],
                ],
            ],

            [
                'question' => 'Indefinite blocking or "Starvation" of low-priority processes in a priority-based scheduling algorithm is best mitigated by which technique?',
                'options' => [
                    [
                        'answer' => 'Context switching',
                        'is_correct' => false,
                        'explanation' => 'Context switching changes CPU execution between processes but does not specifically prevent starvation.',
                    ],
                    [
                        'answer' => 'Preemption',
                        'is_correct' => false,
                        'explanation' => 'Preemption can improve responsiveness but does not by itself guarantee that low-priority processes will eventually execute.',
                    ],
                    [
                        'answer' => 'Aging',
                        'is_correct' => true,
                        'explanation' => 'Aging gradually increases the priority of a process that has waited for a long time, preventing indefinite starvation.',
                    ],
                    [
                        'answer' => 'Round Robin Slicing',
                        'is_correct' => false,
                        'explanation' => 'Round Robin provides time-sharing fairness, but aging is the standard technique used specifically to address starvation in priority scheduling.',
                    ],
                ],
            ],

            [
                'question' => 'In the standard 5-state process transition model, which state does a running process enter when it issues an Input/Output (I/O) request?',
                'options' => [
                    [
                        'answer' => 'Ready State',
                        'is_correct' => false,
                        'explanation' => 'The Ready state contains processes that are prepared to execute but are waiting for CPU allocation.',
                    ],
                    [
                        'answer' => 'Waiting / Blocked State',
                        'is_correct' => true,
                        'explanation' => 'When a running process requests I/O, it normally enters the Waiting or Blocked state until the requested I/O operation completes.',
                    ],
                    [
                        'answer' => 'Terminated State',
                        'is_correct' => false,
                        'explanation' => 'A process enters the Terminated state when its execution has completed or it has been explicitly terminated.',
                    ],
                    [
                        'answer' => 'New State',
                        'is_correct' => false,
                        'explanation' => 'The New state represents a process that is being created and has not yet entered the Ready state.',
                    ],
                ],
            ],

            [
                'question' => 'Which CPU scheduling optimization goal requires minimizing the total elapsed time between process submission and its final completion?',
                'options' => [
                    [
                        'answer' => 'Throughput',
                        'is_correct' => false,
                        'explanation' => 'Throughput measures the number of processes completed per unit of time.',
                    ],
                    [
                        'answer' => 'CPU Utilization',
                        'is_correct' => false,
                        'explanation' => 'CPU utilization measures the percentage of time the CPU remains busy executing processes.',
                    ],
                    [
                        'answer' => 'Turnaround Time',
                        'is_correct' => true,
                        'explanation' => 'Turnaround time is the total elapsed time from process submission or arrival until its completion. Scheduling algorithms generally aim to minimize it.',
                    ],
                    [
                        'answer' => 'Response Time',
                        'is_correct' => false,
                        'explanation' => 'Response time measures the time from submission until the process first receives CPU service or produces its first response.',
                    ],
                ],
            ],

            [
                'question' => 'Which characteristic accurately describes MS-DOS?',
                'options' => [
                    [
                        'answer' => 'Multi-user, Multi-tasking operating system',
                        'is_correct' => false,
                        'explanation' => 'Traditional MS-DOS was designed primarily for a single user and did not provide modern multitasking capabilities.',
                    ],
                    [
                        'answer' => 'Single-user, Single-tasking operating system',
                        'is_correct' => true,
                        'explanation' => 'Traditional MS-DOS was primarily a single-user, single-tasking operating system.',
                    ],
                    [
                        'answer' => 'Multi-user, Single-tasking operating system',
                        'is_correct' => false,
                        'explanation' => 'MS-DOS was not designed as a multi-user operating system.',
                    ],
                    [
                        'answer' => 'Single-user, Multi-tasking operating system',
                        'is_correct' => false,
                        'explanation' => 'Traditional MS-DOS did not provide true multitasking as a core operating-system capability.',
                    ],
                ],
            ],

            [
                'question' => 'In MS-DOS, which command is categorized as an internal command resident directly inside COMMAND.COM?',
                'options' => [
                    [
                        'answer' => 'FORMAT',
                        'is_correct' => false,
                        'explanation' => 'FORMAT is an external MS-DOS command implemented as a separate executable program.',
                    ],
                    [
                        'answer' => 'CHKDSK',
                        'is_correct' => false,
                        'explanation' => 'CHKDSK is an external command used to check disk and file-system integrity.',
                    ],
                    [
                        'answer' => 'COPY',
                        'is_correct' => true,
                        'explanation' => 'COPY is an internal MS-DOS command implemented within COMMAND.COM.',
                    ],
                    [
                        'answer' => 'ATTRIB',
                        'is_correct' => false,
                        'explanation' => 'ATTRIB is traditionally categorized as an external MS-DOS command.',
                    ],
                ],
            ],

            [
                'question' => 'Under the traditional MS-DOS 8.3 filename convention, which of the following file names is INVALID?',
                'options' => [
                    [
                        'answer' => 'DOCUMENT.TXT',
                        'is_correct' => false,
                        'explanation' => 'DOCUMENT.TXT follows the 8.3 convention because the base name contains eight characters and the extension contains three.',
                    ],
                    [
                        'answer' => 'FINANCIALREPORT.DOC',
                        'is_correct' => true,
                        'explanation' => 'FINANCIALREPORT contains more than eight characters, so it violates the traditional 8.3 filename convention.',
                    ],
                    [
                        'answer' => 'PROGRAM1.EXE',
                        'is_correct' => false,
                        'explanation' => 'PROGRAM1.EXE follows the 8.3 convention with eight characters in the base name and three in the extension.',
                    ],
                    [
                        'answer' => 'A.DAT',
                        'is_correct' => false,
                        'explanation' => 'A.DAT is valid under the 8.3 convention because both the filename and extension are within the allowed limits.',
                    ],
                ],
            ],

            [
                'question' => 'Which MS-DOS command is specifically used to change, set, or remove file attributes such as Read-Only, System, Hidden, and Archive?',
                'options' => [
                    [
                        'answer' => 'CHKDSK',
                        'is_correct' => false,
                        'explanation' => 'CHKDSK checks disk and file-system integrity rather than changing file attributes.',
                    ],
                    [
                        'answer' => 'ATTRIB',
                        'is_correct' => true,
                        'explanation' => 'ATTRIB displays, sets, or removes file attributes such as Read-Only, Hidden, System, and Archive.',
                    ],
                    [
                        'answer' => 'VOL',
                        'is_correct' => false,
                        'explanation' => 'VOL displays the volume label and serial information of a disk.',
                    ],
                    [
                        'answer' => 'TYPE',
                        'is_correct' => false,
                        'explanation' => 'TYPE displays the contents of a text file and does not modify its attributes.',
                    ],
                ],
            ],

            [
                'question' => 'During MS-DOS startup, which configuration file is processed first to load device drivers and set up hardware parameters before AUTOEXEC.BAT runs?',
                'options' => [
                    [
                        'answer' => 'COMMAND.COM',
                        'is_correct' => false,
                        'explanation' => 'COMMAND.COM is the command interpreter and is loaded during the startup process, but it is not the configuration file used to specify device drivers.',
                    ],
                    [
                        'answer' => 'BOOT.INI',
                        'is_correct' => false,
                        'explanation' => 'BOOT.INI is associated with boot configuration in older Windows NT-based systems and is not the traditional MS-DOS configuration file.',
                    ],
                    [
                        'answer' => 'CONFIG.SYS',
                        'is_correct' => true,
                        'explanation' => 'CONFIG.SYS contains system configuration directives and device-driver commands and is processed before AUTOEXEC.BAT.',
                    ],
                    [
                        'answer' => 'MSDOS.SYS',
                        'is_correct' => false,
                        'explanation' => 'MSDOS.SYS is a core DOS system file, but CONFIG.SYS is the configuration file used to specify drivers and system settings.',
                    ],
                ],
            ],

            [
                'question' => 'In UNIX operating systems, what is the core component that interacts directly with the computer hardware and manages system resources?',
                'options' => [
                    [
                        'answer' => 'Shell',
                        'is_correct' => false,
                        'explanation' => 'The shell is a command interpreter that provides an interface between users and the operating system.',
                    ],
                    [
                        'answer' => 'Terminal',
                        'is_correct' => false,
                        'explanation' => 'A terminal provides an interface through which users interact with the shell and applications.',
                    ],
                    [
                        'answer' => 'Kernel',
                        'is_correct' => true,
                        'explanation' => 'The UNIX kernel is the core operating-system component responsible for hardware interaction, process management, memory management, and system resources.',
                    ],
                    [
                        'answer' => 'Graphical User Interface',
                        'is_correct' => false,
                        'explanation' => 'A graphical user interface provides visual interaction with the system but does not directly manage core hardware resources.',
                    ],
                ],
            ],

            [
                'question' => 'Which UNIX command is used to display the absolute path of the current working directory?',
                'options' => [
                    [
                        'answer' => 'cd',
                        'is_correct' => false,
                        'explanation' => 'The cd command changes the current working directory.',
                    ],
                    [
                        'answer' => 'pwd',
                        'is_correct' => true,
                        'explanation' => 'pwd stands for Print Working Directory and displays the absolute path of the current directory.',
                    ],
                    [
                        'answer' => 'path',
                        'is_correct' => false,
                        'explanation' => 'path is not the standard UNIX command used to display the current working directory.',
                    ],
                    [
                        'answer' => 'dir',
                        'is_correct' => false,
                        'explanation' => 'dir may be available on some systems, but the standard UNIX command for displaying the current working directory is pwd.',
                    ],
                ],
            ],

            [
                'question' => 'A file in UNIX has permissions represented as -rwxr-xr--. What are the permission rights assigned to the "Group"?',
                'options' => [
                    [
                        'answer' => 'Read, Write, Execute',
                        'is_correct' => false,
                        'explanation' => 'The owner has read, write, and execute permissions; these are represented by rwx.',
                    ],
                    [
                        'answer' => 'Read and Execute only',
                        'is_correct' => true,
                        'explanation' => 'The group permission portion is r-x, meaning the group can read and execute the file but cannot write to it.',
                    ],
                    [
                        'answer' => 'Read only',
                        'is_correct' => false,
                        'explanation' => 'The final permission portion r-- represents read-only permission for others, not the group.',
                    ],
                    [
                        'answer' => 'Write and Execute only',
                        'is_correct' => false,
                        'explanation' => 'The group permissions are r-x, which includes read and execute but not write.',
                    ],
                ],
            ],

            [
                'question' => 'Which UNIX command searches for specific text patterns within a file using regular expressions?',
                'options' => [
                    [
                        'answer' => 'find',
                        'is_correct' => false,
                        'explanation' => 'find searches for files and directories based on criteria such as name, type, size, and permissions.',
                    ],
                    [
                        'answer' => 'grep',
                        'is_correct' => true,
                        'explanation' => 'grep searches input or files for lines matching a specified text pattern or regular expression.',
                    ],
                    [
                        'answer' => 'cat',
                        'is_correct' => false,
                        'explanation' => 'cat displays or concatenates file contents and does not primarily perform pattern searching.',
                    ],
                    [
                        'answer' => 'sed',
                        'is_correct' => false,
                        'explanation' => 'sed is a stream editor capable of searching and transforming text, but grep is the standard command specifically used for pattern searching.',
                    ],
                ],
            ],

            [
                'question' => 'In UNIX architecture, what is the default user command interpreter called?',
                'options' => [
                    [
                        'answer' => 'Kernel',
                        'is_correct' => false,
                        'explanation' => 'The kernel manages system resources and hardware rather than directly interpreting user commands.',
                    ],
                    [
                        'answer' => 'System Call',
                        'is_correct' => false,
                        'explanation' => 'A system call is an interface through which applications request services from the kernel.',
                    ],
                    [
                        'answer' => 'Shell',
                        'is_correct' => true,
                        'explanation' => 'The shell is the command interpreter that accepts user commands and invokes appropriate programs or system services.',
                    ],
                    [
                        'answer' => 'System Daemon',
                        'is_correct' => false,
                        'explanation' => 'A daemon is a background process that provides services and is not the standard user command interpreter.',
                    ],
                ],
            ],

            [
                'question' => 'Which administrative tool in Windows OS is used to view, configure, and update hardware device drivers?',
                'options' => [
                    [
                        'answer' => 'Task Manager',
                        'is_correct' => false,
                        'explanation' => 'Task Manager monitors processes, applications, performance, and system resource usage.',
                    ],
                    [
                        'answer' => 'Control Panel',
                        'is_correct' => false,
                        'explanation' => 'Control Panel provides access to many Windows configuration settings, but Device Manager is specifically designed for hardware devices and drivers.',
                    ],
                    [
                        'answer' => 'Device Manager',
                        'is_correct' => true,
                        'explanation' => 'Device Manager displays installed hardware devices and allows administrators to manage, update, disable, or uninstall their drivers.',
                    ],
                    [
                        'answer' => 'Event Viewer',
                        'is_correct' => false,
                        'explanation' => 'Event Viewer is used to inspect system, application, and security event logs.',
                    ],
                ],
            ],

            [
                'question' => 'What happens when a user selects a file and presses the keyboard shortcut Shift + Delete in Windows?',
                'options' => [
                    [
                        'answer' => 'The file is moved to the Recycle Bin.',
                        'is_correct' => false,
                        'explanation' => 'A normal Delete operation generally moves a file to the Recycle Bin.',
                    ],
                    [
                        'answer' => 'The file is permanently deleted bypassing the Recycle Bin.',
                        'is_correct' => true,
                        'explanation' => 'Shift + Delete bypasses the Recycle Bin and initiates permanent deletion of the selected file.',
                    ],
                    [
                        'answer' => 'The file is renamed.',
                        'is_correct' => false,
                        'explanation' => 'Renaming a file is normally performed using F2 or an appropriate Rename command.',
                    ],
                    [
                        'answer' => 'The file is copied to temporary storage.',
                        'is_correct' => false,
                        'explanation' => 'Shift + Delete is a deletion operation and does not copy the file to temporary storage.',
                    ],
                ],
            ],

            [
                'question' => 'Which Windows state saves open documents and running applications to the Hard Disk Drive/SSD before shutting down the system power completely?',
                'options' => [
                    [
                        'answer' => 'Sleep',
                        'is_correct' => false,
                        'explanation' => 'Sleep primarily keeps the current session in RAM while placing the computer into a low-power state.',
                    ],
                    [
                        'answer' => 'Hibernate',
                        'is_correct' => true,
                        'explanation' => 'Hibernate saves the current system state to storage and then powers the computer down completely.',
                    ],
                    [
                        'answer' => 'Lock',
                        'is_correct' => false,
                        'explanation' => 'Lock prevents unauthorized access while keeping the user session and system running.',
                    ],
                    [
                        'answer' => 'Restart',
                        'is_correct' => false,
                        'explanation' => 'Restart shuts down and starts the operating system again but does not specifically describe saving the current session to disk.',
                    ],
                ],
            ],

            [
                'question' => 'Which core Windows utility allows system administrators to monitor real-time CPU, RAM, Disk, and Network performance, as well as force-close unresponsive applications?',
                'options' => [
                    [
                        'answer' => 'System Restore',
                        'is_correct' => false,
                        'explanation' => 'System Restore rolls system configuration and software state back to an earlier restore point.',
                    ],
                    [
                        'answer' => 'Registry Editor',
                        'is_correct' => false,
                        'explanation' => 'Registry Editor is used to view and modify Windows Registry settings.',
                    ],
                    [
                        'answer' => 'Task Manager',
                        'is_correct' => true,
                        'explanation' => 'Task Manager displays processes and resource usage such as CPU, memory, disk, and network utilization and can terminate unresponsive applications.',
                    ],
                    [
                        'answer' => 'Disk Defragmenter',
                        'is_correct' => false,
                        'explanation' => 'Disk Defragmenter optimizes the arrangement of files on supported storage devices and does not provide comprehensive real-time process monitoring.',
                    ],
                ],
            ],

            [
                'question' => 'What startup mode in Windows loads only minimal drivers and essential core services to assist in troubleshooting system errors?',
                'options' => [
                    [
                        'answer' => 'Normal Mode',
                        'is_correct' => false,
                        'explanation' => 'Normal mode starts Windows using the usual drivers, services, and startup programs.',
                    ],
                    [
                        'answer' => 'Safe Mode',
                        'is_correct' => true,
                        'explanation' => 'Safe Mode starts Windows with a minimal set of drivers and services to help diagnose software and driver-related problems.',
                    ],
                    [
                        'answer' => 'Fast Startup Mode',
                        'is_correct' => false,
                        'explanation' => 'Fast Startup is a Windows boot optimization and does not provide the minimal diagnostic environment of Safe Mode.',
                    ],
                    [
                        'answer' => 'Compatibility Mode',
                        'is_correct' => false,
                        'explanation' => 'Compatibility settings help older applications run on newer Windows versions and do not define a minimal startup environment.',
                    ],
                ],
            ],

            [
                'question' => 'What type of malicious software self-replicates and spreads across network connections without requiring any human interaction or host file attachments?',
                'options' => [
                    [
                        'answer' => 'Computer Virus',
                        'is_correct' => false,
                        'explanation' => 'A traditional virus generally attaches itself to a host file or program and often requires execution of that host to spread.',
                    ],
                    [
                        'answer' => 'Computer Worm',
                        'is_correct' => true,
                        'explanation' => 'A worm is self-replicating malware that can spread across networks by exploiting vulnerabilities or other mechanisms without requiring attachment to a host program.',
                    ],
                    [
                        'answer' => 'Trojan Horse',
                        'is_correct' => false,
                        'explanation' => 'A Trojan disguises itself as legitimate software but does not inherently self-replicate across networks.',
                    ],
                    [
                        'answer' => 'Logic Bomb',
                        'is_correct' => false,
                        'explanation' => 'A logic bomb executes malicious actions when a specified condition or trigger occurs and is not defined by self-replication.',
                    ],
                ],
            ],

            [
                'question' => 'A malicious program disguised as a legitimate banking utility software is installed by an end-user. Once opened, it silently installs a back door. What type of malware is this?',
                'options' => [
                    [
                        'answer' => 'Ransomware',
                        'is_correct' => false,
                        'explanation' => 'Ransomware typically encrypts or blocks access to data and demands payment for restoration.',
                    ],
                    [
                        'answer' => 'Trojan Horse',
                        'is_correct' => true,
                        'explanation' => 'A Trojan Horse disguises malicious software as legitimate software and relies on the victim executing or installing it. It can then install backdoors or other malicious components.',
                    ],
                    [
                        'answer' => 'Adware',
                        'is_correct' => false,
                        'explanation' => 'Adware primarily displays unwanted advertisements and is not defined by disguising itself as legitimate software to install a backdoor.',
                    ],
                    [
                        'answer' => 'Spyware',
                        'is_correct' => false,
                        'explanation' => 'Spyware secretly monitors or collects information from users, whereas the defining feature in this scenario is the malicious program disguising itself as legitimate software.',
                    ],
                ],
            ],

            [
                'question' => 'Which security principle states that users and system processes should be granted only the minimum access rights and permissions required to perform their assigned duties?',
                'options' => [
                    [
                        'answer' => 'Principle of Defense in Depth',
                        'is_correct' => false,
                        'explanation' => 'Defense in depth uses multiple layers of security controls so that failure of one control does not expose the entire system.',
                    ],
                    [
                        'answer' => 'Principle of Least Privilege',
                        'is_correct' => true,
                        'explanation' => 'Least privilege requires users, applications, and processes to receive only the permissions necessary to perform their authorized tasks.',
                    ],
                    [
                        'answer' => 'Separation of Duties',
                        'is_correct' => false,
                        'explanation' => 'Separation of duties divides critical responsibilities among multiple people or roles to reduce fraud and unauthorized activity.',
                    ],
                    [
                        'answer' => 'Multi-Factor Authentication',
                        'is_correct' => false,
                        'explanation' => 'Multi-factor authentication requires multiple independent authentication factors and is not the principle governing minimum permissions.',
                    ],
                ],
            ],

            [
                'question' => 'What attack technique involves systematically trying every possible combination of characters until the correct password is discovered?',
                'options' => [
                    [
                        'answer' => 'Dictionary Attack',
                        'is_correct' => false,
                        'explanation' => 'A dictionary attack primarily tests words and commonly used passwords from a predefined list rather than every possible character combination.',
                    ],
                    [
                        'answer' => 'Brute-Force Attack',
                        'is_correct' => true,
                        'explanation' => 'A brute-force attack systematically tries possible password combinations until the correct credential is discovered or the attempt is stopped.',
                    ],
                    [
                        'answer' => 'Phishing Attack',
                        'is_correct' => false,
                        'explanation' => 'Phishing tricks victims into revealing credentials or sensitive information, usually through deceptive communications or websites.',
                    ],
                    [
                        'answer' => 'Man-in-the-Middle Attack',
                        'is_correct' => false,
                        'explanation' => 'A Man-in-the-Middle attack intercepts or manipulates communication between two parties and is not a password-combination guessing technique.',
                    ],
                ],
            ],

            [
                'question' => 'What security system monitors incoming and outgoing network traffic, filtering packets based on defined security rules to block unauthorized system access?',
                'options' => [
                    [
                        'answer' => 'Antivirus Software',
                        'is_correct' => false,
                        'explanation' => 'Antivirus software detects and removes malicious software rather than primarily filtering network traffic at a security boundary.',
                    ],
                    [
                        'answer' => 'Intrusion Detection System (IDS)',
                        'is_correct' => false,
                        'explanation' => 'An IDS monitors activity for suspicious behavior and generates alerts, but it is not primarily a traffic-filtering enforcement mechanism.',
                    ],
                    [
                        'answer' => 'Firewall',
                        'is_correct' => true,
                        'explanation' => 'A firewall filters incoming and outgoing network traffic according to configured security rules and access-control policies.',
                    ],
                    [
                        'answer' => 'Honeypot',
                        'is_correct' => false,
                        'explanation' => 'A honeypot is a deliberately exposed system or service designed to attract and monitor attackers.',
                    ],
                ],
            ],

            [
                'question' => 'An attacker exploits an unpatched, unknown security flaw in an operating system before the software vendor has released a patch. What is this threat called?',
                'options' => [
                    [
                        'answer' => 'Zero-Day Vulnerability',
                        'is_correct' => true,
                        'explanation' => 'A zero-day vulnerability is a previously unknown or unpatched security flaw for which no official patch was available at the time of exploitation.',
                    ],
                    [
                        'answer' => 'Denial of Service',
                        'is_correct' => false,
                        'explanation' => 'A Denial-of-Service attack attempts to make a system or service unavailable rather than specifically describing exploitation of an unknown vulnerability.',
                    ],
                    [
                        'answer' => 'Privilege Escalation',
                        'is_correct' => false,
                        'explanation' => 'Privilege escalation occurs when an attacker gains higher privileges than originally authorized; it is not defined by whether the vulnerability is unknown.',
                    ],
                    [
                        'answer' => 'Cross-Site Scripting',
                        'is_correct' => false,
                        'explanation' => 'Cross-Site Scripting injects malicious scripts into web content and is a specific web security vulnerability rather than the general concept of an unknown unpatched flaw.',
                    ],
                ],
            ],

            [
                'question' => 'Which equipment provides immediate emergency backup power during a main electrical grid failure to prevent sudden server shutdowns?',
                'options' => [
                    [
                        'answer' => 'Isolation Transformer',
                        'is_correct' => false,
                        'explanation' => 'An isolation transformer electrically separates circuits and can improve power quality but does not provide sustained backup power during an outage.',
                    ],
                    [
                        'answer' => 'Diesel Generator',
                        'is_correct' => false,
                        'explanation' => 'A diesel generator can provide extended backup power but normally requires startup time and is not the immediate bridging power source.',
                    ],
                    [
                        'answer' => 'Uninterruptible Power Supply (UPS)',
                        'is_correct' => true,
                        'explanation' => 'A UPS provides immediate battery-backed power when utility power fails, preventing sudden shutdowns while longer-term backup systems start.',
                    ],
                    [
                        'answer' => 'Surge Protector',
                        'is_correct' => false,
                        'explanation' => 'A surge protector protects equipment from voltage spikes but does not provide electrical power during a complete outage.',
                    ],
                ],
            ],

            [
                'question' => 'Which of the following is considered an environmental threat to a bank\'s server room facility?',
                'options' => [
                    [
                        'answer' => 'Phishing',
                        'is_correct' => false,
                        'explanation' => 'Phishing is a social engineering and cybersecurity threat involving deceptive communications.',
                    ],
                    [
                        'answer' => 'High Humidity and Dust',
                        'is_correct' => true,
                        'explanation' => 'High humidity and dust are environmental hazards that can cause corrosion, overheating, contamination, and hardware failure in server rooms.',
                    ],
                    [
                        'answer' => 'Shoulder Surfing',
                        'is_correct' => false,
                        'explanation' => 'Shoulder surfing is a physical observation technique used to obtain passwords or sensitive information.',
                    ],
                    [
                        'answer' => 'SQL Injection',
                        'is_correct' => false,
                        'explanation' => 'SQL injection is a software and application-layer attack that manipulates database queries through malicious input.',
                    ],
                ],
            ],

            [
                'question' => 'What physical security barrier uses a specialized dual-door entry system where the first door must close before the second inner door unlocks?',
                'options' => [
                    [
                        'answer' => 'Turnstile',
                        'is_correct' => false,
                        'explanation' => 'A turnstile controls pedestrian movement through a controlled passage but does not normally use the dual-door interlocking mechanism described.',
                    ],
                    [
                        'answer' => 'Mantrap (Air Lock System)',
                        'is_correct' => true,
                        'explanation' => 'A mantrap uses two interlocking doors so that one door must close before the other can open, helping prevent unauthorized entry and tailgating.',
                    ],
                    [
                        'answer' => 'Perimeter Fence',
                        'is_correct' => false,
                        'explanation' => 'A perimeter fence creates a physical boundary around a facility but does not provide the dual-door access mechanism described.',
                    ],
                    [
                        'answer' => 'Bollard',
                        'is_correct' => false,
                        'explanation' => 'Bollards are physical posts used primarily to prevent or control vehicle access and do not form an interlocking two-door entry system.',
                    ],
                ],
            ],

            [
                'question' => 'Which specialized fire suppression agent is commonly used in data centers because it extinguishes fires without leaving residue or damaging sensitive electronic hardware?',
                'options' => [
                    [
                        'answer' => 'Water Sprinklers',
                        'is_correct' => false,
                        'explanation' => 'Water sprinklers can effectively suppress fires but may cause significant water damage to sensitive electronic equipment.',
                    ],
                    [
                        'answer' => 'Clean Agent Gas (e.g., FM-200 / Novec 1230)',
                        'is_correct' => true,
                        'explanation' => 'Clean-agent fire suppression systems use gaseous agents that can suppress fires without leaving water or powder residue, making them suitable for sensitive electronic environments.',
                    ],
                    [
                        'answer' => 'Carbon Dioxide (CO2) Liquid Stream',
                        'is_correct' => false,
                        'explanation' => 'CO2 can be used in some fire suppression systems, but the option as stated does not represent the commonly cited clean-agent data-center solution.',
                    ],
                    [
                        'answer' => 'Chemical Foam',
                        'is_correct' => false,
                        'explanation' => 'Foam can leave residue and is generally unsuitable for protecting sensitive electronic equipment in occupied data-center spaces.',
                    ],
                ],
            ],

            [
                'question' => 'Why are raised floors typically installed in modern data center server rooms?',
                'options' => [
                    [
                        'answer' => 'To make structural cleaning easier',
                        'is_correct' => false,
                        'explanation' => 'Ease of cleaning is not the primary reason for installing raised floors in data centers.',
                    ],
                    [
                        'answer' => 'To provide space for underfloor cool airflow distribution and cable management',
                        'is_correct' => true,
                        'explanation' => 'Raised floors create an underfloor space that can distribute conditioned air and accommodate power and network cabling.',
                    ],
                    [
                        'answer' => 'To prevent physical theft of server racks',
                        'is_correct' => false,
                        'explanation' => 'Access-control systems, locks, cages, and other physical security controls are used to prevent equipment theft.',
                    ],
                    [
                        'answer' => 'To absorb seismic earthquake vibrations',
                        'is_correct' => false,
                        'explanation' => 'Raised floors are primarily used for airflow and infrastructure management rather than as the principal mechanism for seismic protection.',
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
