<?php

/*
|--------------------------------------------------------------------------
| HOSPITAL RESPONSIBILITIES - USER MODULE
|--------------------------------------------------------------------------
| Regional language is decided by Hospital Admin.
| Mock data for now.
|--------------------------------------------------------------------------
*/


/* ==========================================================
   REGIONAL LANGUAGE
========================================================== */

$regionalLanguageName = "मराठी";


/* ==========================================================
   ENGLISH RESPONSIBILITIES
========================================================== */

$responsibilitiesEnglish = [

    [
        'heading' => 'Patient Responsibilities',
        'items' => [
            'Provide accurate and complete information about your health condition.',
            'Follow the treatment plan and instructions provided by your doctor.',
            'Inform the hospital staff about any changes in your health condition.',
            'Take medicines only as prescribed by your doctor.'
        ]
    ],

    [
        'heading' => 'Hospital Visit Responsibilities',
        'items' => [
            'Arrive on time for scheduled appointments.',
            'Carry your hospital card, identification proof, and previous medical reports.',
            'Maintain cleanliness and hygiene inside the hospital premises.',
            'Follow the instructions provided by hospital staff.'
        ]
    ],

    [
        'heading' => 'Respect and Safety',
        'items' => [
            'Treat doctors, nurses, staff, patients, and visitors with respect.',
            'Maintain silence in consultation and patient care areas.',
            'Follow hospital safety and emergency instructions.',
            'Do not damage hospital property or equipment.'
        ]
    ]

];


/* ==========================================================
   HINDI RESPONSIBILITIES
========================================================== */

$responsibilitiesHindi = [

    [
        'heading' => 'मरीजों की जिम्मेदारियाँ',
        'items' => [
            'अपनी स्वास्थ्य स्थिति के बारे में सही और पूरी जानकारी दें।',
            'डॉक्टर द्वारा दिए गए उपचार और निर्देशों का पालन करें।',
            'अपने स्वास्थ्य में किसी भी बदलाव की जानकारी अस्पताल के कर्मचारियों को दें।',
            'दवाइयाँ केवल डॉक्टर द्वारा बताए अनुसार लें।'
        ]
    ],

    [
        'heading' => 'अस्पताल में मरीज की जिम्मेदारियाँ',
        'items' => [
            'निर्धारित समय पर अस्पताल और अपनी नियुक्ति के लिए पहुँचें।',
            'अपना अस्पताल कार्ड, पहचान पत्र और पुरानी मेडिकल रिपोर्ट साथ लाएँ।',
            'अस्पताल परिसर में स्वच्छता और साफ-सफाई बनाए रखें।',
            'अस्पताल के कर्मचारियों द्वारा दिए गए निर्देशों का पालन करें।'
        ]
    ],

    [
        'heading' => 'सम्मान और सुरक्षा',
        'items' => [
            'डॉक्टरों, नर्सों, कर्मचारियों, मरीजों और आगंतुकों के साथ सम्मानपूर्वक व्यवहार करें।',
            'परामर्श और मरीजों की देखभाल वाले क्षेत्रों में शांति बनाए रखें।',
            'अस्पताल की सुरक्षा और आपातकालीन निर्देशों का पालन करें।',
            'अस्पताल की संपत्ति या उपकरणों को नुकसान न पहुँचाएँ।'
        ]
    ]

];


/* ==========================================================
   REGIONAL RESPONSIBILITIES
   MOCK: MARATHI
========================================================== */

$responsibilitiesRegional = [

    [
        'heading' => 'रुग्णांच्या जबाबदाऱ्या',
        'items' => [
            'आपल्या आरोग्याविषयी योग्य आणि संपूर्ण माहिती द्या.',
            'डॉक्टरांनी दिलेल्या उपचार आणि सूचनांचे पालन करा.',
            'आरोग्याच्या स्थितीत झालेल्या कोणत्याही बदलाची माहिती रुग्णालयातील कर्मचाऱ्यांना द्या.',
            'डॉक्टरांनी सांगितल्याप्रमाणेच औषधे घ्या.'
        ]
    ],

    [
        'heading' => 'रुग्णालयातील जबाबदाऱ्या',
        'items' => [
            'नियोजित भेटीच्या वेळेस रुग्णालयात वेळेवर पोहोचा.',
            'रुग्णालयाचे कार्ड, ओळखपत्र आणि मागील वैद्यकीय अहवाल सोबत आणा.',
            'रुग्णालयाच्या परिसरात स्वच्छता आणि आरोग्यविषयक शिस्त राखा.',
            'रुग्णालयातील कर्मचाऱ्यांनी दिलेल्या सूचनांचे पालन करा.'
        ]
    ],

    [
        'heading' => 'आदर आणि सुरक्षितता',
        'items' => [
            'डॉक्टर, परिचारिका, कर्मचारी, रुग्ण आणि भेट देणाऱ्या व्यक्तींशी आदराने वागा.',
            'सल्लामसलत आणि रुग्णसेवा विभागात शांतता राखा.',
            'रुग्णालयाच्या सुरक्षा आणि आपत्कालीन सूचनांचे पालन करा.',
            'रुग्णालयाच्या मालमत्तेचे किंवा उपकरणांचे नुकसान करू नका.'
        ]
    ]

];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Responsibilities</title>


    <!-- ==========================================================
                            TAILWIND CSS
    ========================================================== -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- ==========================================================
                            INTER FONT
    ========================================================== -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- ==========================================================
                            CUSTOM CSS
    ========================================================== -->

    <link
        rel="stylesheet"
        href="../css/responsibilities.css"
    >


    <!-- ==========================================================
                        RESPONSIVE BUTTON CSS
    ========================================================== -->

    <style>

        /* ==========================================================
                        LANGUAGE TABS
        ========================================================== */

        .language-tabs {
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
            gap: 16px;
            width: 100%;
        }


        .language-btn {
            flex: 1;
            min-width: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }


        /* ==========================================================
                            MOBILE
        ========================================================== */

        @media (max-width: 600px) {

            .language-tabs {
                gap: 8px;
            }

            .language-btn {
                flex: 1;
                min-width: 0;

                padding-left: 6px !important;
                padding-right: 6px !important;

                padding-top: 12px !important;
                padding-bottom: 12px !important;

                font-size: 15px !important;

                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .page-title {
                font-size: 2rem !important;
                line-height: 1.2;
            }

            .page-description {
                font-size: 1rem !important;
                line-height: 1.5;
            }

            .responsibilities-card {
                padding: 22px !important;
            }

            .responsibility-title {
                font-size: 1.5rem !important;
            }

            .responsibilities-data {
                font-size: 1rem !important;
                line-height: 1.6;
            }

        }


        /* ==========================================================
                        VERY SMALL MOBILE
        ========================================================== */

        @media (max-width: 360px) {

            .language-tabs {
                gap: 5px;
            }

            .language-btn {
                padding-left: 3px !important;
                padding-right: 3px !important;

                padding-top: 10px !important;
                padding-bottom: 10px !important;

                font-size: 12px !important;
                border-radius: 12px !important;
            }

            .responsibilities-card {
                padding: 18px !important;
            }

        }

    </style>

</head>


<body>


<div class="max-w-6xl mx-auto px-6 py-12">


    <!-- ==================================================
                    PAGE HEADING
    ================================================== -->

    <div class="text-center mb-10">

        <h1
            class="text-5xl font-bold text-blue-700 page-title"
        >
            Patient's Responsibilities
        </h1>

        <p
            class="text-gray-500 text-xl mt-3 page-description"
        >
            Please follow the responsibilities mentioned below
            during your hospital visit.
        </p>

    </div>



    <!-- ==================================================
                    LANGUAGE NAVIGATION
    ================================================== -->

    <div class="language-tabs mb-10">


        <!-- ENGLISH -->

        <button
            id="englishBtn"
            onclick="showResponsibilities('english')"
            class="language-btn active-tab px-8 py-3 rounded-2xl border-2 border-sky-500 font-bold text-lg transition-all"
        >
            English
        </button>


        <!-- HINDI -->

        <button
            id="hindiBtn"
            onclick="showResponsibilities('hindi')"
            class="language-btn bg-white text-sky-500 px-8 py-3 rounded-2xl border-2 border-sky-500 font-bold text-lg transition-all hover:bg-sky-500 hover:text-white"
        >
            हिंदी
        </button>


        <!-- REGIONAL LANGUAGE -->

        <button
            id="regionalBtn"
            onclick="showResponsibilities('regional')"
            class="language-btn bg-white text-sky-500 px-8 py-3 rounded-2xl border-2 border-sky-500 font-bold text-lg transition-all hover:bg-sky-500 hover:text-white"
        >
            <?= htmlspecialchars($regionalLanguageName) ?>
        </button>

    </div>



    <!-- ==================================================
                    RESPONSIBILITIES CARD
    ================================================== -->

    <div
        class="bg-white rounded-3xl shadow-lg p-10 responsibilities-card"
    >


        <!-- ==================================================
                        ENGLISH
        ================================================== -->

        <div
            id="english"
            class="responsibilities-content active"
        >

            <h2
                class="text-3xl font-bold text-sky-500 mb-8 responsibility-title"
            >
                Responsibilities
            </h2>


            <div
                class="responsibilities-data text-lg text-gray-700"
            >

                <?php foreach ($responsibilitiesEnglish as $section): ?>

                    <div class="responsibility-section">

                        <h3>
                            <?= htmlspecialchars($section['heading']) ?>
                        </h3>

                        <ul>

                            <?php foreach ($section['items'] as $item): ?>

                                <li>
                                    <?= htmlspecialchars($item) ?>
                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>



        <!-- ==================================================
                        HINDI
        ================================================== -->

        <div
            id="hindi"
            class="responsibilities-content"
        >

            <h2
                class="text-3xl font-bold text-green-600 mb-8 responsibility-title"
            >
               जिम्मेदारियाँ
            </h2>


            <div
                class="responsibilities-data text-lg text-gray-700"
            >

                <?php foreach ($responsibilitiesHindi as $section): ?>

                    <div class="responsibility-section">

                        <h3>
                            <?= htmlspecialchars($section['heading']) ?>
                        </h3>

                        <ul>

                            <?php foreach ($section['items'] as $item): ?>

                                <li>
                                    <?= htmlspecialchars($item) ?>
                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>



        <!-- ==================================================
                    REGIONAL LANGUAGE
        ================================================== -->

        <div
            id="regional"
            class="responsibilities-content"
        >

            <h2
                class="text-3xl font-bold text-purple-600 mb-8 responsibility-title"
            >


                जबाबदाऱ्या

            </h2>


            <div
                class="responsibilities-data text-lg text-gray-700"
            >

                <?php foreach ($responsibilitiesRegional as $section): ?>

                    <div class="responsibility-section">

                        <h3>
                            <?= htmlspecialchars($section['heading']) ?>
                        </h3>

                        <ul>

                            <?php foreach ($section['items'] as $item): ?>

                                <li>
                                    <?= htmlspecialchars($item) ?>
                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>


    </div>

</div>



<!-- ==========================================================
                        JAVASCRIPT
========================================================== -->

<script src="../js/responsibilities.js"></script>


</body>
