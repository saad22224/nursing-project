<?php

return [
    // General
    'title' => 'Women\'s Health Hub | Women\'s Health',
    'badge' => 'Evidence-Based Medical Information',
    'hero_title' => 'Comprehensive Women\'s Health Care',
    'hero_desc' => 'Scientific information covering all stages of a woman\'s life: pregnancy, family planning, menopause, and postpartum, based on the latest international medical guidelines from WHO, ACOG, and FIGO.',
    
    // References
    'ref_who' => 'WHO Guidelines',
    'ref_acog' => 'ACOG Standards',
    'ref_figo' => 'FIGO Protocols',
    'ref_aap' => 'AAP Guidelines',
    'references' => 'Medical References',
    
    // Tabs
    'tab_adolescence' => 'Adolescence',
    'tab_pregnancy' => 'Pregnancy',
    'tab_family_planning' => 'Family Planning',
    'tab_menopause' => 'Menopause',
    'tab_postpartum' => 'Postpartum',
    
    // Common
    'trimester' => 'Trimester',
    'test' => 'Test/Exam',
    'purpose' => 'Purpose',
    'first_trimester' => 'First Trimester',
    'second_trimester' => 'Second Trimester',
    'third_trimester' => 'Third Trimester',
    'years' => 'years',
    
    // Adolescence Section
    'adolescence' => [
        'topics_title' => 'Adolescence Topics',
        'facts_title' => 'Adolescence Facts',
        'age_start' => 'Puberty Onset Age',
        'menarche_age' => 'Average Menarche Age',
        'duration' => 'Adolescence Duration',
        'who_ref' => 'Source: WHO & UNICEF (2023)',
        
        'topic_puberty' => 'Puberty Changes',
        'topic_menstrual_health' => 'Menstrual Health',
        'topic_nutrition' => 'Healthy Nutrition',
        'topic_mental_health' => 'Mental Health',
        'topic_hygiene' => 'Personal Hygiene',
        'topic_exercise' => 'Physical Activity',
        'topic_reproductive_education' => 'Reproductive Education',
        'topic_body_image' => 'Body Image',
        'topic_healthy_relationships' => 'Healthy Relationships',
        
        'puberty_title' => 'Puberty and Growth Changes',
        'puberty_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Physical Changes</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Breast development:</strong> Usually starts between ages 8-13 (Tanner Stage 2)</li>
                        <li><strong>Vaginal discharge:</strong> Sign that first period is approaching</li>
                        <li><strong>Growth spurt:</strong> Height increases 5-10 cm per year</li>
                        <li><strong>Body shape changes:</strong> Fat accumulation in hips and thighs</li>
                        <li><strong>Sweating and body odor:</strong> Due to hormonal changes</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Menstruation (Period)</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Average age of onset:</strong> 12-13 years (range 9-16 years)</li>
                        <li><strong>Cycles initially:</strong> May be irregular for 2-3 years</li>
                        <li><strong>Cycle length:</strong> Usually 21-45 days in first 2 years</li>
                        <li><strong>Bleeding:</strong> 2-7 days, average 30-40 ml of blood</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Emotional and Social Maturity</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>Mood swings due to hormones (estrogen and progesterone)</li>
                        <li>Increasing interest in social relationships and peers</li>
                        <li>Development of personal identity and independence</li>
                        <li>Desire for privacy and independence from family</li>
                    </ul>
                </div>
            </div>
        ',
        'puberty_refs' => 'WHO (2023) "Adolescent Health"; ACOG (2022) "Menstruation in Girls and Adolescents"',
        
        'menstrual_title' => 'Menstrual Health',
        'menstrual_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">Understanding the Menstrual Cycle</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>Follicular phase:</strong> Days 1-14 (egg development)</li>
                        <li><strong>Ovulation:</strong> Around day 14 (midpoint of ideal 28-day cycle)</li>
                        <li><strong>Luteal phase:</strong> Days 15-28 (uterus preparation)</li>
                        <li><strong>Bleeding:</strong> Begins when pregnancy does not occur</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-cyan-50 rounded-lg border-l-4 border-cyan-500">
                    <h4 class="font-bold text-cyan-800 mb-2">Period Management</h4>
                    <ul class="text-sm text-cyan-700 space-y-1">
                        <li><strong>Pads:</strong> Change every 4-6 hours minimum</li>
                        <li><strong>Tampons:</strong> Do not leave in for more than 8 hours (TSS risk)</li>
                        <li><strong>Menstrual cup:</strong> Safe for teens, empty every 8-12 hours</li>
                        <li><strong>Track your cycle:</strong> Use apps or calendar to predict next period</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">When to See a Doctor?</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>First period before age 9 or absence after age 16</li>
                        <li>Very heavy bleeding (changing every hour or less)</li>
                        <li>Very irregular periods after 3 years from start</li>
                        <li>Severe pain that prevents daily activities</li>
                        <li>Missing periods for 3 consecutive months</li>
                    </ul>
                </div>
            </div>
        ',
        'menstrual_refs' => 'ACOG (2023) "Menstruation in Girls and Adolescents"; AAP (2022) "Menstrual Health"',
        
        'nutrition_title' => 'Healthy Nutrition for Teens',
        'nutrition_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Nutritional Needs</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Iron:</strong> 15 mg/day (important during menstruation)</li>
                        <li><strong>Calcium:</strong> 1,300 mg/day (peak bone growth)</li>
                        <li><strong>Vitamin D:</strong> 600 IU/day</li>
                        <li><strong>Folate:</strong> 400 mcg/day</li>
                        <li><strong>Protein:</strong> 46 g/day</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-orange-50 rounded-lg border-l-4 border-orange-500">
                    <h4 class="font-bold text-orange-800 mb-2">Healthy Eating Tips</h4>
                    <ul class="text-sm text-orange-700 space-y-1">
                        <li>Eat 3 main meals + healthy snacks</li>
                        <li>Do not skip breakfast - improves school concentration</li>
                        <li>Drink 8-10 cups of water daily</li>
                        <li>Eat fruits and vegetables of different colors</li>
                        <li>Choose whole grains over refined ones</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Habits to Avoid</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Extreme diets - negatively affect growth</li>
                        <li>Skipping meals - leads to anemia and fatigue</li>
                        <li>Excessive soda drinks - prevent calcium absorption</li>
                        <li>Daily fast food consumption</li>
                    </ul>
                </div>
            </div>
        ',
        'nutrition_refs' => 'WHO (2022) "Nutrition in Adolescents"; AAP (2023) "Healthy Eating for Teens"',
        
        'mental_title' => 'Mental Health in Adolescence',
        'mental_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Common Mental Health Challenges</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>Mood swings:</strong> Normal due to hormonal changes</li>
                        <li><strong>Social pressure:</strong> Peer pressure and bullying</li>
                        <li><strong>Social anxiety:</strong> Fear of judgment or embarrassment</li>
                        <li><strong>Depression:</strong> Affects 1 in 5 teenagers</li>
                        <li><strong>Body image issues:</strong> Dissatisfaction with appearance</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Strategies for Coping with Stress</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Talk to someone you trust (parent, teacher, friend)</li>
                        <li>Exercise regularly (reduces stress)</li>
                        <li>Get adequate sleep (8-10 hours for teens)</li>
                        <li>Reduce screen time and social media</li>
                        <li>Learn relaxation and deep breathing techniques</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-rose-50 rounded-lg border-l-4 border-rose-500">
                    <h4 class="font-bold text-rose-800 mb-2">When to Seek Help?</h4>
                    <ul class="text-sm text-rose-700 space-y-1">
                        <li>Persistent sadness for more than 2 weeks</li>
                        <li>Loss of interest in favorite activities</li>
                        <li>Significant changes in sleep or appetite</li>
                        <li>Thoughts of self-harm</li>
                        <li>Difficulty concentrating in school</li>
                    </ul>
                </div>
            </div>
        ',
        'mental_refs' => 'WHO (2023) "Mental Health of Adolescents"; AAP (2023) "Depression in Teens"',
        
        'hygiene_title' => 'Personal Hygiene for Teens',
        'hygiene_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-cyan-50 rounded-lg border-l-4 border-cyan-500">
                    <h4 class="font-bold text-cyan-800 mb-2">Daily Hygiene</h4>
                    <ul class="text-sm text-cyan-700 space-y-1">
                        <li>Shower daily using mild soap</li>
                        <li>Wash face twice daily (morning and evening)</li>
                        <li>Use deodorant or antiperspirant</li>
                        <li>Brush teeth twice daily with brush and floss</li>
                        <li>Change underwear daily</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">Intimate Hygiene</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li>Wash external genital area with warm water only</li>
                        <li>Avoid douching (triggers infection)</li>
                        <li>Wear cotton underwear</li>
                        <li>Avoid tight clothing for long periods</li>
                        <li>Change pads/tampons regularly during period</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Skin Care Tips</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Use sunscreen SPF 30 daily</li>
                        <li>Avoid touching face with dirty hands</li>
                        <li>Avoid picking pimples (increases scarring)</li>
                        <li>Use non-comedogenic products</li>
                    </ul>
                </div>
            </div>
        ',
        'hygiene_refs' => 'AAP (2022) "Hygiene for Teens"; ACOG (2023) "Vulvar Care"',
        
        'exercise_title' => 'Physical Activity for Teens',
        'exercise_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Recommendations</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>At least 60 minutes of physical activity daily</li>
                        <li>Muscle-strengthening exercises 3 days/week</li>
                        <li>Bone-strengthening exercises (jumping, running)</li>
                        <li>Variety of activities to maintain interest</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Benefits of Exercise</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Builds peak bone mass (important for preventing osteoporosis)</li>
                        <li>Improves mood and reduces anxiety and depression</li>
                        <li>Maintains healthy weight</li>
                        <li>Improves sleep and energy</li>
                        <li>Increases self-confidence</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-orange-50 rounded-lg border-l-4 border-orange-500">
                    <h4 class="font-bold text-orange-800 mb-2">Suitable Activities</h4>
                    <ul class="text-sm text-orange-700 space-y-1">
                        <li>Walking, running, cycling</li>
                        <li>Swimming and water sports</li>
                        <li>Yoga and Pilates</li>
                        <li>Team sports (soccer, basketball)</li>
                        <li>Dancing and gymnastics</li>
                    </ul>
                </div>
            </div>
        ',
        'exercise_refs' => 'WHO (2023) "Physical Activity for Adolescents"; AAP (2022) "Exercise in Teens"',
        
        'reproductive_title' => 'Sexual and Reproductive Education',
        'reproductive_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-rose-50 rounded-lg border-l-4 border-rose-500">
                    <h4 class="font-bold text-rose-800 mb-2">Menstruation and Fertility</h4>
                    <ul class="text-sm text-rose-700 space-y-1">
                        <li>Understanding ovulation and fertility</li>
                        <li>Difference between normal discharge and infection signs</li>
                        <li>When periods are abnormal</li>
                        <li>Importance of not stressing the body</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Infection Prevention</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>Wash hands before and after using bathroom</li>
                        <li>Change damp underwear immediately</li>
                        <li>Avoid tight synthetic clothing</li>
                        <li>Do not share towels or underwear</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">When to See a Doctor?</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>Severe itching or abnormal discharge</li>
                        <li>Foul odor with discharge</li>
                        <li>Pain during menstruation that is very severe</li>
                        <li>Long absence of menstrual periods</li>
                    </ul>
                </div>
            </div>
        ',
        'reproductive_refs' => 'WHO (2023) "Sexual and Reproductive Health"; ACOG (2022) "First Gynecological Visit"',
        
        'body_title' => 'Body Image and Self-Confidence',
        'body_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-teal-50 rounded-lg border-l-4 border-teal-500">
                    <h4 class="font-bold text-teal-800 mb-2">Normal Body Changes</h4>
                    <ul class="text-sm text-teal-700 space-y-1">
                        <li>Body shape change is a normal part of growth</li>
                        <li>Every body is different - there is no single "ideal"</li>
                        <li>Hormonal changes affect weight and shape</li>
                        <li>The body needs healthy fat for growth</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-indigo-50 rounded-lg border-l-4 border-indigo-500">
                    <h4 class="font-bold text-indigo-800 mb-2">Building a Positive Body Image</h4>
                    <ul class="text-sm text-indigo-700 space-y-1">
                        <li>Focus on what your body can do, not just its appearance</li>
                        <li>Avoid comparing yourself to images online</li>
                        <li>Surround yourself with positive people</li>
                        <li>Give your body the rest and nutrition it needs</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Warnings</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Harsh diets harm growth and health</li>
                        <li>Eating disorders need professional help</li>
                        <li>Avoid negative comments about your body</li>
                    </ul>
                </div>
            </div>
        ',
        'body_refs' => 'WHO (2022) "Body Image in Adolescents"; AAP (2023) "Eating Disorders in Teens"',
        
        'relationships_title' => 'Healthy Relationships',
        'relationships_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">Characteristics of Healthy Relationships</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li>Mutual respect between both parties</li>
                        <li>Trust and honesty</li>
                        <li>Support and encouragement</li>
                        <li>Open and honest communication</li>
                        <li>Respect for personal boundaries</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Signs of Unhealthy Relationship</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Control and monitoring of your movements</li>
                        <li>Excessive jealousy and accusations</li>
                        <li>Insults or belittling you</li>
                        <li>Pressure to do things you do not want to do</li>
                        <li>Isolating you from friends and family</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Tips for Relationships</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Trust your instincts - if you feel uncomfortable, stop</li>
                        <li>Your boundaries matter and should be respected</li>
                        <li>Do not be afraid to ask for help</li>
                        <li>A healthy relationship does not make you feel guilty</li>
                    </ul>
                </div>
            </div>
        ',
        'relationships_refs' => 'WHO (2023) "Healthy Relationships"; AAP (2022) "Teen Dating"',
    ],
    
    // Pregnancy Section
    'pregnancy' => [
        'topics_title' => 'Quick Topics',
        'key_metrics' => 'Key Pregnancy Metrics',
        'weight_gain' => 'Weight Gain (BMI Normal)',
        'folic_acid' => 'Folic Acid Daily',
        'iron' => 'Iron Daily',
        'calories' => 'Extra Calories',
        'who_ref' => 'Source: WHO (2023) & IOM (2022)',
        
        'topic_nutrition' => 'Nutrition & Supplements',
        'topic_exercise' => 'Exercise Guidelines',
        'topic_screening' => 'Screening Tests',
        'topic_warning_signs' => 'Warning Signs',
        'topic_mental_health' => 'Mental Health',
        'topic_hygiene' => 'Hygiene & Personal Care',
        'topic_dental' => 'Dental Health',
        'topic_sleep' => 'Sleep Hygiene',
        'topic_medication' => 'Medication Safety',
        'topic_preparation' => 'Birth Preparation',
        
        'nutrition_title' => 'Nutrition During Pregnancy',
        'nutrition_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Additional Calorie Needs</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>First Trimester:</strong> No additional calories needed</li>
                        <li><strong>Second Trimester:</strong> +340 calories/day</li>
                        <li><strong>Third Trimester:</strong> +452 calories/day</li>
                        <li><strong>During Breastfeeding:</strong> +330-400 calories/day</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Essential Vitamins & Minerals</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Folic Acid:</strong> 400-800 mcg daily (first trimester)</li>
                        <li><strong>Iron:</strong> 27 mg daily (prevents anemia)</li>
                        <li><strong>Calcium:</strong> 1,000 mg daily</li>
                        <li><strong>Vitamin D:</strong> 600 IU daily</li>
                        <li><strong>Omega-3 DHA:</strong> 200-300 mg daily</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Foods to Avoid</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>High-mercury fish (shark, swordfish, king mackerel)</li>
                        <li>Raw/undercooked meat, poultry, eggs</li>
                        <li>Unpasteurized dairy products</li>
                        <li>Deli meats and hot dogs (unless heated)</li>
                        <li>Alcohol in any amount</li>
                        <li>Excess caffeine (>200 mg/day)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Healthy Eating Pattern</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>3-4 servings of whole grains daily</li>
                        <li>5+ servings of fruits and vegetables</li>
                        <li>3 servings of protein (meat, fish, legumes)</li>
                        <li>2-3 servings of dairy products</li>
                        <li>8-10 cups of water daily</li>
                    </ul>
                </div>
            </div>
        ',
        'nutrition_refs' => 'WHO (2023) "Guideline: Iron supplementation in pregnancy"; ACOG Practice Bulletin No. 233 (2021); IOM (2022) "Weight Gain During Pregnancy"',
        
        'exercise_title' => 'Exercise Guidelines',
        'exercise_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">ACOG Recommendations</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>At least 150 minutes of moderate-intensity aerobic activity weekly</li>
                        <li>Spread across at least 3 days per week</li>
                        <li>Include muscle-strengthening activities</li>
                        <li>Avoid lying flat on back after 20 weeks</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Safe Activities</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Walking:</strong> Ideal for all trimesters</li>
                        <li><strong>Swimming:</strong> Relieves joint pressure</li>
                        <li><strong>Stationary Cycling:</strong> Safe and comfortable</li>
                        <li><strong>Prenatal Yoga:</strong> Improves flexibility and relaxation</li>
                        <li><strong>Low-Impact Aerobics:</strong> Including water aerobics</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Stop Exercise Immediately If</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Vaginal bleeding</li>
                        <li>Dizziness or fainting</li>
                        <li>Chest pain or difficulty breathing</li>
                        <li>Calf pain or swelling (clot signs)</li>
                        <li>Decreased fetal movement</li>
                        <li>Painful uterine contractions</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Activities to Avoid</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>Contact sports (soccer, basketball)</li>
                        <li>Fall-risk activities (skiing, horseback riding)</li>
                        <li>Deep sea diving</li>
                        <li>High-altitude sports</li>
                        <li>Intense abdominal exercises after first trimester</li>
                    </ul>
                </div>
            </div>
        ',
        'exercise_refs' => 'ACOG Committee Opinion No. 804 (2020) "Physical Activity and Exercise During Pregnancy and the Postpartum Period"',
        
        'screening_title' => 'Prenatal Screening Schedule',
        'test_dating' => 'Dating Ultrasound',
        'purpose_dating' => 'Confirm gestational age, detect multiples',
        'test_nt' => 'Nuchal Translucency',
        'purpose_nt' => 'Screen for chromosomal abnormalities',
        'test_anatomy' => 'Anatomy Scan (18-22 weeks)',
        'purpose_anatomy' => 'Evaluate fetal anatomy and development',
        'test_glucose' => 'Glucose Challenge (24-28 weeks)',
        'purpose_glucose' => 'Screen for gestational diabetes',
        'test_gbs' => 'GBS Culture (35-37 weeks)',
        'purpose_gbs' => 'Screen for Group B Strep',
        'screening_refs' => 'ACOG Practice Bulletin No. 223 (2020) "Screening for Fetal Chromosomal Abnormalities"; ACOG Committee Opinion No. 802 (2020) "Gestational Diabetes Mellitus"',
        
        'warning_title' => 'Urgent Warning Signs',
        'warning_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-600">
                    <h4 class="font-bold text-red-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-exclamation-triangle"></i>
                        Vaginal Bleeding or Fluid Leakage
                    </h4>
                    <p class="text-sm text-red-700">Heavy bleeding like a menstrual period, or clear fluid leaking from vagina (may be amniotic fluid).</p>
                </div>
                
                <div class="p-4 bg-orange-50 rounded-lg border-l-4 border-orange-500">
                    <h4 class="font-bold text-orange-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-heartbeat"></i>
                        Severe Abdominal or Pelvic Pain
                    </h4>
                    <p class="text-sm text-orange-700">Persistent or recurring pain, especially with cramping before week 37.</p>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-eye"></i>
                        Severe Headache with Vision Changes
                    </h4>
                    <p class="text-sm text-amber-700">May indicate high blood pressure or preeclampsia.</p>
                </div>
                
                <div class="p-4 bg-yellow-50 rounded-lg border-l-4 border-yellow-500">
                    <h4 class="font-bold text-yellow-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-hand-paper"></i>
                        Sudden Swelling of Face/Hands
                    </h4>
                    <p class="text-sm text-yellow-700">Rapid swelling especially in face or around eyes, or abnormal swelling in feet.</p>
                </div>
                
                <div class="p-4 bg-rose-50 rounded-lg border-l-4 border-rose-500">
                    <h4 class="font-bold text-rose-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-thermometer-full"></i>
                        High Fever (>38°C)
                    </h4>
                    <p class="text-sm text-rose-700">Fever with chills or sweating may indicate infection requiring immediate treatment.</p>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-baby"></i>
                        Decreased Fetal Movement
                    </h4>
                    <p class="text-sm text-purple-700">If you feel fewer than 10 movements within 2 hours after week 28.</p>
                </div>
            </div>
            <div class="mt-4 p-3 bg-red-100 rounded-lg text-sm text-red-800">
                <i class="fas fa-ambulance mr-2"></i>
                <strong>Emergency Alert:</strong> If you experience any of these symptoms, contact your healthcare provider immediately or go to the emergency department.
            </div>
        ',
        'sign_bleeding' => 'Vaginal bleeding or fluid leakage',
        'sign_pain' => 'Severe abdominal or pelvic pain',
        'sign_headache' => 'Severe headache with vision changes',
        'sign_swelling' => 'Sudden swelling of face/hands',
        'sign_fever' => 'High fever (>38°C)',
        'sign_movement' => 'Decreased fetal movement',
        'emergency_note' => 'If you experience any of these symptoms, contact your healthcare provider immediately or go to the emergency department.',
        
        'mental_title' => 'Mental Health in Pregnancy',
        'mental_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Common Mental Health Concerns</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>Prenatal depression:</strong> Affects 7-20% of pregnant women</li>
                        <li><strong>Anxiety disorders:</strong> Up to 33% during pregnancy</li>
                        <li><strong>Sleep disturbances:</strong> Difficulty falling or staying asleep</li>
                        <li><strong>Tokophobia:</strong> Severe fear of childbirth</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Self-Care Strategies</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Regular physical activity (improves mood)</li>
                        <li>Mindfulness and meditation practices</li>
                        <li>Adequate sleep (7-9 hours)</li>
                        <li>Social support networks (family and friends)</li>
                        <li>Professional counseling when needed</li>
                        <li>Journaling and expressing feelings</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Screening & Diagnosis</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Warning signs:</strong> Persistent sadness, loss of interest, negative thoughts</li>
                        <li><strong>When to seek help:</strong> If symptoms last more than 2 weeks</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-rose-50 rounded-lg border-l-4 border-rose-500">
                    <h4 class="font-bold text-rose-800 mb-2">Emergency Help Line</h4>
                    <p class="text-sm text-rose-700">If you have thoughts of harming yourself or your baby, seek help immediately from your doctor or emergency services.</p>
                </div>
            </div>
        ',
        'mental_refs' => 'ACOG Clinical Guidance (2023) "Screening for Perinatal Depression"; WHO (2022) "Mental Health and Substance Use"',
        
        'prep_title' => 'Birth Preparation',
        'prep_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-teal-50 rounded-lg border-l-4 border-teal-500">
                    <h4 class="font-bold text-teal-800 mb-2">Third Trimester Preparation (Weeks 28-40)</h4>
                    <ul class="text-sm text-teal-700 space-y-1">
                        <li>Attend childbirth education classes</li>
                        <li>Create a birth plan (flexible)</li>
                        <li>Pack hospital bag by week 36</li>
                        <li>Install car seat properly</li>
                        <li>Prepare home environment</li>
                        <li>Arrange postpartum support</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-rose-50 rounded-lg border-l-4 border-rose-500">
                    <h4 class="font-bold text-rose-800 mb-2">Signs of Labor</h4>
                    <ul class="text-sm text-rose-700 space-y-1">
                        <li><strong>Regular contractions:</strong> Every 5 minutes, lasting 1 minute</li>
                        <li><strong>Water breaking:</strong> Clear fluid leakage</li>
                        <li><strong>Bloody show:</strong> Mucus with blood streaks</li>
                        <li><strong>Lower back pain:</strong> Doesn\'t subside with position change</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-indigo-50 rounded-lg border-l-4 border-indigo-500">
                    <h4 class="font-bold text-indigo-800 mb-2">Hospital Bag Checklist</h4>
                    <ul class="text-sm text-indigo-700 space-y-1">
                        <li>ID and insurance cards</li>
                        <li>Comfortable clothes and cotton underwear</li>
                        <li>Personal care items</li>
                        <li>Baby clothes (4-6 pieces)</li>
                        <li>Diapers and wet wipes</li>
                        <li>Phone charger</li>
                    </ul>
                </div>
            </div>
        ',
        'prep_refs' => 'ACOG Clinical Guidance (2023) "Approaches to Limit Intervention During Labor and Birth"',
        
        // New Pregnancy Subsections
        'hygiene_title' => 'Hygiene & Personal Care During Pregnancy',
        'hygiene_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-cyan-50 rounded-lg border-l-4 border-cyan-500">
                    <h4 class="font-bold text-cyan-800 mb-2">Hand Hygiene</h4>
                    <ul class="text-sm text-cyan-700 space-y-1">
                        <li>Wash hands with soap and water for at least 20 seconds</li>
                        <li>Use alcohol-based sanitizer when soap unavailable</li>
                        <li>Always wash before eating, after bathroom, after handling pets</li>
                        <li>Critical for preventing Toxoplasmosis and Listeria</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">Intimate Hygiene</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li>Wash external genital area with warm water daily</li>
                        <li>Avoid douching (increases infection risk)</li>
                        <li>Wear breathable cotton underwear</li>
                        <li>Change underwear daily</li>
                        <li>Use unscented, pH-balanced products only</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Bathing Guidelines</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Warm baths (not hot) are safe throughout pregnancy</li>
                        <li>Avoid hot tubs and saunas (risk of overheating)</li>
                        <li>Limit bath time to 15-20 minutes</li>
                        <li>Use mild, unscented soaps</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Clothing & Comfort</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Wear loose, breathable fabrics (cotton, linen)</li>
                        <li>Avoid tight clothing around abdomen</li>
                        <li>Change damp clothing promptly</li>
                        <li>Use supportive maternity bras</li>
                    </ul>
                </div>
            </div>
        ',
        'hygiene_refs' => 'WHO (2022) "Guidelines on Core Components of Infection Prevention and Control Programmes"; ACOG (2023) "Vaginitis in Pregnancy"',
        
        'dental_title' => 'Dental Health During Pregnancy',
        'dental_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Oral Changes in Pregnancy</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li><strong>Pregnancy Gingivitis:</strong> Affects 60-75% of pregnant women</li>
                        <li>Increased risk of periodontal disease</li>
                        <li>Possible increase in tooth decay</li>
                        <li>Epulis (pregnancy tumors) - benign gum growths</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Dental Care Guidelines</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Continue routine dental visits (safe and recommended)</li>
                        <li>Inform dentist of pregnancy and gestational age</li>
                        <li>Second trimester is ideal for elective procedures</li>
                        <li>Postpone non-urgent X-rays until after delivery</li>
                        <li>Emergency treatment can be done at any stage</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Daily Oral Hygiene</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Brush twice daily with fluoride toothpaste</li>
                        <li>Floss daily to prevent gum disease</li>
                        <li>Rinse with water after morning sickness</li>
                        <li>Use alcohol-free mouthwash</li>
                    </ul>
                </div>
            </div>
        ',
        'dental_refs' => 'American Dental Association (2021) "Oral Health During Pregnancy"; ACOG Clinical Guidance (2023) "Oral Health Care During Pregnancy"',
        
        'sleep_title' => 'Sleep Hygiene During Pregnancy',
        'sleep_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-indigo-50 rounded-lg border-l-4 border-indigo-500">
                    <h4 class="font-bold text-indigo-800 mb-2">Sleep Changes by Trimester</h4>
                    <ul class="text-sm text-indigo-700 space-y-1">
                        <li><strong>First Trimester:</strong> Increased sleepiness; 8-10 hours recommended</li>
                        <li><strong>Second Trimester:</strong> Sleep quality improves; 7-9 hours recommended</li>
                        <li><strong>Third Trimester:</strong> Frequent bathroom visits disrupt sleep</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Sleep Position Recommendations</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>Left lateral position</strong> is optimal</li>
                        <li>Avoid sleeping flat on back after 20 weeks</li>
                        <li>Use pillows between knees and under abdomen</li>
                        <li>Elevate upper body slightly to reduce heartburn</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Sleep Hygiene Tips</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Maintain consistent sleep schedule</li>
                        <li>Avoid caffeine after 2 PM</li>
                        <li>Limit fluids before bedtime</li>
                        <li>Create cool, dark, quiet sleep environment</li>
                        <li>Nap when needed (20-30 minutes ideal)</li>
                    </ul>
                </div>
            </div>
        ',
        'sleep_refs' => 'National Sleep Foundation (2023) "Sleep and Pregnancy"; ACOG (2021) "Sleep During Pregnancy: Physiology and Interventions"',
        
        'medication_title' => 'Medication Safety During Pregnancy',
        'medication_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">General Principles</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>No medication is 100% safe; benefits must outweigh risks</li>
                        <li>First trimester is the most vulnerable period for fetal organ development</li>
                        <li>Always consult healthcare provider before starting any medication</li>
                        <li>Use the lowest effective dose for the shortest duration</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Generally Safe Medications</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Pain/Fever:</strong> Acetaminophen (paracetamol) is preferred</li>
                        <li><strong>Nausea:</strong> Vitamin B6, ginger supplements, doxylamine</li>
                        <li><strong>Heartburn:</strong> Antacids, famotidine, omeprazole</li>
                        <li><strong>Allergies:</strong> Loratadine, cetirizine</li>
                        <li><strong>Cough:</strong> Dextromethorphan, guaifenesin</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Medications to AVOID</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li><strong>NSAIDs (ibuprofen, naproxen)</strong> - especially after 30 weeks</li>
                        <li><strong>Isotretinoin (Accutane)</strong> - severe birth defects</li>
                        <li><strong>Warfarin</strong> - fetal bleeding risk</li>
                        <li><strong>Certain ACE inhibitors</strong> - kidney damage</li>
                        <li><strong>High-dose vitamin A</strong> - teratogenic</li>
                        <li><strong>Most herbal supplements</strong> - insufficient safety data</li>
                    </ul>
                </div>
            </div>
        ',
        'medication_refs' => 'FDA (2023) "Medication Use During Pregnancy"; Briggs Drugs in Pregnancy and Lactation (2023 Edition); ACOG Clinical Guidance (2023) "Psychiatric Medications in Pregnancy"',
    ],
    
    // Family Planning Section
    'family_planning' => [
        'topics_title' => 'Topics',
        'topic_contraception' => 'Contraception Methods',
        'topic_fertility' => 'Fertility Awareness',
        'topic_preconception' => 'Preconception Care',
        'topic_sti' => 'STI Prevention',
        'topic_emergency_contraception' => 'Emergency Contraception',
        'topic_infertility' => 'Infertility Evaluation',
        'topic_hygiene_intimate' => 'Intimate Hygiene',
        
        'contraception_title' => 'Contraception Methods',
        'contraception_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">Combined Oral Contraceptives (COCs)</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>How to use:</strong> Take one pill daily at the same time</li>
                        <li><strong>Effectiveness:</strong> 99% with perfect use, 93% with typical use</li>
                        <li><strong>Benefits:</strong> Regulates periods, treats acne, reduces cancer risk</li>
                        <li><strong>Side effects:</strong> Nausea, headache, weight changes, mood changes</li>
                        <li><strong>Contraindications:</strong> History of blood clots, high BP, smoking + age 35</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Progestin-Only Pill (POP)</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>How to use:</strong> Take daily at same time (stricter timing than COC)</li>
                        <li><strong>Effectiveness:</strong> 99% with perfect use, 93% with typical use</li>
                        <li><strong>Best for:</strong> Breastfeeding mothers, women who cannot use estrogen</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Contraceptive Implant (Implanon/Nexplanon)</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>How to use:</strong> Small rod inserted under skin of upper arm</li>
                        <li><strong>Duration:</strong> 3-5 years</li>
                        <li><strong>Effectiveness:</strong> 99.95% (most effective)</li>
                        <li><strong>Removal:</strong> Can be removed anytime, fertility returns immediately</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-indigo-50 rounded-lg border-l-4 border-indigo-500">
                    <h4 class="font-bold text-indigo-800 mb-2">Hormonal IUD (Mirena/Kyleena)</h4>
                    <ul class="text-sm text-indigo-700 space-y-1">
                        <li><strong>How to use:</strong> Inserted into uterus by healthcare provider</li>
                        <li><strong>Duration:</strong> 3-8 years depending on type</li>
                        <li><strong>Effectiveness:</strong> 99.8%</li>
                        <li><strong>Benefits:</strong> Reduces heavy bleeding, eases menstrual pain</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-teal-50 rounded-lg border-l-4 border-teal-500">
                    <h4 class="font-bold text-teal-800 mb-2">Injection (DMPA - Depo-Provera)</h4>
                    <ul class="text-sm text-teal-700 space-y-1">
                        <li><strong>How to use:</strong> Injection into muscle every 3 months</li>
                        <li><strong>Effectiveness:</strong> 99% with perfect adherence</li>
                        <li><strong>Note:</strong> May cause weight gain and delayed fertility return (9-10 months)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-orange-50 rounded-lg border-l-4 border-orange-500">
                    <h4 class="font-bold text-orange-800 mb-2">Copper IUD (Paragard)</h4>
                    <ul class="text-sm text-orange-700 space-y-1">
                        <li><strong>How to use:</strong> Inserted into uterus by healthcare provider</li>
                        <li><strong>Duration:</strong> 10-12 years</li>
                        <li><strong>Effectiveness:</strong> 99.2%</li>
                        <li><strong>Benefits:</strong> No hormones, can be used as emergency contraception</li>
                        <li><strong>Downside:</strong> May initially increase bleeding and cramping</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Male Condom</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>How to use:</strong> Rolled onto erect penis before intercourse</li>
                        <li><strong>Effectiveness:</strong> 98% with perfect use, 87% with typical use</li>
                        <li><strong>Benefits:</strong> Only method that protects against STIs</li>
                        <li><strong>Proper use:</strong> Check air bubble, roll from tip, use water/silicone lubricant</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-cyan-50 rounded-lg border-l-4 border-cyan-500">
                    <h4 class="font-bold text-cyan-800 mb-2">Female Condom</h4>
                    <ul class="text-sm text-cyan-700 space-y-1">
                        <li><strong>How to use:</strong> Inserted into vagina before intercourse (up to 8 hours before)</li>
                        <li><strong>Effectiveness:</strong> 95% with perfect use, 79% with typical use</li>
                        <li><strong>Benefits:</strong> Covers more area, better STI protection than male condom</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-rose-50 rounded-lg border-l-4 border-rose-500">
                    <h4 class="font-bold text-rose-800 mb-2">Permanent Methods</h4>
                    <ul class="text-sm text-rose-700 space-y-1">
                        <li><strong>Tubal Ligation:</strong> Permanent surgical procedure (99.5% effective)</li>
                        <li><strong>Vasectomy:</strong> For male partner, lower risk and easier to reverse</li>
                    </ul>
                </div>
            </div>
        ',
        'coc' => 'Combined Oral Contraceptives (COCs)',
        'pop' => 'Progestin-Only Pill (POP)',
        'implant' => 'Contraceptive Implant (3-5 years)',
        'iud_hormonal' => 'Hormonal IUD (3-8 years)',
        'injection' => 'DMPA Injection (3 months)',
        'patch' => 'Contraceptive Patch',
        'copper_iud' => 'Copper IUD (10-12 years)',
        'condom_m' => 'Male Condom',
        'condom_f' => 'Female Condom',
        'diaphragm' => 'Diaphragm/Cap',
        'fertility' => 'Fertility Awareness Methods',
        'sterilization' => 'Sterilization (Tubal Ligation/Vasectomy)',
        'contraception_refs' => 'WHO (2022) "Family Planning: A Global Handbook for Providers"; CDC U.S. Medical Eligibility Criteria for Contraceptive Use (2024)',
        
        'fertility_title' => 'Fertility Awareness Methods',
        'fertility_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-teal-50 rounded-lg border-l-4 border-teal-500">
                    <h4 class="font-bold text-teal-800 mb-2">Standard Days Method</h4>
                    <ul class="text-sm text-teal-700 space-y-1">
                        <li><strong>How:</strong> Identify fertile days (days 8-19 in 26-32 day cycles)</li>
                        <li><strong>Best for:</strong> Women with regular cycles</li>
                        <li><strong>Effectiveness:</strong> 95% with perfect use</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-cyan-50 rounded-lg border-l-4 border-cyan-500">
                    <h4 class="font-bold text-cyan-800 mb-2">TwoDay Method</h4>
                    <ul class="text-sm text-cyan-700 space-y-1">
                        <li><strong>How:</strong> Check for cervical secretions daily</li>
                        <li><strong>Simple:</strong> No devices or calculations needed</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Symptothermal Method</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>How:</strong> Combine basal body temperature, cervical mucus, and other signs</li>
                        <li><strong>Most accurate:</strong> Multiple indicators confirm ovulation</li>
                        <li><strong>Effectiveness:</strong> 99% with perfect use</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Important Note</h4>
                    <p class="text-sm text-amber-700">Effectiveness varies: 2-23% failure rate with typical use depending on method and adherence.</p>
                </div>
            </div>
        ',
        'fertility_refs' => 'WHO (2021) "Selected Practice Recommendations for Contraceptive Use"; ACOG Practice Bulletin No. 233 (2021)',
        
        'preconception_title' => 'Preconception Care',
        'preconception_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Nutrition & Supplements</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Folic acid:</strong> 400-800 mcg daily (3 months before conception)</li>
                        <li><strong>Vitamin D:</strong> 600-1000 IU daily</li>
                        <li><strong>Omega-3:</strong> 200-300 mg DHA daily</li>
                        <li><strong>Iron:</strong> Only if anemic</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Vaccinations & Screenings</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>MMR:</strong> Measles, Mumps, Rubella (3 months before)</li>
                        <li><strong>Varicella:</strong> Chickenpox vaccine if not immune</li>
                        <li><strong>Rubella immunity:</strong> Confirm before pregnancy</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Chronic Health & Medications</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>Medication review:</strong> Contraceptives, chronic meds</li>
                        <li><strong>Diabetes:</strong> Optimize blood sugar before pregnancy</li>
                        <li><strong>Hypertension:</strong> Monitor and adjust</li>
                        <li><strong>Thyroid:</strong> Check TSH levels</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Lifestyle & Genetics</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li><strong>Weight:</strong> Ideal BMI 18.5-24.9</li>
                        <li><strong>Smoking:</strong> Quit at least 3 months before</li>
                        <li><strong>Alcohol:</strong> Stop completely</li>
                        <li><strong>Caffeine:</strong> Limit to 200 mg/day</li>
                    </ul>
                </div>
            </div>
        ',
        'preconception_refs' => 'ACOG Clinical Guidance (2023) "Prepregnancy Counseling"; CDC (2023) "Preconception Health and Health Care"',
        
        'sti_title' => 'STI Prevention & Screening',
        'sti_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Recommended Screenings</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li><strong>HIV:</strong> At least once for all women ages 13-64</li>
                        <li><strong>Chlamydia & Gonorrhea:</strong> Annual screening for women <25 years or with risk factors</li>
                        <li><strong>Syphilis:</strong> Based on risk factors and during pregnancy</li>
                        <li><strong>HPV:</strong> Co-testing with Pap smear every 5 years (ages 30-65)</li>
                        <li><strong>Hepatitis B & C:</strong> Based on risk factors</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Prevention Strategies</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Condoms:</strong> Consistent and correct use</li>
                        <li><strong>HPV Vaccination:</strong> Ages 9-45</li>
                        <li><strong>Partner Communication:</strong> Discuss sexual history</li>
                        <li><strong>Regular Screening:</strong> Even without symptoms</li>
                    </ul>
                </div>
            </div>
        ',
        'sti_refs' => 'CDC STD Treatment Guidelines (2021); ACOG Practice Bulletin No. 227 (2021) "Screening for Sexually Transmitted Infections"',
        
        // New Family Planning Subsections
        'emergency_title' => 'Emergency Contraception (EC)',
        'emergency_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">When to Use</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>After unprotected sex or contraceptive failure</li>
                        <li><strong>NOT an abortion pill:</strong> Will not end an existing pregnancy</li>
                        <li>Sooner use = higher effectiveness</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">Levonorgestrel (Plan B)</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>Dose:</strong> 1.5 mg single dose</li>
                        <li><strong>Availability:</strong> Over-the-counter at pharmacies</li>
                        <li><strong>Effectiveness:</strong> 95% within 72 hours</li>
                        <li><strong>Max time:</strong> Up to 120 hours with decreasing efficacy</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Ulipristal Acetate (ella)</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Dose:</strong> 30 mg single dose</li>
                        <li><strong>Availability:</strong> Prescription required</li>
                        <li><strong>Effectiveness:</strong> Effective up to 120 hours (5 days)</li>
                        <li><strong>Advantage:</strong> More effective on days 3-5</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-teal-50 rounded-lg border-l-4 border-teal-500">
                    <h4 class="font-bold text-teal-800 mb-2">Copper IUD (Most Effective)</h4>
                    <ul class="text-sm text-teal-700 space-y-1">
                        <li><strong>Effectiveness:</strong> >99% (highest of all methods)</li>
                        <li><strong>Window:</strong> Can be inserted up to 5 days after</li>
                        <li><strong>Benefit:</strong> Provides ongoing contraception 10-12 years</li>
                        <li><strong>Best for:</strong> Women wanting long-term contraception</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Important Notes</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>May delay next period by up to 1 week</li>
                        <li>If pregnancy occurs, EC will not harm the fetus</li>
                        <li>Does not protect against STIs</li>
                        <li>Can be repeated in same cycle but less effective</li>
                    </ul>
                </div>
            </div>
        ',
        'emergency_refs' => 'WHO (2021) "Emergency Contraception"; ACOG Practice Bulletin No. 233 (2021) "Emergency Contraception"',
        
        'infertility_title' => 'Infertility Evaluation & Treatment',
        'infertility_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Definition</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Inability to conceive after 12 months of trying</li>
                        <li>6 months only if female partner is ≥35 years</li>
                        <li>Affects 10-15% of couples globally</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Evaluation Timeline</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Under 35:</strong> Seek evaluation after 12 months</li>
                        <li><strong>Age 35-40:</strong> Seek evaluation after 6 months</li>
                        <li><strong>Over 40:</strong> Seek immediate evaluation</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Basic Workup</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Ovulation assessment:</strong> BBT, ovulation predictor kits</li>
                        <li><strong>Ovarian reserve:</strong> Day 3 FSH, AMH levels</li>
                        <li><strong>Semen analysis:</strong> For male partner</li>
                        <li><strong>Imaging:</strong> Transvaginal ultrasound</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Common Causes</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li><strong>Ovulatory disorders:</strong> 40% (PCOS, diminished reserve)</li>
                        <li><strong>Tubal blockage:</strong> 30% (infections, adhesions)</li>
                        <li><strong>Uterine factors:</strong> 15% (fibroids, adhesions)</li>
                        <li><strong>Unexplained:</strong> 15% (all tests normal)</li>
                    </ul>
                </div>
            </div>
        ',
        'infertility_refs' => 'ACOG Clinical Guidance (2023) "Treating Infertility"; WHO (2020) "International Classification of Diseases 11th Revision (ICD-11) Infertility Guidelines"',
        
        'hygiene_intimate_title' => 'Intimate & Menstrual Hygiene',
        'hygiene_intimate_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">Daily Intimate Hygiene</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li>Wash external genitalia (vulva) with warm water once daily</li>
                        <li>Use mild, unscented soap only on external areas</li>
                        <li>Never douche - it disrupts healthy vaginal flora</li>
                        <li>Wipe front to back after using toilet</li>
                        <li>Wear breathable cotton underwear</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Menstrual Hygiene Products</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>Pads:</strong> Change every 4-6 hours</li>
                        <li><strong>Tampons:</strong> Change every 4-8 hours; use lowest absorbency needed</li>
                        <li><strong>Menstrual Cups:</strong> Empty every 8-12 hours</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Signs of Infection - Seek Care</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Foul-smelling discharge</li>
                        <li>Itching or burning</li>
                        <li>Unusual color (green, gray, yellow)</li>
                        <li>Pelvic pain or fever</li>
                        <li>Irregular bleeding</li>
                    </ul>
                </div>
            </div>
        ',
        'hygiene_intimate_refs' => 'WHO (2023) "Guidelines on Menstrual Health and Hygiene"; ACOG (2022) "Vaginitis: Diagnosis and Treatment"',
    ],
    
    // Menopause Section
    'menopause' => [
        'topics_title' => 'Menopause Topics',
        'topic_symptoms' => 'Symptoms',
        'topic_hormone' => 'Hormone Therapy',
        'topic_bone' => 'Bone Health',
        'topic_heart' => 'Heart Health',
        'topic_sexual' => 'Sexual Health',
        'topic_mental' => 'Mental Health',
        'topic_urinary' => 'Urinary Health',
        'topic_cancer_screening' => 'Cancer Screening',
        'topic_weight_management' => 'Weight Management',
        'topic_skin_hair' => 'Skin & Hair Care',
        'topic_hygiene_menopause' => 'Hygiene During Menopause',
        
        'facts_title' => 'Key Facts',
        'avg_age' => 'Average Age',
        'range' => 'Typical Range',
        'perimenopause' => 'Perimenopause Duration',
        
        'symptoms_title' => 'Common Menopause Symptoms',
        'symptom_hot_flashes' => 'Hot flashes & night sweats',
        'symptom_night_sweats' => 'Sleep disturbances',
        'symptom_mood' => 'Mood changes & irritability',
        'symptom_sleep' => 'Insomnia',
        'symptom_memory' => 'Memory & concentration issues',
        'symptom_vaginal' => 'Vaginal dryness',
        'symptom_periods' => 'Irregular periods',
        'symptom_weight' => 'Weight gain',
        'symptoms_refs' => 'NAMS (2022) "The 2022 Hormone Therapy Position Statement"; ACOG Clinical Guidance (2024) "Management of Menopausal Symptoms"',
        
        'hormone_title' => 'Menopausal Hormone Therapy (MHT)',
        'hormone_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Benefits</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Most effective treatment for hot flashes/night sweats</li>
                        <li>Prevents bone loss and osteoporosis</li>
                        <li>Treats vaginal atrophy symptoms</li>
                        <li>May improve sleep and quality of life</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Risks</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Blood clots (venous thromboembolism)</li>
                        <li>Stroke (small increased risk)</li>
                        <li>Breast cancer (with long-term combined therapy)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Contraindications</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>History of breast cancer</li>
                        <li>Coronary heart disease</li>
                        <li>Stroke or blood clots</li>
                        <li>Liver disease</li>
                        <li>Unexplained vaginal bleeding</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Approach</h4>
                    <p class="text-sm text-blue-700">"Lowest effective dose for shortest duration" - reassess annually with your doctor.</p>
                </div>
            </div>
        ',
        'hormone_refs' => 'NAMS (2022) "The 2022 Hormone Therapy Position Statement of The North American Menopause Society"; ACOG Clinical Guidance (2024) "Management of Menopausal Symptoms"',
        
        'bone_title' => 'Bone Health & Osteoporosis',
        'bone_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Risk Factors</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Early menopause (<45 years)</li>
                        <li>Family history of osteoporosis</li>
                        <li>Low body weight (BMI <20)</li>
                        <li>Smoking and excessive alcohol</li>
                        <li>Sedentary lifestyle</li>
                        <li>Vitamin D deficiency</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Prevention Strategies</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Calcium:</strong> 1,200 mg daily (diet + supplements)</li>
                        <li><strong>Vitamin D:</strong> 800-1,000 IU daily</li>
                        <li><strong>Exercise:</strong> Weight-bearing and resistance training</li>
                        <li><strong>Fall prevention:</strong> Remove home hazards</li>
                        <li><strong>DEXA scan:</strong> At age 65 or earlier if at risk</li>
                    </ul>
                </div>
            </div>
        ',
        'bone_refs' => 'NOF (2022) "Clinician\'s Guide to Prevention and Treatment of Osteoporosis"; ACOG Clinical Guidance (2023) "Osteoporosis in Women"',
        
        'heart_title' => 'Cardiovascular Health',
        'heart_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Heart Disease Risk</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Cardiovascular disease is the #1 killer of women</li>
                        <li>Risk increases after menopause due to estrogen decline</li>
                        <li>Abdominal fat increases after menopause</li>
                        <li>Monitor blood pressure, cholesterol, and glucose regularly</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Prevention Strategies</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Diet:</strong> Mediterranean pattern (vegetables, olive oil, fish)</li>
                        <li><strong>Exercise:</strong> 150 minutes moderate activity weekly</li>
                        <li><strong>Weight:</strong> Maintain healthy BMI</li>
                        <li><strong>Smoking:</strong> Quit completely</li>
                        <li><strong>Stress:</strong> Manage with meditation</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Modifiable Risk Factors</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>High blood pressure</li>
                        <li>Elevated LDL cholesterol</li>
                        <li>Type 2 diabetes</li>
                        <li>Obesity (especially abdominal fat)</li>
                        <li>Smoking and physical inactivity</li>
                    </ul>
                </div>
            </div>
        ',
        'heart_refs' => 'AHA (2021) "Guideline for the Prevention of Cardiovascular Disease in Women"; ACOG Clinical Guidance (2023) "Cardiovascular Disease in Women"',
        
        'sexual_title' => 'Sexual Health After Menopause',
        'sexual_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Common Changes</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Vaginal dryness and atrophy (genitourinary syndrome of menopause)</li>
                        <li>Decreased libido</li>
                        <li>Pain during intercourse (dyspareunia)</li>
                        <li>Urinary symptoms</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Treatment Options</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Vaginal moisturizers and lubricants:</strong> Non-hormonal, safe daily use</li>
                        <li><strong>Low-dose vaginal estrogen:</strong> Safest form of estrogen therapy</li>
                        <li><strong>Ospemifene:</strong> Oral medication for dyspareunia</li>
                        <li><strong>Prasterone:</strong> DHEA vaginal insert</li>
                        <li><strong>Laser therapy:</strong> In selected cases</li>
                        <li><strong>Pelvic floor physical therapy:</strong> Improves muscle tone</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Tips for Improvement</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Use water-based lubricants during intercourse</li>
                        <li>Continue sexual activity to improve circulation</li>
                        <li>Open communication with partner</li>
                        <li>Consult sexual health specialist when needed</li>
                    </ul>
                </div>
            </div>
        ',
        'sexual_refs' => 'NAMS (2020) "Genitourinary Syndrome of Menopause: Position Statement"; ACOG Clinical Guidance (2024) "Menopausal Sexual Health"',
        
        'mental_title' => 'Mental Health During Menopause',
        'mental_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Emotional Changes</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>Mood swings and irritability</li>
                        <li>Anxiety and depression risk may increase</li>
                        <li>Sleep disruption affecting mental health</li>
                        <li>Cognitive "brain fog" symptoms</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Coping Strategies</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Cognitive behavioral therapy (CBT):</strong> Effective for anxiety and depression</li>
                        <li><strong>Mindfulness:</strong> Stress reduction and improved mood</li>
                        <li><strong>Regular exercise:</strong> Improves sleep and reduces stress</li>
                        <li><strong>Adequate sleep:</strong> 7-8 hours nightly</li>
                        <li><strong>Social connection:</strong> Support from family and friends</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Hormone Therapy</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>May improve mood symptoms in some women</li>
                        <li>Particularly beneficial when symptoms are both physical and emotional</li>
                        <li>Consult your doctor for individual assessment</li>
                    </ul>
                </div>
            </div>
        ',
        'mental_refs' => 'NAMS (2022) "Cognitive Activity During Menopause"; ACOG Clinical Guidance (2023) "Perimenopausal Depression and Mental Health"',
        
        // New Menopause Subsections
        'urinary_title' => 'Urinary Health & Incontinence',
        'urinary_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Genitourinary Syndrome of Menopause (GSM)</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Decline in estrogen affects the urinary tract</li>
                        <li>Increased recurrent UTIs</li>
                        <li>Urinary urgency and frequency</li>
                        <li>Weakening of supportive tissues</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Types of Urinary Issues</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li><strong>Stress Incontinence:</strong> Leakage with coughing, sneezing, or exercise</li>
                        <li><strong>Urge Incontinence:</strong> Sudden strong urge to urinate with leakage</li>
                        <li><strong>Mixed Incontinence:</strong> Both types together</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Management Strategies</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Kegel Exercises:</strong> 3 sets of 10 contractions daily</li>
                        <li><strong>Bladder Training:</strong> Scheduled voiding to retrain bladder</li>
                        <li><strong>Vaginal Estrogen:</strong> Reduces UTIs and improves tissue health</li>
                        <li><strong>Fluid Management:</strong> Adequate hydration but reduce before bedtime</li>
                    </ul>
                </div>
            </div>
        ',
        'urinary_refs' => 'NAMS (2020) "Genitourinary Syndrome of Menopause: Position Statement"; ACOG Clinical Guidance (2024) "Urinary Incontinence in Women"',
        
        'cancer_title' => 'Cancer Screening After Menopause',
        'cancer_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">Breast Cancer Screening</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>Method:</strong> Mammography (X-ray imaging)</li>
                        <li><strong>Frequency:</strong> Every 1-2 years ages 40-74</li>
                        <li><strong>Continue:</strong> As long as overall health is good</li>
                        <li><strong>Stop:</strong> Can discontinue around age 75</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Cervical Cancer Screening</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li><strong>Option 1:</strong> Pap smear every 3 years (ages 21-65)</li>
                        <li><strong>Option 2:</strong> HPV co-testing every 5 years (ages 30-65)</li>
                        <li><strong>Stop:</strong> After 65 if adequate prior screening</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Colorectal Cancer Screening</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Start:</strong> Age 45 (earlier with family history)</li>
                        <li><strong>Option 1:</strong> Colonoscopy every 10 years</li>
                        <li><strong>Option 2:</strong> Stool-based testing annually</li>
                    </ul>
                </div>
            </div>
        ',
        'cancer_refs' => 'USPSTF (2023) "Screening for Breast Cancer"; ACS (2023) "Cancer Screening Guidelines"; ACOG Clinical Guidance (2024) "Cervical Cancer Screening and Prevention"',
        
        'weight_title' => 'Weight Management During Menopause',
        'weight_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Why Weight Gain Occurs</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>Estrogen decline causes shift from hip/thigh fat to abdominal (visceral) fat</li>
                        <li>Metabolic rate decreases 2-5% per decade</li>
                        <li>Loss of muscle mass reduces calorie burning</li>
                        <li>Poor sleep affects hunger hormones (ghrelin)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Evidence-Based Strategies</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Protein:</strong> 1.0-1.2g per kg body weight to preserve muscle</li>
                        <li><strong>Resistance Training:</strong> 2-3 times weekly (crucial for metabolism)</li>
                        <li><strong>Caloric Adjustment:</strong> May need 200-300 fewer calories</li>
                        <li><strong>Stress Management:</strong> Cortisol promotes abdominal fat storage</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Realistic Goals</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Losing 5-10% of body weight improves health significantly</li>
                        <li>0.5-1 kg loss per week is a healthy target</li>
                        <li>Focus on measurements, not just scale weight</li>
                    </ul>
                </div>
            </div>
        ',
        'weight_refs' => 'NAMS (2022) "The Role of Obesity in Menopause"; ACOG Clinical Guidance (2023) "Weight Management in Menopause"',
        
        'skin_title' => 'Skin & Hair Changes During Menopause',
        'skin_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Skin Changes</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li><strong>Collagen Loss:</strong> 30% decrease in collagen first 5 years after menopause</li>
                        <li>Increased dryness and itching</li>
                        <li>Decreased elasticity leading to sagging</li>
                        <li>Thinning of skin barrier</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-orange-50 rounded-lg border-l-4 border-orange-500">
                    <h4 class="font-bold text-orange-800 mb-2">Hair Changes</h4>
                    <ul class="text-sm text-orange-700 space-y-1">
                        <li>Overall hair thinning and reduced volume</li>
                        <li>Frontal hairline recession</li>
                        <li>Increased facial hair (chin, upper lip)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Skincare Recommendations</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Moisturize:</strong> Products with ceramides and hyaluronic acid</li>
                        <li><strong>Retinoids:</strong> Retinol to stimulate collagen</li>
                        <li><strong>Sun Protection:</strong> SPF 30+ daily</li>
                        <li><strong>Cleansers:</strong> Mild, soap-free cleansers</li>
                    </ul>
                </div>
            </div>
        ',
        'skin_refs' => 'American Academy of Dermatology (2023) "Skin Care in Menopause"; NAMS (2022) "Effects of Menopause on Skin and Hair"',
        
        'hygiene_title' => 'Hygiene During Menopause',
        'hygiene_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">Vaginal & Vulvar Care</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li>Wash external genital area with warm water daily</li>
                        <li>Use pH-balanced, unscented products</li>
                        <li>Avoid douching and harsh cleansers</li>
                        <li>Apply fragrance-free moisturizer to external tissues if dry</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Managing Increased Sweating</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Shower or freshen up after hot flashes</li>
                        <li>Use clinical strength antiperspirant</li>
                        <li>Wear moisture-wicking, breathable fabrics</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Urinary Hygiene</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Wipe front to back</li>
                        <li>Urinate after intercourse</li>
                        <li>Change out of wet clothing promptly</li>
                    </ul>
                </div>
            </div>
        ',
        'hygiene_refs' => 'ACOG (2022) "Menopause and Sexual Health"; WHO (2021) "Women\'s Health and Hygiene in Aging"',
    ],
    
    // Postpartum Section
    'postpartum' => [
        'topics_title' => 'Postpartum Topics',
        'topic_recovery' => 'Physical Recovery',
        'topic_breastfeeding' => 'Breastfeeding',
        'topic_newborn' => 'Newborn Care',
        'topic_depression' => 'Postpartum Depression',
        'topic_contraception' => 'Contraception',
        'topic_checkups' => 'Postpartum Checkups',
        'topic_hygiene_postpartum' => 'Hygiene & Wound Care',
        'topic_exercise' => 'Exercise Recovery',
        'topic_nutrition' => 'Postpartum Nutrition',
        'topic_pelvic_floor' => 'Pelvic Floor Health',
        'topic_emotional_bonding' => 'Emotional Bonding',
        
        'timeline_title' => 'Recovery Timeline',
        'hour1' => 'Immediate bonding and breastfeeding initiation',
        'day1' => 'Monitor for bleeding, vitals stabilization',
        'week1' => 'Uterine involution, lochia monitoring',
        'week6' => 'Postpartum checkup, recovery assessment',
        
        'recovery_title' => 'Physical Recovery After Birth',
        'recovery_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Normal Postpartum Changes</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Lochia:</strong> Vaginal discharge lasting 4-6 weeks (rubra → serosa → alba)</li>
                        <li><strong>Uterine Involution:</strong> Uterus returns to pelvis by 2 weeks</li>
                        <li><strong>Perineal Healing:</strong> 3-6 weeks for tears/episiotomy</li>
                        <li><strong>C-Section Recovery:</strong> 4-6 weeks for incision healing</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">⚠️ Warning Signs - Contact Doctor Immediately</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Heavy bleeding (soaking pad in 1 hour)</li>
                        <li>Fever >38°C</li>
                        <li>Severe headache or vision changes</li>
                        <li>Chest pain or difficulty breathing</li>
                        <li>Calf pain or swelling (DVT signs)</li>
                        <li>Incision separation or infection</li>
                    </ul>
                </div>
            </div>
        ',
        'recovery_refs' => 'ACOG Clinical Guidance (2023) "Postpartum Care"; WHO (2022) "Recommendations on Postnatal Care"',
        
        'breastfeeding_title' => 'Breastfeeding Guidelines',
        'breastfeeding_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">WHO/UNICEF Recommendations</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Initiate breastfeeding within first hour after birth</li>
                        <li>Exclusive breastfeeding for first 6 months</li>
                        <li>Continue breastfeeding up to 2 years with complementary foods</li>
                        <li>Feed on demand (8-12 times per 24 hours)</li>
                        <li>No water, formula, or other foods in first 6 months</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Maternal Nutrition</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Additional calories:</strong> 330-400 kcal/day</li>
                        <li><strong>Continue prenatal vitamins</strong></li>
                        <li><strong>Hydration:</strong> 3+ liters fluids daily</li>
                        <li><strong>Caffeine:</strong> Limit to 200-300 mg/day</li>
                        <li><strong>Alcohol:</strong> Avoid excessive consumption</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">Temporary Contraindications</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Maternal HIV (in some settings)</li>
                        <li>Active untreated TB</li>
                        <li>Certain medications (consult provider)</li>
                    </ul>
                </div>
            </div>
        ',
        'months_exclusive' => 'Months Exclusive',
        'years_continue' => 'Years Continue',
        'breastfeeding_refs' => 'WHO (2023) "Infant and Young Child Feeding"; AAP Policy Statement (2022) "Breastfeeding and the Use of Human Milk"; ACOG Clinical Guidance (2023) "Breastfeeding Support"',
        
        'newborn_title' => 'Essential Newborn Care',
        'newborn_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Daily Care</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Feeding:</strong> Every 2-3 hours, watch for hunger cues</li>
                        <li><strong>Sleep:</strong> 16-17 hours daily, always back to sleep</li>
                        <li><strong>Diapers:</strong> 6+ wet diapers daily after day 4</li>
                        <li><strong>Cord Care:</strong> Keep clean and dry; falls off in 1-2 weeks</li>
                        <li><strong>Bathing:</strong> Sponge bath until cord falls off</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Skin-to-Skin & Bonding</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Place baby\'s bare chest on mother\'s chest</li>
                        <li>Promotes emotional bonding and breastfeeding</li>
                        <li>Regulates baby\'s temperature and heart rate</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-500">
                    <h4 class="font-bold text-red-800 mb-2">⚠️ Warning Signs - Go to Emergency</h4>
                    <ul class="text-sm text-red-700 space-y-1">
                        <li>Fever >38°C or low body temperature</li>
                        <li>Refusing to feed completely</li>
                        <li>Extreme lethargy or difficulty waking</li>
                        <li>Rapid breathing or grunting</li>
                        <li>Blue coloration (cyanosis) on lips or face</li>
                        <li>Jaundice spreading to legs (severe)</li>
                    </ul>
                </div>
            </div>
        ',
        'newborn_refs' => 'AAP/AHA (2023) "Neonatal Resuscitation Program"; WHO (2022) "Guidelines on Newborn Health"; AAP (2024) "Guidelines for Perinatal Care"',
        
        'depression_title' => 'Postpartum Depression (PPD)',
        'depression_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                    <h4 class="font-bold text-purple-800 mb-2">Understanding PPD</h4>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>Affects 10-20% of new mothers</li>
                        <li>Can occur anytime in first year postpartum</li>
                        <li>More than "baby blues" (which resolve within 2 weeks)</li>
                        <li>Fathers can also experience postpartum depression (8-10%)</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Warning Signs</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>Persistent sad, anxious, or "empty" mood</li>
                        <li>Irritability or restlessness</li>
                        <li>Loss of interest in activities</li>
                        <li>Difficulty bonding with baby</li>
                        <li>Changes in sleep or appetite</li>
                        <li>Feelings of guilt, worthlessness, or hopelessness</li>
                        <li>Thoughts of harming self or baby</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Treatment & Support</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Psychotherapy:</strong> CBT, IPT are highly effective</li>
                        <li><strong>Antidepressants:</strong> SSRIs safe during breastfeeding</li>
                        <li><strong>Support groups:</strong> Sharing experiences helps</li>
                        <li><strong>With treatment:</strong> Full recovery is expected</li>
                    </ul>
                </div>
            </div>
        ',
        'help_line' => 'If you have thoughts of harming yourself or your baby, seek help immediately. Contact your healthcare provider, go to the emergency department, or call emergency services.',
        'depression_refs' => 'ACOG Clinical Guidance (2023) "Screening for Perinatal Depression"; AAP Policy Statement (2022) "Incorporating Recognition and Management of Perinatal Depression"; WHO (2023)',
        
        'contraception_title' => 'Postpartum Contraception',
        'contraception_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">⚠️ Important Timing</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>Fertility can return as early as 3 weeks postpartum</li>
                        <li>Even while breastfeeding, ovulation can occur</li>
                        <li>LAM method effective only if: baby <6 months, exclusive breastfeeding, no periods</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Safe Options by Timing</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Immediate:</strong> IUD insertion (48 hours or after 4 weeks), implant, progestin-only methods</li>
                        <li><strong>After 3 weeks:</strong> Combined hormonal methods if not breastfeeding</li>
                        <li><strong>After 6 weeks:</strong> All methods including combined pills</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Breastfeeding Considerations</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Progestin-only methods preferred</li>
                        <li>Combined estrogen may reduce milk supply</li>
                        <li>Condoms safe and do not affect breastfeeding</li>
                    </ul>
                </div>
            </div>
        ',
        'contraception_refs' => 'CDC U.S. Medical Eligibility Criteria for Contraceptive Use (2024); WHO (2024) "Selected Practice Recommendations for Contraceptive Use"',
        
        'checkups_title' => 'Postpartum Checkups',
        'checkups_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Visit Schedule (ACOG Recommendations)</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Within 3 weeks:</strong> Initial postpartum contact (phone/visit)</li>
                        <li><strong>By 12 weeks:</strong> Comprehensive postpartum visit</li>
                        <li><strong>Ongoing care:</strong> As needed for complications</li>
                        <li><strong>12-month visit:</strong> Well-woman care continuity</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Assessment Components</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Physical recovery (perineum, uterus, C-section incision)</li>
                        <li>Mood and emotional well-being (EPDS screening)</li>
                        <li>Infant feeding and care</li>
                        <li>Family planning and contraception</li>
                        <li>Chronic disease management</li>
                        <li>Immunizations (Tdap, MMR, Varicella, Influenza)</li>
                        <li>Screening (Pap smear, diabetes follow-up)</li>
                    </ul>
                </div>
            </div>
        ',
        'checkups_refs' => 'ACOG Clinical Guidance (2023) "Optimizing Postpartum Care"; AAP/AHA (2024) "Guidelines for Perinatal Care"',
        
        // New Postpartum Subsections
        'hygiene_title' => 'Hygiene & Wound Care',
        'hygiene_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-pink-50 rounded-lg border-l-4 border-pink-500">
                    <h4 class="font-bold text-pink-800 mb-2">Perineal Care (Vaginal Birth)</h4>
                    <ul class="text-sm text-pink-700 space-y-1">
                        <li><strong>Ice Packs:</strong> 10-20 minutes first 24 hours</li>
                        <li><strong>Sitz Baths:</strong> Warm water soak 2-3 times daily from day 2-3</li>
                        <li><strong>Peri Bottle:</strong> Rinse after every bathroom use; pat dry front to back</li>
                        <li><strong>Pads:</strong> Change every 2-4 hours; avoid tampons 6 weeks</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">C-Section Incision Care</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Keep incision clean and dry</li>
                        <li>Wash gently with soap and water</li>
                        <li>Watch for infection: redness, warmth, pus, fever</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Breast Hygiene</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Wash nipples with water only (no soap)</li>
                        <li>Change nursing pads frequently</li>
                        <li>Let nipples air dry after feeding</li>
                    </ul>
                </div>
            </div>
        ',
        'hygiene_refs' => 'ACOG (2023) "Postpartum Care"; WHO (2022) "Postnatal Care Recommendations"',
        
        'exercise_title' => 'Exercise Recovery After Birth',
        'exercise_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Recovery Timeline</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li><strong>Days 1-7:</strong> Gentle walking, deep breathing, pelvic floor activation</li>
                        <li><strong>Weeks 2-6:</strong> Gradual increase in walking; avoid high impact</li>
                        <li><strong>Weeks 6-12:</strong> Postpartum exercise classes, swimming if cleared</li>
                        <li><strong>After 12 weeks:</strong> Return to pre-pregnancy activities</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Guidelines by Birth Type</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Vaginal:</strong> Start light exercise when comfortable (1-2 weeks)</li>
                        <li><strong>C-Section:</strong> Wait 6-8 weeks before abdominal exercises</li>
                        <li><strong>Perineal tears:</strong> Avoid squats until fully healed</li>
                    </ul>
                </div>
            </div>
        ',
        'exercise_refs' => 'ACOG Committee Opinion No. 804 (2020) "Physical Activity and Exercise During Pregnancy and the Postpartum Period"',
        
        'nutrition_title' => 'Postpartum Nutrition',
        'nutrition_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Recovery Nutrition Needs</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li><strong>Calories:</strong> 1,800-2,200 daily (not breastfeeding); 2,200-2,500 (breastfeeding)</li>
                        <li><strong>Protein:</strong> 65-75g daily (supports tissue healing)</li>
                        <li><strong>Iron:</strong> Continue prenatal vitamins with iron</li>
                        <li><strong>Fiber:</strong> 25-30g to prevent constipation</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Healthy Weight Loss</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Gradual loss of 0.5-1 kg per week</li>
                        <li>Safe while breastfeeding</li>
                        <li>Avoid crash diets</li>
                        <li>Focus on nutrition, not deprivation</li>
                    </ul>
                </div>
            </div>
        ',
        'nutrition_refs' => 'WHO (2018) "Infant and Young Child Feeding"; Academy of Nutrition and Dietetics (2021) "Postpartum Nutrition Guidelines"',
        
        'pelvic_title' => 'Pelvic Floor Health & Recovery',
        'pelvic_content' => '
            <div class="space-y-4">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-blue-800 mb-2">Understanding the Pelvic Floor</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Muscles support the bladder, uterus, and bowel</li>
                        <li>Pregnancy and childbirth stretch and damage these muscles</li>
                        <li>Recovery takes time and regular exercise</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-amber-50 rounded-lg border-l-4 border-amber-500">
                    <h4 class="font-bold text-amber-800 mb-2">Common Postpartum Issues</h4>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li><strong>Urinary Incontinence:</strong> Leaking with cough, sneeze, or exercise (30-50% postpartum)</li>
                        <li><strong>Pelvic Organ Prolapse:</strong> Feeling of heaviness or bulging in vagina</li>
                        <li><strong>Perineal Pain:</strong> From tears or episiotomy</li>
                    </ul>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                    <h4 class="font-bold text-green-800 mb-2">Kegel Exercises</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Start in first days after birth</li>
                        <li>Squeeze for 5 seconds, relax for 5 seconds</li>
                        <li>10 repetitions, 3 times daily</li>
                        <li>Continue for at least 6 months</li>
                    </ul>
                </div>
            </div>
        ',
        'pelvic_refs' => 'ACOG (2019) "Pelvic Floor Disorders"; WHO (2022) "Postpartum Care"',
        
        'bonding_title' => 'Emotional Bonding & Attachment',
        'bonding_content' => '
            <p><strong>Building Bonding (First Weeks):</strong></p>
            <ul>
                <li><strong>Skin-to-Skin:</strong> Place baby\'s bare chest against yours</li>
                <li><strong>Eye Contact:</strong> Babies can see 8-12 inches; gaze into their eyes during feeding</li>
                <li><strong>Responsive Care:</strong> Respond promptly to baby\'s cues</li>
                <li><strong>Vocal Interaction:</strong> Talk, sing, and read to your baby</li>
            </ul>
            <p><strong>Reading Baby\'s Cues:</strong></p>
            <ul>
                <li><strong>Hunger:</strong> Rooting, sucking motions, hand-to-mouth</li>
                <li><strong>Tired:</strong> Yawning, rubbing eyes, looking away</li>
                <li><strong>Content:</strong> Making eye contact, relaxed body</li>
            </ul>
        ',
        'bonding_refs' => 'AAP (2020) "Parental Bonding and Attachment"; WHO (2018) "Early Childhood Development"',
    ],
    
    // AI CTA
    'ai_cta_title' => 'Have Questions? Ask Our AI Assistant',
    'ai_cta_desc' => 'Our AI assistant is trained on the latest medical guidelines to answer your questions about women\'s health at every stage of life.',
    'ai_cta_button' => 'Chat with AI Assistant',
];
