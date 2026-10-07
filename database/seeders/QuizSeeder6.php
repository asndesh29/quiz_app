<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder6 extends Seeder
{
    public function run(): void
    {

        $quiz = Quiz::create([
            'title' => 'Weekly Booster 6',
            'description' => 'Internet, Networking, Cybersecurity, Cryptography and Database Management MCQs.',
        ]);

        $questions = [
            [
                'question' => 'Which protocol dynamically assigns IP addresses, subnet masks, and default gateways to client devices on a network?',
                'options' => [
                    [
                        'answer' => 'DNS',
                        'is_correct' => false,
                        'explanation' => 'DNS translates domain names into IP addresses; it does not dynamically configure client network settings.',
                    ],
                    [
                        'answer' => 'DHCP',
                        'is_correct' => true,
                        'explanation' => 'DHCP automatically assigns IP addresses, subnet masks, default gateways, and other network configuration parameters to clients.',
                    ],
                    [
                        'answer' => 'ARP',
                        'is_correct' => false,
                        'explanation' => 'ARP maps an IPv4 address to a MAC address on a local network; it does not assign IP addresses.',
                    ],
                    [
                        'answer' => 'ICMP',
                        'is_correct' => false,
                        'explanation' => 'ICMP is used for network diagnostics and error reporting, such as with ping, rather than IP address assignment.',
                    ],
                ],
            ],
            [
                'question' => 'What are the default port numbers used by unencrypted HTTP and encrypted HTTPS protocols respectively?',
                'options' => [
                    [
                        'answer' => '21 and 22',
                        'is_correct' => false,
                        'explanation' => 'Port 21 is commonly used by FTP, while port 22 is used by SSH.',
                    ],
                    [
                        'answer' => '25 and 110',
                        'is_correct' => false,
                        'explanation' => 'Port 25 is traditionally used for SMTP, while port 110 is used by POP3.',
                    ],
                    [
                        'answer' => '80 and 443',
                        'is_correct' => true,
                        'explanation' => 'HTTP normally uses TCP port 80, while HTTPS normally uses TCP port 443 with TLS encryption.',
                    ],
                    [
                        'answer' => '53 and 8080',
                        'is_correct' => false,
                        'explanation' => 'Port 53 is used by DNS. Port 8080 is commonly used as an alternative HTTP or proxy port, not the default HTTPS port.',
                    ],
                ],
            ],
            [
                'question' => 'An employee needs to securely log into and execute commands on a remote Linux server over an untrusted network. Which protocol should be used?',
                'options' => [
                    [
                        'answer' => 'Telnet',
                        'is_correct' => false,
                        'explanation' => 'Telnet transmits credentials and session data without encryption, making it unsuitable for secure remote administration.',
                    ],
                    [
                        'answer' => 'FTP',
                        'is_correct' => false,
                        'explanation' => 'FTP is primarily designed for file transfer and does not provide secure remote command-line administration by itself.',
                    ],
                    [
                        'answer' => 'SSH',
                        'is_correct' => true,
                        'explanation' => 'SSH provides encrypted remote login and command execution, making it suitable for securely administering Linux servers over untrusted networks.',
                    ],
                    [
                        'answer' => 'SNMP',
                        'is_correct' => false,
                        'explanation' => 'SNMP is primarily used for monitoring and managing network devices rather than interactive remote shell access.',
                    ],
                ],
            ],
            [
                'question' => 'Which internet service architecture allows external trusted partners such as suppliers or vendors restricted access to an organization’s internal network?',
                'options' => [
                    [
                        'answer' => 'Intranet',
                        'is_correct' => false,
                        'explanation' => 'An Intranet is primarily intended for authorized internal users within an organization.',
                    ],
                    [
                        'answer' => 'Extranet',
                        'is_correct' => true,
                        'explanation' => 'An Extranet extends controlled access to selected external users such as suppliers, vendors, and business partners.',
                    ],
                    [
                        'answer' => 'Internet',
                        'is_correct' => false,
                        'explanation' => 'The Internet is a global public network and does not specifically provide restricted partner access to an organization.',
                    ],
                    [
                        'answer' => 'Ethernet',
                        'is_correct' => false,
                        'explanation' => 'Ethernet is a networking technology used primarily for local area network communication, not a partner-access architecture.',
                    ],
                ],
            ],
            [
                'question' => 'During web browsing, what is the primary role of a DNS Root Name Server?',
                'options' => [
                    [
                        'answer' => 'Storing the IP address of specific web pages',
                        'is_correct' => false,
                        'explanation' => 'Root servers do not normally store the IP addresses of individual web servers.',
                    ],
                    [
                        'answer' => 'Redirecting the request to the Top-Level Domain (TLD) name server',
                        'is_correct' => true,
                        'explanation' => 'Root DNS servers direct DNS queries toward the appropriate TLD name servers, such as .com or .org.',
                    ],
                    [
                        'answer' => 'Encrypting web page content',
                        'is_correct' => false,
                        'explanation' => 'Encryption of web traffic is normally handled by TLS in HTTPS, not by DNS root servers.',
                    ],
                    [
                        'answer' => 'Hosting the web applications',
                        'is_correct' => false,
                        'explanation' => 'Web applications are hosted on web servers or application servers, not DNS root servers.',
                    ],
                ],
            ],
            [
                'question' => 'Which protocol is primarily responsible for retrieving emails from a mail server to a local mail client and downloading/removing them from the server by default?',
                'options' => [
                    [
                        'answer' => 'SMTP',
                        'is_correct' => false,
                        'explanation' => 'SMTP is primarily used for sending and relaying email rather than retrieving messages from a mailbox.',
                    ],
                    [
                        'answer' => 'IMAP',
                        'is_correct' => false,
                        'explanation' => 'IMAP retrieves and synchronizes messages while normally keeping them stored on the server.',
                    ],
                    [
                        'answer' => 'POP3',
                        'is_correct' => true,
                        'explanation' => 'POP3 is designed to download email messages to a client and traditionally removes them from the server after download by default.',
                    ],
                    [
                        'answer' => 'VoIP',
                        'is_correct' => false,
                        'explanation' => 'VoIP refers to voice communication over IP networks and is unrelated to normal email retrieval.',
                    ],
                ],
            ],
            [
                'question' => 'In cloud computing services, which deployment service model provides the user with complete control over the operating system, storage, and deployed applications, while the cloud provider manages the physical hardware?',
                'options' => [
                    [
                        'answer' => 'Software as a Service (SaaS)',
                        'is_correct' => false,
                        'explanation' => 'In SaaS, the provider manages the application and underlying infrastructure, giving the user much less control over the operating system.',
                    ],
                    [
                        'answer' => 'Platform as a Service (PaaS)',
                        'is_correct' => false,
                        'explanation' => 'PaaS provides a managed application platform, while the provider generally manages the operating system and infrastructure.',
                    ],
                    [
                        'answer' => 'Infrastructure as a Service (IaaS)',
                        'is_correct' => true,
                        'explanation' => 'IaaS provides virtualized computing resources while allowing users significant control over the operating system, storage, and applications.',
                    ],
                    [
                        'answer' => 'Function as a Service (FaaS)',
                        'is_correct' => false,
                        'explanation' => 'FaaS allows users to execute individual functions without managing the underlying servers or operating systems.',
                    ],
                ],
            ],
            [
                'question' => 'What is the total length of an IPv4 address and an IPv6 address in bits, respectively?',
                'options' => [
                    [
                        'answer' => '16 bits and 64 bits',
                        'is_correct' => false,
                        'explanation' => 'Neither IPv4 nor IPv6 uses these address lengths.',
                    ],
                    [
                        'answer' => '32 bits and 64 bits',
                        'is_correct' => false,
                        'explanation' => 'IPv4 is 32 bits, but IPv6 is 128 bits rather than 64 bits.',
                    ],
                    [
                        'answer' => '32 bits and 128 bits',
                        'is_correct' => true,
                        'explanation' => 'An IPv4 address contains 32 bits, while an IPv6 address contains 128 bits.',
                    ],
                    [
                        'answer' => '64 bits and 128 bits',
                        'is_correct' => false,
                        'explanation' => 'IPv6 is 128 bits, but IPv4 is 32 bits rather than 64 bits.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following IP addresses belongs to the Class C Private IP address range?',
                'options' => [
                    [
                        'answer' => '10.0.0.50',
                        'is_correct' => false,
                        'explanation' => '10.0.0.0/8 is a private range traditionally associated with Class A addressing.',
                    ],
                    [
                        'answer' => '172.16.10.1',
                        'is_correct' => false,
                        'explanation' => '172.16.0.0 through 172.31.255.255 is the private range traditionally associated with Class B addressing.',
                    ],
                    [
                        'answer' => '192.168.1.100',
                        'is_correct' => true,
                        'explanation' => '192.168.0.0/16 is the private IPv4 range traditionally associated with Class C networks.',
                    ],
                    [
                        'answer' => '127.0.0.1',
                        'is_correct' => false,
                        'explanation' => '127.0.0.0/8 is reserved for loopback addresses and is not a private LAN range.',
                    ],
                ],
            ],
            [
                'question' => 'A computer system fails to reach a DHCP server and automatically assigns itself an IP address starting with 169.254.x.x. What is this feature called?',
                'options' => [
                    [
                        'answer' => 'NAT',
                        'is_correct' => false,
                        'explanation' => 'NAT translates private and public IP addresses; it does not automatically assign 169.254.x.x addresses.',
                    ],
                    [
                        'answer' => 'CIDR',
                        'is_correct' => false,
                        'explanation' => 'CIDR is a method of representing IP networks and routing prefixes.',
                    ],
                    [
                        'answer' => 'APIPA',
                        'is_correct' => true,
                        'explanation' => 'APIPA automatically assigns a link-local address in the 169.254.0.0/16 range when DHCP configuration fails.',
                    ],
                    [
                        'answer' => 'Loopback',
                        'is_correct' => false,
                        'explanation' => 'Loopback addresses such as 127.0.0.1 are used for communication within the local host.',
                    ],
                ],
            ],
            [
                'question' => 'What is the default subnet mask for a Class B IPv4 network?',
                'options' => [
                    [
                        'answer' => '255.0.0.0',
                        'is_correct' => false,
                        'explanation' => '255.0.0.0 is the traditional default Class A subnet mask.',
                    ],
                    [
                        'answer' => '255.255.0.0',
                        'is_correct' => true,
                        'explanation' => 'The traditional default subnet mask for a Class B network is 255.255.0.0, or /16.',
                    ],
                    [
                        'answer' => '255.255.255.0',
                        'is_correct' => false,
                        'explanation' => '255.255.255.0 is the traditional default subnet mask for a Class C network.',
                    ],
                    [
                        'answer' => '255.255.255.255',
                        'is_correct' => false,
                        'explanation' => '255.255.255.255 represents a host mask with all bits set and is used for limited broadcast, not as a Class B default mask.',
                    ],
                ],
            ],
            [
                'question' => 'In a standard Class C IPv4 address utilizing the default subnet mask of 255.255.255.0, which section of the address typically identifies the specific host device?',
                'options' => [
                    [
                        'answer' => 'The First Octet',
                        'is_correct' => false,
                        'explanation' => 'In the traditional Class C structure, the first three octets identify the network portion.',
                    ],
                    [
                        'answer' => 'The First two octets',
                        'is_correct' => false,
                        'explanation' => 'The first two octets are part of the network portion in a traditional Class C network.',
                    ],
                    [
                        'answer' => 'The entire address',
                        'is_correct' => false,
                        'explanation' => 'The entire address identifies a host and network together, but the host portion specifically is the final octet under a /24 mask.',
                    ],
                    [
                        'answer' => 'The last Octet',
                        'is_correct' => true,
                        'explanation' => 'With a 255.255.255.0 (/24) mask, the first three octets identify the network and the last octet identifies the host.',
                    ],
                ],
            ],
            [
                'question' => 'Which mechanism allows multiple devices on a private local network to share a single public IP address to access the Internet?',
                'options' => [
                    [
                        'answer' => 'DNS',
                        'is_correct' => false,
                        'explanation' => 'DNS resolves domain names to IP addresses and does not provide address sharing.',
                    ],
                    [
                        'answer' => 'ARP',
                        'is_correct' => false,
                        'explanation' => 'ARP resolves IPv4 addresses to MAC addresses on a local network.',
                    ],
                    [
                        'answer' => 'NAT',
                        'is_correct' => true,
                        'explanation' => 'NAT translates private addresses into public addresses, and PAT/NAT overload commonly allows many devices to share one public IP.',
                    ],
                    [
                        'answer' => 'MAC Filtering',
                        'is_correct' => false,
                        'explanation' => 'MAC filtering controls access based on hardware addresses and does not provide public IP sharing.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following IPv4 addresses represents a valid loopback address used for local system testing?',
                'options' => [
                    [
                        'answer' => '0.0.0.0',
                        'is_correct' => false,
                        'explanation' => '0.0.0.0 represents an unspecified address in many contexts rather than a normal loopback address.',
                    ],
                    [
                        'answer' => '127.0.0.1',
                        'is_correct' => true,
                        'explanation' => '127.0.0.1 is the most commonly used IPv4 loopback address for testing communication within the local computer.',
                    ],
                    [
                        'answer' => '255.255.255.255',
                        'is_correct' => false,
                        'explanation' => '255.255.255.255 is the limited broadcast address.',
                    ],
                    [
                        'answer' => '192.168.0.1',
                        'is_correct' => false,
                        'explanation' => '192.168.0.1 is a private network address commonly used by routers, not a loopback address.',
                    ],
                ],
            ],
            [
                'question' => 'What is the fundamental difference between an Intrusion Detection System (IDS) and an Intrusion Prevention System (IPS)?',
                'options' => [
                    [
                        'answer' => 'IDS inspects encrypted traffic, while IPS inspects unencrypted traffic.',
                        'is_correct' => false,
                        'explanation' => 'The primary distinction between IDS and IPS is their response behavior, not simply whether traffic is encrypted.',
                    ],
                    [
                        'answer' => 'IDS functions passively (detects and alerts), while IPS functions inline (detects and actively blocks).',
                        'is_correct' => true,
                        'explanation' => 'An IDS primarily detects suspicious activity and generates alerts, whereas an IPS operates inline and can actively block malicious traffic.',
                    ],
                    [
                        'answer' => 'IDS protects web servers, while IPS protects database servers.',
                        'is_correct' => false,
                        'explanation' => 'Both IDS and IPS can protect different types of systems and networks; their roles are not determined by server type.',
                    ],
                    [
                        'answer' => 'IDS works at Layer 2, while IPS works at Layer 7 exclusively.',
                        'is_correct' => false,
                        'explanation' => 'IDS and IPS technologies can inspect traffic at multiple layers depending on their implementation.',
                    ],
                ],
            ],
            [
                'question' => 'Which type of malware is self-replicating and spreads across computer networks automatically without needing a host program or human action?',
                'options' => [
                    [
                        'answer' => 'Virus',
                        'is_correct' => false,
                        'explanation' => 'A virus generally attaches itself to a host file or program and commonly requires user or program execution to spread.',
                    ],
                    [
                        'answer' => 'Worm',
                        'is_correct' => true,
                        'explanation' => 'A worm is self-replicating malware that can spread automatically across networks without requiring a host program.',
                    ],
                    [
                        'answer' => 'Trojan Horse',
                        'is_correct' => false,
                        'explanation' => 'A Trojan disguises itself as legitimate software but does not inherently self-replicate like a worm.',
                    ],
                    [
                        'answer' => 'Spyware',
                        'is_correct' => false,
                        'explanation' => 'Spyware is designed primarily to monitor or collect information from users and systems.',
                    ],
                ],
            ],
            [
                'question' => 'A banking user receives an urgent email claiming their account is suspended, containing a link to a fraudulent site designed to steal their login credentials. What type of social engineering attack is this?',
                'options' => [
                    [
                        'answer' => 'Denial of Service (DoS)',
                        'is_correct' => false,
                        'explanation' => 'DoS attacks attempt to make a service unavailable by overwhelming or disrupting it.',
                    ],
                    [
                        'answer' => 'Man-in-the-Middle (MitM)',
                        'is_correct' => false,
                        'explanation' => 'A MitM attack involves intercepting or manipulating communication between two parties.',
                    ],
                    [
                        'answer' => 'Phishing',
                        'is_correct' => true,
                        'explanation' => 'Phishing uses deceptive messages and fraudulent websites to trick users into revealing sensitive information such as passwords.',
                    ],
                    [
                        'answer' => 'IP Spoofing',
                        'is_correct' => false,
                        'explanation' => 'IP spoofing involves falsifying the source IP address of network traffic and is not the social engineering technique described.',
                    ],
                ],
            ],
            [
                'question' => 'In the CIA Triad of information security, which principle ensures that data and resources are accessible to authorized users whenever required?',
                'options' => [
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => false,
                        'explanation' => 'Confidentiality ensures that information is accessible only to authorized parties.',
                    ],
                    [
                        'answer' => 'Integrity',
                        'is_correct' => false,
                        'explanation' => 'Integrity ensures that information remains accurate, complete, and protected from unauthorized alteration.',
                    ],
                    [
                        'answer' => 'Availability',
                        'is_correct' => true,
                        'explanation' => 'Availability ensures that authorized users can access systems and information when they need them.',
                    ],
                    [
                        'answer' => 'Authenticity',
                        'is_correct' => false,
                        'explanation' => 'Authenticity concerns verifying that an entity or piece of information is genuine.',
                    ],
                ],
            ],
            [
                'question' => 'An attacker floods a web server with massive volumes of automated traffic from a botnet, causing the server to crash and become unavailable to legitimate customers. What attack is taking place?',
                'options' => [
                    [
                        'answer' => 'Distributed Denial of Service (DDoS)',
                        'is_correct' => true,
                        'explanation' => 'A DDoS attack uses many compromised systems, often a botnet, to overwhelm a target with traffic or requests.',
                    ],
                    [
                        'answer' => 'SQL Injection',
                        'is_correct' => false,
                        'explanation' => 'SQL injection manipulates database queries through malicious input rather than overwhelming a server with distributed traffic.',
                    ],
                    [
                        'answer' => 'Cross-Site Scripting (XSS)',
                        'is_correct' => false,
                        'explanation' => 'XSS injects malicious scripts into web content viewed by users and is not primarily a traffic-flooding attack.',
                    ],
                    [
                        'answer' => 'Brute Force Attack',
                        'is_correct' => false,
                        'explanation' => 'A brute-force attack systematically tries credentials or keys rather than primarily flooding a server from a botnet.',
                    ],
                ],
            ],
            [
                'question' => 'Which network security device filters incoming and outgoing traffic based on predefined security rules?',
                'options' => [
                    [
                        'answer' => 'Repeater',
                        'is_correct' => false,
                        'explanation' => 'A repeater regenerates network signals and does not normally filter traffic according to security policies.',
                    ],
                    [
                        'answer' => 'Network Switch',
                        'is_correct' => false,
                        'explanation' => 'A switch forwards Ethernet frames primarily based on MAC addresses and is not primarily a security filtering device.',
                    ],
                    [
                        'answer' => 'Firewall',
                        'is_correct' => true,
                        'explanation' => 'A firewall controls network traffic according to predefined security rules and can block unauthorized connections.',
                    ],
                    [
                        'answer' => 'Network Bridge',
                        'is_correct' => false,
                        'explanation' => 'A bridge connects network segments at the Data Link layer and is not primarily designed for security-policy enforcement.',
                    ],
                ],
            ],
            [
                'question' => 'Which security mechanism verifies a user’s identity before granting access to a banking system?',
                'options' => [
                    [
                        'answer' => 'Authorization',
                        'is_correct' => false,
                        'explanation' => 'Authorization determines what an authenticated user is allowed to access or perform.',
                    ],
                    [
                        'answer' => 'Accounting',
                        'is_correct' => false,
                        'explanation' => 'Accounting records and tracks user activity and resource usage.',
                    ],
                    [
                        'answer' => 'Authentication',
                        'is_correct' => true,
                        'explanation' => 'Authentication verifies the identity of a user before access is granted.',
                    ],
                    [
                        'answer' => 'Encryption',
                        'is_correct' => false,
                        'explanation' => 'Encryption protects data by transforming it into an unreadable form without the appropriate key.',
                    ],
                ],
            ],
            [
                'question' => 'Which cryptographic technique uses a single secret key for both encryption and decryption of data?',
                'options' => [
                    [
                        'answer' => 'Asymmetric Encryption',
                        'is_correct' => false,
                        'explanation' => 'Asymmetric encryption uses a related public and private key pair rather than one shared secret key.',
                    ],
                    [
                        'answer' => 'Symmetric Encryption',
                        'is_correct' => true,
                        'explanation' => 'Symmetric encryption uses the same secret key, or equivalent shared secret material, for encryption and decryption.',
                    ],
                    [
                        'answer' => 'Public Key Infrastructure',
                        'is_correct' => false,
                        'explanation' => 'PKI is a framework for managing public keys, certificates, identities, and trust relationships.',
                    ],
                    [
                        'answer' => 'Hashing',
                        'is_correct' => false,
                        'explanation' => 'Hashing is generally a one-way transformation and does not use a reversible encryption/decryption process.',
                    ],
                ],
            ],
            [
                'question' => 'Which of the following algorithms is classified as an Asymmetric Cryptographic Algorithm?',
                'options' => [
                    [
                        'answer' => 'AES (Advanced Encryption Standard)',
                        'is_correct' => false,
                        'explanation' => 'AES is a symmetric-key encryption algorithm.',
                    ],
                    [
                        'answer' => 'DES (Data Encryption Standard)',
                        'is_correct' => false,
                        'explanation' => 'DES is a symmetric-key block cipher.',
                    ],
                    [
                        'answer' => 'RSA (Rivest–Shamir–Adleman)',
                        'is_correct' => true,
                        'explanation' => 'RSA is an asymmetric cryptographic algorithm that uses a public key and a private key.',
                    ],
                    [
                        'answer' => 'Blowfish',
                        'is_correct' => false,
                        'explanation' => 'Blowfish is a symmetric-key block cipher.',
                    ],
                ],
            ],
            [
                'question' => 'A receiver wants to verify that a downloaded file has not been altered or tampered with during transmission. Which cryptographic method should be applied?',
                'options' => [
                    [
                        'answer' => 'Symmetric Encryption',
                        'is_correct' => false,
                        'explanation' => 'Symmetric encryption primarily provides confidentiality rather than direct file-integrity verification.',
                    ],
                    [
                        'answer' => 'Cryptographic Hash Function (e.g., SHA-256)',
                        'is_correct' => true,
                        'explanation' => 'A cryptographic hash produces a fixed-length digest that can be compared with a trusted value to detect changes to the file.',
                    ],
                    [
                        'answer' => 'Stream Cipher',
                        'is_correct' => false,
                        'explanation' => 'A stream cipher provides encryption and confidentiality rather than being the standard method for directly verifying file integrity.',
                    ],
                    [
                        'answer' => 'Key Exchange Protocol',
                        'is_correct' => false,
                        'explanation' => 'Key exchange protocols establish cryptographic keys and do not themselves provide a file-integrity digest.',
                    ],
                ],
            ],
            [
                'question' => 'In a Digital Signature system, which key does the sender use to sign the message/digest?',
                'options' => [
                    [
                        'answer' => 'Sender’s Public Key',
                        'is_correct' => false,
                        'explanation' => 'The sender’s public key is normally used by recipients to verify the digital signature.',
                    ],
                    [
                        'answer' => 'Sender’s Private Key',
                        'is_correct' => true,
                        'explanation' => 'The sender uses their private key to create the digital signature, which can then be verified using the corresponding public key.',
                    ],
                    [
                        'answer' => 'Receiver’s Public Key',
                        'is_correct' => false,
                        'explanation' => 'The receiver’s public key may be used for encryption, but it is not used by the sender to create the sender’s digital signature.',
                    ],
                    [
                        'answer' => 'Receiver’s Private Key',
                        'is_correct' => false,
                        'explanation' => 'The receiver’s private key must remain secret and is not used by the sender to sign a message.',
                    ],
                ],
            ],
            [
                'question' => 'Which fundamental security service ensures that a sender cannot later deny having sent a specific message?',
                'options' => [
                    [
                        'answer' => 'Confidentiality',
                        'is_correct' => false,
                        'explanation' => 'Confidentiality prevents unauthorized disclosure of information.',
                    ],
                    [
                        'answer' => 'Non-repudiation',
                        'is_correct' => true,
                        'explanation' => 'Non-repudiation provides evidence that supports the origin or receipt of a message and prevents a party from credibly denying the action later.',
                    ],
                    [
                        'answer' => 'Availability',
                        'is_correct' => false,
                        'explanation' => 'Availability ensures authorized access to systems and data when required.',
                    ],
                    [
                        'answer' => 'Authorization',
                        'is_correct' => false,
                        'explanation' => 'Authorization determines what an authenticated user is permitted to do.',
                    ],
                ],
            ],
            [
                'question' => 'What key difference distinguishes a Cryptographic Hash Function from an Encryption Algorithm?',
                'options' => [
                    [
                        'answer' => 'Hash functions use asymmetric keys, while encryption uses symmetric keys.',
                        'is_correct' => false,
                        'explanation' => 'Cryptographic hash functions generally do not work as reversible encryption algorithms and do not require an encryption key in the usual sense.',
                    ],
                    [
                        'answer' => 'Hashing is a one-way mathematical function (irreversible), while encryption is a two-way function (reversible).',
                        'is_correct' => true,
                        'explanation' => 'Hashing is designed to be computationally one-way, while encryption is designed to allow authorized recovery of the original plaintext.',
                    ],
                    [
                        'answer' => 'Hashing produces variable-length output, while encryption produces fixed-length output.',
                        'is_correct' => false,
                        'explanation' => 'Cryptographic hashes normally produce fixed-length digests, while encryption ciphertext length generally depends on the input and algorithm.',
                    ],
                    [
                        'answer' => 'Encryption provides integrity, while hashing provides confidentiality.',
                        'is_correct' => false,
                        'explanation' => 'Encryption primarily provides confidentiality, while hashing is commonly used to support integrity verification.',
                    ],
                ],
            ],
            [
                'question' => 'What primary role does a Certification Authority (CA) play within a Public Key Infrastructure (PKI)?',
                'options' => [
                    [
                        'answer' => 'Generating symmetric session keys for clients',
                        'is_correct' => false,
                        'explanation' => 'A CA primarily establishes trust by issuing and validating digital certificates rather than generating all client session keys.',
                    ],
                    [
                        'answer' => 'Storing backup copies of users’ private keys',
                        'is_correct' => false,
                        'explanation' => 'A CA should not generally serve as a backup repository for users’ private keys.',
                    ],
                    [
                        'answer' => 'Digitally issuing and validating X.509 Digital Certificates to verify public key ownership',
                        'is_correct' => true,
                        'explanation' => 'A CA issues and signs digital certificates that bind identities to public keys and establish trust within PKI.',
                    ],
                    [
                        'answer' => 'Filtering encrypted network packets',
                        'is_correct' => false,
                        'explanation' => 'Filtering network traffic is normally performed by firewalls or other network security systems, not certification authorities.',
                    ],
                ],
            ],
            [
                'question' => 'In a Relational Database Management System (RDBMS), which attribute or set of attributes uniquely identifies each record/tuple in a table?',
                'options' => [
                    [
                        'answer' => 'Foreign Key',
                        'is_correct' => false,
                        'explanation' => 'A foreign key references a key in another table and does not necessarily uniquely identify records in its own table.',
                    ],
                    [
                        'answer' => 'Alternate Key',
                        'is_correct' => false,
                        'explanation' => 'An alternate key is a candidate key that was not selected as the primary key.',
                    ],
                    [
                        'answer' => 'Primary Key',
                        'is_correct' => true,
                        'explanation' => 'A primary key uniquely identifies each record in a relational table and cannot contain duplicate values.',
                    ],
                    [
                        'answer' => 'Super Key without uniqueness',
                        'is_correct' => false,
                        'explanation' => 'A super key must uniquely identify tuples; a set that lacks uniqueness cannot be considered a super key.',
                    ],
                ],
            ],
            [
                'question' => 'Which SQL command category includes commands such as CREATE, ALTER, and DROP?',
                'options' => [
                    [
                        'answer' => 'Data Manipulation Language (DML)',
                        'is_correct' => false,
                        'explanation' => 'DML is used to manipulate data, commonly through commands such as SELECT, INSERT, UPDATE, and DELETE.',
                    ],
                    [
                        'answer' => 'Data Definition Language (DDL)',
                        'is_correct' => true,
                        'explanation' => 'DDL defines and modifies database structures and includes commands such as CREATE, ALTER, and DROP.',
                    ],
                    [
                        'answer' => 'Data Control Language (DCL)',
                        'is_correct' => false,
                        'explanation' => 'DCL manages database access permissions through commands such as GRANT and REVOKE.',
                    ],
                    [
                        'answer' => 'Transaction Control Language (TCL)',
                        'is_correct' => false,
                        'explanation' => 'TCL manages transactions using commands such as COMMIT, ROLLBACK, and SAVEPOINT.',
                    ],
                ],
            ],
            [
                'question' => 'Which normalization form requires a table to be in 1NF and ensure that all non-key attributes are fully functionally dependent on the primary key, eliminating partial dependencies?',
                'options' => [
                    [
                        'answer' => 'First Normal Form (1NF)',
                        'is_correct' => false,
                        'explanation' => '1NF primarily requires atomic values and elimination of repeating groups; it does not eliminate partial dependencies.',
                    ],
                    [
                        'answer' => 'Second Normal Form (2NF)',
                        'is_correct' => true,
                        'explanation' => '2NF requires 1NF and ensures that non-key attributes are fully functionally dependent on the entire candidate key, eliminating partial dependencies.',
                    ],
                    [
                        'answer' => 'Third Normal Form (3NF)',
                        'is_correct' => false,
                        'explanation' => '3NF additionally addresses transitive dependencies among non-key attributes.',
                    ],
                    [
                        'answer' => 'Boyce-Codd Normal Form (BCNF)',
                        'is_correct' => false,
                        'explanation' => 'BCNF is stricter than 3NF and requires every determinant to be a candidate key.',
                    ],
                ],
            ],
            [
                'question' => 'A foreign key constraint in an RDBMS enforces which database integrity rule?',
                'options' => [
                    [
                        'answer' => 'Entity Integrity',
                        'is_correct' => false,
                        'explanation' => 'Entity integrity primarily requires primary key values to uniquely identify records and not be NULL.',
                    ],
                    [
                        'answer' => 'Domain Integrity',
                        'is_correct' => false,
                        'explanation' => 'Domain integrity ensures that column values conform to their defined data types, ranges, and constraints.',
                    ],
                    [
                        'answer' => 'Referential Integrity',
                        'is_correct' => true,
                        'explanation' => 'A foreign key enforces referential integrity by ensuring that referenced values correspond to valid records in the related table, subject to the defined constraint rules.',
                    ],
                    [
                        'answer' => 'User-Defined Integrity',
                        'is_correct' => false,
                        'explanation' => 'User-defined integrity consists of application-specific rules and is not the primary purpose of foreign key constraints.',
                    ],
                ],
            ],
            [
                'question' => 'Which SQL clause is used to filter records resulting from an aggregate function like COUNT() or SUM()?',
                'options' => [
                    [
                        'answer' => 'WHERE',
                        'is_correct' => false,
                        'explanation' => 'WHERE filters individual rows before grouping and aggregation takes place.',
                    ],
                    [
                        'answer' => 'GROUP BY',
                        'is_correct' => false,
                        'explanation' => 'GROUP BY creates groups of rows for aggregate calculations but does not itself filter the resulting groups.',
                    ],
                    [
                        'answer' => 'HAVING',
                        'is_correct' => true,
                        'explanation' => 'HAVING filters groups after aggregation and is therefore used with aggregate conditions such as COUNT() or SUM().',
                    ],
                    [
                        'answer' => 'ORDER BY',
                        'is_correct' => false,
                        'explanation' => 'ORDER BY sorts the resulting rows and does not filter aggregate groups.',
                    ],
                ],
            ],
            [
                'question' => 'In database transaction processing, which ACID property guarantees that all operations within a transaction complete successfully, or the transaction is completely aborted (All-or-Nothing rule)?',
                'options' => [
                    [
                        'answer' => 'Atomicity',
                        'is_correct' => true,
                        'explanation' => 'Atomicity guarantees that a transaction is treated as one indivisible unit: either all operations succeed or none of them are applied.',
                    ],
                    [
                        'answer' => 'Consistency',
                        'is_correct' => false,
                        'explanation' => 'Consistency ensures that a completed transaction moves the database from one valid state to another valid state.',
                    ],
                    [
                        'answer' => 'Isolation',
                        'is_correct' => false,
                        'explanation' => 'Isolation controls how concurrently executing transactions interact with each other.',
                    ],
                    [
                        'answer' => 'Durability',
                        'is_correct' => false,
                        'explanation' => 'Durability ensures that committed transaction results persist even after failures such as a system crash.',
                    ],
                ],
            ],
            [
                'question' => 'Given a database relation EMPLOYEE(Emp_ID, Name, Salary, Dept_ID) where Emp_ID is the Primary Key, which SQL query calculates the average salary of employees in Department 10?',
                'options' => [
                    [
                        'answer' => 'SELECT AVG(Salary) FROM EMPLOYEE WHERE Dept_ID = 10;',
                        'is_correct' => true,
                        'explanation' => 'The WHERE clause selects employees in Department 10 and AVG(Salary) calculates their average salary.',
                    ],
                    [
                        'answer' => 'SELECT Salary FROM EMPLOYEE HAVING Dept_ID = 10;',
                        'is_correct' => false,
                        'explanation' => 'HAVING is intended for filtering grouped or aggregated results and this query does not correctly calculate the average salary.',
                    ],
                    [
                        'answer' => 'SELECT SUM(Salary)/COUNT(*) FROM EMPLOYEE GROUP BY Dept_ID = 10;',
                        'is_correct' => false,
                        'explanation' => 'The GROUP BY syntax is incorrect for filtering Department 10; a WHERE condition should be used before aggregation.',
                    ],
                    [
                        'answer' => 'SELECT AVG(Salary) FROM EMPLOYEE GROUP BY Name;',
                        'is_correct' => false,
                        'explanation' => 'Grouping by Name calculates separate averages for each name and does not restrict the calculation to Department 10.',
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
