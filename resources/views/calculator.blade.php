@extends('layouts.app')

@section('title', __('calculator.title'))

@section('content')
<!-- Hero Section -->
<section class="py-10 bg-gradient-to-b from-cyan-50 to-white" style="padding-top:100px;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3" data-aos="fade-up">
            {{ __('calculator.title') }}
        </h1>
        <p class="text-gray-600 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            {{ __('calculator.hero_desc') }}
        </p>
    </div>
</section>

<!-- Calculator Section -->
<section class="py-8 -mt-4" style="padding-top: 100px;">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 p-8 border border-gray-100" data-aos="fade-up" data-aos-delay="200">
            <form id="riskCalculator" class="space-y-8">
                <!-- Personal Information -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center">
                            <i class="fas fa-user text-cyan-600"></i>
                        </div>
                        {{ __('calculator.personal_info') }}
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('calculator.age') }}
                            </label>
                            <input type="number" name="age" id="age" min="15" max="55" 
                                class="input-minimal"
                                placeholder="{{ __('calculator.age_placeholder') }}">
                            <p class="text-xs text-gray-500 mt-1">
                                {{ __('calculator.age_hint') }}
                            </p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('calculator.height') }}
                            </label>
                            <input type="number" name="height" id="height" min="100" max="220"
                                class="input-minimal"
                                placeholder="{{ __('calculator.height_placeholder') }}"
                                oninput="calcBMI()">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('calculator.weight') }}
                            </label>
                            <input type="number" name="weight" id="weight" min="30" max="200" step="0.1"
                                class="input-minimal"
                                placeholder="{{ __('calculator.weight_placeholder') }}"
                                oninput="calcBMI()">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('calculator.bmi') }}
                            </label>
                            <input type="number" name="bmi" id="bmi" min="15" max="50" step="0.1"
                                class="input-minimal bg-gray-50" readonly
                                placeholder="{{ __('calculator.bmi_placeholder') }}">
                            <p class="text-xs text-gray-500 mt-1">
                                {{ __('calculator.bmi_hint') }}
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Medical Measurements -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center">
                            <i class="fas fa-heartbeat text-cyan-600"></i>
                        </div>
                        {{ __('calculator.medical_meas') }}
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('calculator.bp_systolic') }}
                            </label>
                            <input type="number" name="bp_systolic" id="bp_systolic" min="80" max="200"
                                class="input-minimal" placeholder="120">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('calculator.bp_diastolic') }}
                            </label>
                            <input type="number" name="bp_diastolic" id="bp_diastolic" min="50" max="130"
                                class="input-minimal" placeholder="80">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('calculator.sugar') }}
                            </label>
                            <input type="number" name="sugar" id="sugar" min="50" max="400"
                                class="input-minimal" placeholder="100">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('calculator.hb') }}
                            </label>
                            <input type="number" name="hb" id="hb" min="5" max="18" step="0.1"
                                class="input-minimal" placeholder="12">
                            <p class="text-xs text-gray-500 mt-1">
                                {{ __('calculator.hb_hint') }}
                            </p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('calculator.lmp') }}
                            </label>
                            <input type="date" name="lmp" id="lmp"
                                class="input-minimal"
                                oninput="calcEDD()">
                            <p class="text-xs text-gray-500 mt-1">
                                {{ __('calculator.lmp_hint') }}
                            </p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('calculator.ega') }}
                            </label>
                            <input type="number" name="week" id="week" min="1" max="42"
                                class="input-minimal bg-gray-50" readonly
                                placeholder="{{ __('calculator.ega_placeholder') }}">
                            <p id="edd-display" class="text-xs text-cyan-600 font-medium mt-1 hidden">
                                <i class="fas fa-calendar-check me-1"></i>
                                <span id="edd-text"></span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Risk Factors -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-cyan-600"></i>
                        </div>
                        {{ __('calculator.risk_factors') }}
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <label class="flex items-center p-4 rounded-xl border-2 border-gray-100 cursor-pointer hover:border-cyan-200 transition-colors">
                            <input type="checkbox" name="previous_cs" id="previous_cs" class="w-5 h-5 text-cyan-600 rounded border-gray-300 focus:ring-cyan-500">
                            <span class="mr-3 text-sm text-gray-700">
                                {{ __('calculator.previous_cs') }}
                            </span>
                        </label>
                        
                        <label class="flex items-center p-4 rounded-xl border-2 border-gray-100 cursor-pointer hover:border-cyan-200 transition-colors">
                            <input type="checkbox" name="bleeding" id="bleeding" class="w-5 h-5 text-cyan-600 rounded border-gray-300 focus:ring-cyan-500">
                            <span class="mr-3 text-sm text-gray-700">
                                {{ __('calculator.bleeding') }}
                            </span>
                        </label>
                        
                        <label class="flex items-center p-4 rounded-xl border-2 border-gray-100 cursor-pointer hover:border-cyan-200 transition-colors">
                            <input type="checkbox" name="rh_incompatibility" id="rh_incompatibility" class="w-5 h-5 text-cyan-600 rounded border-gray-300 focus:ring-cyan-500">
                            <span class="mr-3 text-sm text-gray-700">
                                {{ __('calculator.rh_incompatibility') }}
                            </span>
                        </label>
                        
                        <label class="flex items-center p-4 rounded-xl border-2 border-gray-100 cursor-pointer hover:border-cyan-200 transition-colors">
                            <input type="checkbox" name="diabetes" id="diabetes" class="w-5 h-5 text-cyan-600 rounded border-gray-300 focus:ring-cyan-500">
                            <span class="mr-3 text-sm text-gray-700">
                                {{ __('calculator.diabetes') }}
                            </span>
                        </label>
                        
                        <label class="flex items-center p-4 rounded-xl border-2 border-gray-100 cursor-pointer hover:border-cyan-200 transition-colors">
                            <input type="checkbox" name="hypertension" id="hypertension" class="w-5 h-5 text-cyan-600 rounded border-gray-300 focus:ring-cyan-500">
                            <span class="mr-3 text-sm text-gray-700">
                                {{ __('calculator.hypertension') }}
                            </span>
                        </label>
                        
                        <label class="flex items-center p-4 rounded-xl border-2 border-gray-100 cursor-pointer hover:border-cyan-200 transition-colors">
                            <input type="checkbox" name="multiple" id="multiple" class="w-5 h-5 text-cyan-600 rounded border-gray-300 focus:ring-cyan-500">
                            <span class="mr-3 text-sm text-gray-700">
                                {{ __('calculator.multiple') }}
                            </span>
                        </label>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center pt-4">
                    <button type="submit" class="btn-primary text-base px-10 py-4 w-full md:w-auto">
                        <i class="fas fa-calculator mr-2"></i>
                        {{ __('calculator.btn_calculate') }}
                    </button>
                </div>
            </form>
            
            <!-- Results Section -->
            <div id="results" class="hidden mt-10 pt-8 border-t border-gray-100">
                <div class="text-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">
                        {{ __('calculator.result_title') }}
                    </h3>
                </div>
                
                <!-- Risk Level Card -->
                <div id="riskCard" class="rounded-2xl p-8 text-center mb-6"></div>
                
                <!-- Extra Info (EDD + BMI) -->
                <div id="extra-info" class="mb-4"></div>

                <!-- Recommendations -->
                <div class="bg-gray-50 rounded-2xl p-5">
                    <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2 text-sm">
                        <i class="fas fa-lightbulb text-yellow-500"></i>
                        {{ __('calculator.recommendations') }}
                    </h4>
                    <ul id="recommendations" class="space-y-2 text-gray-700 text-sm"></ul>
                </div>
                
                <!-- Disclaimer -->
                <div class="mt-4 p-4 bg-yellow-50 border border-yellow-100 rounded-xl">
                    <p class="text-xs text-yellow-700 flex items-start gap-2">
                        <i class="fas fa-info-circle mt-0.5"></i>
                        {{ __('calculator.disclaimer') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
const lang = '{{ app()->getLocale() }}';

// Auto-calculate BMI from height & weight
function calcBMI() {
    const h = parseFloat(document.getElementById('height').value);
    const w = parseFloat(document.getElementById('weight').value);
    const bmiField = document.getElementById('bmi');
    if (h > 0 && w > 0) {
        const bmi = (w / ((h / 100) ** 2)).toFixed(1);
        bmiField.value = bmi;
    } else {
        bmiField.value = '';
    }
}

// Auto-calculate EDD & gestational week from LMP
function calcEDD() {
    const lmpVal = document.getElementById('lmp').value;
    const weekField = document.getElementById('week');
    const eddDisplay = document.getElementById('edd-display');
    const eddText = document.getElementById('edd-text');

    if (!lmpVal) {
        weekField.value = '';
        eddDisplay.classList.add('hidden');
        return;
    }

    const lmp = new Date(lmpVal);
    const today = new Date();

    // Gestational age in days
    const diffDays = Math.floor((today - lmp) / (1000 * 60 * 60 * 24));
    const weeks = Math.floor(diffDays / 7);
    const days  = diffDays % 7;
    weekField.value = weeks > 0 ? weeks : 0;

    // EDD = LMP + 280 days (Naegele's rule)
    const edd = new Date(lmp.getTime() + 280 * 24 * 60 * 60 * 1000);
    const eddFormatted = edd.toLocaleDateString(lang === 'ar' ? 'ar-EG' : 'en-GB', {
        year: 'numeric', month: 'long', day: 'numeric'
    });

    eddText.textContent = (lang === 'ar' ? 'تاريخ الولادة المتوقع (EDD): ' : 'EDD: ') + eddFormatted
        + (lang === 'ar' ? ` — أسبوع ${weeks}+${days}` : ` — Week ${weeks}+${days}`);
    eddDisplay.classList.remove('hidden');
}

document.getElementById('riskCalculator').addEventListener('submit', function(e) {
    e.preventDefault();

    let score = 0;
    const lmpVal    = document.getElementById('lmp').value;
    const bmiVal    = parseFloat(document.getElementById('bmi').value) || 0;

    // EDD summary
    let eddSummary = '';
    if (lmpVal) {
        const lmp   = new Date(lmpVal);
        const edd   = new Date(lmp.getTime() + 280 * 24 * 60 * 60 * 1000);
        const today = new Date();
        const weeks = Math.floor((today - lmp) / (1000 * 60 * 60 * 24 * 7));
        const days  = Math.floor((today - lmp) / (1000 * 60 * 60 * 24)) % 7;
        const eddFormatted = edd.toLocaleDateString(lang === 'ar' ? 'ar-EG' : 'en-GB', {
            year: 'numeric', month: 'long', day: 'numeric'
        });
        eddSummary = lang === 'ar'
            ? `<div class="mt-4 p-3 bg-cyan-50 border border-cyan-200 rounded-xl text-sm text-cyan-800 flex items-center gap-2"><i class="fas fa-calendar-check text-cyan-500"></i>&nbsp;<strong>تاريخ الولادة المتوقع (EDD):</strong>&nbsp;${eddFormatted} — أسبوع ${weeks}+${days}</div>`
            : `<div class="mt-4 p-3 bg-cyan-50 border border-cyan-200 rounded-xl text-sm text-cyan-800 flex items-center gap-2"><i class="fas fa-calendar-check text-cyan-500"></i>&nbsp;<strong>Expected Delivery Date (EDD):</strong>&nbsp;${eddFormatted} — Week ${weeks}+${days}</div>`;
    }

    // BMI summary
    let bmiSummary = '';
    if (bmiVal > 0) {
        const bmiLabel = bmiVal < 18.5 ? (lang === 'ar' ? 'نقص وزن' : 'Underweight')
            : bmiVal < 25  ? (lang === 'ar' ? 'وزن طبيعي' : 'Normal weight')
            : bmiVal < 30  ? (lang === 'ar' ? 'وزن زائد' : 'Overweight')
            :                 (lang === 'ar' ? 'سمنة' : 'Obese');
        const bColor = bmiVal >= 30 ? 'amber' : 'green';
        bmiSummary = `<div class="mt-3 p-3 bg-${bColor}-50 border border-${bColor}-200 rounded-xl text-sm text-${bColor}-800 flex items-center gap-2"><i class="fas fa-weight text-${bColor}-500"></i>&nbsp;<strong>BMI: ${bmiVal}</strong> — ${bmiLabel}</div>`;
    }

    // Calculate score
    const age = parseInt(document.getElementById('age').value) || 0;
    if (age > 0 && (age < 18 || age > 35)) score++;

    const bmi = bmiVal;
    if (bmi >= 30) score++;
    
    const bpSystolic = parseInt(document.getElementById('bp_systolic').value) || 0;
    const bpDiastolic = parseInt(document.getElementById('bp_diastolic').value) || 0;
    if (bpSystolic >= 140 || bpDiastolic >= 90) score++;
    
    const sugar = parseInt(document.getElementById('sugar').value) || 0;
    if (sugar >= 140) score++;
    
    const hb = parseFloat(document.getElementById('hb').value) || 0;
    if (hb > 0 && hb < 11) score++;
    
    if (document.getElementById('previous_cs').checked) score++;
    if (document.getElementById('bleeding').checked) score++;
    if (document.getElementById('rh_incompatibility').checked) score++;
    if (document.getElementById('diabetes').checked) score++;
    if (document.getElementById('hypertension').checked) score++;
    if (document.getElementById('multiple').checked) score++;
    
    // Emergency rules
    let isEmergency = bpSystolic >= 160 || bpDiastolic >= 110 || (hb > 0 && hb < 9) || 
        (document.getElementById('bleeding').checked && bpSystolic >= 140);
    
    // Display results
    const resultsDiv = document.getElementById('results');
    const riskCard = document.getElementById('riskCard');
    const recommendations = document.getElementById('recommendations');
    
    resultsDiv.classList.remove('hidden');
    resultsDiv.scrollIntoView({ behavior: 'smooth' });
    
    // Append EDD & BMI info below riskCard
    const extraInfo = document.getElementById('extra-info');
    if (extraInfo) extraInfo.innerHTML = eddSummary + bmiSummary;
    
    if (isEmergency) {
        riskCard.className = 'rounded-2xl p-8 text-center mb-6 bg-red-50 border-2 border-red-200';
        riskCard.innerHTML = `
            <div class="text-5xl mb-3">🚨</div>
            <h4 class="text-xl font-bold text-red-700 mb-2">${lang === 'ar' ? 'حالة طوارئ!' : 'Emergency!'}</h4>
            <p class="text-red-600">${lang === 'ar' ? 'يجب التوجه للطوارئ فوراً' : 'Go to emergency immediately'}</p>
            <div class="text-3xl font-bold text-red-600 mt-3">${score} ${lang === 'ar' ? 'نقطة' : 'points'}</div>
        `;
        recommendations.innerHTML = `
            <li class="flex items-center gap-2"><i class="fas fa-hospital text-red-500"></i> ${lang === 'ar' ? 'اتصلي بالإسعاف فوراً' : 'Call emergency now'}</li>
            <li class="flex items-center gap-2"><i class="fas fa-ambulance text-red-500"></i> ${lang === 'ar' ? 'اذهبي لأقرب مستشفى' : 'Go to nearest hospital'}</li>
        `;
    } else if (score <= 1) {
        riskCard.className = 'rounded-2xl p-8 text-center mb-6 bg-green-50 border-2 border-green-200';
        riskCard.innerHTML = `
            <div class="text-5xl mb-3">✅</div>
            <h4 class="text-xl font-bold text-green-700 mb-2">${lang === 'ar' ? 'خطورة منخفضة' : 'Low Risk'}</h4>
            <p class="text-green-600">${lang === 'ar' ? 'حملك طبيعي ومستقر' : 'Your pregnancy is normal'}</p>
            <div class="text-3xl font-bold text-green-600 mt-3">${score} ${lang === 'ar' ? 'نقطة' : 'points'}</div>
        `;
        recommendations.innerHTML = `
            <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> ${lang === 'ar' ? 'زيارة كل 4 أسابيع' : 'Visit every 4 weeks'}</li>
            <li class="flex items-center gap-2"><i class="fas fa-apple-alt text-green-500"></i> ${lang === 'ar' ? 'تغذية صحية متوازنة' : 'Balanced nutrition'}</li>
            <li class="flex items-center gap-2"><i class="fas fa-pills text-green-500"></i> ${lang === 'ar' ? 'تناولي الفيتامينات' : 'Take vitamins'}</li>
        `;
    } else if (score <= 3) {
        riskCard.className = 'rounded-2xl p-8 text-center mb-6 bg-yellow-50 border-2 border-yellow-200';
        riskCard.innerHTML = `
            <div class="text-5xl mb-3">⚠️</div>
            <h4 class="text-xl font-bold text-yellow-700 mb-2">${lang === 'ar' ? 'خطورة متوسطة' : 'Moderate Risk'}</h4>
            <p class="text-yellow-600">${lang === 'ar' ? 'يحتاج حملك لمراقبة أكثر' : 'Needs more monitoring'}</p>
            <div class="text-3xl font-bold text-yellow-600 mt-3">${score} ${lang === 'ar' ? 'نقطة' : 'points'}</div>
        `;
        recommendations.innerHTML = `
            <li class="flex items-center gap-2"><i class="fas fa-calendar text-yellow-500"></i> ${lang === 'ar' ? 'زيارة كل 2-3 أسابيع' : 'Visit every 2-3 weeks'}</li>
            <li class="flex items-center gap-2"><i class="fas fa-vial text-yellow-500"></i> ${lang === 'ar' ? 'فحوصات إضافية' : 'Additional tests'}</li>
            <li class="flex items-center gap-2"><i class="fas fa-user-md text-yellow-500"></i> ${lang === 'ar' ? 'متابعة مع أخصائي' : 'Specialist follow-up'}</li>
        `;
    } else {
        riskCard.className = 'rounded-2xl p-8 text-center mb-6 bg-red-50 border-2 border-red-200';
        riskCard.innerHTML = `
            <div class="text-5xl mb-3">🔴</div>
            <h4 class="text-xl font-bold text-red-700 mb-2">${lang === 'ar' ? 'خطورة عالية' : 'High Risk'}</h4>
            <p class="text-red-600">${lang === 'ar' ? 'يحتاج لرعاية مكثفة' : 'Needs intensive care'}</p>
            <div class="text-3xl font-bold text-red-600 mt-3">${score} ${lang === 'ar' ? 'نقطة' : 'points'}</div>
        `;
        recommendations.innerHTML = `
            <li class="flex items-center gap-2"><i class="fas fa-hospital text-red-500"></i> ${lang === 'ar' ? 'زيارة أسبوعية' : 'Weekly visits'}</li>
            <li class="flex items-center gap-2"><i class="fas fa-users text-red-500"></i> ${lang === 'ar' ? 'فريق طبي متخصص' : 'Specialized team'}</li>
            <li class="flex items-center gap-2"><i class="fas fa-file-medical text-red-500"></i> ${lang === 'ar' ? 'خطة علاج مفصلة' : 'Detailed treatment plan'}</li>
        `;
    }
});
</script>
@endsection
