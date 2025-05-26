<?php
include '_header.php';

$RESSOURCES_DIV = "ressources";
$IMAGES_DIV = "$RESSOURCES_DIV/images";
$DOCS_DIV = "$RESSOURCES_DIV/documentations";
$ATTEST_DIV = "$RESSOURCES_DIV/attestations";
?>

<section id="apropos">
    <h2>À propos</h2>
    <div class="photo-circle"><img src="<?= $IMAGES_DIV ?>/photo.png" alt="Photo"></div>
    <p>Étudiant en deuxième année de BTS SIO, curieux et passionné, je développe mes compétences en développement web, programmation et gestion de projets informatiques. Mon objectif est de devenir un développeur polyvalent capable de créer des solutions innovantes et efficaces. À travers mes études et mes réalisations professionnel, j'ai acquis un raisonnement solide et le sens de répondre aux problèmes techniques de manière structurée et efficace en solo ou en équipe.</p>
    <div class="boutons">
        <a href="https://www.linkedin.com/in/ronald-marthin-pina-guillen-69a0b7339?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BY5GNg8YrR3yIhhZC4z8WsQ%3D%3D" target="_blank" rel="noopener noreferrer" class="linkedin"><i class="fab fa-linkedin"></i> LinkedIn</a>
        <a href="https://github.com/RonaldPhub" target="_blank" rel="noopener noreferrer" class="github"><i class="fab fa-github"></i> GitHub</a>
        <a href="<?= $DOCS_DIV ?>/cv.pdf" target="_blank" rel="noopener noreferrer" class="cv"><i class="fas fa-file-download"></i> Télécharger CV</a>
    </div>
</section>

<section id="competences">
    <h2>Compétences</h2>
    <div class="competence-domain">
        <h4>Conception et développement d’applications</h4>
        <div class="competence-items">
            <div class="item"><img src="<?= $IMAGES_DIV ?>/vscode.png" alt="VSCode"><span>VSCode (IDE)</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/netbeans.png" alt="NetBeans"><span>NetBeans (IDE)</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/codeigniter.png" alt="CodeIgniter"><span>CodeIgniter (Framework)</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/prestashop.png" alt="Prestashop"><span>Prestashop (CMS)</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/wampserver.png" alt="Wampserver"><span>Wampserver</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/windesign.png" alt="WinDesign"><span>WinDesign (UML)</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/design-pattern.png" alt="Design Pattern"><span>Design Pattern</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/api.png" alt="API REST"><span>API REST</span></div>
        </div>
    </div>
    <div class="competence-domain">
        <h4>Gestion de version</h4>
        <div class="competence-items">
            <div class="item"><img src="<?= $IMAGES_DIV ?>/github.png" alt="GitHub"><span>GitHub</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/gitlab.png" alt="GitLab"><span>GitLab</span></div>
        </div>
    </div>
    <div class="competence-domain">
        <h4>Maintenance corrective</h4>
        <div class="competence-items">
            <div class="item"><img src="<?= $IMAGES_DIV ?>/sonarlint.png" alt="SonarLint"><span>SonarLint</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/junit.png" alt="JUnit"><span>JUnit</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/phpunit.png" alt="PHPUnit"><span>PHPUnit</span></div>
        </div>
    </div>
    <div class="competence-domain">
        <h4>Gestion et conception de la base de données</h4>
        <div class="competence-items">
            <div class="item"><img src="<?= $IMAGES_DIV ?>/mysql.png" alt="MySQL"><span>MySQL</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/postgresql.png" alt="PostgreSQL"><span>PostgreSQL</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/mongodb.png" alt="MongoDB"><span>MongoDB</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/phpmyadmin.png" alt="phpMyAdmin"><span>phpMyAdmin</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/windesign.png" alt="WinDesign (MCD)"><span>WinDesign (MCD)</span></div>
        </div>
    </div>
    <div class="competence-domain">
        <h4>Cybersécurité</h4>
        <div class="competence-items">
            <div class="item"><img src="<?= $IMAGES_DIV ?>/packettracer.png" alt="Cisco Packet Tracer"><span>Cisco Packet Tracer</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/rgpd.png" alt="RGPD"><span>RGPD</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/wireshark.png" alt="Wireshark"><span>Wireshark</span></div>
        </div>
    </div>
    <div class="competence-domain">
        <h4>Système et réseau</h4>
        <div class="competence-items">
            <div class="item"><img src="<?= $IMAGES_DIV ?>/azure.png" alt="Azure Cloud"><span>Azure Cloud</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/glpi.png" alt="GLPI"><span>GLPI</span></div>
        </div>
    </div>
    <div class="competence-domain">
        <h4>Gestion de projets</h4>
        <div class="competence-items">
            <div class="item"><img src="<?= $IMAGES_DIV ?>/project.png" alt="MS Project"><span>MS Project</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/scrum.png" alt="Agile SCRUM"><span>Méthode SCRUM</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/cascade.png" alt="Cascade"><span>Méthode Cascade</span></div>
        </div>
    </div>
    <div class="competence-domain">
        <h4>Langage de programmation</h4>
        <div class="competence-items">
            <div class="item"><img src="<?= $IMAGES_DIV ?>/csharp.png" alt="C#"><span>C#</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/java.png" alt="Java"><span>Java</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/javascript.png" alt="JavaScript"><span>JavaScript</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/php.png" alt="PHP"><span>PHP</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/python.png" alt="Python"><span>Python</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/jquery.png" alt="jQuery"><span>jQuery</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/shell.png" alt="Shell script"><span>Shell script</span></div>
        </div>
    </div>
    <div class="competence-domain">
        <h4>Bureautique</h4>
        <div class="competence-items">
            <div class="item"><img src="<?= $IMAGES_DIV ?>/libreoffice.png" alt="LibreOffice"><span>Suite LibreOffice</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/office.png" alt="Microsoft Office"><span>Suite Microsoft Office</span></div>
        </div>
    </div>
    <div class="competence-domain">
        <h4>Environnement</h4>
        <div class="competence-items">
            <div class="item"><img src="<?= $IMAGES_DIV ?>/windows.png" alt="Windows"><span>Windows</span></div>
            <div class="item"><img src="<?= $IMAGES_DIV ?>/linux.png" alt="Linux"><span>Linux</span></div>
        </div>
    </div>
    <a href="<?= $DOCS_DIV ?>/tableau-synthese.pdf" target="_blank" rel="noopener noreferrer" class="competence-button"><i class="fas fa-table"></i> Tableau de compétences</a>
</section>

<section id="formation">
    <h2>Formation</h2>
    <p>Mon parcours académique en informatique, me permettant d'acquérir les compétences techniques et théoriques nécessaires pour évoluer dans le domaine du développement.</p>
    <div class="formation-card">
        <h3>2024–2025 BTS SIO (Services Informatiques aux Organisations) – option SLAM (en cours de 2ème année)</h3>
        <div class="formation-meta">
            <i class="far fa-calendar-alt"></i>2023 - 2025
            <i class="fas fa-map-marker-alt"></i>Lycée Claude Nougaro, 82300 Caussade
        </div>
        <h4>Compétences acquises</h4>
        <ul class="description">
            <li>Analyser un cahier des charges, choisir une solution technique adaptée.</li>
            <li>Concevoir et modéliser l'architecture technique d'une application à l'aide de diagrammes UML et MCD.</li>
            <li>Communiquer avec une base de données pour stocker et requêter des informations.</li>
            <li>Développer de manière professionnelle grâce au framework web CodeIgniter sous l'architecture MVC.</li>
            <li>Développer des applications lourdes.</li>
            <li>Mettre en œuvre des tests unitaires et fonctionnels.</li>
            <li>Produire une documentation technique et fonctionnelle.</li>
        </ul>
    </div>
    <div class="formation-buttons">
        <a href="<?= $ATTEST_DIV ?>/pix.pdf" target="_blank" rel="noopener noreferrer" class="btn-link pix"><i class="fas fa-certificate"></i>Certificat PIX</a>
        <a href="<?= $ATTEST_DIV ?>/anssi.pdf" target="_blank" rel="noopener noreferrer" class="btn-link anssi"><i class="fas fa-certificate"></i>Certificat ANSSI</a>
    </div>
</section>

<section id="realisations">
    <h2>Réalisation</h2>
    <p class="intro">Découvrez mes projets réalisés dans le cadre de ma formation et de mes initiatives personnelles.</p>

    <div class="realisations-category">
        <h3><span class="dot blue"></span>Atelier professionnel</h3>
        <div class="card-grid">
            <!-- Atelier pro 1 -->
            <div class="card">
                <div class="image-placeholder"><img src="<?= $IMAGES_DIV ?>/ap1.png"></div>
                <div class="card-body">
                    <h4>Site e-commerce destiné à une confiturerie sous un CMS (10 semaines)</h4>
                    <div class="meta"><i class="far fa-calendar-alt"></i> 2023 <i class="fas fa-map-marker-alt"></i> Lycée Claude Nougaro, 82300 Caussade</div>
                    <p>Mise en place d'un site e-commerce destiné à une confiturerie sous un CMS.</p>
                    <div class="tags"><span>CMS (PrestaShop)</span></div>
                    <div class="card-actions"><a href="<?= $DOCS_DIV ?>/ap1.pdf" target="_blank" rel="noopener noreferrer" class="pdf"><i class="fas fa-file-download"></i>Documentation</a></div>
                </div>
            </div>
            <!-- Atelier pro 2 -->
            <div class="card">
                <div class="image-placeholder"><img src="<?= $IMAGES_DIV ?>/ap2.png"></div>
                <div class="card-body">
                    <h4>Gestionnaire d'un service trombinoscope (15 semaines)</h4>
                    <div class="meta"><i class="far fa-calendar-alt"></i> 2024 <i class="fas fa-map-marker-alt"></i> Lycée Claude Nougaro, 82300 Caussade</div>
                    <p>Développement d'un service trombinoscope pour une application web.</p>
                    <div class="tags"><span>GitHub</span><span>VSCode</span><span>PHP</span><span>HTML/CSS</span><span>MySQL</span></div>
                    <div class="card-actions"><a href="<?= $DOCS_DIV ?>/ap2.pdf" target="_blank" rel="noopener noreferrer" class="pdf"><i class="fas fa-file-download"></i>Documentation</a></div>
                </div>
            </div>
            <!-- Atelier pro 3 -->
            <div class="card">
                <div class="image-placeholder"><img src="<?= $IMAGES_DIV ?>/ap3.png"></div>
                <div class="card-body">
                    <h4>Gestionnaire de mission SSII (13 semaines)</h4>
                    <div class="meta"><i class="far fa-calendar-alt"></i> 2024 <i class="fas fa-map-marker-alt"></i> Lycée Claude Nougaro, 82300 Caussade</div>
                    <p>Développement d'un gestionnaire de mission SSII pour une application web.</p>
                    <div class="tags"><span>GitHub</span><span>VSCode</span><span>PHP</span><span>HTML/CSS</span><span>MySQL</span><span>Architecture MVC</span></div>
                    <div class="card-actions"><a href="<?= $DOCS_DIV ?>/ap3.pdf" target="_blank" rel="noopener noreferrer" class="pdf"><i class="fas fa-file-download"></i>Documentation</a></div>
                </div>
            </div>
            <!-- Atelier pro 4 -->
            <div class="card">
                <div class="image-placeholder"><img src="<?= $IMAGES_DIV ?>/ap4.png"></div>
                <div class="card-body">
                    <h4>Gestionnaire d'utilisateurs (9 semaines)</h4>
                    <div class="meta"><i class="far fa-calendar-alt"></i> 2025 <i class="fas fa-map-marker-alt"></i> Lycée Claude Nougaro, 82300 Caussade</div>
                    <p>Développement d'un gestionnaire d'utilisateurs pour une application lourde.</p>
                    <div class="tags"><span>GitHub</span><span>NetBeans</span><span>Java</span><span>MySQL</span><span>Architecture MVC</span><span>Design Pattern</span></div>
                    <div class="card-actions"><a href="<?= $DOCS_DIV ?>/ap4.pdf" target="_blank" rel="noopener noreferrer" class="pdf"><i class="fas fa-file-download"></i>Documentation</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="realisations-category">
        <h3><span class="dot green"></span>Stage</h3>
        <div class="card-grid">
            <!-- Stage 1 -->
            <div class="card">
                <div class="image-placeholder"><img src="<?= $IMAGES_DIV ?>/stage1.png"></div>
                <div class="card-body">
                    <h4>Dépannage, maintenance et réseau (5 semaines)</h4>
                    <div class="meta"><i class="far fa-calendar-alt"></i> 2024 <i class="fas fa-map-marker-alt"></i> Instant@net, 82300 Caussade</div>
                    <p>Dépannage, maintenance et réseau<br>Gestion de la relation clients</p>
                    <div class="tags"><span>Medicat</span><span>Fab’s AutoBackup</span></div>
                    <div class="card-actions">
                        <a href="<?= $DOCS_DIV ?>/stage1.pdf" target="_blank" rel="noopener noreferrer" class="pdf"><i class="fas fa-file-download"></i>Documentation</a>
                        <a href="<?= $ATTEST_DIV ?>/stage1.pdf" target="_blank" rel="noopener noreferrer" class="attestation"><i class="fas fa-file-certificate"></i>Attestation</a>
                    </div>
                </div>
            </div>
            <!-- Stage 2 -->
            <div class="card">
                <div class="image-placeholder"><img src="<?= $IMAGES_DIV ?>/stage2.png"></div>
                <div class="card-body">
                    <h4>Refonte et centralisation des applications Web (6 semaines)</h4>
                    <div class="meta"><i class="far fa-calendar-alt"></i> 2025 <i class="fas fa-map-marker-alt"></i> ARCHEAN Technologies, 82000 Montauban</div>
                    <p>Refonte et centralisation des applications Web en une seule.</p>
                    <div class="tags"><span>HTML/CSS</span><span>Shell</span><span>jQuery</span><span>VSCode</span></div>
                    <div class="card-actions">
                        <a href="<?= $DOCS_DIV ?>/stage2.pdf" target="_blank" rel="noopener noreferrer" class="pdf"><i class="fas fa-file-download"></i>Documentation</a>
                        <a href="<?= $ATTEST_DIV ?>/stage2.pdf" target="_blank" rel="noopener noreferrer" class="attestation"><i class="fas fa-file-certificate"></i>Attestation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="realisations-category">
        <h3><span class="dot purple"></span>Projets personnels</h3>
        <div class="card-grid">
            <div class="card">
                <div class="image-placeholder"><img src="<?= $IMAGES_DIV ?>/projet-pers.png"></div>
                <div class="card-body">
                    <h4>Gestion d’interventions techniques pour une application mobile (En cours)</h4>
                    <div class="meta"><i class="far fa-calendar-alt"></i> 2024</div>
                    <p>Développement d'une application Android Mobile pour la gestion d'interventions techniques</p>
                    <div class="tags"><span>WinDev</span><span>HFSQL</span><span>SQL</span></div>
                    <div class="card-actions"><a href="#" class="pdf"><i class="fas fa-file-download"></i>Documentation</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="veille">
    <h2>Veille technologique</h2>
    <p class="intro">L’évolution des frameworks JavaScript côté front-end (React, Vue, Angular)</p>

    <h3>Introduction</h3>
    <div class="veille-block">
        <p>Les frameworks JavaScript côté front-end jouent un rôle essentiel dans le développement web moderne. Ils permettent de créer des interfaces utilisateurs dynamiques, interactives et performantes. Un framework sert de structure de base pour développer plus rapidement des applications web en organisant le code selon des conventions établies.</p>
        <p>Dans cette veille technologique, nous allons nous intéresser à l'évolution de trois des principaux frameworks JavaScript front-end : React, Vue.js et Angular. Leur progression a transformé la manière de concevoir des applications web au fil des années.</p>
    </div>

    <h3>Historique et contexte</h3>
    <div class="veille-block">
        <p>Avant l’apparition des frameworks, les développeurs utilisaient JavaScript pur avec HTML/CSS, ce qui devenait difficile à maintenir sur des projets complexes. L’arrivée des frameworks a permis une structuration du code, une meilleure lisibilité, et une amélioration des performances des applications.</p>
        <ul>
            <li><strong>AngularJS</strong> (Google) – lancé en 2010, introduction des Single Page Applications (SPA).</li>
            <li><strong>React</strong> (Facebook) – lancé en 2013, approche basée sur les composants et DOM virtuel.</li>
            <li><strong>Vue.js</strong> (Evan You) – créé en 2014, connu pour sa simplicité et son approche progressive.</li>
        </ul>
    </div>

    <h3>Présentation des frameworks</h3>
    <div class="veille-block">
        <table>
            <thead>
                <tr>
                    <th>Framework</th>
                    <th>Créateur</th>
                    <th>Date</th>
                    <th>Particularité principale</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>React</td>
                    <td>Facebook</td>
                    <td>2013</td>
                    <td>Composants réutilisables, JSX, DOM virtuel</td>
                </tr>
                <tr>
                    <td>Vue.js</td>
                    <td>Evan You</td>
                    <td>2014</td>
                    <td>Facile à apprendre, structure progressive</td>
                </tr>
                <tr>
                    <td>Angular</td>
                    <td>Google</td>
                    <td>2016 (Angular 2+)</td>
                    <td>Architecture complète MVC, TypeScript</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h3>Comparaison entre React, Vue.js et Angular</h3>
    <div class="veille-block">
        <table>
            <thead>
                <tr>
                    <th>Critère</th>
                    <th>React</th>
                    <th>Vue.js</th>
                    <th>Angular</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Courbe d’apprentissage</td>
                    <td>Moyenne</td>
                    <td>Facile</td>
                    <td>Difficile</td>
                </tr>
                <tr>
                    <td>Langage</td>
                    <td>JS + JSX</td>
                    <td>JavaScript</td>
                    <td>TypeScript</td>
                </tr>
                <tr>
                    <td>Communauté</td>
                    <td>Très large</td>
                    <td>En croissance</td>
                    <td>Stable</td>
                </tr>
                <tr>
                    <td>Structure</td>
                    <td>Souple</td>
                    <td>Très souple</td>
                    <td>Rigide</td>
                </tr>
                <tr>
                    <td>Performance</td>
                    <td>Excellente</td>
                    <td>Excellente</td>
                    <td>Excellente</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h3>Tendances récentes</h3>
    <div class="veille-block">
        <ul>
            <li>React introduit les Server Components pour améliorer les performances côté serveur.</li>
            <li>Vue 3 adopte la Composition API, plus flexible pour les projets complexes.</li>
            <li>Angular 17 simplifie le code et améliore les performances avec les Standalone Components.</li>
            <li>L’intégration de TypeScript et l’essor de frameworks full-stack (Next.js, Nuxt, Angular Universal).</li>
        </ul>
    </div>

    <h3>Pourquoi c’est pertinent ?</h3>
    <div class="veille-block">
        <p>Ces frameworks sont présents dans presque toutes les offres d’emploi en développement web. Comprendre leur évolution et leurs spécificités permet de mieux aborder les projets professionnels et montre une capacité de veille technologique, essentielle pour un développeur.</p>
    </div>

    <h3>Conclusion</h3>
    <div class="veille-block">
        <p>L’évolution des frameworks JavaScript côté front-end illustre la rapidité d’évolution du web. React, Vue et Angular dominent le paysage grâce à leur capacité à répondre à des besoins variés en termes de performance, simplicité et structuration.</p>
        <p>En tant qu’étudiant en BTS SIO SLAM, maîtriser ces outils est un atout pour réussir dans le développement d’applications web modernes et intégrer le monde professionnel.</p>
    </div>

    <h3>Sources</h3>
    <div class="veille-block">
        <ul>
            <li>
                <strong>React (Facebook)</strong><br>
                Lancement initial&nbsp;: mai 2013<br>
                Hooks introduits en février 2019 (React 16.8)<br>
                Dernière version React 19 publiée le 5 décembre 2024<br>
                <span style="font-size:0.95em; color:#6b7280;">
                    Sources : <a href="https://en.wikipedia.org/wiki/React_%28software%29?" target="_blank" rel="noopener noreferrer">Wikipédia</a> et <a href="https://react.dev/blog/2024/12/05/react-19?" target="_blank" rel="noopener noreferrer">blog officiel React</a>
                </span>
            </li>
            <li style="margin-top:1em;">
                <strong>Vue.js (Evan You)</strong><br>
                Création du projet : premier commit en juillet 2013<br>
                Première version publique en février 2014<br>
                Évolutions majeures : Vue 3 en septembre 2020, suivi de versions mineures jusqu’à Vue 3.5 en septembre 2024<br>
                <span style="font-size:0.95em; color:#6b7280;">
                    Sources : <a href="https://en.wikipedia.org/wiki/Vue.js?" target="_blank" rel="noopener noreferrer">Wikipédia</a>, <a href="https://madushaprasad21.medium.com/vue-js-history-1a6b8567198f?" target="_blank" rel="noopener noreferrer">articles Medium</a>, <a href="https://corecursive.com/vue-with-evan-you/?" target="_blank" rel="noopener noreferrer">blog d’Evan You</a>
                </span>
            </li>
            <li style="margin-top:1em;">
                <strong>Angular (Google)</strong><br>
                AngularJS (v1.x) publié le 20 octobre 2010<br>
                Angular 2+ (réécriture TS) version stable en septembre 2016<br>
                Versions récentes (Angular 14+, 17) avec nouveautés comme standalone components et Ivy<br>
                <span style="font-size:0.95em; color:#6b7280;">
                    Sources : <a href="https://en.wikipedia.org/wiki/AngularJS?" target="_blank" rel="noopener noreferrer">Wikipédia</a>, <a href="https://medium.com/the-startup-lab-blog/the-history-of-angular-3e36f7e828c7?" target="_blank" rel="noopener noreferrer">blog Medium</a>, <a href="https://www.clariontech.com/blog/angular-framework-from-its-first-steps-to-adulthood?" target="_blank" rel="noopener noreferrer">site officiel Angular</a>
                </span>
            </li>
        </ul>
    </div>
</section>

<?php
include '_footer.php';
?>