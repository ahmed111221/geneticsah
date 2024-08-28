<?php require'views/icons.php';
$_SESSION['signup'] = 'turn on'?>

<div class="element">
    <div class="backGround">
        <?= $backGround; ?>
    </div>
    <div class="img">
        <img src="emages/homeImg.jpg">
    </div>
    <div class="description">
        <h1>Providing Quality 
        Medical Services for All</h1>
        <p>Welcome to our clinic, where we offer a wide range of medical examination services, blood tests, and medical operations. Our experienced team is dedicated toproviding high-quality care to our patients.</p>
        <button>Learn More</button>
    </div>
</div>

<!-----------------------------------------------------------element2----------------------------------------------------------------->

<div class="backGroundE2">
    <h1>Best services</h1>
    <samp class="boxes">
        <div class="parent" id="box1">
            <div class="hover H1">
                <div class="hoverContent">
                    <div class="hoverIcon">
                        <?= $visitHeart ?>
                    </div>
                    <input type="submit" value="Info">
                    <div class="activiter">
                        <?= $share ?><p>Share</p> 
                        <?= $Like ?> <div>Like</div>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="emages/smilingDoctor.jpg">
            </div>
            <div class="BoxDescription">
                <h1>Comprehensive Medical Examination Services for You</h1>
                <p>Our clinic offers a wide range of medical examination services to meet your needs......</p>
            </div>
        </div>
        <div class="parent" id="box2">
                <div class="hover H2">
                    <div class="hoverContent">
                        <div class="hoverIcon">
                            <?= $bloodTeste ?>
                        </div>
                        <input type="submit" value="Info">
                        <div class="activiter">
                            <?= $share ?><p>Share</p> 
                            <?= $Like ?> <div>Like</div>
                        </div>
                    </div>
                </div>
            <div class="box">
                <img src="emages/lwardi.jpg">
            </div>
            <div class="BoxDescription">
                <h1>Reliable Medical Blood Tests for Accurate Results</h1>
                <p>Our clinic offers a wide range of medical blood tests that are known for their accuracy and reliability......</p>
            </div>
        </div>
        <div class="parent" id="box3">
            <div class="hover H3">
                <div class="hoverContent">
                        <div class="hoverIcon">
                            <?= $opiration ?>
                        </div>
                        <input type="submit" value="Info">
                        <div class="activiter">
                            <?= $share ?><p>Share</p> 
                            <?= $Like ?> <div>Like</div>
                        </div>
                </div>
            </div>
            <div class="box">
                <img src="emages/operation.jpeg">
            </div>
            <div class="BoxDescription">
                <h1>Discover Our Expertise and Safety in Medical Operations</h1>
                <p>At our clinic, we offer a wide range of medical operations performed by experienced professionals......</p>
            </div>
        </div>
    </samp>
</div>

<!----------------------------------------------- element3 ------------------------------------------------------------------->

<div class="boxOfElement3">
    <div class="backGround3">
        <?= $newGround; ?>
    </div>
    <div class="masck">
        <img src="emages/personDormir.jpg">
        <div class="descroption3">
            <h1>
                Experience the Benefits 
                of Choosing Our Clinic
            </h1>
            <p>
                Our clinic offers a range of benefits to ensure you receive the best care possible.
                With experienced staff, state-of-the-art equipment, and personalized care, we prioritize your well-being.
            </p>
        </div>
    </div>
</div>

<!----------------------------------------------------- Element4 -------------------------------------------------------------->

<div class="doctors">
    <h1>Best Doctors</h1>
    <div class="premierLign">
        <div class="boxBleu">
            <div class="doctorPortrai">
                <img src="emages/jhon.jpg">
            </div>
            <div class="doctorsDESC">
                <div class="doctorsDESCChild">
                     <samp>Dr. John Smith</samp> 
                    <div class="boxStar">
                        <div class="starInterne">
                            <p>5.0</p>
                            <span><?= $chekedStart ?></span>
                        </div>
                    </div>
                </div>
                <h3>General Practitioner</h3>
                <p>Dr. John Smith is a highly experienced general practitioner with a passion for providing quality healthcare.</p>
                <div class="chats">
                    <?=$X ?>
                    <?= $whatsup ?>
                    <?= $telephon ?>
                </div>
            </div>
        </div>
        <div class="boxyelow">
            <div class="doctorPortrai">
                <img src="emages/jhon.jpg">
            </div>
            <div class="doctorsDESC">
                <div class="doctorsDESCChild">
                     <samp>Dr. John Smith</samp> 
                    <div class="boxStar">
                        <div class="starInterne">
                            <p>5.0</p>
                            <span><?= $chekedStart ?></span>
                        </div>
                    </div>
                </div>
                <h3>General Practitioner</h3>
                <p>Dr. John Smith is a highly experienced general practitioner with a passion for providing quality healthcare.</p>
                <div class="chats">
                    <?=$X ?>
                    <?= $whatsup ?>
                    <?= $telephon ?>
                </div>
            </div>
        </div>
        <div class="boxBleu">
            <div class="doctorPortrai">
                <img src="emages/jhon.jpg">
            </div>
            <div class="doctorsDESC">
                <div class="doctorsDESCChild">
                     <samp>Dr. John Smith</samp> 
                    <div class="boxStar">
                        <div class="starInterne">
                            <p>5.0</p>
                            <span><?= $chekedStart ?></span>
                        </div>
                    </div>
                </div>
                <h3>General Practitioner</h3>
                <p>Dr. John Smith is a highly experienced general practitioner with a passion for providing quality healthcare.</p>
                <div class="chats">
                    <?=$X ?>
                    <?= $whatsup ?>
                    <?= $telephon ?>
                </div>
            </div>
        </div>
        <div class="boxyelow">
            <div class="doctorPortrai">
                <img src="emages/jhon.jpg">
            </div>
            <div class="doctorsDESC">
                <div class="doctorsDESCChild">
                     <samp>Dr. John Smith</samp> 
                    <div class="boxStar">
                        <div class="starInterne">
                            <p>5.0</p>
                            <span><?= $chekedStart ?></span>
                        </div>
                    </div>
                </div>
                <h3>General Practitioner</h3>
                <p>Dr. John Smith is a highly experienced general practitioner with a passion for providing quality healthcare.</p>
                <div class="chats">
                    <?=$X ?>
                    <?= $whatsup ?>
                    <?= $telephon ?>
                </div>
            </div>
        </div>
    </div>
    <div class="secondLign">
        <div class="boxyelow">
            <div class="doctorPortrai">
                <img src="emages/jhon.jpg">
            </div>
            <div class="doctorsDESC">
                <div class="doctorsDESCChild">
                     <samp>Dr. John Smith</samp> 
                    <div class="boxStar">
                        <div class="starInterne">
                            <p>5.0</p>
                            <span><?= $chekedStart ?></span>
                        </div>
                    </div>
                </div>
                <h3>General Practitioner</h3>
                <p>Dr. John Smith is a highly experienced general practitioner with a passion for providing quality healthcare.</p>
                <div class="chats">
                    <?=$X ?>
                    <?= $whatsup ?>
                    <?= $telephon ?>
                </div>
            </div>
        </div>
        <div class="boxBleu">
            <div class="doctorPortrai">
                <img src="emages/jhon.jpg">
            </div>
            <div class="doctorsDESC">
                <div class="doctorsDESCChild">
                     <samp>Dr. John Smith</samp> 
                    <div class="boxStar">
                        <div class="starInterne">
                            <p>5.0</p>
                            <span><?= $chekedStart ?></span>
                        </div>
                    </div>
                </div>
                <h3>General Practitioner</h3>
                <p>Dr. John Smith is a highly experienced general practitioner with a passion for providing quality healthcare.</p>
                <div class="chats">
                    <?=$X ?>
                    <?= $whatsup ?>
                    <?= $telephon ?>
                </div>
            </div>
        </div>
        <div class="boxyelow">
            <div class="doctorPortrai">
                <img src="emages/jhon.jpg">
            </div>
            <div class="doctorsDESC">
                <div class="doctorsDESCChild">
                     <samp>Dr. John Smith</samp> 
                    <div class="boxStar">
                        <div class="starInterne">
                            <p>5.0</p>
                            <span><?= $chekedStart ?></span>
                        </div>
                    </div>
                </div>
                <h3>General Practitioner</h3>
                <p>Dr. John Smith is a highly experienced general practitioner with a passion for providing quality healthcare.</p>
                <div class="chats">
                    <?=$X ?>
                    <?= $whatsup ?>
                    <?= $telephon ?>
                </div>
            </div>
        </div>
        <div class="boxBleu">
            <div class="doctorPortrai">
                <img src="emages/jhon.jpg">
            </div>
            <div class="doctorsDESC">
                <div class="doctorsDESCChild">
                     <samp>Dr. John Smith</samp> 
                    <div class="boxStar">
                        <div class="starInterne">
                            <p>5.0</p>
                            <span><?= $chekedStart ?></span>
                        </div>
                    </div>
                </div>
                <h3>General Practitioner</h3>
                <p>Dr. John Smith is a highly experienced general practitioner with a passion for providing quality healthcare.</p>
                <div class="chats">
                    <?=$X ?>
                    <?= $whatsup ?>
                    <?= $telephon ?>
                </div>
            </div>
        </div>
    </div>
    <div class="showMore">
        <input type="submit" value="Show More">
    </div>

</div>

<!-- /*--------------------------------------------  Element5 -------------------------------------------------------------*/ -->

<div class="element5">
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="commentStars">
                    <?= $chekedStartComment ?><?= $chekedStartComment ?><?= $chekedStartComment ?><?= $chekedStartComment ?><?= $chekedStartComment ?>
                </div>
                <p>
                    I am extremely satisfied with the level of care and expertise provided by the clinic.
                    The staff was friendly and attentive throughout my medical examination.
                </p>
                <div class="profille"><p>John Doe</p></div>
                <div class="commentSpiciakiser"><p>Marketing Manager, ABC Company</p></div>
            </div>
            <div class="carousel-item">
                <div class="commentStars">
                        <?= $chekedStartComment ?><?= $chekedStartComment ?><?= $chekedStartComment ?><?= $chekedStartComment ?><?= $NochekedStartComment ?>
                    </div>
                    <p>
                        I am highly impressed with the care and professionalism at this clinic.
                        The staff was welcoming and attentive during my entire visit.
                    </p>
                    <div class="profille"><p>Mohammed marnici</p></div>
                    <div class="commentSpiciakiser"><p>Marketing Manager</p></div>
            </div>
            <div class="carousel-item">
                <div class="commentStars">
                        <?= $chekedStartComment ?><?= $chekedStartComment ?><?= $chekedStartComment ?><?= $NochekedStartComment ?><?= $NochekedStartComment ?>
                    </div>
                    <p>
                        I couldn't be more satisfied with the excellent service and expertise provided by the clinic.
                        The team was friendly and thorough throughout my medical examination.
                    </p>
                    <div class="profille"><p>Ahmed srghini</p></div>
                    <div class="commentSpiciakiser"><p>BBC Media Company</p></div>
            </div>
        </div>
        <button class="carousel-control prev"><?= $left ?></button>
        <button class="carousel-control next"><?= $right ?></button>
    </div>
    <div class="points">
        <div class="point activeP"></div>
        <div class="point"></div>
        <div class="point"></div>
    </div>
</div>
<script src="home.js"></script>