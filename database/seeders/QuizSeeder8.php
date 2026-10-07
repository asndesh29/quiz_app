<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder8 extends Seeder
{
    public function run(): void
    {

        $quiz = Quiz::create([
            'title' => 'Weekly Booster 8',
            'description' => 'Information Security, Cyber Security, ICT Policy of Nepal, NRB IT Guidelines and Cyber Resilience MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which component of the CIA Triad is directly violated when an unauthorized user intercepts and reads unencrypted sensitive banking transaction details in transit?',
                'options' => [
                    [
                        'answer' => 'Availability',
                        'is_correct' => false,
                        'explanation' => 'Availability ensures that systems and data are accessible to authorized users when required. Reading intercepted data does not directly violate availability.',
                    ],
                    [
                        'answer' => 'Integrity',
                        'is_correct' => false,
                        'explanation' => 'Integrity protects data from unauthorized modification or alteration. The scenario involves unauthorized reading rather than modification.',
                    ],
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => true,
                        'explanation' => 'Confidentiality ensures that sensitive information is accessible only to authorized parties. Intercepting and reading unencrypted banking data violates confidentiality.',
                    ],
                    [
                        'answer' => 'Non-repudiation',
                        'is_correct' => false,
                        'explanation' => 'Non-repudiation prevents a sender from denying that they performed an action or sent a message. It is not the primary issue in this scenario.',
                    ],
                ],
            ],
            [
                'question' => 'In information security, what is the term used to define a weakness in a system\'s design, implementation, or internal control that can be exploited by an adversary?',
                'options' => [
                    [
                        'answer' => 'Threat',
                        'is_correct' => false,
                        'explanation' => 'A threat is a potential cause of an unwanted security incident, such as an attacker, malware, or natural disaster.',
                    ],
                    [
                        'answer' => 'Vulnerability',
                        'is_correct' => true,
                        'explanation' => 'A vulnerability is a weakness in a system, design, implementation, or control that can be exploited by a threat actor.',
                    ],
                    [
                        'answer' => 'Risk',
                        'is_correct' => false,
                        'explanation' => 'Risk represents the potential for loss or damage resulting from a threat exploiting a vulnerability.',
                    ],
                    [
                        'answer' => 'Exploit',
                        'is_correct' => false,
                        'explanation' => 'An exploit is a technique, code, or method used to take advantage of a vulnerability.',
                    ],
                ],
            ],
            [
                'question' => 'Which Access Control Model enforces access permissions strictly based on security clearances assigned to users and classification labels (e.g., Top Secret, Confidential) assigned to data objects?',
                'options' => [
                    [
                        'answer' => 'Discretionary Access Control (DAC)',
                        'is_correct' => false,
                        'explanation' => 'DAC allows resource owners to determine who can access resources. It does not primarily use mandatory security classifications.',
                    ],
                    [
                        'answer' => 'Role-Based Access Control (RBAC)',
                        'is_correct' => false,
                        'explanation' => 'RBAC grants permissions according to organizational roles such as Manager, Auditor, or Administrator.',
                    ],
                    [
                        'answer' => 'Mandatory Access Control (MAC)',
                        'is_correct' => true,
                        'explanation' => 'MAC enforces access using centrally defined security clearances and classification labels such as Top Secret, Secret, and Confidential.',
                    ],
                    [
                        'answer' => 'Attribute-Based Access Control (ABAC)',
                        'is_correct' => false,
                        'explanation' => 'ABAC makes authorization decisions using attributes of users, resources, actions, and environmental conditions.',
                    ],
                ],
            ],
            [
                'question' => 'An attacker alters a critical core-banking database table to modify the account balance of a specific customer without authorization. Which core security principle has been directly compromised?',
                'options' => [
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => false,
                        'explanation' => 'Confidentiality protects information from unauthorized disclosure. The scenario involves unauthorized modification.',
                    ],
                    [
                        'answer' => 'Availability',
                        'is_correct' => false,
                        'explanation' => 'Availability concerns ensuring systems and information remain accessible when needed.',
                    ],
                    [
                        'answer' => 'Integrity',
                        'is_correct' => true,
                        'explanation' => 'Integrity ensures that data remains accurate, complete, and protected from unauthorized modification. Changing an account balance directly compromises integrity.',
                    ],
                    [
                        'answer' => 'Accountability',
                        'is_correct' => false,
                        'explanation' => 'Accountability involves tracing actions to responsible users or entities. Although it may be relevant to the incident, the directly compromised CIA principle is integrity.',
                    ],
                ],
            ],
            [
                'question' => 'What type of security attack involves passively monitoring network traffic to steal credentials without altering the transmitted data or disrupting system communications?',
                'options' => [
                    [
                        'answer' => 'Active Attack',
                        'is_correct' => false,
                        'explanation' => 'An active attack attempts to modify, disrupt, inject, or otherwise alter system or communication behavior.',
                    ],
                    [
                        'answer' => 'Passive Attack',
                        'is_correct' => true,
                        'explanation' => 'A passive attack monitors or intercepts communications without modifying the transmitted information. Eavesdropping and traffic analysis are examples.',
                    ],
                    [
                        'answer' => 'Denial of Service Attack',
                        'is_correct' => false,
                        'explanation' => 'A DoS attack attempts to make a service unavailable, which is an active disruption rather than passive monitoring.',
                    ],
                    [
                        'answer' => 'Man-in-the-Middle Modification Attack',
                        'is_correct' => false,
                        'explanation' => 'A modification-based Man-in-the-Middle attack involves intercepting and altering communications, whereas the scenario specifies passive monitoring without alteration.',
                    ],
                ],
            ],
            [
                'question' => 'Which control category does installing a network-based Intrusion Prevention System (IPS) that automatically blocks malicious IP addresses in real time belong to?',
                'options' => [
                    [
                        'answer' => 'Detective Control',
                        'is_correct' => false,
                        'explanation' => 'Detective controls identify or detect security events. An IPS goes beyond detection by actively blocking malicious activity.',
                    ],
                    [
                        'answer' => 'Preventive Control',
                        'is_correct' => true,
                        'explanation' => 'A preventive control is designed to stop or block an unwanted event. An IPS can automatically block malicious traffic or IP addresses.',
                    ],
                    [
                        'answer' => 'Corrective Control',
                        'is_correct' => false,
                        'explanation' => 'Corrective controls restore or correct systems after an incident has occurred.',
                    ],
                    [
                        'answer' => 'Deterrent Control',
                        'is_correct' => false,
                        'explanation' => 'Deterrent controls discourage attackers from attempting unauthorized actions, such as warning banners or visible security measures.',
                    ],
                ],
            ],
            [
                'question' => 'In cryptographic terms, what guarantees that the sender of a digital banking order cannot deny having sent the message?',
                'options' => [
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => false,
                        'explanation' => 'Confidentiality protects information from unauthorized disclosure.',
                    ],
                    [
                        'answer' => 'Authentication',
                        'is_correct' => false,
                        'explanation' => 'Authentication verifies the identity of a user, device, or entity.',
                    ],
                    [
                        'answer' => 'Non-repudiation',
                        'is_correct' => true,
                        'explanation' => 'Non-repudiation provides evidence that a particular party performed an action, such as sending a digitally signed banking order, and makes denial difficult.',
                    ],
                    [
                        'answer' => 'Data Integrity',
                        'is_correct' => false,
                        'explanation' => 'Data integrity ensures that information has not been improperly altered, but it does not by itself establish who sent the message.',
                    ],
                ],
            ],
            [
                'question' => 'Which principle of least privilege states that an individual should be granted:',
                'options' => [
                    [
                        'answer' => 'Maximum rights required to complete all organizational tasks.',
                        'is_correct' => false,
                        'explanation' => 'Least privilege deliberately avoids granting unnecessary or excessive permissions.',
                    ],
                    [
                        'answer' => 'Only the minimum level of access necessary to perform their specified job responsibilities.',
                        'is_correct' => true,
                        'explanation' => 'The principle of least privilege grants users only the minimum permissions necessary to perform their authorized duties.',
                    ],
                    [
                        'answer' => 'Full Administrative rights temporarily during working hours.',
                        'is_correct' => false,
                        'explanation' => 'Temporary administrative rights are still excessive if they are not necessary for the user\'s responsibilities.',
                    ],
                    [
                        'answer' => 'Access based on seniority in the organization.',
                        'is_correct' => false,
                        'explanation' => 'Access should be based on job requirements rather than organizational seniority.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following combinations represents true Multi-Factor Authentication (MFA)?',
                'options' => [
                    [
                        'answer' => 'A password and a PIN',
                        'is_correct' => false,
                        'explanation' => 'Both passwords and PINs are knowledge factors, so using both does not provide two independent authentication factors.',
                    ],
                    [
                        'answer' => 'A password and a security question answer',
                        'is_correct' => false,
                        'explanation' => 'Both are generally knowledge-based factors and therefore do not constitute two different factor categories.',
                    ],
                    [
                        'answer' => 'A password and a Time-based One-Time Password (TOTP) from an authenticator app',
                        'is_correct' => true,
                        'explanation' => 'The password is a knowledge factor and the authenticator-generated TOTP is a separate possession-based factor, providing MFA.',
                    ],
                    [
                        'answer' => 'A fingerprint scan and a iris scan',
                        'is_correct' => false,
                        'explanation' => 'Both fingerprint and iris recognition are biometric factors. Although they use different biometric characteristics, they are generally the same authentication factor category.',
                    ],
                ],
            ],
            [
                'question' => 'What is the fundamental distinction between Identification, Authentication, and Authorization?',
                'options' => [
                    [
                        'answer' => 'Identification verifies identity; Authentication claims identity; Authorization grants access.',
                        'is_correct' => false,
                        'explanation' => 'The roles are reversed here. Identification claims an identity, while authentication verifies that claimed identity.',
                    ],
                    [
                        'answer' => 'Identification claims identity; Authentication verifies identity; Authorization grants permissions.',
                        'is_correct' => true,
                        'explanation' => 'Identification tells the system who the user claims to be, authentication verifies the claim, and authorization determines what the authenticated user is allowed to access.',
                    ],
                    [
                        'answer' => 'Authentication claims identity; Authorization verifies identity; Identification grants permissions.',
                        'is_correct' => false,
                        'explanation' => 'This incorrectly assigns the functions of all three security concepts.',
                    ],
                    [
                        'answer' => 'Authorization claims identity; Identification verifies identity; Authentication grants access.',
                        'is_correct' => false,
                        'explanation' => 'Authorization determines permissions after authentication; it does not claim or verify identity.',
                    ],
                ],
            ],
            [
                'question' => 'To prevent Rainbow Table attacks on stored banking user passwords, system administrators should implement which cryptographic technique before hashing?',
                'options' => [
                    [
                        'answer' => 'Symmetric Encryption',
                        'is_correct' => false,
                        'explanation' => 'Symmetric encryption protects data using a shared key but is not the standard technique used to defend password hashes against rainbow tables.',
                    ],
                    [
                        'answer' => 'Password Salting',
                        'is_correct' => true,
                        'explanation' => 'A unique random salt is combined with each password before hashing, making precomputed rainbow tables ineffective against the resulting hashes.',
                    ],
                    [
                        'answer' => 'Asymmetric Key Exchange',
                        'is_correct' => false,
                        'explanation' => 'Asymmetric cryptography is commonly used for secure key exchange and digital signatures, not as the primary defense against rainbow tables.',
                    ],
                    [
                        'answer' => 'Base64 Encoding',
                        'is_correct' => false,
                        'explanation' => 'Base64 is an encoding scheme, not a cryptographic protection mechanism, and it provides no protection against password cracking.',
                    ],
                ],
            ],
            [
                'question' => 'In a corporate network implementing Role-Based Access Control (RBAC), permission to approve loan disbursements is assigned to:',
                'options' => [
                    [
                        'answer' => 'The individual employee based on personal preference.',
                        'is_correct' => false,
                        'explanation' => 'RBAC assigns permissions to roles rather than directly according to personal preferences.',
                    ],
                    [
                        'answer' => 'Specific job titles/roles (e.g., "Branch Manager") rather than individual user identities.',
                        'is_correct' => true,
                        'explanation' => 'RBAC associates permissions with organizational roles. Users receive the permissions associated with the roles assigned to them.',
                    ],
                    [
                        'answer' => 'The system administrator\'s discretionary decision.',
                        'is_correct' => false,
                        'explanation' => 'Although administrators may configure roles, the RBAC model bases permissions on defined roles rather than arbitrary administrator decisions for each user.',
                    ],
                    [
                        'answer' => 'Any user who logs into the computer first.',
                        'is_correct' => false,
                        'explanation' => 'Access permissions are determined by assigned roles, not by login order.',
                    ],
                ],
            ],
            [
                'question' => 'Which password practice represents a significant security vulnerability?',
                'options' => [
                    [
                        'answer' => 'Enforcing a minimum length of 12 characters combining letters, numbers, and symbols.',
                        'is_correct' => false,
                        'explanation' => 'Using sufficiently long passwords and appropriate password policies generally improves password security.',
                    ],
                    [
                        'answer' => 'Using account lockout policies after 3 failed consecutive login attempts.',
                        'is_correct' => false,
                        'explanation' => 'Account lockout or throttling can reduce the effectiveness of repeated password guessing attempts, although excessively strict policies can create availability concerns.',
                    ],
                    [
                        'answer' => 'Reusing the same complex administrator password across multiple production banking servers.',
                        'is_correct' => true,
                        'explanation' => 'Password reuse creates a major security risk because compromise of one server can expose access to multiple other systems.',
                    ],
                    [
                        'answer' => 'Utilizing a centralized credential password manager with master key protection.',
                        'is_correct' => false,
                        'explanation' => 'A properly secured password manager can help generate, store, and manage unique credentials securely.',
                    ],
                ],
            ],
            [
                'question' => 'An automated banking server communicates securely with another core engine using digital tokens without human intervention. Which authentication mechanism is primarily used here?',
                'options' => [
                    [
                        'answer' => 'User-based Biometric Authentication',
                        'is_correct' => false,
                        'explanation' => 'Biometric authentication is designed primarily to authenticate human users using biological characteristics.',
                    ],
                    [
                        'answer' => 'Certificate-based / API Key Machine-to-Machine Authentication',
                        'is_correct' => true,
                        'explanation' => 'Machine-to-machine systems commonly authenticate using certificates, API keys, service credentials, or similar non-human authentication mechanisms.',
                    ],
                    [
                        'answer' => 'Social Engineering Authentication',
                        'is_correct' => false,
                        'explanation' => 'Social engineering is an attack technique that manipulates people rather than a legitimate machine authentication mechanism.',
                    ],
                    [
                        'answer' => 'Captcha-based Authentication',
                        'is_correct' => false,
                        'explanation' => 'CAPTCHA is primarily used to distinguish humans from automated bots and is not a normal machine-to-machine authentication mechanism.',
                    ],
                ],
            ],
            [
                'question' => 'An employee at a financial institution receives an email from an address visually resembling the CEO\'s address, urging an urgent wire transfer to a secret vendor. This targeted attack is best classified as:',
                'options' => [
                    [
                        'answer' => 'Smishing',
                        'is_correct' => false,
                        'explanation' => 'Smishing is phishing conducted through SMS or text messages.',
                    ],
                    [
                        'answer' => 'Whaling',
                        'is_correct' => false,
                        'explanation' => 'Whaling specifically targets high-profile executives or other high-value individuals. The scenario describes a targeted impersonation attack against an employee.',
                    ],
                    [
                        'answer' => 'Spear Phishing / CEO Fraud',
                        'is_correct' => true,
                        'explanation' => 'Spear phishing is a targeted phishing attack. CEO fraud or business email compromise commonly impersonates executives to trick employees into transferring money or sensitive information.',
                    ],
                    [
                        'answer' => 'Vishing',
                        'is_correct' => false,
                        'explanation' => 'Vishing is voice-based phishing conducted through phone calls or other voice communication.',
                    ],
                ],
            ],
            [
                'question' => 'What type of malware encrypts victim files and demands payment in exchange for the decryption key?',
                'options' => [
                    [
                        'answer' => 'Spyware',
                        'is_correct' => false,
                        'explanation' => 'Spyware secretly monitors or collects information from a victim system.',
                    ],
                    [
                        'answer' => 'Ransomware',
                        'is_correct' => true,
                        'explanation' => 'Ransomware encrypts or otherwise locks victim data and demands payment, typically in exchange for a decryption key.',
                    ],
                    [
                        'answer' => 'Rootkit',
                        'is_correct' => false,
                        'explanation' => 'A rootkit is designed to maintain privileged access and hide malicious activity within a system.',
                    ],
                    [
                        'answer' => 'Adware',
                        'is_correct' => false,
                        'explanation' => 'Adware primarily displays unwanted advertisements or generates advertising-related behavior.',
                    ],
                ],
            ],
            [
                'question' => 'Which characteristic fundamentally distinguishes a Computer Worm from a Computer Virus?',
                'options' => [
                    [
                        'answer' => 'A Worm carries a destructive payload, whereas a Virus only displays ads.',
                        'is_correct' => false,
                        'explanation' => 'Both worms and viruses can carry destructive payloads or perform various malicious actions. Their key distinction is how they replicate and spread.',
                    ],
                    [
                        'answer' => 'A Worm can self-replicate and spread across networks independently without requiring human action or a host file.',
                        'is_correct' => true,
                        'explanation' => 'A worm is capable of self-replication and network propagation without requiring a host file or direct user execution.',
                    ],
                    [
                        'answer' => 'A Virus can spread across a network automatically without user intervention.',
                        'is_correct' => false,
                        'explanation' => 'Automatic network propagation is a defining characteristic of worms. Traditional viruses generally depend on a host file and some form of execution or user interaction.',
                    ],
                    [
                        'answer' => 'A Worm infects executable (.exe) files only when executed by a user.',
                        'is_correct' => false,
                        'explanation' => 'Dependence on host files is more characteristic of traditional viruses, while worms can operate independently.',
                    ],
                ],
            ],
            [
                'question' => 'A customer receives a phone call from someone claiming to be an official from Rastriya Banijya Bank asking for their Mobile Banking PIN for system upgrade verification. This attack technique is called:',
                'options' => [
                    [
                        'answer' => 'Phishing',
                        'is_correct' => false,
                        'explanation' => 'Phishing generally uses fraudulent emails, websites, or similar electronic messages to deceive victims.',
                    ],
                    [
                        'answer' => 'Smishing',
                        'is_correct' => false,
                        'explanation' => 'Smishing is phishing performed through SMS or text messages.',
                    ],
                    [
                        'answer' => 'Vishing',
                        'is_correct' => true,
                        'explanation' => 'Vishing is voice phishing, where an attacker uses a phone call to impersonate a trusted person or organization and obtain sensitive information.',
                    ],
                    [
                        'answer' => 'Pharming',
                        'is_correct' => false,
                        'explanation' => 'Pharming redirects users to fraudulent websites, often through DNS or host-file manipulation, rather than primarily using phone calls.',
                    ],
                ],
            ],
            [
                'question' => 'What distinguishes a Distributed Denial of Service (DDoS) attack from a standard Denial of Service (DoS) attack?',
                'options' => [
                    [
                        'answer' => 'DDoS uses encrypted protocols, while DoS uses unencrypted protocols.',
                        'is_correct' => false,
                        'explanation' => 'Encryption is not what distinguishes DDoS from DoS attacks.',
                    ],
                    [
                        'answer' => 'DDoS utilizes multiple compromised systems (a Botnet) distributed across the internet to flood the target system simultaneously.',
                        'is_correct' => true,
                        'explanation' => 'A DDoS attack originates from many distributed systems, often a botnet, making the attack larger and more difficult to block than a typical single-source DoS attack.',
                    ],
                    [
                        'answer' => 'DoS attacks target only databases, whereas DDoS attacks target web applications.',
                        'is_correct' => false,
                        'explanation' => 'Both DoS and DDoS attacks can target many types of services, servers, networks, and applications.',
                    ],
                    [
                        'answer' => 'DDoS attacks focus on stealing user passwords rather than disrupting availability.',
                        'is_correct' => false,
                        'explanation' => 'DDoS attacks primarily attempt to disrupt availability by overwhelming a target with traffic or requests.',
                    ],
                ],
            ],
            [
                'question' => 'Which stealth malware component is engineered to hide deep within the operating system kernel to disguise the presence of unauthorized files, processes, and administrator access from traditional antivirus software?',
                'options' => [
                    [
                        'answer' => 'Keylogger',
                        'is_correct' => false,
                        'explanation' => 'A keylogger records keystrokes to capture information such as passwords and messages.',
                    ],
                    [
                        'answer' => 'Rootkit',
                        'is_correct' => true,
                        'explanation' => 'A rootkit is designed to conceal malicious files, processes, connections, or privileged access. Kernel-level rootkits operate particularly deeply within the operating system.',
                    ],
                    [
                        'answer' => 'Trojan Horse',
                        'is_correct' => false,
                        'explanation' => 'A Trojan disguises itself as legitimate software to trick users into installing or executing it.',
                    ],
                    [
                        'answer' => 'Logic Bomb',
                        'is_correct' => false,
                        'explanation' => 'A logic bomb activates malicious behavior when a specified condition or trigger occurs.',
                    ],
                ],
            ],
            [
                'question' => 'A user attempts to navigate to www.rbb.com.np, but due to a compromised local DNS cache, the browser is secretly redirected to a identical-looking fraud site. This attack is known as:',
                'options' => [
                    [
                        'answer' => 'Spear Phishing',
                        'is_correct' => false,
                        'explanation' => 'Spear phishing is a targeted social engineering attack, usually involving fraudulent messages designed for a specific victim.',
                    ],
                    [
                        'answer' => 'Typosquatting',
                        'is_correct' => false,
                        'explanation' => 'Typosquatting relies on domains that are deliberately similar to legitimate domains and commonly exploits typing mistakes.',
                    ],
                    [
                        'answer' => 'Pharming',
                        'is_correct' => true,
                        'explanation' => 'Pharming redirects users from a legitimate website address to a fraudulent site, often through compromised DNS information or host-file manipulation.',
                    ],
                    [
                        'answer' => 'Man-in-the-Middle',
                        'is_correct' => false,
                        'explanation' => 'A Man-in-the-Middle attack intercepts communications between parties. The specific DNS-based redirection described here is pharming.',
                    ],
                ],
            ],
            [
                'question' => 'What is the main vision of the ICT Policy of Nepal, 2072 (2015)?',
                'options' => [
                    [
                        'answer' => 'To make Nepal a 100% paperless government by 2020.',
                        'is_correct' => false,
                        'explanation' => 'The ICT Policy contains broader national ICT development objectives rather than limiting its vision to a completely paperless government by 2020.',
                    ],
                    [
                        'answer' => 'To transform Nepal into an information and knowledge-based society through the effective use of ICT.',
                        'is_correct' => true,
                        'explanation' => 'The policy vision emphasizes transforming Nepal into an information and knowledge-based society through the effective development and use of information and communication technology.',
                    ],
                    [
                        'answer' => 'To ban all foreign software and develop local open-source operating systems.',
                        'is_correct' => false,
                        'explanation' => 'The policy promotes ICT development and open standards but does not aim to ban foreign software.',
                    ],
                    [
                        'answer' => 'To establish software parks in every district of Nepal.',
                        'is_correct' => false,
                        'explanation' => 'This is not the main vision of the ICT Policy 2072.',
                    ],
                ],
            ],
            [
                'question' => 'According to the targets outlined in the ICT Policy of Nepal, 2072, what percentage of citizen-facing government services were targeted to be available online by the year 2020?',
                'options' => [
                    [
                        'answer' => '50%',
                        'is_correct' => false,
                        'explanation' => 'The stated ICT Policy target was higher than 50 percent for citizen-facing government services.',
                    ],
                    [
                        'answer' => '75%',
                        'is_correct' => false,
                        'explanation' => 'The policy target for citizen-facing government services was 80 percent, not 75 percent.',
                    ],
                    [
                        'answer' => '80%',
                        'is_correct' => true,
                        'explanation' => 'The ICT Policy of Nepal, 2072 targeted 80 percent of citizen-facing government services to be available online by 2020.',
                    ],
                    [
                        'answer' => '100%',
                        'is_correct' => false,
                        'explanation' => 'The stated target was 80 percent rather than complete 100 percent online availability.',
                    ],
                ],
            ],
            [
                'question' => 'Which high-level body is specified in the ICT Policy of Nepal, 2072 to provide overall policy direction and leadership for ICT development in the country?',
                'options' => [
                    [
                        'answer' => 'Nepal Telecommunications Authority (NTA)',
                        'is_correct' => false,
                        'explanation' => 'NTA is the telecommunications sector regulator and is not the high-level ICT policy leadership council described in the question.',
                    ],
                    [
                        'answer' => 'National Information Technology Center (NITC)',
                        'is_correct' => false,
                        'explanation' => 'NITC has important government ICT implementation and infrastructure responsibilities, but it is not the specified high-level policy council.',
                    ],
                    [
                        'answer' => 'National Information and Communication Technology Council (NICTC)',
                        'is_correct' => true,
                        'explanation' => 'The National Information and Communication Technology Council is specified as the high-level body providing overall policy direction and leadership for ICT development.',
                    ],
                    [
                        'answer' => 'Department of Information Technology (DoIT)',
                        'is_correct' => false,
                        'explanation' => 'DoIT is a government department responsible for ICT-related implementation and services, rather than the highest-level policy leadership body identified here.',
                    ],
                ],
            ],
            [
                'question' => 'The ICT Policy of Nepal, 2072 emphasizes which approach regarding software development within government agencies?',
                'options' => [
                    [
                        'answer' => 'Mandatory adoption of proprietary software only.',
                        'is_correct' => false,
                        'explanation' => 'The policy does not require government agencies to use proprietary software exclusively.',
                    ],
                    [
                        'answer' => 'Promotion of Free and Open Source Software (FOSS) and open standards.',
                        'is_correct' => true,
                        'explanation' => 'The policy promotes Free and Open Source Software and open standards to encourage interoperability, flexibility, and wider ICT adoption.',
                    ],
                    [
                        'answer' => 'Exclusive use of outsourced offshore software.',
                        'is_correct' => false,
                        'explanation' => 'The policy does not mandate exclusive offshore outsourcing for government software development.',
                    ],
                    [
                        'answer' => 'Banning all commercial off-the-shelf software.',
                        'is_correct' => false,
                        'explanation' => 'The policy promotes open-source solutions but does not require an absolute ban on commercial software.',
                    ],
                ],
            ],
            [
                'question' => 'What provision does the ICT Policy of Nepal, 2072 incorporate to handle cyber crimes and enhance trust in digital transactions?',
                'options' => [
                    [
                        'answer' => 'Setting up local physical internet checkpoints.',
                        'is_correct' => false,
                        'explanation' => 'Physical internet checkpoints are not the policy mechanism for addressing cyber crimes and digital trust.',
                    ],
                    [
                        'answer' => 'Establishing a National Cyber Security Center / National Computer Incident Response Team (CIRT).',
                        'is_correct' => true,
                        'explanation' => 'The policy emphasizes institutional mechanisms for cyber security and incident response to address cyber crimes and strengthen confidence in electronic transactions.',
                    ],
                    [
                        'answer' => 'Restricting citizen access to social media networks permanently.',
                        'is_correct' => false,
                        'explanation' => 'The ICT Policy does not establish permanent social media restrictions as its cyber security mechanism.',
                    ],
                    [
                        'answer' => 'Mandating manual paper copies for every online financial transaction.',
                        'is_correct' => false,
                        'explanation' => 'Such a requirement would undermine the objective of increasing trust and adoption of digital services.',
                    ],
                ],
            ],
            [
                'question' => 'As per the Nepal Rastra Bank (NRB) IT Policy and Guidelines, how frequently are Licensed Banks and Financial Institutions (BFIs) required to report all electronic attacks and suspected electronic attacks to Nepal Rastra Bank?',
                'options' => [
                    [
                        'answer' => 'Daily',
                        'is_correct' => false,
                        'explanation' => 'The reporting requirement is not defined as a routine daily report for all electronic attacks.',
                    ],
                    [
                        'answer' => 'Weekly',
                        'is_correct' => false,
                        'explanation' => 'Weekly reporting is not the frequency specified in the question\'s NRB guideline context.',
                    ],
                    [
                        'answer' => 'Monthly',
                        'is_correct' => true,
                        'explanation' => 'The stated NRB IT guideline requirement is that BFIs report electronic attacks and suspected electronic attacks to Nepal Rastra Bank on a monthly basis.',
                    ],
                    [
                        'answer' => 'Annually',
                        'is_correct' => false,
                        'explanation' => 'Annual reporting would not provide sufficiently timely information for monitoring electronic attacks.',
                    ],
                ],
            ],
            [
                'question' => 'According to NRB IT Guidelines, what check must be performed to ensure data integrity and transaction consistency between the Primary Data Center (DC) and Disaster Recovery (DR) site?',
                'options' => [
                    [
                        'answer' => 'Manual physical audit once a year.',
                        'is_correct' => false,
                        'explanation' => 'An annual physical audit is insufficient for continuously verifying synchronization and transaction consistency between DC and DR environments.',
                    ],
                    [
                        'answer' => 'Periodic integrity verification as part of End of Day (EOD) or Beginning of Day (BOD) operations.',
                        'is_correct' => true,
                        'explanation' => 'Periodic integrity and consistency checks during EOD or BOD operations help ensure that data replicated between primary and DR systems remains synchronized and reliable.',
                    ],
                    [
                        'answer' => 'Data checks only during major OS software updates.',
                        'is_correct' => false,
                        'explanation' => 'Data integrity verification should be performed regularly rather than only when operating systems are updated.',
                    ],
                    [
                        'answer' => 'Customer-driven transaction reconciliations.',
                        'is_correct' => false,
                        'explanation' => 'Customer reconciliation may identify individual discrepancies but is not a substitute for formal DC-to-DR integrity verification.',
                    ],
                ],
            ],
            [
                'question' => 'What security mechanism does the NRB IT Guidelines strictly mandate for authenticating customer transactions over online payment channels (Mobile Banking/Internet Banking)?',
                'options' => [
                    [
                        'answer' => 'Single-factor password verification.',
                        'is_correct' => false,
                        'explanation' => 'A single password provides only one authentication factor and does not provide the stronger protection expected for sensitive online banking transactions.',
                    ],
                    [
                        'answer' => 'Two-Factor Authentication (2FA) / Multi-Factor Authentication with dynamic alerts.',
                        'is_correct' => true,
                        'explanation' => '2FA or MFA strengthens transaction authentication by requiring additional verification beyond a password, with dynamic alerts providing additional transaction awareness.',
                    ],
                    [
                        'answer' => 'Security questions only.',
                        'is_correct' => false,
                        'explanation' => 'Security questions alone are generally knowledge-based authentication and do not provide sufficient multi-factor protection.',
                    ],
                    [
                        'answer' => 'Plain SMS notifications without credentials.',
                        'is_correct' => false,
                        'explanation' => 'A notification alone does not authenticate a transaction or establish the identity of the customer.',
                    ],
                ],
            ],
            [
                'question' => 'Under NRB IT Guidelines, what practice is required prior to deploying any critical application/software into the live production environment?',
                'options' => [
                    [
                        'answer' => 'Marketing evaluation of the user interface.',
                        'is_correct' => false,
                        'explanation' => 'UI or marketing evaluation may be useful but does not constitute the required security assurance for critical applications.',
                    ],
                    [
                        'answer' => 'Source code review and vulnerability security assessment/penetration testing.',
                        'is_correct' => true,
                        'explanation' => 'Security assessment, including source code review where applicable and vulnerability or penetration testing, helps identify and address weaknesses before production deployment.',
                    ],
                    [
                        'answer' => 'Submitting code to the Ministry of Communication.',
                        'is_correct' => false,
                        'explanation' => 'Submission of application source code to the ministry is not the stated security prerequisite for production deployment.',
                    ],
                    [
                        'answer' => 'Operating the system for 6 months without password controls.',
                        'is_correct' => false,
                        'explanation' => 'Removing password controls would increase security risk and is contrary to secure deployment practices.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following is an essential physical and environmental control required for Bank Data Centers under NRB IT Guidelines?',
                'options' => [
                    [
                        'answer' => 'High-power external Wi-Fi routers.',
                        'is_correct' => false,
                        'explanation' => 'High-power Wi-Fi routers are not a required physical and environmental security control for a bank data center.',
                    ],
                    [
                        'answer' => 'Redundant power supplies (UPS, Generators), surge protectors, and environmental monitoring (Fire/Temperature).',
                        'is_correct' => true,
                        'explanation' => 'Data centers require resilient power infrastructure and environmental controls such as UPS, generators, surge protection, fire detection/suppression, and temperature monitoring.',
                    ],
                    [
                        'answer' => 'Glass walls for public visibility.',
                        'is_correct' => false,
                        'explanation' => 'Public visibility is not an appropriate physical security requirement for a sensitive bank data center.',
                    ],
                    [
                        'answer' => 'Direct public internet access without firewall controls.',
                        'is_correct' => false,
                        'explanation' => 'Direct public exposure without appropriate security controls would increase the risk of unauthorized access.',
                    ],
                ],
            ],
            [
                'question' => 'According to the NRB Cyber Resilience Guidelines, 2023, what is the key conceptual difference between "Cyber Security" and "Cyber Resilience"?',
                'options' => [
                    [
                        'answer' => 'Cyber Security is for hardware; Cyber Resilience is for software.',
                        'is_correct' => false,
                        'explanation' => 'Both cyber security and cyber resilience apply across hardware, software, people, processes, and organizational systems.',
                    ],
                    [
                        'answer' => 'Cyber Security focuses on preventing attacks; Cyber Resilience encompasses the ability to continuously anticipate, withstand, recover from, and adapt to cyber incidents.',
                        'is_correct' => true,
                        'explanation' => 'Cyber security focuses strongly on protecting systems and preventing or detecting attacks, while cyber resilience extends this capability to anticipating, withstanding, recovering from, and adapting to incidents.',
                    ],
                    [
                        'answer' => 'Cyber Security is optional; Cyber Resilience is mandatory.',
                        'is_correct' => false,
                        'explanation' => 'The distinction is conceptual and does not mean that cyber security is optional.',
                    ],
                    [
                        'answer' => 'Cyber Resilience applies only to third-party vendors.',
                        'is_correct' => false,
                        'explanation' => 'Cyber resilience applies to the organization\'s overall ability to continue operating and recover from cyber incidents, including relevant third-party dependencies.',
                    ],
                ],
            ],
            [
                'question' => 'Under the Cyber Threat Intelligence (CTI) framework of the NRB Cyber Resilience Guidelines 2023, what does the Traffic Light Protocol (TLP) designation \'TLP:RED\' signify when sharing cyber threat intelligence?',
                'options' => [
                    [
                        'answer' => 'Information can be shared publicly on social media.',
                        'is_correct' => false,
                        'explanation' => 'TLP:RED represents the most restrictive sharing category and is not intended for public disclosure.',
                    ],
                    [
                        'answer' => 'Information is restricted strictly to named recipients only and cannot be shared outside the immediate meeting/channel.',
                        'is_correct' => true,
                        'explanation' => 'TLP:RED means the information is highly restricted and should be shared only with specifically designated recipients or within the immediate context in which it was provided.',
                    ],
                    [
                        'answer' => 'Information can be shared freely within the financial sector.',
                        'is_correct' => false,
                        'explanation' => 'Broader sector sharing corresponds to less restrictive TLP classifications, not TLP:RED.',
                    ],
                    [
                        'answer' => 'Information is meant for public awareness campaigns.',
                        'is_correct' => false,
                        'explanation' => 'Public disclosure is inconsistent with the highly restricted nature of TLP:RED information.',
                    ],
                ],
            ],
            [
                'question' => 'In the context of Business Continuity and Disaster Recovery metrics under the NRB Cyber Resilience Guidelines, Recovery Time Objective (RTO) defines:',
                'options' => [
                    [
                        'answer' => 'The maximum acceptable age of data files restored from backup storage (maximum tolerable data loss).',
                        'is_correct' => false,
                        'explanation' => 'This describes Recovery Point Objective (RPO), which concerns the maximum acceptable amount of data loss measured in time.',
                    ],
                    [
                        'answer' => 'The targeted maximum acceptable duration of time system operations can be down after a cyber disruption before business operations must resume.',
                        'is_correct' => true,
                        'explanation' => 'RTO defines the target maximum period within which a disrupted system or business process should be restored after an incident.',
                    ],
                    [
                        'answer' => 'The total monetary cost incurred per hour during a system outage.',
                        'is_correct' => false,
                        'explanation' => 'Downtime cost is a business impact measure, not the definition of RTO.',
                    ],
                    [
                        'answer' => 'The bandwidth speed between the primary DC and DR site.',
                        'is_correct' => false,
                        'explanation' => 'Network bandwidth may affect recovery performance but is not what RTO measures.',
                    ],
                ],
            ],
            [
                'question' => 'What primary operational function does a Security Information and Event Management (SIEM) system perform within a BFI\'s Security Operations Center (SOC)?',
                'options' => [
                    [
                        'answer' => 'Hardening operating system kernel configurations manually.',
                        'is_correct' => false,
                        'explanation' => 'System hardening is a security administration activity, whereas SIEM primarily focuses on centralized security event collection, analysis, and correlation.',
                    ],
                    [
                        'answer' => 'Aggregating, correlating, analyzing log data in real-time across multiple systems to detect security anomalies and threats.',
                        'is_correct' => true,
                        'explanation' => 'A SIEM collects and centralizes logs and security events from multiple systems, correlates them, analyzes activity, and generates alerts for suspicious behavior.',
                    ],
                    [
                        'answer' => 'Generating customer account passwords automatically.',
                        'is_correct' => false,
                        'explanation' => 'Password generation and management are handled by identity and credential management systems, not primarily by SIEM platforms.',
                    ],
                    [
                        'answer' => 'Creating physical backup tapes for long-term vault storage.',
                        'is_correct' => false,
                        'explanation' => 'Backup systems perform data backup and archival. SIEM systems focus on security event monitoring and analysis.',
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
