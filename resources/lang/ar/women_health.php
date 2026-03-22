<?php

return [
    // General
    'title' => 'مركز صحة المرأة | صحة نسا',
    'badge' => 'معلومات طبية مبنية على الأدلة العلمية',
    'hero_title' => 'رعاية صحية شاملة للمرأة',
    'hero_desc' => 'معلومات علمية تغطي جميع مراحل حياة المرأة: الحمل، وتخطيط الأسرة، وسن اليأس، وما بعد الولادة، بناءً على أحدث الإرشادات الطبية العالمية من WHO وACOG وFIGO.',
    
    // References
    'ref_who' => 'إرشادات WHO',
    'ref_acog' => 'معايير ACOG',
    'ref_figo' => 'بروتوكولات FIGO',
    'ref_aap' => 'إرشادات AAP',
    'references' => 'المراجع الطبية',
    
    // Tabs
    'tab_pregnancy' => 'الحمل',
    'tab_family_planning' => 'تخطيط الأسرة',
    'tab_menopause' => 'سن اليأس',
    'tab_postpartum' => 'ما بعد الولادة',
    
    // Common
    'trimester' => 'الثلث',
    'test' => 'الفحص/الاختبار',
    'purpose' => 'الغرض',
    'first_trimester' => 'الثلث الأول',
    'second_trimester' => 'الثلث الثاني',
    'third_trimester' => 'الثلث الثالث',
    'years' => 'سنوات',
    
    // Pregnancy Section
    'pregnancy' => [
        'topics_title' => 'المواضيع السريعة',
        'key_metrics' => 'المقاييس الرئيسية للحمل',
        'weight_gain' => 'زيادة الوزن (BMI طبيعي)',
        'folic_acid' => 'حمض الفوليك يومياً',
        'iron' => 'الحديد يومياً',
        'calories' => 'سعرات إضافية',
        'who_ref' => 'المصدر: WHO (2023) & IOM (2009)',
        
        'topic_nutrition' => 'التغذية والمكملات',
        'topic_exercise' => 'إرشادات التمارين',
        'topic_screening' => 'فحوصات المتابعة',
        'topic_warning_signs' => 'علامات الخطر',
        'topic_mental_health' => 'الصحة النفسية',
        'topic_preparation' => 'الاستعداد للولادة',
        
        'nutrition_title' => 'التغذية أثناء الحمل',
        'nutrition_content' => '
            <p><strong>المغذيات الكبيرة:</strong></p>
            <ul>
                <li>البروتين: 71 جرام يومياً (زيادة 25 جرام)</li>
                <li>الكربوهيدرات: 175 جرام كحد أدنى يومياً</li>
                <li>الدهون الصحية: ضرورية لتطور دماغ الجنين</li>
            </ul>
            <p><strong>العناصر الدقيقة الرئيسية:</strong></p>
            <ul>
                <li>حمض الفوليك: 400-800 ميكروجرام (ابدأي قبل الحمل)</li>
                <li>الحديد: 27 ملجرام (للوقاية من فقر الدم)</li>
                <li>الكالسيوم: 1,000 ملجرام يومياً</li>
                <li>فيتامين د: 600 وحدة دولية يومياً</li>
                <li>أوميجا-3 DHA: 200-300 ملجرام يومياً</li>
                <li>اليود: 220 ميكروجرام يومياً</li>
            </ul>
            <p><strong>الأطعمة التي يجب تجنبها:</strong> اللحوم النيئة/غير المطبوخة جيداً، الأسماك عالية الزئبق (القرش، سيفيش)، منتجات الألبان غير المبسترة، الكافيين الزائد (<200ملجرام/يوم).</p>
        ',
        'nutrition_refs' => 'WHO (2023) "Guideline: Iron supplementation in pregnancy"; ACOG Practice Bulletin No. 233 (2021); IOM (2009) "Weight Gain During Pregnancy"',
        
        'exercise_title' => 'إرشادات التمارين الرياضية',
        'exercise_content' => '
            <p><strong>توصيات ACOG:</strong></p>
            <ul>
                <li>150 دقيقة على الأقل من النشاط الهوائي المعتدل أسبوعياً</li>
                <li>موزعة على 3 أيام على الأقل في الأسبوع</li>
                <li>تضمين تمارين تقوية العضلات</li>
                <li>تجنب الرياضات التلامسية والأنشطة ذات خطر السقوط</li>
                <li>تجنب الاستلقاء على الظهر بعد الأسبوع 20</li>
            </ul>
            <p><strong>أنشطة آمنة:</strong> المشي، السباحة، ركوب الدراجة الثابتة، يوغا الحمل، تمارين هوائية منخفضة التأثير.</p>
            <p><strong>أوقف التمرين إذا:</strong> نزيف مهبلي، دوخة، ألم في الصدر، ألم/تورم في الساق، انخفاض حركة الجنين.</p>
        ',
        'exercise_refs' => 'ACOG Committee Opinion No. 804 (2020) "Physical Activity and Exercise During Pregnancy and the Postpartum Period"',
        
        'screening_title' => 'جدول فحوصات الحمل',
        'test_dating' => 'السونار المبكر',
        'purpose_dating' => 'تأكيد عمر الحمل، الكشف عن التوائم',
        'test_nt' => 'سماكة القفا (NT)',
        'purpose_nt' => 'فحص تشوهات الكروموسومات',
        'test_anatomy' => 'فحص الأعضاء (18-22 أسبوع)',
        'purpose_anatomy' => 'تقييم تكوين الجنين وتطوره',
        'test_glucose' => 'تحمل الجلوكوز (24-28 أسبوع)',
        'purpose_glucose' => 'فحص سكري الحمل',
        'test_gbs' => 'زراعة GBS (35-37 أسبوع)',
        'purpose_gbs' => 'الكشف عن جرثومة GBS',
        'screening_refs' => 'ACOG Practice Bulletin No. 223 (2020) "Screening for Fetal Chromosomal Abnormalities"; ACOG Committee Opinion No. 802 (2020) "Gestational Diabetes Mellitus"',
        
        'warning_title' => 'علامات الخطر الطارئة',
        'sign_bleeding' => 'نزيف مهبلي أو تسرب السائل',
        'sign_pain' => 'ألم شديد في البطن أو الحوض',
        'sign_headache' => 'صداع شديد مع تغيرات في الرؤية',
        'sign_swelling' => 'تورم مفاجئ في الوجه/اليدين',
        'sign_fever' => 'حمى مرتفعة (>38°م)',
        'sign_movement' => 'انخفاض حركة الجنين',
        'emergency_note' => 'إذا شعرتِ بأي من هذه الأعراض، تواصلي مع طبيبك فوراً أو اذهبي لقسم الطوارئ.',
        
        'mental_title' => 'الصحة النفسية في الحمل',
        'mental_content' => '
            <p><strong>المخاوف النفسية الشائعة:</strong></p>
            <ul>
                <li>الاكتئاب أثناء الحمل: يصيب 7-20% من النساء الحوامل</li>
                <li>اضطرابات القلق: تصل إلى 33% أثناء الحمل</li>
                <li>اضطرابات النوم</li>
            </ul>
            <p><strong>استراتيجيات العناية بالنفس:</strong></p>
            <ul>
                <li>النشاط البدني المنتظم</li>
                <li>التأمل واليقظة الذهنية</li>
                <li>نوم كافٍ (7-9 ساعات)</li>
                <li>شبكات الدعم الاجتماعي</li>
                <li>الاستشارة المهنية عند الحاجة</li>
            </ul>
            <p><strong>الفحص:</strong> مقياس ادنبره للاكتئاب ما بعد الولادة (EPDS) يجب إجراؤه أثناء الحمل وبعد الولادة.</p>
        ',
        'mental_refs' => 'ACOG Committee Opinion No. 757 (2018) "Screening for Perinatal Depression"; WHO (2022) "Mental Health and Substance Use"',
        
        'prep_title' => 'الاستعداد للولادة',
        'prep_content' => '
            <p><strong>الاستعداد في الثلث الثالث (الأسابيع 28-40):</strong></p>
            <ul>
                <li>حضور دورات تعليم الولادة</li>
                <li>إعداد خطة ولادة (مرنة)</li>
                <li>تجهيز حقيبة المستشفى قبل الأسبوع 36</li>
                <li>تركيب مقعد السيارة بشكل صحيح</li>
                <li>تهيئة بيئة المنزل</li>
                <li>ترتيب الدعم بعد الولادة</li>
            </ul>
            <p><strong>علامات بدء الولادة:</strong></p>
            <ul>
                <li>تقلصات منتظمة (كل 5 دقائق، تستمر دقيقة)</li>
                <li>انكسار ماء الرأس</li>
                <li>إفرازات دموية</li>
                <li>ألم أسفل الظهر لا يزول</li>
            </ul>
        ',
        'prep_refs' => 'ACOG Committee Opinion No. 766 (2019) "Approaches to Limit Intervention During Labor and Birth"',
    ],
    
    // Family Planning Section
    'family_planning' => [
        'topics_title' => 'المواضيع',
        'topic_contraception' => 'وسائل منع الحمل',
        'topic_fertility' => 'الوعي بالخصوبة',
        'topic_preconception' => 'العناية ما قبل الحمل',
        'topic_sti' => 'الوقاية من الأمراض المنقولة جنسياً',
        
        'contraception_title' => 'وسائل منع الحمل',
        'hormonal' => 'الوسائل الهرمونية',
        'non_hormonal' => 'الوسائل غير الهرمونية',
        'coc' => 'حبوب منع الحمل المركبة (COCs)',
        'pop' => 'حبوب البروجستيرون فقط (POP)',
        'implant' => 'الغرسة (3-5 سنوات)',
        'iud_hormonal' => 'اللولب الهرموني (3-8 سنوات)',
        'injection' => 'الحقن (3 أشهر)',
        'patch' => 'اللاصقة',
        'copper_iud' => 'اللولب النحاسي (10-12 سنة)',
        'condom_m' => 'الواقي الذكري',
        'condom_f' => 'الواقي الأنثوي',
        'diaphragm' => 'الغطاء المهبلي',
        'fertility' => 'طرق الوعي بالخصوبة',
        'sterilization' => 'العقم (ربط الأنابيب/القصة)',
        'contraception_refs' => 'WHO (2022) "Family Planning: A Global Handbook for Providers"; CDC U.S. Medical Eligibility Criteria for Contraceptive Use (2016)',
        
        'fertility_title' => 'طرق الوعي بالخصوبة',
        'fertility_content' => '
            <p><strong>الطرق المعتمدة علمياً:</strong></p>
            <ul>
                <li><strong>طريقة الأيام القياسية:</strong> تحديد أيام الخصوبة (الأيام 8-19 في دورة 26-32 يوم)</li>
                <li><strong>طريقة اليومين:</strong> التحقق من الإفرازات المهبلية يومياً</li>
                <li><strong>الطريقة العرضية-الحرارية:</strong> الجمع بين حرارة الجسم والإفرازات</li>
                <li><strong>طريقة التقويم:</strong> تتبع الدورات الشهرية لمدة 6+ أشهر</li>
            </ul>
            <p><strong>الفعالية:</strong> معدل الفشل 2-23% حسب الطريقة والالتزام.</p>
        ',
        'fertility_refs' => 'WHO (2018) "Selected Practice Recommendations for Contraceptive Use"; ACOG Practice Bulletin No. 233 (2021)',
        
        'preconception_title' => 'العناية ما قبل الحمل',
        'preconception_content' => '
            <p><strong>قائمة فحص صحة ما قبل الحمل:</strong></p>
            <ul>
                <li>بدء حمض الفوليك 400 ميكروجرام يومياً (3 أشهر قبل الحمل)</li>
                <li>مراجعة الأدوية مع الطبيب</li>
                <li>تحديث التطعيمات (MMR، جدري الماء)</li>
                <li>فحص الأمراض المزمنة (السكر، الغدة الدرقية، الضغط)</li>
                <li>فحص الناقل الوراثي (إن لزم)</li>
                <li>تحسين مؤشر كتلة الجسم (18.5-24.9)</li>
                <li>الإقلاع عن التدخين والكحول</li>
                <li>تقليل الكافيين</li>
            </ul>
        ',
        'preconception_refs' => 'ACOG Committee Opinion No. 762 (2019) "Prepregnancy Counseling"; CDC (2019) "Preconception Health and Health Care"',
        
        'sti_title' => 'الوقاية من الأمراض المنقولة جنسياً',
        'sti_content' => '
            <p><strong>الفحوصات الموصى بها:</strong></p>
            <ul>
                <li><strong>الإيدز:</strong> مرة واحدة على الأقل للنساء 13-64 سنة</li>
                <li><strong>الكلاميديا والسيلان:</strong> سنوياً للنساء <25 سنة أو ذوات المخاطر</li>
                <li><strong>الزهري:</strong> حسب عوامل الخطر وأثناء الحمل</li>
                <li><strong>HPV:</strong> الفحص المشترك مع مسحة عنق الرحم كل 5 سنوات (30-65 سنة)</li>
                <li><strong>التهاب الكبد B وC:</strong> حسب عوامل الخطر</li>
            </ul>
            <p><strong>الوقاية:</strong> الاستخدام المنتظم للواقيات، تطعيم HPV (9-45 سنة)، التواصل مع الشريك.</p>
        ',
        'sti_refs' => 'CDC STD Treatment Guidelines (2021); ACOG Practice Bulletin No. 227 (2021) "Screening for Sexually Transmitted Infections"',
    ],
    
    // Menopause Section
    'menopause' => [
        'topics_title' => 'مواضيع سن اليأس',
        'topic_symptoms' => 'الأعراض',
        'topic_hormone' => 'العلاج الهرموني',
        'topic_bone' => 'صحة العظام',
        'topic_heart' => 'صحة القلب',
        'topic_sexual' => 'الصحة الجنسية',
        'topic_mental' => 'الصحة النفسية',
        
        'facts_title' => 'حقائق أساسية',
        'avg_age' => 'متوسط العمر',
        'range' => 'النطاق المعتاد',
        'perimenopause' => 'مدة ما قبل اليأس',
        
        'symptoms_title' => 'أعراض سن اليأس الشائعة',
        'symptom_hot_flashes' => 'الهبات الساخنة وتعرق الليل',
        'symptom_night_sweats' => 'اضطرابات النوم',
        'symptom_mood' => 'تغيرات المزاج والتهيج',
        'symptom_sleep' => 'الأرق',
        'symptom_memory' => 'مشاكل الذاكرة والتركيز',
        'symptom_vaginal' => 'جفاف المهبل',
        'symptom_periods' => 'عدم انتظام الدورات',
        'symptom_weight' => 'زيادة الوزن',
        'symptoms_refs' => 'NAMS (2022) "The 2022 Hormone Therapy Position Statement"; ACOG Practice Bulletin No. 141 (2014)',
        
        'hormone_title' => 'العلاج الهرموني لسن اليأس (MHT)',
        'hormone_content' => '
            <p><strong>الفوائد:</strong></p>
            <ul>
                <li>العلاج الأكثر فعالية لأعراض الهبات الساخنة وتعرق الليل</li>
                <li>يمنع فقدان العظام وهشاشتها</li>
                <li>يعالج أعراض ضمور المهبل</li>
                <li>قد يحسن النوم وجودة الحياة</li>
            </ul>
            <p><strong>المخاطر:</strong></p>
            <ul>
                <li>جلطات الدم (الخثار الوريدي)</li>
                <li>السكتة الدماغية (خطر بسيط مرتفع)</li>
                <li>سرطان الثدي (مع العلاج المركب طويل الأمد)</li>
            </ul>
            <p><strong>الموانع:</strong> تاريخ سرطان الثدي، أمراض القلب التاجية، السكتة الدماغية، جلطات الدم، أمراض الكبد، نزيف مهبلي غير مفسر.</p>
            <p><strong>النهج الفردي:</strong> "أقل جرعة فعالة لأقصر مدة" - إعادة التقييم سنوياً.</p>
        ',
        'hormone_refs' => 'NAMS (2022) "The 2022 Hormone Therapy Position Statement of The North American Menopause Society"; ACOG Practice Bulletin No. 141 (2014) "Management of Menopausal Symptoms"',
        
        'bone_title' => 'صحة العظام وهشاشة العظام',
        'bone_content' => '
            <p><strong>عوامل الخطر:</strong></p>
            <ul>
                <li>سن اليأس المبكر (<45 سنة)</li>
                <li>تاريخ عائلي لهشاشة العظام</li>
                <li>نقص الوزن (BMI <20)</li>
                <li>التدخين والكحول المفرط</li>
                <li>نمط الحياة الخامل</li>
                <li>نقص فيتامين د</li>
            </ul>
            <p><strong>استراتيجيات الوقاية:</strong></p>
            <ul>
                <li>الكالسيوم: 1,200 ملجرام يومياً (غذاء + مكملات)</li>
                <li>فيتامين د: 800-1,000 وحدة دولية يومياً</li>
                <li>تمارين تحمل الوزن ومقاومة العضلات</li>
                <li>استراتيجيات الوقاية من السقوط</li>
                <li>قياس كثافة العظام (DEXA) عند 65 سنة أو أبكر إن وجدت مخاطر</li>
            </ul>
        ',
        'bone_refs' => 'NOF (2022) "Clinician\'s Guide to Prevention and Treatment of Osteoporosis"; ACOG Practice Bulletin No. 129 (2012) "Osteoporosis"',
        
        'heart_title' => 'صحة القلب والأوعية الدموية',
        'heart_content' => '
            <p><strong>خطر أمراض القلب:</strong></p>
            <ul>
                <li>أمراض القلب هي السبب الرئيسي للوفاة بين النساء</li>
                <li>يزيد الخطر بعد سن اليأس بسبب انخفاض الاستروجين</li>
                <li>مراقبة ضغط الدم والكوليسترول والسكر بانتظام</li>
            </ul>
            <p><strong>الوقاية:</strong></p>
            <ul>
                <li>نمط غذاء متوسطي</li>
                <li>150 دقيقة تمارين معتدلة أسبوعياً</li>
                <li>الحفاظ على وزن صحي</li>
                <li>عدم التدخين</li>
                <li>إدارة التوتر</li>
                <li>الفحص القلبي الدوري</li>
            </ul>
        ',
        'heart_refs' => 'AHA (2021) "Guideline for the Prevention of Cardiovascular Disease in Women"; ACOG Committee Opinion No. 734 (2018) "Cardiovascular Disease in Women"',
        
        'sexual_title' => 'الصحة الجنسية بعد سن اليأس',
        'sexual_content' => '
            <p><strong>التغيرات الشائعة:</strong></p>
            <ul>
                <li>جفاف المهبل وضموره (متلازمة الجهاز البولي التناسلي)</li>
                <li>انخفاض الرغبة الجنسية</li>
                <li>ألم أثناء الجماع (عسر الجماع)</li>
                <li>أعراض بولية</li>
            </ul>
            <p><strong>خيارات العلاج:</strong></p>
            <ul>
                <li>مرطبات ومراهي مهبلية</li>
                <li>الاستروجين المهبلي منخفض الجرعة (أشكل أماناً)</li>
                <li>أوسبيميفين (فموي) لعسر الجماع</li>
                <li>براستيرون (تحميلة DHEA مهبلية)</li>
                <li>العلاج بالليزر (في حالات مختارة)</li>
                <li>العلاج الطبيعي لعضلات الحوض</li>
            </ul>
        ',
        'sexual_refs' => 'NAMS (2020) "Genitourinary Syndrome of Menopause: Position Statement"; ACOG Practice Bulletin No. 141 (2014)',
        
        'mental_title' => 'الصحة النفسية أثناء سن اليأس',
        'mental_content' => '
            <p><strong>التغيرات العاطفية:</strong></p>
            <ul>
                <li>تقلبات المزاج والتهيج</li>
                <li>قد يزداد خطر القلق والاكتئاب</li>
                <li>اضطراب النوم يؤثر على الصحة النفسية</li>
                <li>أعراض "ضباب الدماغ" المعرفية</li>
            </ul>
            <p><strong>استراتيجيات التكيف:</strong></p>
            <ul>
                <li>العلاج المعرفي السلوكي (CBT)</li>
                <li>تقليل الإجهاد القائم على اليقظة الذهنية</li>
                <li>التمارين الرياضية المنتظمة</li>
                <li>نظافة النوم الكافية</li>
                <li>التواصل الاجتماعي والدعم</li>
                <li>النظر في العلاج الهرموني إذا كانت الأعراض شديدة</li>
            </ul>
        ',
        'mental_refs' => 'NAMS (2018) "Cognitive Activity During Menopause"; Maki et al. (2019) "Guidelines for the Evaluation and Treatment of Perinatal Depression"',
    ],
    
    // Postpartum Section
    'postpartum' => [
        'topics_title' => 'مواضيع ما بعد الولادة',
        'topic_recovery' => 'التعافي الجسدي',
        'topic_breastfeeding' => 'الرضاعة الطبيعية',
        'topic_newborn' => 'رعاية حديثي الولادة',
        'topic_depression' => 'اكتئاب ما بعد الولادة',
        'topic_contraception' => 'منع الحمل',
        'topic_checkups' => 'زيارات المتابعة',
        
        'timeline_title' => 'الجدول الزمني للتعافي',
        'hour1' => 'التواصل الفوري مع الطفل وبدء الرضاعة',
        'day1' => 'مراقبة النزيف واستقرار العلامات الحيوية',
        'week1' => 'انقباض الرحم، مراقبة النزيف (اللوكيا)',
        'week6' => 'زيارة ما بعد الولادة، تقييم التعافي',
        
        'recovery_title' => 'التعافي الجسدي بعد الولادة',
        'recovery_content' => '
            <p><strong>التغيرات الطبيعية بعد الولادة:</strong></p>
            <ul>
                <li><strong>اللوكيا:</strong> إفرازات مهبلية تستمر 4-6 أسابيع (حمراء → صفراء → بيضاء)</li>
                <li><strong>انقباض الرحم:</strong> يعود إلى الحوض خلال أسبوعين</li>
                <li><strong>شفاء العجان:</strong> 3-6 أسابيع للتمزقات/التقطيع</li>
                <li><strong>تعافي الولادة القيصرية:</strong> 4-6 أسابيع لشفاء الجرح</li>
            </ul>
            <p><strong>علامات الخطر:</strong></p>
            <ul>
                <li>نزيف شديد (تشبع فوطة في ساعة)</li>
                <li>حمى >38°م</li>
                <li>صداع شديد أو تغيرات في الرؤية</li>
                <li>ألم في الصدر أو صعوبة في التنفس</li>
                <li>ألم أو تورم في الساق (علامات DVT)</li>
                <li>انفجار أو عدوى في الجرح</li>
            </ul>
        ',
        'recovery_refs' => 'ACOG Committee Opinion No. 736 (2018) "Postpartum Care"; WHO (2018) "Recommendations on Postnatal Care"',
        
        'breastfeeding_title' => 'إرشادات الرضاعة الطبيعية',
        'breastfeeding_content' => '
            <p><strong>توصيات WHO/UNICEF:</strong></p>
            <ul>
                <li>بدء الرضاعة في الساعة الأولى بعد الولادة</li>
                <li>الرضاعة الطبيعية الحصرية للأشهر الستة الأولى</li>
                <li>الاستمرار في الرضاعة لمدة سنتين أو أكثر مع الأطعمة التكميلية</li>
                <li>الإرضاع عند الطلب (8-12 مرة كل 24 ساعة)</li>
                <li>لا ماء أو رضاعة صناعية أو أطعمة أخرى في الأشهر الستة الأولى</li>
            </ul>
            <p><strong>تغذية الأم:</strong></p>
            <ul>
                <li>330-400 سعرة حرارية إضافية/يوم</li>
                <li>استمرار فيتامينات الحمل</li>
                <li>ترطيب كافٍ (3+ لترات سوائل)</li>
                <li>تقليل الكافيين إلى 200-300 ملجرام/يوم</li>
                <li>تجنب الإفراط في الكحول</li>
            </ul>
            <p><strong>الموانع:</strong> الإيدز الأم (في بعض البلدان)، السل النشط غير المعالج، بعض الأدوية (استشارة الطبيب).</p>
        ',
        'months_exclusive' => 'أشهر حصرية',
        'years_continue' => 'سنوات استمرار',
        'breastfeeding_refs' => 'WHO (2018) "Infant and Young Child Feeding"; AAP Policy Statement (2012) "Breastfeeding and the Use of Human Milk"; ACOG Committee Opinion No. 756 (2018)',
        
        'newborn_title' => 'العناية الأساسية بحديثي الولادة',
        'newborn_content' => '
            <p><strong>العناية في الشهر الأول:</strong></p>
            <ul>
                <li><strong>الإرضاع:</strong> كل 2-3 ساعات، راقبي إشارات الجوع</li>
                <li><strong>النوم:</strong> 16-17 ساعة يومياً، دائماً على الظهر للنوم</li>
                <li><strong>الحفاضات:</strong> 6+ حفاضات مبللة يومياً بعد اليوم 4؛ براز متكرر</li>
                <li><strong>عناية السرة:</strong> نظيفة وجافة؛ تسقط في 1-2 أسبوع</li>
                <li><strong>الاستحمام:</strong> حمام إسفنجي حتى تسقط السرة</li>
                <li><strong>الجلد للجلد:</strong> يعزز الترابط والرضاعة</li>
            </ul>
            <p><strong>علامات الخطر في حديثي الولادة:</strong></p>
            <ul>
                <li>حمى >38°م أو انخفاض حرارة</li>
                <li>رفض الرضاعة أو عدم التغذية</li>
                <li>الخمول أو صعوبة الإيقاظ</li>
                <li>تنفس سريع أو شخير</li>
                <li>زرقة (زرقاق)</li>
                <li>اصفرار الجلد/العينين (اليرقان) يمتد للساقين</li>
            </ul>
        ',
        'newborn_refs' => 'AAP/AHA (2021) "Neonatal Resuscitation Program"; WHO (2015) "Guidelines on Newborn Health"; AAP (2017) "Guidelines for Perinatal Care"',
        
        'depression_title' => 'اكتئاب ما بعد الولادة (PPD)',
        'depression_content' => '
            <p><strong>فهم اكتئاب ما بعد الولادة:</strong></p>
            <ul>
                <li>يصيب 10-20% من الأمهات الجدد</li>
                <li>قد يحدث في أي وقت خلال السنة الأولى بعد الولادة</li>
                <li>أكثر من "كآبة ما بعد الولادة" (التي تزول خلال أسبوعين)</li>
                <li>يمكن للآباء أيضاً الإصابة باكتئاب ما بعد الولادة (8-10%)</li>
            </ul>
            <p><strong>الأعراض:</strong></p>
            <ul>
                <li>مزاج حزين أو قلق أو "فارغ" مستمر</li>
                <li>التهيج أو العصبية</li>
                <li>فقدان الاهتمام بالأنشطة</li>
                <li>صعوبة الترابط مع الطفل</li>
                <li>تغيرات في النوم أو الشهية</li>
                <li>مشاعر الذنب أو عدم القيمة أو اليأس</li>
                <li>أفكار إيذاء النفس أو الطفل</li>
            </ul>
            <p><strong>العلاج:</strong> العلاج النفسي (CBT، IPT)، مضادات الاكتئاب (SSRIs آمنة أثناء الرضاعة)، مجموعات الدعم. مع العلاج، يُتوقع الشفاء.</p>
        ',
        'help_line' => 'إذا كان لديك أفكار إيذاء نفسك أو طفلك، اطلب المساعدة فوراً. اتصلي بمقدم الرعاية الصحية، اذهبي لقسم الطوارئ، أو اتصلي بخدمات الطوارئ.',
        'depression_refs' => 'ACOG Committee Opinion No. 757 (2018) "Screening for Perinatal Depression"; AAP Policy Statement (2019) "Incorporating Recognition and Management of Perinatal Depression"; WHO (2022)',
        
        'contraception_title' => 'منع الحمل بعد الولادة',
        'contraception_content' => '
            <p><strong>توقيت الاعتبارات:</strong></p>
            <ul>
                <li>قد تعود الخصوبة مبكراً بعد 3 أسابيع من الولادة (حتى أثناء الرضاعة)</li>
                <li>طريقة الرضاعة كمانع للحمل (LAM) فعالة فقط إذا: طفل <6 أشهر، رضاعة حصرية، لا دورات</li>
            </ul>
            <p><strong>خيارات آمنة:</strong></p>
            <ul>
                <li><strong>فوراً بعد الولادة:</strong> تركيب اللولب (خلال 48 ساعة أو بعد 4 أسابيع)، الغرسة، وسائل البروجستيرون فقط</li>
                <li><strong>بعد 3 أسابيع:</strong> الوسائل الهرمونية المركبة إذا لم تكوني مرضعة</li>
                <li><strong>بعد 6 أسابيع:</strong> جميع الوسائل بما فيها الحبوب المركبة</li>
            </ul>
            <p><strong>اعتبارات الرضاعة:</strong> تُفضل وسائل البروجستيرون فقط؛ قد يقلل الاستروجين المركب إدرار الحليب.</p>
        ',
        'contraception_refs' => 'CDC U.S. Medical Eligibility Criteria for Contraceptive Use (2016); WHO (2015) "Selected Practice Recommendations for Contraceptive Use"',
        
        'checkups_title' => 'زيارات المتابعة بعد الولادة',
        'checkups_content' => '
            <p><strong>توصيات ACOG (الانتقال من "فحص 6 أسابيع"):</strong></p>
            <ul>
                <li><strong>خلال 3 أسابيع:</strong> أول اتصال بعد الولادة (هاتف/زيارة)</li>
                <li><strong>قبل 12 أسبوع:</strong> زيارة شاملة بعد الولادة</li>
                <li><strong>متابعة مستمرة:</strong> حسب الحاجة للمضاعفات</li>
                <li><strong>زيارة صحة المرأة الشاملة:</strong> عند 12 شهر</li>
            </ul>
            <p><strong>مكونات التقييم:</strong></p>
            <ul>
                <li>التعافي الجسدي (العجان، الرحم، جرح الولادة القيصرية)</li>
                <li>المزاج والرفاهية العاطفية (فحص EPDS)</li>
                <li>إرضاع الطفل ورعايته</li>
                <li>تخطيط الأسرة ومنع الحمل</li>
                <li>إدارة الأمراض المزمنة</li>
                <li>التطعيمات (Tdap، MMR، جدري الماء، الإنفلونزا)</li>
                <li>الفحوصات (مسحة عنق الرحم، متابعة السكر)</li>
            </ul>
        ',
        'checkups_refs' => 'ACOG Committee Opinion No. 736 (2018) "Optimizing Postpartum Care"; AAP/AHA (2017) "Guidelines for Perinatal Care"',
    ],
    
    // AI CTA
    'ai_cta_title' => 'لديكِ أسئلة؟ اسألي مساعدنا الذكي',
    'ai_cta_desc' => 'تم تدريب مساعدنا الذكي على أحدث الإرشادات الطبية للإجابة على أسئلتك حول صحة المرأة في كل مرحلة من مراحل الحياة.',
    'ai_cta_button' => 'تحدثي مع المساعد الذكي',
];
