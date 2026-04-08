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
    'trimester' => 'الثلث (3 أشهر)',
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
        'who_ref' => 'المصدر: WHO (2023) & IOM (2022)',
        
        'topic_nutrition' => 'التغذية والمكملات',
        'topic_exercise' => 'إرشادات التمارين',
        'topic_screening' => 'فحوصات المتابعة',
        'topic_warning_signs' => 'علامات الخطر',
        'topic_mental_health' => 'الصحة النفسية',
        'topic_preparation' => 'الاستعداد للولادة',
        'topic_hygiene' => 'النظافة والعناية الشخصية',
        'topic_dental' => 'صحة الأسنان',
        'topic_sleep' => 'عادات النوم الصحية',
        'topic_medication' => 'أمان الأدوية',
        
        'nutrition_title' => 'التغذية أثناء الحمل',
        'nutrition_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">السعرات الحرارية الإضافية</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>الثلث الأول:</strong> لا حاجة لسعرات إضافية</li>
                        <li><strong>الثلث الثاني:</strong> +340 سعرة/يوم</li>
                        <li><strong>الثلث الثالث:</strong> +452 سعرة/يوم</li>
                        <li><strong>أثناء الرضاعة:</strong> +330-400 سعرة/يوم</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">الفيتامينات والمعادن الأساسية</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>حمض الفوليك:</strong> 400-800 ميكروجرام يومياً (الثلث الأول)</li>
                        <li><strong>الحديد:</strong> 27 ملجرام يومياً (يمنع فقر الدم)</li>
                        <li><strong>الكالسيوم:</strong> 1,000 ملجرام يومياً</li>
                        <li><strong>فيتامين د:</strong> 600 وحدة دولية يومياً</li>
                        <li><strong>الأوميغا 3:</strong> 200-300 ملجرام DHA يومياً</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">الأطعمة التي يجب تجنبها</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>الأسماك عالية الزئبق (سمك القرش، أبو سيف، التونة الكبيرة)</li>
                        <li>الأجبان غير المبسترة (خطر الليستيريا)</li>
                        <li>اللحوم والدواج النية أو غير المطبوخة جيداً</li>
                        <li>البيض النيء أو غير المطبوخ</li>
                        <li>الكحول بجميع أنواعه</li>
                        <li>الكافيين أكثر من 200 ملجرام/يوم</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">نمط الغذاء الصحي</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>3-4 حصص حبوب كاملة يومياً</li>
                        <li>5+ حصص فواكه وخضروات</li>
                        <li>3 حصص بروتين (لحوم، دواجن، سمك، بقوليات)</li>
                        <li>2-3 حصص منتجات الألبان</li>
                        <li>8-10 أكواب ماء يومياً</li>
                    </ul>
                </div>
            </div>
        ',
        'nutrition_refs' => 'WHO (2023) "Guideline: Iron supplementation in pregnancy"; ACOG Practice Bulletin No. 233 (2021);  "Weight Gain During Pregnancy"',
        
        'exercise_title' => 'إرشادات التمارين الرياضية',
        'exercise_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">التوصيات الأساسية (ACOG)</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>150 دقيقة على الأقل من النشاط الهوائي المعتدل أسبوعياً</li>
                        <li>موزعة على 3 أيام على الأقل في الأسبوع</li>
                        <li>تضمين تمارين تقوية العضلات</li>
                        <li>تجنب الاستلقاء على الظهر بعد الأسبوع 20</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">الأنشطة الآمنة</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>المشي:</strong> مثالي لجميع مراحل الحمل</li>
                        <li><strong>السباحة:</strong> يخفف ضغط المفاصل</li>
                        <li><strong>ركوب الدراجة الثابتة:</strong> آمن ومريح</li>
                        <li><strong>يوغا الحمل:</strong> يحسن المرونة والاسترخاء</li>
                        <li><strong>تمارين هوائية منخفضة التأثير:</strong> مثل التمارين المائية</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">أوقف التمرين فوراً إذا:</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>نزيف مهبلي</li>
                        <li>دوخة أو إغماء</li>
                        <li>ألم في الصدر أو صعوبة في التنفس</li>
                        <li>ألم أو تورم في الساق (علامات الخثار)</li>
                        <li>انخفاض حركة الجنين</li>
                        <li>انقباضات رحمية مؤلمة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">الرياضات الممنوعة</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>الرياضات التلامسية (كرة القدم، كرة السلة)</li>
                        <li>الأنشطة ذات خطر السقوط (التزلج، ركوب الخيل)</li>
                        <li>الغطس في أعماق البحار</li>
                        <li>الرياضات في ارتفاعات عالية</li>
                        <li>تمارين البطن الشاقة بعد الثلث الأول</li>
                    </ul>
                </div>
            </div>
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
        'warning_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-600">
                    <h4 class="font-bold text-red-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-exclamation-triangle"></i>
                        نزيف مهبلي أو تسرب السائل
                    </h4>
                    <p class="text-sm text-red-700">نزيف غزير مثل الدورة الشهرية، أو تسرب سائل شفاف من المهبل قد يكون ماء الجنين.</p>
                </div>
                
                <div class="p-4 bg-orange-50 rounded-lg border-l-4 border-orange-500">
                    <h4 class="font-bold text-orange-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-heartbeat"></i>
                        ألم شديد في البطن أو الحوض
                    </h4>
                    <p class="text-sm text-orange-700">ألم مستمر أو متكرر، خاصة مع التشنجات قبل الأسبوع 37.</p>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-eye"></i>
                        صداع شديد مع تغيرات في الرؤية
                    </h4>
                    <p class="text-sm text-amber-700">قد يشير إلى ارتفاع ضغط الدم أو تسمم الحمل.</p>
                </div>
                
                <div class="p-4 bg-yellow-50 rounded-lg border-l-4 border-yellow-500">
                    <h4 class="font-bold text-yellow-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-hand-paper"></i>
                        تورم مفاجئ في الوجه/اليدين
                    </h4>
                    <p class="text-sm text-yellow-700">تورم سريع خاصة في الوجه أو حول العينين، أو تورم في القدمين بشكل غير طبيعي.</p>
                </div>
                
                <div class="p-4 bg-rose-50 rounded-lg border-l-4 border-rose-500">
                    <h4 class="font-bold text-rose-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-thermometer-full"></i>
                        حمى مرتفعة (>38°م)
                    </h4>
                    <p class="text-sm text-rose-700">حمى مع قشعريرة أو عرق قد تشير إلى عدوى تحتاج علاجاً فورياً.</p>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-baby"></i>
                        انخفاض حركة الجنين
                    </h4>
                    <p class="text-sm text-purple-700">إذا لم تحسِّي بـ10 حركات على الأقل خلال ساعتين بعد الأسبوع 28.</p>
                </div>
            </div>
            <div class="mt-4 p-3 bg-red-100 rounded-lg text-sm text-red-800">
                <i class="fas fa-ambulance mr-2"></i>
                <strong>تنبيه طارئ:</strong> إذا شعرتِ بأي من هذه الأعراض، تواصلي مع طبيبك فوراً أو اذهبي لقسم الطوارئ.
            </div>
        ',
        'sign_bleeding' => 'نزيف مهبلي أو تسرب السائل',
        'sign_pain' => 'ألم شديد في البطن أو الحوض',
        'sign_headache' => 'صداع شديد مع تغيرات في الرؤية',
        'sign_swelling' => 'تورم مفاجئ في الوجه/اليدين',
        'sign_fever' => 'حمى مرتفعة (>38°م)',
        'sign_movement' => 'انخفاض حركة الجنين',
        'emergency_note' => 'إذا شعرتِ بأي من هذه الأعراض، تواصلي مع طبيبك فوراً أو اذهبي لقسم الطوارئ.',
        
        'mental_title' => 'الصحة النفسية في الحمل',
        'mental_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">المخاوف النفسية الشائعة</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>الاكتئاب أثناء الحمل:</strong> يصيب 7-20% من النساء الحوامل</li>
                        <li><strong>اضطرابات القلق:</strong> تصل إلى 33% أثناء الحمل</li>
                        <li><strong>اضطرابات النوم:</strong> صعوبة في النوم أو الاستيقاظ المتكرر</li>
                        <li><strong>مخاوف الولادة:</strong> توكوفوبيا (خوف شديد من الولادة)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">استراتيجيات العناية بالنفس</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>النشاط البدني المنتظم (تحسين المزاج)</li>
                        <li>التأمل واليقظة الذهنية ( mindfulness )</li>
                        <li>نوم كافٍ (7-9 ساعات)</li>
                        <li>شبكات الدعم الاجتماعي (العائلة والأصدقاء)</li>
                        <li>الاستشارة المهنية عند الحاجة</li>
                        <li>الكتابة اليومية والتعبير عن المشاعر</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">الفحص والتشخيص</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>مقياس ادنبره (EPDS):</strong> يجب إجراؤه أثناء الحمل وبعد الولادة</li>
                        <li><strong>علامات التحذير:</strong> حزن مستمر، فقدان الاهتمام، أفكار سلبية</li>
                        <li><strong>متى تطلب المساعدة:</strong> إذا استمرت الأعراض أكثر من أسبوعين</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-rose-50 rounded-lg border-l-4 border-rose-500">
                    <h4 class="font-bold text-rose-800 mb-2">خط المساعدة الطارئ</h4>
                    <p class="text-sm text-rose-700">إذا كنتِ تشعرين بأفكار تؤذي نفسك أو الجنين، اطلبي المساعدة فوراً من طبيبك أو من خط الطوارئ.</p>
                </div>
            </div>
        ',
        'mental_refs' => 'ACOG Clinical Guidance (2023) "Screening for Perinatal Depression"; WHO (2022) "Mental Health and Substance Use"',
        
        'prep_title' => 'الاستعداد للولادة',
        'prep_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-teal-50 rounded-lg border-l-4 border-teal-500">
                    <h4 class="font-bold text-teal-800 mb-2">الاستعداد في الثلث الثالث (الأسابيع 28-40)</h4>
                    <ul class="text-sm text-teal-700 space-y-1">
                        <li>حضور دورات تعليم الولادة</li>
                        <li>إعداد خطة ولادة (مرنة)</li>
                        <li>تجهيز حقيبة المستشفى قبل الأسبوع 36</li>
                        <li>تركيب مقعد السيارة بشكل صحيح</li>
                        <li>تهيئة بيئة المنزل</li>
                        <li>ترتيب الدعم بعد الولادة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-rose-50 rounded-lg border-l-4 border-rose-500">
                    <h4 class="font-bold text-rose-800 mb-2">علامات بدء الولادة</h4>
                    <ul class="text-sm text-rose-700 space-y-1">
                        <li><strong>تقلصات منتظمة:</strong> كل 5 دقائق، تستمر دقيقة</li>
                        <li><strong>انكسار ماء الرأس:</strong> تسرب سائل شفاف</li>
                        <li><strong>إفرازات دموية:</strong> إفرازات مخاطية مدممة</li>
                        <li><strong>ألم أسفل الظهر:</strong> لا يزول مع تغيير الوضعية</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-indigo-50 rounded-lg border-l-4 border-indigo-500">
                    <h4 class="font-bold text-indigo-800 mb-2">مستلزمات حقيبة المستشفى</h4>
                    <ul class="text-sm text-indigo-700 space-y-1">
                        <li>بطاقة الهوية والتأمين</li>
                        <li>ملابس مريحة وكلسونات قطنية</li>
                        <li>مستلزمات العناية الشخصية</li>
                        <li>ملابس للطفل (4-6 قطع)</li>
                        <li>حفاضات ومناديل مبللة</li>
                        <li>هاتف شاحن</li>
                    </ul>
                </div>
            </div>
        ',
        'prep_refs' => 'ACOG Clinical Guidance (2023) "Approaches to Limit Intervention During Labor and Birth"',
        
        // أقسام جديدة للحمل
        'hygiene_title' => 'النظافة والعناية الشخصية أثناء الحمل',
        'hygiene_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-cyan-50 rounded-lg border-l-4 border-cyan-500">
                    <h4 class="font-bold text-cyan-800 mb-2">نظافة اليدين</h4>
                    <ul class="text-sm text-cyan-700 space-y-1">
                        <li>اغسلي يديكِ بالصابون والماء لمدة 20 ثانية على الأقل</li>
                        <li>استخدمي معقم اليدين الكحولي عندما يكون الصابون غير متوفر</li>
                        <li>اغسلي دائماً قبل الأكل، وبعد الحمام، وبعد التعامل مع الحيوانات</li>
                        <li>ضروري للوقاية من التوكسوبلازما والليستيريا</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">النظافة الحميمة</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li>اغسلي المنطقة الخارجية بالماء الدافئ يومياً</li>
                        <li>تجنبي الغسل المهبلي (يزيد خطر العدوى)</li>
                        <li>ارتدي ملابس داخلية قطنية</li>
                        <li>غيري الملابس الداخلية يومياً</li>
                        <li>استخدمي منتجات خالية من العطور</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">إرشادات الاستحمام</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>الحمامات الدافئة آمنة طوال الحمل</li>
                        <li>تجنبي الجاكوزي والساونا (خطر ارتفاع الحرارة)</li>
                        <li>حددي وقت الاستحمام بـ 15-20 دقيقة</li>
                        <li>استخدمي صابوناً معتدلاً خالياً من العطور</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">الملابس والراحة</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>ارتدي أقمشة فضفاضة وقابلة للتنفس (قطن، كتان)</li>
                        <li>تجنبي الملابس الضيقة حول البطن</li>
                        <li>غيري الملابس الرطبة فوراً</li>
                        <li>استخدمي حمالات صدر حملية داعمة</li>
                    </ul>
                </div>
            </div>
        ',
        'hygiene_refs' => 'WHO (2022) "Guidelines on Core Components of Infection Prevention and Control Programmes"; ACOG (2023) "Vaginitis in Pregnancy"',
        
        'dental_title' => 'صحة الأسنان أثناء الحمل',
        'dental_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">التغيرات الفموية أثناء الحمل</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li><strong>التهاب اللثة الحملي:</strong> يصيب 60-75% من النساء الحوامل</li>
                        <li>زيادة خطر أمراض اللثة</li>
                        <li>احتمالية زيادة تسوس الأسنان</li>
                        <li>أورام اللثة الحملية - نمو حميد قد يظهر</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">إرشادات العناية بالأسنان</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>استمري في زيارات طبيب الأسنان (آمنة ومستحسنة)</li>
                        <li>أخبري طبيب الأسنان بالحمل وعمر الحمل</li>
                        <li>الثلث الثاني هو الأفضل للإجراءات الاختيارية</li>
                        <li>أجلي الأشعة غير الطارئة حتى بعد الولادة</li>
                        <li>العلاج الطارئ يمكن إجراؤه في أي مرحلة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">النظافة الفموية اليومية</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>فرشي الأسنان مرتين يومياً بمعجون الفلورايد</li>
                        <li>استخدمي الخيط يومياً لمنع أمراض اللثة</li>
                        <li>اشطفي بالماء بعد نوبات الغثيان</li>
                        <li>استخدمي غسول فم خالي من الكحول</li>
                    </ul>
                </div>
            </div>
        ',
        'dental_refs' => 'American Dental Association (2021) "Oral Health During Pregnancy"; ACOG Clinical Guidance (2023) "Oral Health Care During Pregnancy"',
        
        'sleep_title' => 'عادات النوم الصحية أثناء الحمل',
        'sleep_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-indigo-50 rounded-lg border-l-4 border-indigo-500">
                    <h4 class="font-bold text-indigo-800 mb-2">تغيرات النوم حسب الثلث</h4>
                    <ul class="text-sm text-indigo-700 space-y-1">
                        <li><strong>الثلث الأول:</strong> زيادة النعاس؛ 8-10 ساعات موصى بها</li>
                        <li><strong>الثلث الثاني:</strong> جودة النوم تتحسن؛ 7-9 ساعات</li>
                        <li><strong>الثلث الثالث:</strong> كثرة التبول تؤثر على النوم</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">توصيات وضعية النوم</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>الوضعية الجانبية اليسرى</strong> هي المثلى</li>
                        <li>تجنبي النوم على ظهرك بعد 20 أسبوعاً</li>
                        <li>استخدمي الوسائد بين الركبتين وتحت البطن</li>
                        <li>ارفعي الجزء العلوي من الجسم قليلاً</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">نصائح نظافة النوم</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>حافظي على جدول نوم منتظم</li>
                        <li>تجنبي الكافيين بعد الساعة 2 ظهراً</li>
                        <li>قللي السوائل قبل النوم</li>
                        <li>أنشئي بيئة نوم باردة وداكنة وهادئة</li>
                        <li>نامي قيلولة (20-30 دقيقة مثالية)</li>
                    </ul>
                </div>
            </div>
        ',
        'sleep_refs' => 'National Sleep Foundation (2023) "Sleep and Pregnancy"; ACOG (2021) "Sleep During Pregnancy: Physiology and Interventions"',
        
        'medication_title' => 'أمان الأدوية أثناء الحمل',
        'medication_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">المبادئ العامة</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>لا يوجد دواء 100% آمن؛ يجب أن تفوق الفوائد المخاطر</li>
                        <li>الثلث الأول هو الفترة الأكثر ضعفاً لتطور أعضاء الجنين</li>
                        <li>استشيري مقدم الرعاية الصحية دائماً قبل بدء أي دواء</li>
                        <li>استخدمي الجرعة الأقل الفعالة لأقصر مدة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">أدوية آمنة بشكل عام</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>الألم/الحمى:</strong> الأسيتامينوفين (الباراسيتامول) هو المفضل</li>
                        <li><strong>الغثيان:</strong> فيتامين ب6، مكملات الزنجبيل، دوكسيلامين</li>
                        <li><strong>الحرقة:</strong> مضادات الحموضة، فاموتيدين، أوميبرازول</li>
                        <li><strong>الحساسية:</strong> لوراتادين، سيتريزين</li>
                        <li><strong>السعال:</strong> ديكستروميثورفان، غوايفينيسين</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">أدوية يجب تجنبها</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li><strong>مضادات الالتهاب غير الستيرويدية:</strong> إيبوبروفين، نابروكسين (خاصة بعد 30 أسبوعاً)</li>
                        <li><strong>إيزوتريتينوين (أكوتان):</strong> تشوهات خلقية شديدة</li>
                        <li><strong>الوارفارين:</strong> خطر نزيف الجنين</li>
                        <li><strong>بعض مثبطات ACE:</strong> تلف الكلى</li>
                        <li><strong>فيتامين أ بجرعات عالية:</strong> مسرطن</li>
                        <li><strong>معظم المكملات العشبية:</strong> بيانات سلامة غير كافية</li>
                    </ul>
                </div>
            </div>
        ',
        'medication_refs' => 'FDA (2023) "Medication Use During Pregnancy"; Briggs Drugs in Pregnancy and Lactation (2023 Edition); ACOG Clinical Guidance (2023) "Psychiatric Medications in Pregnancy"',
    ],
    
    // Family Planning Section
    'family_planning' => [
        'topics_title' => 'المواضيع',
        'topic_contraception' => 'وسائل منع الحمل',
        'topic_fertility' => 'الوعي بالخصوبة',
        'topic_preconception' => 'العناية ما قبل الحمل',
        'topic_sti' => 'الأمراض التناسلية',
        'topic_emergency_contraception' => 'منع الحمل العاجل',
        'topic_infertility' => 'مشاكل تأخر الحمل',
        'topic_hygiene_intimate' => 'العناية بالمنطقة الحميمة',
        
        'contraception_title' => 'وسائل منع الحمل',
        'contraception_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">حبوب منع الحمل المركبة (COCs)</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>طريقة الاستخدام:</strong> حبة واحدة يومياً في نفس الوقت تماماً</li>
                        <li><strong>الفعالية:</strong> 99% مع الاستخدام المثالي، 93% مع الاستخدام العادي</li>
                        <li><strong>المميزات:</strong> تنظيم الدورة، علاج حب الشباب، تقليل سرطان المبيض والرحم</li>
                        <li><strong>الآثار الجانبية:</strong> غثيان، صداع، تغير الوزن، تقلبات مزاجية</li>
                        <li><strong>موانع الاستخدام:</strong> تاريخ جلطات دموية، ضغط عالي، تدخين +35 سنة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">حبوب البروجستيرون فقط (POP)</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>طريقة الاستخدام:</strong> حبة يومياً في نفس الوقت (دقة التوقيت أعلى من COC)</li>
                        <li><strong>الفعالية:</strong> 99% مع الاستخدام المثالي، 93% مع الاستخدام العادي</li>
                        <li><strong>الاستخدام الأمثل:</strong> أثناء الرضاعة الطبيعية، للنساء اللاتي لا يمكنهن استخدام الإستروجين</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">الغرسة (Implanon/Nexplanon)</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>طريقة الاستخدام:</strong> غرسة صغيرة تحت الجلد في الذراع (تركيب طبي)</li>
                        <li><strong>المدة:</strong> 3-5 سنوات</li>
                        <li><strong>الفعالية:</strong> 99.95% (الأكثر فعالية)</li>
                        <li><strong>الإزالة:</strong> يمكن إزالتها في أي وقت والعودة للخصوبة فوراً</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-indigo-50 rounded-lg border-l-4 border-indigo-500">
                    <h4 class="font-bold text-indigo-800 mb-2">اللولب الهرموني (Mirena/Kyleena)</h4>
                    <ul class="text-sm text-indigo-700 space-y-1">
                        <li><strong>طريقة الاستخدام:</strong> تركيب داخل الرحم من قبل الطبيب</li>
                        <li><strong>المدة:</strong> 3-8 سنوات حسب النوع</li>
                        <li><strong>الفعالية:</strong> 99.8%</li>
                        <li><strong>المميزات:</strong> يقلل النزيف الشديد، يخفف ألم الدورة الشهرية</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-teal-50 rounded-lg border-l-4 border-teal-500">
                    <h4 class="font-bold text-teal-800 mb-2">الحقن (DMPA - Depo-Provera)</h4>
                    <ul class="text-sm text-teal-700 space-y-1">
                        <li><strong>طريقة الاستخدام:</strong> حقنة في العضل كل 3 أشهر</li>
                        <li><strong>الفعالية:</strong> 99% مع الالتزام بالمواعيد</li>
                        <li><strong>ملاحظة:</strong> قد تسبب زيادة الوزن وتأخر عودة الخصوبة (9-10 أشهر)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-orange-50 rounded-lg border-l-4 border-orange-500">
                    <h4 class="font-bold text-orange-800 mb-2">اللولب النحاسي (Paragard)</h4>
                    <ul class="text-sm text-orange-700 space-y-1">
                        <li><strong>طريقة الاستخدام:</strong> تركيب داخل الرحم من قبل الطبيب</li>
                        <li><strong>المدة:</strong> 10-12 سنة</li>
                        <li><strong>الفعالية:</strong> 99.2%</li>
                        <li><strong>المميزات:</strong> بدون هرمونات، يمكن استخدامه كمنع حمل عاجل</li>
                        <li><strong>الجانب السلبي:</strong> قد يزيد النزيف والتشنجات في البداية</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">الواقي الذكري</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>طريقة الاستخدام:</strong> يرتدى على العضو الذكري أثناء الانتصاب</li>
                        <li><strong>الفعالية:</strong> 98% مع الاستخدام المثالي، 87% مع الاستخدام العادي</li>
                        <li><strong>المميزات:</strong> الوسيلة الوحيدة التي تحمي من الأمراض التناسلية</li>
                        <li><strong>الاستخدام الصحيح:</strong> فحص الهواء، لف من القمة، مزلاق مائي/سيليكون</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-cyan-50 rounded-lg border-l-4 border-cyan-500">
                    <h4 class="font-bold text-cyan-800 mb-2">الواقي الأنثوي</h4>
                    <ul class="text-sm text-cyan-700 space-y-1">
                        <li><strong>طريقة الاستخدام:</strong> يُدخل في المهبل قبل الجماع (بحد أقصى 8 ساعات)</li>
                        <li><strong>الفعالية:</strong> 95% مع الاستخدام المثالي، 79% مع الاستخدام العادي</li>
                        <li><strong>المميزات:</strong> يغطي منطقة أوسع، حماية أفضل من الأمراض التناسلية</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-rose-50 rounded-lg border-l-4 border-rose-500">
                    <h4 class="font-bold text-rose-800 mb-2">الوسائل الدائمة</h4>
                    <ul class="text-sm text-rose-700 space-y-1">
                        <li><strong>ربط الأنابيب:</strong> إجراء جراحي دائم (99.5% فعالية)</li>
                        <li><strong>القصة (Vasectomy):</strong> للشريك الذكر، أقل خطورة وأسهل عكساً</li>
                    </ul>
                </div>
            </div>
        ',
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
        'fertility' => 'تحديد أيام الخصوبة',
        'sterilization' => 'الوسائل الدائمة (ربط الأنابيب/القصة)',
        'contraception_refs' => 'WHO (2022) "Family Planning: A Global Handbook for Providers"; CDC U.S. Medical Eligibility Criteria for Contraceptive Use (2024)',
        
        'fertility_title' => 'تحديد أيام الخصوبة',
        'fertility_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-teal-50 rounded-lg border-l-4 border-teal-500">
                    <h4 class="font-bold text-teal-800 mb-2">طريقة الأيام القياسية</h4>
                    <ul class="text-sm text-teal-700 space-y-1">
                        <li><strong>طريقة الاستخدام:</strong> تحديد الأيام 8-19 من الدورة (للدورات 26-32 يوم)</li>
                        <li><strong>الفعالية:</strong> معدل فشل 5% مع الاستخدام المثالي</li>
                        <li><strong>التحذير:</strong> لا تستخدميها في دورات غير منتظمة</li>
                        <li><strong>الأداة:</strong> أساور مطاطية ملونة أو تطبيقات الهاتف</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-orange-50 rounded-lg border-l-4 border-orange-500">
                    <h4 class="font-bold text-orange-800 mb-2">طريقة الحرارة القاعدية</h4>
                    <ul class="text-sm text-orange-700 space-y-1">
                        <li><strong>قياس الحرارة:</strong> يومياً قبل النهوض من الفراش</li>
                        <li><strong>ارتفاع الحرارة:</strong> 0.3-0.5 درجة بعد الإباضة</li>
                        <li><strong>الفترة الآمنة:</strong> بعد 3 أيام متتالية من ارتفاع الحرارة</li>
                        <li><strong>الأداة:</strong> ترمومتر خاص بالحمل (أكثر دقة)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">طريقة ملاحظة الإفرازات</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>المخاط قبل الإباضة:</strong> أبيض، مطاطي، مثل بياض البيض</li>
                        <li><strong>يوم الذروة:</strong> أكثر كمية وإنزلاقية</li>
                        <li><strong>بعد الإباضة:</strong> جاف، لزج أو لا يوجد</li>
                        <li><strong>التجنب:</strong> أيام المخاط والـ3 أيام التالية</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">تحذيرات مهمة</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>الفعالية تتراوح بين 77-98% حسب الالتزام</li>
                        <li>لا تحمي من الأمراض التناسلية</li>
                        <li>تتطلب تدريباً احترافياً للكفاءة العالية</li>
                        <li>الفترات غير المنتظمة تقلل الفعالية كثيراً</li>
                    </ul>
                </div>
            </div>
        ',
        'fertility_refs' => 'WHO (2021) "Selected Practice Recommendations for Contraceptive Use"; ACOG Practice Bulletin No. 233 (2021)',
        
        'preconception_title' => 'العناية ما قبل الحمل',
        'preconception_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">التغذية والمكملات</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>حمض الفوليك:</strong> 400-800 ميكروجرام يومياً (3 أشهر قبل الحمل)</li>
                        <li><strong>فيتامين د:</strong> 600-1000 وحدة دولية يومياً</li>
                        <li><strong>الأوميغا 3:</strong> 200-300 ملجرام DHA يومياً</li>
                        <li><strong>الحديد:</strong> فقط إذا كان هناك فقر دم</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">التطعيمات والفحوصات</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>MMR:</strong> الحصبة والحصبة الألمانية والنكاف (قبل 3 أشهر)</li>
                        <li><strong>جدري الماء:</strong> Varicella vaccine</li>
                        <li><strong>فحص الحصبة الألمانية:</strong> تأكدي من المناعة</li>
                        <li><strong>فحص الدرن:</strong> إذا كنتِ في منطقة موبوءة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">صحة مزمنة وأدوية</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>مراجعة الأدوية:</strong> منع الحمل، الأدوية المزمنة</li>
                        <li><strong>السكري:</strong> تحكم في السكر قبل الحمل</li>
                        <li><strong>الضغط:</strong> مراقبة وضبط</li>
                        <li><strong>الغدة الدرقية:</strong> فحص TSH</li>
                        <li><strong>نوبات الصرع:</strong> مراجعة أدوية آمنة للحمل</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">نمط الحياة والجينات</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li><strong>الوزن:</strong> BMI مثالي 18.5-24.9</li>
                        <li><strong>التدخين:</strong> الإقلاع قبل 3 أشهر على الأقل</li>
                        <li><strong>الكحول:</strong> التوقف تماماً</li>
                        <li><strong>الكافيين:</strong> تقليل لـ 200 ملجرام/يوم</li>
                        <li><strong>فحص الناقل الوراثي:</strong> للأمراض الوراثية حسب التاريخ</li>
                    </ul>
                </div>
            </div>
        ',
        'preconception_refs' => 'ACOG Clinical Guidance (2023) "Prepregnancy Counseling"; CDC (2023) "Preconception Health and Health Care"',
        
        'sti_title' => 'الأمراض التناسلية والوقاية منها',
        'sti_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">الفحوصات الأساسية</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li><strong>الإيدز:</strong> مرة واحدة على الأقل للنساء 13-64 سنة</li>
                        <li><strong>الكلاميديا والسيلان:</strong> سنوياً للنساء <25 سنة أو ذوات المخاطر</li>
                        <li><strong>الزهري:</strong> حسب عوامل الخطر وأثناء الحمل</li>
                        <li><strong>HPV:</strong> الفحص المشترك مع مسحة عنق الرحم كل 5 سنوات (30-65 سنة)</li>
                        <li><strong>التهاب الكبد B وC:</strong> حسب عوامل الخطر</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">استراتيجيات الوقاية</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>الواقيات:</strong> الاستخدام المنتظم للواقيات الذكرية/الأنثوية</li>
                        <li><strong>التطعيم:</strong> HPV (9-45 سنة) للوقاية من سرطان عنق الرحم</li>
                        <li><strong>التواصل:</strong> التحدث مع الشريك حول التاريخ الصحي</li>
                        <li><strong>الفحص:</strong> الفحص المنتظم حتى بدون أعراض</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">علامات التحذير</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>إفرازات غير طبيعية (رائحة، لون، كمية)</li>
                        <li>ألم أو حرقان أثناء التبول</li>
                        <li>تقرحات أو بثور في المنطقة التناسلية</li>
                        <li>ألم في الحوض أو أثناء الجماع</li>
                        <li>حمى مع أعراض تناسلية</li>
                    </ul>
                </div>
            </div>
        ',
        'sti_refs' => 'CDC STD Treatment Guidelines (2021); ACOG Practice Bulletin No. 227 (2021) "Screening for Sexually Transmitted Infections"',
        
        // أقسام جديدة لتخطيط الأسرة
        'emergency_title' => 'منع الحمل العاجل',
        'emergency_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">متى تستخدمينه</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>بعد الجماع غير المحمي أو فشل وسيلة منع الحمل</li>
                        <li><strong>ليس حبوب إجهاض:</strong> لا ينهي حملاً قائماً</li>
                        <li>الأسرع في الاستخدام = الأعلى فعالية</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">ليفونورجستريل (Plan B)</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>الجرعة:</strong> 1.5 ملجرام جرعة واحدة</li>
                        <li><strong>التوفر:</strong> بدون وصفة في الصيدليات</li>
                        <li><strong>الفعالية:</strong> 95% خلال 72 ساعة</li>
                        <li><strong>المدة القصوى:</strong> حتى 120 ساعة مع تناقص الفعالية</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">أوليبريستال أسيتات (Ella)</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>الجرعة:</strong> 30 ملجرام جرعة واحدة</li>
                        <li><strong>التوفر:</strong> يحتاج وصفة طبية</li>
                        <li><strong>الفعالية:</strong> فعال حتى 120 ساعة (5 أيام)</li>
                        <li><strong>الميزة:</strong> أكثر فعالية في الأيام 3-5</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-teal-50 rounded-lg border-l-4 border-teal-500">
                    <h4 class="font-bold text-teal-800 mb-2">اللولب النحاسي (الأكثر فعالية)</h4>
                    <ul class="text-sm text-teal-700 space-y-1">
                        <li><strong>الفعالية:</strong> >99% (الأعلى بين كل الوسائل)</li>
                        <li><strong>المدة:</strong> تركيب حتى 5 أيام بعد الجماع</li>
                        <li><strong>الميزة:</strong> يوفر منعاً مستمراً 10-12 سنة</li>
                        <li><strong>المناسبة:</strong> للنساء اللاتي يرغبن في وسيلة طويلة الأمد</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">ملاحظات مهمة</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>قد يؤخر الدورة الشهرية حتى أسبوع</li>
                        <li>إذا حدث حمل، لن يضر الجنين</li>
                        <li>لا يحمي من الأمراض التناسلية</li>
                        <li>يمكن تكراره في نفس الدورة لكنه أقل فعالية</li>
                    </ul>
                </div>
            </div>
        ',
        'emergency_refs' => 'WHO (2021) "Emergency Contraception"; ACOG Practice Bulletin No. 233 (2021) "Emergency Contraception"',
        
        'infertility_title' => 'تأخر الحمل وتقييم الخصوبة',
        'infertility_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">تعريف تأخر الحمل</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>عدم القدرة على الحمل بعد 12 شهراً من المحاولة المنتظمة</li>
                        <li>6 أشهر فقط إذا كانت المرأة ≥35 سنة</li>
                        <li>يصيب 10-15% من الأزواج عالمياً</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">جدول تقييم الحالة</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>تحت 35:</strong> التقييم بعد 12 شهراً من المحاولة</li>
                        <li><strong>35-40 سنة:</strong> التقييم بعد 6 أشهر</li>
                        <li><strong>فوق 40:</strong> التقييم فوراً</li>
                        <li><strong>تاريخ طبي:</strong> دورات غير منتظمة، حالات سابقة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">الفحوصات الأساسية</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>تقييم الإباضة:</strong> قياس الحرارة، اختبارات التبويض المنزلية</li>
                        <li><strong>احتياطي المبيض:</strong> FSH اليوم 3، AMH، العد الجريبي</li>
                        <li><strong>الشريك:</strong> تحليل السائل المنوي</li>
                        <li><strong>تصوير الحوض:</strong> صبغة الرحم وقناة فالوب</li>
                        <li><strong>موجات صوتية:</strong> لتقييم الرحم والمبايض</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">الأسباب الشائعة</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li><strong>اضطرابات الإباضة:</strong> 40% (PCOS، قصور المبيض)</li>
                        <li><strong>انسداد الأنابيب:</strong> 30% (التهابات، انتباط)</li>
                        <li><strong>عوامل الرحم:</strong> 15% (ألياف، التصاقات)</li>
                        <li><strong>غير مفسرة:</strong> 15% (كل الفحوصات طبيعية)</li>
                    </ul>
                </div>
            </div>
        ',
        'infertility_refs' => 'ACOG Clinical Guidance (2023) "Treating Infertility"; WHO (2020) "International Classification of Diseases 11th Revision (ICD-11) Infertility Guidelines"',
        
        'hygiene_intimate_title' => 'العناية بالمنطقة الحميمة والدورة الشهرية',
        'hygiene_intimate_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">العناية اليومية</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li>اغسلي المنطقة الخارجية (الفرج) بالماء الدافئ يومياً</li>
                        <li>استخدمي صابوناً خالياً من العطور فقط على المناطق الخارجية</li>
                        <li>لا تغسلي المهبلي أبداً - يخل بالفلورا الصحية</li>
                        <li>امسحي من الأمام للخلف بعد استخدام الحمام</li>
                        <li>ارتدي ملابس داخلية قطنية قابلة للتنفس</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">منتجات الدورة الشهرية</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>الفوط:</strong> غيريها كل 4-6 ساعات</li>
                        <li><strong>السدادات:</strong> كل 4-8 ساعات؛ أقل امتصاصية مطلوبة</li>
                        <li><strong>كؤوس الحيض:</strong> أفرغيها كل 8-12 ساعة</li>
                        <li><strong>القماش:</strong> قابلة لإعادة الاستخدام، تحتاج غسل جيد</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">علامات العدوى</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>إفرازات ذات رائحة كريهة</li>
                        <li>حكة أو حرقان</li>
                        <li>لون غير طبيعي (أخضر، رمادي، أصفر)</li>
                        <li>ألم حوضي أو حمى</li>
                        <li>نزيف غير منتظم</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">نصائح مهمة</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>تجنبي الملابس الضيقة المصنوعة من الألياف الصناعية</li>
                        <li>غيري الملابس الداخلية بعد الرياضة أو التعرق</li>
                        <li>لا تستخدمي العطور أو المزيلات في المنطقة الحميمة</li>
                        <li>استشيري الطبيب عند أي تغير غير طبيعي</li>
                    </ul>
                </div>
            </div>
        ',
        'hygiene_intimate_refs' => 'WHO (2023) "Guidelines on Menstrual Health and Hygiene"; ACOG (2022) "Vaginitis: Diagnosis and Treatment"',
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
        'topic_urinary' => 'صحة الجهاز البولي',
        'topic_cancer_screening' => 'فحص السرطان',
        'topic_weight_management' => 'إدارة الوزن',
        'topic_skin_hair' => 'العناية بالبشرة والشعر',
        'topic_hygiene_menopause' => 'العناية الشخصية',
        
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
        'symptoms_refs' => 'NAMS (2022) "The 2022 Hormone Therapy Position Statement"; ACOG Clinical Guidance (2024) "Management of Menopausal Symptoms"',
        
        'hormone_title' => 'العلاج الهرموني لسن اليأس (MHT)',
        'hormone_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">الفوائد العلاجية</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>العلاج الأكثر فعالية للهبات الساخنة وتعرق الليل</li>
                        <li>يمنع فقدان العظام وهشاشتها</li>
                        <li>يعالج أعراض ضمور المهبل</li>
                        <li>يحسن النوم وجودة الحياة بشكل عام</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">المخاطر المحتملة</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>جلطات الدم (خطر مضاعف في السنة الأولى)</li>
                        <li>السكتة الدماغية (خطر قليل مرتفع)</li>
                        <li>سرطان الثدي (مع العلاج المركب طويل الأمد)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">موانع الاستخدام</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>تاريخ سرطان الثدي أو الرحم</li>
                        <li>أمراض القلب التاجية</li>
                        <li>سكتة دماغية سابقة أو جلطات</li>
                        <li>أمراض الكبد الحادة</li>
                        <li>نزيف مهبلي غير مفسر</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">المبدأ العلاجي</h4>
                    <p class="text-sm text-blue-700">"أقل جرعة فعالة لأقصر مدة" - إعادة التقييم سنوياً مع الطبيب</p>
                </div>
            </div>
        ',
        'hormone_refs' => 'NAMS (2022) "The 2022 Hormone Therapy Position Statement of The North American Menopause Society"; ACOG Clinical Guidance (2024) "Management of Menopausal Symptoms"',
        
        'bone_title' => 'صحة العظام وهشاشة العظام',
        'bone_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">عوامل الخطر</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>سن اليأس المبكر (<45 سنة)</li>
                        <li>تاريخ عائلي لهشاشة العظام</li>
                        <li>نقص الوزن (BMI <20)</li>
                        <li>التدخين والكحول المفرط</li>
                        <li>نمط الحياة الخامل (قلة الحركة)</li>
                        <li>نقص فيتامين د والكالسيوم</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">استراتيجيات الوقاية</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>الكالسيوم:</strong> 1,200 ملجرام يومياً (غذاء + مكملات)</li>
                        <li><strong>فيتامين د:</strong> 800-1,000 وحدة دولية يومياً</li>
                        <li><strong>التمارين:</strong> تحمل الوزن ومقاومة العضلات 3 مرات أسبوعياً</li>
                        <li><strong>تجنب السقوط:</strong> إزالة العوائق في المنزل</li>
                        <li><strong>فحص DEXA:</strong> عند 65 سنة أو أبكر إن وجدت مخاطر</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">علامات الإنذار</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>آلام ظهر مزمنة</li>
                        <li>فقدان الطول التدريجي</li>
                        <li>حنق ظهر مفاجئ (كسور ضغط)</li>
                        <li>كسور العظام بأقل تأثير</li>
                    </ul>
                </div>
            </div>
        ',
        'bone_refs' => 'NOF (2022) "Clinician\'s Guide to Prevention and Treatment of Osteoporosis"; ACOG Clinical Guidance (2023) "Osteoporosis in Women"',
        
        'heart_title' => 'صحة القلب والأوعية الدموية',
        'heart_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">خطر أمراض القلب</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>أمراض القلب هي السبب الرئيسي للوفاة بين النساء</li>
                        <li>يزيد الخطر بعد سن اليأس بسبب انخفاض الاستروجين</li>
                        <li>دهون البطن تزيد بعد سن اليأس</li>
                        <li>مراقبة ضغط الدم والكوليسترول والسكر بانتظام</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">استراتيجيات الوقاية</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>التغذية:</strong> نمط غذاء متوسطي (خضروات، زيت زيتون، سمك)</li>
                        <li><strong>التمارين:</strong> 150 دقيقة معتدلة أسبوعياً</li>
                        <li><strong>الوزن:</strong> الحفاظ على BMI صحي</li>
                        <li><strong>التدخين:</strong> الإقلاع نهائياً</li>
                        <li><strong>التوتر:</strong> إدارة الإجهاد بالتأمل</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">عوامل الخطر القابلة للتعديل</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>ارتفاع ضغط الدم</li>
                        <li>ارتفاع الكوليسترول LDL</li>
                        <li>داء السكري من النوع 2</li>
                        <li>السمنة (خاصة دهون البطن)</li>
                        <li>التدخين والخمول البدني</li>
                    </ul>
                </div>
            </div>
        ',
        'heart_refs' => 'AHA (2021) "Guideline for the Prevention of Cardiovascular Disease in Women"; ACOG Clinical Guidance (2023) "Cardiovascular Disease in Women"',
        
        'sexual_title' => 'الصحة الجنسية بعد سن اليأس',
        'sexual_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">التغيرات الشائعة</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>جفاف المهبل وضموره (متلازمة الجهاز البولي التناسلي)</li>
                        <li>انخفاض الرغبة الجنسية</li>
                        <li>ألم أثناء الجماع (عسر الجماع)</li>
                        <li>أعراض بولية متزامنة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">خيارات العلاج</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>مرطبات ومراهي مهبلية:</strong> خالية من الهرمونات، آمنة يومياً</li>
                        <li><strong>الاستروجين المهبلي:</strong> منخفض الجرعة، أشكل أماناً</li>
                        <li><strong>أوسبيميفين:</strong> فموي لعسر الجماع</li>
                        <li><strong>براستيرون:</strong> تحميلة DHEA مهبلية</li>
                        <li><strong>العلاج بالليزر:</strong> في حالات مختارة</li>
                        <li><strong>العلاج الطبيعي:</strong> تمارين عضلات الحوض</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">نصائح للتحسين</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>استخدام مزلاقات مائية أثناء الجماع</li>
                        <li>الاستمرار في النشاط الجنسي يحسن الدورة الدموية</li>
                        <li>التواصل المفتوح مع الشريك</li>
                        <li>استشارة أخصائي الصحة الجنسية عند الحاجة</li>
                    </ul>
                </div>
            </div>
        ',
        'sexual_refs' => 'NAMS (2020) "Genitourinary Syndrome of Menopause: Position Statement"; ACOG Clinical Guidance (2024) "Menopausal Sexual Health"',
        
        'mental_title' => 'الصحة النفسية أثناء سن اليأس',
        'mental_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">التغيرات العاطفية</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>تقلبات المزاج والتهيج</li>
                        <li>قد يزداد خطر القلق والاكتئاب</li>
                        <li>اضطراب النوم يؤثر على الصحة النفسية</li>
                        <li>أعراض "ضباب الدماغ" المعرفية</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">استراتيجيات التكيف</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>العلاج المعرفي السلوكي (CBT):</strong> فعال للقلق والاكتئاب</li>
                        <li><strong>اليقظة الذهنية:</strong> تقليل الإجهاد والتوتر</li>
                        <li><strong>التمارين الرياضية:</strong> تحسين المزاج والنوم</li>
                        <li><strong>نوم كافٍ:</strong> 7-8 ساعات يومياً</li>
                        <li><strong>التواصل الاجتماعي:</strong> الدعم من العائلة والأصدقاء</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">العلاج الهرموني</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>قد يحسن الأعراض النفسية في بعض النساء</li>
                        <li>يفيد خاصةً عندما تكون الأعراض جسدية ونفسية</li>
                        <li>استشارة الطبيب للتقييم الفردي</li>
                    </ul>
                </div>
            </div>
        ',
        'mental_refs' => 'NAMS (2022) "Cognitive Activity During Menopause"; ACOG Clinical Guidance (2023) "Perimenopausal Depression and Mental Health"',
        
        'urinary_title' => 'صحة الجهاز البولي وسلس البول',
        'urinary_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">متلازمة الجهاز البولي التناسلي (GSM)</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>انخفاض الإستروجين يؤثر على المسالك البولية</li>
                        <li>زيادة التهابات المسالك البولية المتكررة</li>
                        <li>الحاجة الملحة للتبول</li>
                        <li>ضعف الأنسجة الداعمة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">أنواع سلس البول</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li><strong>سلس الإجهاد:</strong> تسرب عند السعال أو العطس أو الضحك</li>
                        <li><strong>سلس الحاجة:</strong> الرغبة المفاجئة القوية مع تسرب</li>
                        <li><strong>سلس مختلط:</strong> نوعان معاً</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">استراتيجيات العلاج</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>تمارين كيجل:</strong> 3 مجموعات من 10 انقباضات يومياً</li>
                        <li><strong>تدريب المثانة:</strong> التبول المجدول لإعادة التدريب</li>
                        <li><strong>الإستروجين المهبلي:</strong> يقلل الالتهابات ويحسن الأنسجة</li>
                        <li><strong>إدارة السوائل:</strong> كمية كافية لكن قللي قبل النوم</li>
                    </ul>
                </div>
            </div>
        ',
        'urinary_refs' => 'NAMS (2020) "Genitourinary Syndrome of Menopause: Position Statement"; ACOG Clinical Guidance (2024) "Urinary Incontinence in Women"',
        
        'cancer_title' => 'فحص السرطان بعد سن اليأس',
        'cancer_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">فحص سرطان الثدي</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>الفحص:</strong> تصوير الثدي بالأشعة (Mammogram)</li>
                        <li><strong>المدة:</strong> كل 1-2 سنة للأعمار 40-74</li>
                        <li><strong>الاستمرار:</strong> طالما الصحة العامة جيدة</li>
                        <li><strong>التوقف:</strong> يمكن إيقاف الفحص حوالي 75 سنة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">فحص سرطان عنق الرحم</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>الخيار 1:</strong> مسحة عنق الرحم كل 3 سنوات (21-65 سنة)</li>
                        <li><strong>الخيار 2:</strong> الفحص المشترك مع HPV كل 5 سنوات (30-65 سنة)</li>
                        <li><strong>التوقف:</strong> بعد 65 إذا كان الفحص السابق كافياً</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">فحص سرطان القولون والمستقيم</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>البدء:</strong> في 45 سنة (أبكر مع تاريخ عائلي)</li>
                        <li><strong>الخيار 1:</strong> تنظير القولون كل 10 سنوات</li>
                        <li><strong>الخيار 2:</strong> فحوصات البراز سنوياً</li>
                    </ul>
                </div>
            </div>
        ',
        'cancer_refs' => 'USPSTF (2023) "Screening for Breast Cancer"; ACS (2023) "Cancer Screening Guidelines"; ACOG Clinical Guidance (2024) "Cervical Cancer Screening and Prevention"',
        
        'weight_title' => 'إدارة الوزن أثناء سن اليأس',
        'weight_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">لماذا يزداد الوزن</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>انخفاض الإستروجين يؤدي لتحول الدهون من الفخذ للبطن</li>
                        <li>معدل الأيض ينخفض 2-5% كل عقد</li>
                        <li>فقدان الكتلة العضلية يقلل حرق السعرات</li>
                        <li>النوم السيئ يؤثر على هرمونات الجوع (الجريلين)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">استراتيجيات فعّالة</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>البروتين:</strong> 1.0-1.2جم/كجم للحفاظ على العضلات</li>
                        <li><strong>تمارين المقاومة:</strong> 2-3 مرات أسبوعياً (مهمة جداً)</li>
                        <li><strong>تعديل السعرات:</strong> تقليل 200-300 سعرة يومياً</li>
                        <li><strong>إدارة التوتر:</strong> الكورتيزول يعزز تخزين دهون البطن</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">الأهداف الواقعية</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>خسارة 5-10% من الوزن تحسن الصحة كثيراً</li>
                        <li>0.5-1 كجم خسارة أسبوعياً هدف صحي</li>
                        <li>التركيز على مقاسات الجسم لا الوزن وحده</li>
                    </ul>
                </div>
            </div>
        ',
        'weight_refs' => 'NAMS (2022) "The Role of Obesity in Menopause"; ACOG Clinical Guidance (2023) "Weight Management in Menopause"',
        
        'skin_title' => 'تغيرات البشرة والشعر في سن اليأس',
        'skin_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">تغيرات البشرة</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li><strong>فقدان الكولاجين:</strong> انخفاض 30% في 5 سنوات الأولى</li>
                        <li>زيادة الجفاف والحكة</li>
                        <li>انخفاض المرونة مما يؤدي إلى الترهل</li>
                        <li>ترقق حاجز الجلد</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-orange-50 rounded-lg border-l-4 border-orange-500">
                    <h4 class="font-bold text-orange-800 mb-2">تغيرات الشعر</h4>
                    <ul class="text-sm text-orange-700 space-y-1">
                        <li>ترقق الشعر بشكل عام وانخفاض الكثافة</li>
                        <li>تراجع خط الشعر الأمامي</li>
                        <li>زيادة شعر الوجه (الذقن، الشارب)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">توصيات العناية بالبشرة</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>الترطيب:</strong> منتجات بسيراميدات وحمض الهيالورونيك</li>
                        <li><strong>الريتينويدات:</strong> ريتينول لتحفيز الكولاجين</li>
                        <li><strong>الحماية:</strong> واقي شمس SPF 30+ يومياً</li>
                        <li><strong>الغسول:</strong> منظفات معتدلة خالية من الصابون</li>
                    </ul>
                </div>
            </div>
        ',
        'skin_refs' => 'American Academy of Dermatology (2023) "Skin Care in Menopause"; NAMS (2022) "Effects of Menopause on Skin and Hair"',
        
        'hygiene_title' => 'العناية الشخصية أثناء سن اليأس',
        'hygiene_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">العناية بالمهبل والفرج</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li>اغسلي المنطقة الخارجية بالماء الدافئ يومياً</li>
                        <li>استخدمي منتجات متوازنة الحموضة وخالية من العطور</li>
                        <li>تجنبي الغسل المهبلي والمنظفات القاسية</li>
                        <li>طبقي مرطباً خالياً من العطور على الأنسجة الخارجية</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">التعامل مع زيادة التعرق</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>استحمي أو نظفي نفسك بعد الهبات الساخنة</li>
                        <li>استخدمي مزيل عرق قوي</li>
                        <li>ارتدي أقمشة تسمح بتبخر العرق وتنفس الجلد</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">نظافة المسالك البولية</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>امسحي من الأمام للخلف</li>
                        <li>تبولي بعد الجماع</li>
                        <li>غيري الملابس الرطبة فوراً</li>
                    </ul>
                </div>
            </div>
        ',
        'hygiene_refs' => 'ACOG (2022) "Menopause and Sexual Health"; WHO (2021) "Women\'s Health and Hygiene in Aging"',
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
        'topic_hygiene_postpartum' => 'العناية بالجراح والتنظيف',
        'topic_exercise' => 'التعافي بالتمارين',
        'topic_nutrition' => 'التغذية بعد الولادة',
        'topic_pelvic_floor' => 'صحة الحوض',
        'topic_emotional_bonding' => 'الترابط العاطفي',
        
        'timeline_title' => 'الجدول الزمني للتعافي',
        'hour1' => 'التواصل الفوري مع الطفل وبدء الرضاعة',
        'day1' => 'مراقبة النزيف واستقرار العلامات الحيوية',
        'week1' => 'انقباض الرحم، مراقبة النزيف (اللوكيا)',
        'week6' => 'زيارة ما بعد الولادة، تقييم التعافي',
        
        'recovery_title' => 'التعافي الجسدي بعد الولادة',
        'recovery_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">التغيرات الطبيعية</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>اللوكيا:</strong> إفرازات مهبلية 4-6 أسابيع (حمراء → صفراء → بيضاء)</li>
                        <li><strong>انقباض الرحم:</strong> يعود للحوض خلال أسبوعين</li>
                        <li><strong>شفاء العجان:</strong> 3-6 أسابيع للتمزقات/التقطيع</li>
                        <li><strong>الولادة القيصرية:</strong> 4-6 أسابيع لشفاء الجرح</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">⚠️ علامات الخطر - اتصلي بالطبيب فوراً</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>نزيف شديد (تشبع فوطة في ساعة)</li>
                        <li>حمى >38°م</li>
                        <li>صداع شديد أو تغيرات في الرؤية</li>
                        <li>ألم في الصدر أو صعوبة في التنفس</li>
                        <li>ألم أو تورم في الساق (جلطات)</li>
                        <li>احمرار أو صديد في الجرح</li>
                    </ul>
                </div>
            </div>
        ',
        'recovery_refs' => 'ACOG Clinical Guidance (2023) "Postpartum Care"; WHO (2022) "Recommendations on Postnatal Care"',
        
        'breastfeeding_title' => 'إرشادات الرضاعة الطبيعية',
        'breastfeeding_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">توصيات WHO/UNICEF</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>بدء الرضاعة في الساعة الأولى بعد الولادة</li>
                        <li>الرضاعة الطبيعية الحصرية للأشهر الستة الأولى</li>
                        <li>الاستمرار لمدة سنتين مع الأطعمة التكميلية</li>
                        <li>الإرضاع عند الطلب (8-12 مرة كل 24 ساعة)</li>
                        <li>لا ماء أو رضاعة صناعية في الأشهر الستة الأولى</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">تغذية الأم المرضع</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>السعرات:</strong> 330-400 سعرة إضافية/يوم</li>
                        <li><strong>المكملات:</strong> استمرار فيتامينات الحمل</li>
                        <li><strong>الترطيب:</strong> 3+ لترات سوائل يومياً</li>
                        <li><strong>الكافيين:</strong> تقليل لـ 200-300 ملجرام/يوم</li>
                        <li><strong>الكحول:</strong> تجنب الإفراط (تأخير 2-3 ساعات للرضاعة)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">الموانع المؤقتة</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>الإيدز الأم (في بعض البلدان)</li>
                        <li>السل النشط غير المعالج</li>
                        <li>بعض الأدوية (استشارة الطبيب ضرورية)</li>
                    </ul>
                </div>
            </div>
        ',
        'months_exclusive' => 'أشهر حصرية',
        'years_continue' => 'سنوات استمرار',
        'breastfeeding_refs' => 'WHO (2023) "Infant and Young Child Feeding"; AAP Policy Statement (2022) "Breastfeeding and the Use of Human Milk"; ACOG Clinical Guidance (2023) "Breastfeeding Support"',
        
        'newborn_title' => 'العناية الأساسية بحديثي الولادة',
        'newborn_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">العناية اليومية</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>الإرضاع:</strong> كل 2-3 ساعات، راقبي إشارات الجوع</li>
                        <li><strong>النوم:</strong> 16-17 ساعة يومياً، دائماً على الظهر</li>
                        <li><strong>الحفاضات:</strong> 6+ مبللة يومياً بعد اليوم 4</li>
                        <li><strong>عناية السرة:</strong> نظيفة وجافة؛ تسقط في 1-2 أسبوع</li>
                        <li><strong>الاستحمام:</strong> حمام إسفنجي حتى تسقط السرة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">الجلد للجلد والترابط</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>ضعي صدر الطفل العاري على صدركِ</li>
                        <li>يعزز الترابط العاطفي والرضاعة</li>
                        <li>ينظم درجة حرارة ونبضات قلب الطفل</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">⚠️ علامات الخطر - اذهبي للطوارئ</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>حمى >38°م أو انخفاض حرارة</li>
                        <li>رفض الرضاعة تماماً</li>
                        <li>الخمول الشديد أو صعوبة الإيقاظ</li>
                        <li>تنفس سريع أو شخير</li>
                        <li>زرقة (زرقاق) في الشفاه أو الوجه</li>
                        <li>اصفرار الجلد يمتد للساقين (اليرقان الشديد)</li>
                    </ul>
                </div>
            </div>
        ',
        'newborn_refs' => 'AAP/AHA (2023) "Neonatal Resuscitation Program"; WHO (2022) "Guidelines on Newborn Health"; AAP (2024) "Guidelines for Perinatal Care"',
        
        'depression_title' => 'اكتئاب ما بعد الولادة (PPD)',
        'depression_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">فهم الاكتئاب</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>يصيب 10-20% من الأمهات الجدد</li>
                        <li>قد يحدث في أي وقت خلال السنة الأولى</li>
                        <li>أكثر من "كآبة ما بعد الولادة" (تزول خلال أسبوعين)</li>
                        <li>يمكن للآباء أيضاً الإصابة (8-10%)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">الأعراض التحذيرية</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>مزاج حزين أو قلق أو "فارغ" مستمر</li>
                        <li>التهيج أو العصبية</li>
                        <li>فقدان الاهتمام بالأنشطة</li>
                        <li>صعوبة الترابط مع الطفل</li>
                        <li>تغيرات في النوم أو الشهية</li>
                        <li>مشاعر الذنب أو عدم القيمة</li>
                        <li>أفكار إيذاء النفس أو الطفل</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">العلاج والدعم</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>العلاج النفسي:</strong> CBT، IPT فعّالة جداً</li>
                        <li><strong>مضادات الاكتئاب:</strong> SSRIs آمنة أثناء الرضاعة</li>
                        <li><strong>مجموعات الدعم:</strong> مشاركة التجارب</li>
                        <li><strong>مع العلاج:</strong> يُتوقع الشفاء التام</li>
                    </ul>
                </div>
            </div>
        ',
        'help_line' => 'إذا كان لديك أفكار إيذاء نفسك أو طفلك، اطلب المساعدة فوراً. اتصلي بمقدم الرعاية الصحية، اذهبي لقسم الطوارئ، أو اتصلي بخدمات الطوارئ.',
        'depression_refs' => 'ACOG Clinical Guidance (2023) "Screening for Perinatal Depression"; AAP Policy Statement (2022) "Incorporating Recognition and Management of Perinatal Depression"; WHO (2023)',
        
        'contraception_title' => 'منع الحمل بعد الولادة',
        'contraception_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">⚠️ توقيت مهم</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>قد تعود الخصوبة مبكراً بعد 3 أسابيع من الولادة</li>
                        <li>حتى أثناء الرضاعة، يمكن أن تحدث إباضة</li>
                        <li>طريقة LAM فعالة فقط إذا: طفل <6 أشهر، رضاعة حصرية، لا دورات</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">خيارات آمنة حسب التوقيت</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>فوراً:</strong> اللولب (48 ساعة أو بعد 4 أسابيع)، الغرسة، البروجستيرون فقط</li>
                        <li><strong>بعد 3 أسابيع:</strong> الوسائل الهرمونية المركبة (غير مرضعة)</li>
                        <li><strong>بعد 6 أسابيع:</strong> جميع الوسائل متاحة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">اعتبارات الرضاعة</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>تُفضل وسائل البروجستيرون فقط</li>
                        <li>الاستروجين قد يقلل إدرار الحليب</li>
                        <li>الواقيات آمنة ولا تؤثر على الرضاعة</li>
                    </ul>
                </div>
            </div>
        ',
        'contraception_refs' => 'CDC U.S. Medical Eligibility Criteria for Contraceptive Use (2024); WHO (2024) "Selected Practice Recommendations for Contraceptive Use"',
        
        'checkups_title' => 'زيارات المتابعة بعد الولادة',
        'checkups_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">جدول الزيارات (توصيات ACOG)</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>خلال 3 أسابيع:</strong> أول اتصال (هاتف/زيارة)</li>
                        <li><strong>قبل 12 أسبوع:</strong> زيارة شاملة بعد الولادة</li>
                        <li><strong>متابعة مستمرة:</strong> حسب الحاجة</li>
                        <li><strong>12 شهر:</strong> زيارة صحة المرأة الشاملة</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">مكونات التقييم</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>التعافي الجسدي (العجان، الرحم، الجرح)</li>
                        <li>المزاج والرفاهية العاطفية (فحص EPDS)</li>
                        <li>إرضاع الطفل ورعايته</li>
                        <li>تخطيط الأسرة ومنع الحمل</li>
                        <li>إدارة الأمراض المزمنة</li>
                        <li>التطعيمات (Tdap، MMR، جدري الماء)</li>
                        <li>الفحوصات (مسحة عنق الرحم، متابعة السكر)</li>
                    </ul>
                </div>
            </div>
        ',
        'checkups_refs' => 'ACOG Clinical Guidance (2023) "Optimizing Postpartum Care"; AAP/AHA (2024) "Guidelines for Perinatal Care"',
        
        // أقسام جديدة لما بعد الولادة
        'hygiene_title' => 'العناية بالجراح والتنظيف',
        'hygiene_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">عناية العجان (الولادة الطبيعية)</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>كمادات الثلج:</strong> 10-20 دقيقة أول 24 ساعة</li>
                        <li><strong>حمامات المقعدة:</strong> 2-3 مرات يومياً من اليوم 2-3</li>
                        <li><strong>القنينة:</strong> اشطفي بالماء الدافئ بعد كل حمام</li>
                        <li><strong>الفوط:</strong> كل 2-4 ساعات؛ تجنبي السدادات 6 أسابيع</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">عناية جرح القيصرية</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>أبقي الجرح نظيفاً وجافاً</li>
                        <li>اغسلي بلطف بالصابون والماء</li>
                        <li>راقبي علامات العدوى: احمرار، حرارة، صديد</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">نظافة الثدي</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>اغسلي الحلمات بالماء فقط (بدون صابون)</li>
                        <li>غيري فوط الرضاعة المتكررة</li>
                        <li>دعي الحلمات تجف في الهواء</li>
                    </ul>
                </div>
            </div>
        ',
        'hygiene_refs' => 'ACOG (2023) "Postpartum Care"; WHO (2022) "Postnatal Care Recommendations"',
        
        'exercise_title' => 'التعافي بالتمارين بعد الولادة',
        'exercise_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">الجدول الزمني للتعافي</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>الأيام 1-7:</strong> مشي خفيف، تنفس عميق، تفعيل قاع الحوض</li>
                        <li><strong>الأسابيع 2-6:</strong> زيادة المشي؛ تجنب التمارين عالية التأثير</li>
                        <li><strong>الأسابيع 6-12:</strong> حصص تمارين، السباحة بإذن الطبيب</li>
                        <li><strong>بعد 12 أسبوع:</strong> العودة للأنشطة ما قبل الحمل</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">إرشادات حسب نوع الولادة</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>طبيعية:</strong> البدء الخفيف عند الراحة (1-2 أسبوع)</li>
                        <li><strong>قيصرية:</strong> انتظري 6-8 أسابيع قبل تمارين البطن</li>
                        <li><strong>تمزقات العجان:</strong> تجنبي القرفصاء حتى الشفاء</li>
                    </ul>
                </div>
            </div>
        ',
        'exercise_refs' => 'ACOG Committee Opinion No. 804 (2020) "Physical Activity and Exercise During Pregnancy and the Postpartum Period"',
        
        'nutrition_title' => 'التغذية بعد الولادة',
        'nutrition_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">احتياجات التغذية للتعافي</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>السعرات:</strong> 1,800-2,200 يومياً (بدون رضاعة)؛ 2,200-2,500 (مع رضاعة)</li>
                        <li><strong>البروتين:</strong> 65-75جم يومياً (يدعم شفاء الأنسجة)</li>
                        <li><strong>الحديد:</strong> استمرار فيتامينات الحمل</li>
                        <li><strong>الألياف:</strong> 25-30جم لمنع الإمساك</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">فقدان الوزن الصحي</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>فقدان تدريجي 0.5-1 كجم/أسبوع</li>
                        <li>آمن أثناء الرضاعة</li>
                        <li>تجنبي الحميات القاسية</li>
                        <li>التركيز على التغذية الجيدة لا الحرمان</li>
                    </ul>
                </div>
            </div>
        ',
        'nutrition_refs' => 'WHO (2018) "Infant and Young Child Feeding"; Academy of Nutrition and Dietetics (2021) "Postpartum Nutrition Guidelines"',
        
        'pelvic_title' => 'صحة قاع الحوض والتعافي',
        'pelvic_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">فهم عضلات قاع الحوض</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>تدعم المثانة والرحم والأمعاء</li>
                        <li>الحمل والولادة يمددان ويضران هذه العضلات</li>
                        <li>التعافي يحتاج وقت وتمرين منتظم</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">المشاكل الشائعة</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li><strong>سلس البول:</strong> تسرب عند السعال أو العطس (30-50% بعد الولادة)</li>
                        <li><strong>هبوط الأعضاء:</strong> شعور بالثقل أو انتفاخ</li>
                        <li><strong>ألم العجان:</strong> من التمزقات أو التقطيع</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">تمارين كيجل</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>ابدئي في الأيام الأولى بعد الولادة</li>
                        <li>انقبضي لـ 5 ثوانٍ، ارتخي 5 ثوانٍ</li>
                        <li>10 تكرارات، 3 مرات يومياً</li>
                        <li>استمري لمدة 6 أشهر على الأقل</li>
                    </ul>
                </div>
            </div>
        ',
        'pelvic_refs' => 'ACOG Clinical Guidance (2023) "Pelvic Floor Disorders"; WHO (2022) "Postpartum Care"',
        
        'bonding_title' => 'الترابط العاطفي والتعلق',
        'bonding_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">بناء الترابط (الأسابيع الأولى)</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>الجلد للجلد:</strong> ضعي صدر الطفل العاري على صدركِ</li>
                        <li><strong>الاتصال البصري:</strong> الطفل يرى 20-30 سم؛ حدقي في عينيه</li>
                        <li><strong>العناية الاستجابية:</strong> استجيبي على الفور لإشارات الطفل</li>
                        <li><strong>التفاعل الصوتي:</strong> تحدثي، غني، واقرأي لطفلك</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">قراءة إشارات الطفل</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>الجوع:</strong> تحول الرأس، حركات المص، اليد للفم</li>
                        <li><strong>التعب:</strong> التثاؤب، فرك العينين، النظر بعيداً</li>
                        <li><strong>الراحة:</strong> الاتصال البصري، جسم مرتخي</li>
                    </ul>
                </div>
            </div>
        ',
        'bonding_refs' => 'AAP (2023) "Parental Bonding and Attachment"; WHO (2022) "Early Childhood Development"',
    ],
    
    // AI CTA
    'ai_cta_title' => 'لديكِ أسئلة؟ اسألي مساعدنا الذكي',
    'ai_cta_desc' => 'تم تدريب مساعدنا الذكي على أحدث الإرشادات الطبية للإجابة على أسئلتك حول صحة المرأة في كل مرحلة من مراحل الحياة.',
    'ai_cta_button' => 'تحدثي مع المساعد الذكي',
];
