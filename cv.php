<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: #00008B; 
            color: white;
            padding: 2rem;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        header p {
            font-size: 1.2rem;
        }

        .container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 2rem;
        }

        section h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #4CAF70;
        }

        section ul {
            list-style: none;
            padding: 0;
        }

        section ul li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #ddd;
        }

        section ul li:last-child {
            border-bottom: none;
        }

        footer {
            text-align: center;
            margin-top: 2rem;
            padding: 1rem 0;
            background: #333;
            color: white;
        }

        .highlight {
            font-weight: bold;
            color: #4CAF70;
        }

        .btn {
            background-color: #4CAF70;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 2rem;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Curriculum Vitae</h1>
        <p>mhdzan0702@gmail.com  | IG: pgrnzan_ | 082237068987 | Sewon, Bantul</p>
        <button class="btn" onclick="toggleLanguage()">Switch to Bahasa Indonesia</button>
    </header>
    <div class="container">
        <section>
            <h2 id="about-title">About Me</h2>
            <p id="about-content">
                I am a graduate with a Bachelor's degree in Computer Science, possessing high attention to detail, analytical skills, and an understanding of data management and technology. I completed a 4-year study program.
                During my studies, I became proficient in data processing using various software tools, with a high level of analysis, and strong communication skills when interacting with teams or project clients.
                I am committed to providing excellent service in line with company principles, while supporting operational efficiency as an employee.
            </p>
        </section>

        <section>
            <h2 id="education-title">Education</h2>
            <ul>
                <li>Universitas Ahmad Dahlan - Informatics (2020-2024)</li>
            </ul>
        </section>

        <section>
            <h2 id="experience-title">Experience</h2>
            <ul>
                <li><strong>Data Visualization</strong> - BPS Kab. Bima (2023)</li>
                <ul>
                    <li>Mapping the map</li>
                    <li>Trainer for IT office maintenance</li>
                    <li>Analyzing statistical data</li>
                    <li>Visualizing statistical data</li>
                </ul>
                <li><strong>Project Management and Application Design</strong> - Tria Store (2024)</li>
                <ul>
                    <li>Designing UI/UX systems</li>
                    <li>Managing the team as secretary</li>
                    <li>Front-end programming</li>
                </ul>
            </ul>
        </section>

        <section>
            <h2 id="organization-title">Organization</h2>
            <ul>
                <li><strong>Forum Anak Kab. Bima</strong> - President and Facilitator (2020-2021)</li>
                <ul>
                    <li>Facilitated mediation with the Regent and Government</li>
                    <li>Speaker at child protection events</li>
                </ul>
                <li><strong>Green Campus Community UAD</strong> - Head of Media Division (2022-2023)</li>
                <ul>
                    <li>Lead the environmental campaign program in DLH D.I.Yogyakarta</li>
                    <li>Study visit with GCC IPB</li>
                </ul>
            </ul>
        </section>

        <section>
            <h2 id="skills-title">Skills</h2>
            <ul>
                <li>Data Applications and Processing (Microsoft Office, Network, and System)</li>
                <li>Multitasking (Able to handle various administrative tasks and transactions simultaneously)</li>
                <li>Leadership and Good Communication in project presentations and management</li>
                <li>Data Analysis (calculating, recording, and verifying transactions with high accuracy)</li>
                <li>Digital and Visual Design (UI/UX)</li>
            </ul>
        </section>
    </div>
    <footer>
        <p>&copy; 2025 M Fauzan. All rights reserved.</p>
    </footer>

    <script>
        function toggleLanguage() {
            var aboutTitle = document.getElementById('about-title');
            var aboutContent = document.getElementById('about-content');
            var educationTitle = document.getElementById('education-title');
            var experienceTitle = document.getElementById('experience-title');
            var organizationTitle = document.getElementById('organization-title');
            var skillsTitle = document.getElementById('skills-title');

            if (aboutTitle.innerHTML === "About Me") {
                // Switch to Bahasa Indonesia
                aboutTitle.innerHTML = "Tentang Saya";
                aboutContent.innerHTML = `
                    Saya adalah lulusan Sarjana Komputer yang memiliki ketelitian tinggi, kemampuan analitis, serta pemahaman dalam manajemen data dan teknologi. Saya telah menyelesaikan studi selama 4 tahun. 
                    Selama masa studi, saya terbiasa dengan pengolahan data menggunakan berbagai perangkat lunak, tingkat analisis yang tinggi, serta memiliki kemampuan komunikasi yang baik dalam berinteraksi dengan tim maupun klien proyek.
                    Saya berkomitmen untuk memberikan pelayanan prima sesuai prinsip perusahaan, serta mendukung efisiensi operasional sebagai pegawai.
                `;
                educationTitle.innerHTML = "Pendidikan";
                experienceTitle.innerHTML = "Pengalaman";
                organizationTitle.innerHTML = "Organisasi";
                skillsTitle.innerHTML = "Keahlian";
                document.querySelector('.btn').innerHTML = "Switch to English";
            } else {
                // Switch to English
                aboutTitle.innerHTML = "About Me";
                aboutContent.innerHTML = `
                    I am a graduate with a Bachelor's degree in Computer Science, possessing high attention to detail, analytical skills, and an understanding of data management and technology. I completed a 4-year study program.
                    During my studies, I became proficient in data processing using various software tools, with a high level of analysis, and strong communication skills when interacting with teams or project clients.
                    I am committed to providing excellent service in line with company principles, while supporting operational efficiency as an employee.
                `;
                educationTitle.innerHTML = "Education";
                experienceTitle.innerHTML = "Experience";
                organizationTitle.innerHTML = "Organization";
                skillsTitle.innerHTML = "Skills";
                document.querySelector('.btn').innerHTML = "Switch to Bahasa Indonesia";
            }
        }
    </script>
</body>
</html>
