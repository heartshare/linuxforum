<?php

use yii\helpers\Html;
use app\widgets\ActiveForm;
use user\widgets\SettingsMenu;

/* @var \user\models\User $user */
?>
<div class="columns">
    <div class="column one-fourth">
        <?= SettingsMenu::widget() ?>
    </div>
    <div class="column three-fourths profile-box">
        <div class="profile-box-header">Основные настройки</div>
        <div class="profile-box-content">
            <?php $form = ActiveForm::begin() ?>
            <?= $form->errorSummary($model, [
                'header' => '',
            ]) ?>
            <?= $form->field($model, 'message', [
                'options' => [
                    'tag' => 'dl',
                    'class' => 'form',
                ],
                'template' => "<dt>{label}</dt>\n<dd>{input}</dd>",
            ])->textarea([
                'placeholder' => 'Напишите коротко о себе',
            ])->label('Информация о себе') ?>


            <?= $form->field($model, 'timezone', [
                'options' => [
                    'tag' => 'dl',
                    'class' => 'form',
                ],
                'template' => "<dt>{label}</dt>\n<dd>{input}</dd>",
            ])->dropDownList([
                'Pacific/Apia' => '(GMT-11:00) Апия',
                'Pacific/Midway' => '(GMT-11:00) Мидуэй',
                'Pacific/Niue' => '(GMT-11:00) Ниуэ',
                'Pacific/Pago_Pago' => '(GMT-11:00) Паго-Паго',
                'Pacific/Fakaofo' => '(GMT-10:00) Факаофо',
                'Pacific/Honolulu' => '(GMT-10:00) Гавайское время',
                'Pacific/Johnston' => '(GMT-10:00) атолл Джонстон',
                'Pacific/Rarotonga' => '(GMT-10:00) Раротонга',
                'Pacific/Tahiti' => '(GMT-10:00) Таити',
                'Pacific/Marquesas' => '(GMT-09:30) Маркизские острова',
                'America/Anchorage' => '(GMT-09:00) Время Аляски',
                'Pacific/Gambier' => '(GMT-09:00) Гамбир',
                'America/Los_Angeles' => '(GMT-08:00) Тихоокеанское время',
                'America/Tijuana' => '(GMT-08:00) Тихоокеанское время – Тихуана',
                'America/Vancouver' => '(GMT-08:00) Тихоокеанское время – Ванкувер',
                'America/Whitehorse' => '(GMT-08:00) Тихоокеанское время – Уайтхорс',
                'Pacific/Pitcairn' => '(GMT-08:00) Питкэрн',
                'America/Dawson_Creek' => '(GMT-07:00) Горное время – Доусон Крик',
                'America/Denver' => '(GMT-07:00) Горное время (America/Denver)',
                'America/Edmonton' => '(GMT-07:00) Горное время – Эдмонтон',
                'America/Hermosillo' => '(GMT-07:00) Горное время – Эрмосильо',
                'America/Mazatlan' => '(GMT-07:00) Горное время – Чиуауа, Мазатлан',
                'America/Phoenix' => '(GMT-07:00) Горное время – Аризона',
                'America/Yellowknife' => '(GMT-07:00) Горное время – Йеллоунайф',
                'America/Belize' => '(GMT-06:00) Белиз',
                'America/Chicago' => '(GMT-06:00) Центральное время',
                'America/Costa_Rica' => '(GMT-06:00) Коста-Рика',
                'America/El_Salvador' => '(GMT-06:00) Сальвадор',
                'America/Guatemala' => '(GMT-06:00) Гватемала',
                'America/Managua' => '(GMT-06:00) Манагуа',
                'America/Mexico_City' => '(GMT-06:00) Центральное время – Мехико',
                'America/Regina' => '(GMT-06:00) Центральное время – Реджайна',
                'America/Tegucigalpa' => '(GMT-06:00) Центральное время (America/Tegucigalpa)',
                'America/Winnipeg' => '(GMT-06:00) Центральное время – Виннипег',
                'Pacific/Easter' => '(GMT-06:00) остров Пасхи',
                'Pacific/Galapagos' => '(GMT-06:00) Галапагос',
                'America/Bogota' => '(GMT-05:00) Богота',
                'America/Cayman' => '(GMT-05:00) Каймановы острова',
                'America/Grand_Turk' => '(GMT-05:00) Гранд Турк',
                'America/Guayaquil' => '(GMT-05:00) Гуаякиль',
                'America/Havana' => '(GMT-05:00) Гавана',
                'America/Iqaluit' => '(GMT-05:00) Восточное время – Икалуит',
                'America/Jamaica' => '(GMT-05:00) Ямайка',
                'America/Lima' => '(GMT-05:00) Лима',
                'America/Montreal' => '(GMT-05:00) Восточное время – Монреаль',
                'America/Nassau' => '(GMT-05:00) Нассау',
                'America/New_York' => '(GMT-05:00) Восточное время',
                'America/Panama' => '(GMT-05:00) Панама',
                'America/Port-au-Prince' => '(GMT-05:00) Порт-о-Пренс',
                'America/Rio_Branco' => '(GMT-05:00) Риу-Бранку',
                'America/Toronto' => '(GMT-05:00) Восточное время – Торонто',
                'America/Caracas' => '(GMT-04:30) Каракас',
                'America/Anguilla' => '(GMT-04:00) Ангилья',
                'America/Antigua' => '(GMT-04:00) Антигуа',
                'America/Aruba' => '(GMT-04:00) Аруба',
                'America/Asuncion' => '(GMT-04:00) Асунсьон',
                'America/Barbados' => '(GMT-04:00) Барбадос',
                'America/Boa_Vista' => '(GMT-04:00) Боа-Виста',
                'America/Campo_Grande' => '(GMT-04:00) Кампу-Гранди',
                'America/Cuiaba' => '(GMT-04:00) Куяба',
                'America/Curacao' => '(GMT-04:00) Кюрасао',
                'America/Dominica' => '(GMT-04:00) Доминика',
                'America/Grenada' => '(GMT-04:00) Гренада',
                'America/Guadeloupe' => '(GMT-04:00) Гваделупа',
                'America/Guyana' => '(GMT-04:00) Гайана',
                'America/Halifax' => '(GMT-04:00) Атлантическое время – Галифакс',
                'America/La_Paz' => '(GMT-04:00) Ла-Пас',
                'America/Manaus' => '(GMT-04:00) Манаус',
                'America/Martinique' => '(GMT-04:00) Мартиника',
                'America/Montserrat' => '(GMT-04:00) Монсеррат',
                'America/Port_of_Spain' => '(GMT-04:00) Порт-оф-Спейн',
                'America/Porto_Velho' => '(GMT-04:00) Порто-Велью',
                'America/Puerto_Rico' => '(GMT-04:00) Пуэрто-Рико',
                'America/Santiago' => '(GMT-04:00) Сантьяго',
                'America/Santo_Domingo' => '(GMT-04:00) Санто-Доминго',
                'America/St_Kitts' => '(GMT-04:00) Сент-Китс',
                'America/St_Lucia' => '(GMT-04:00) Сент-Люсия',
                'America/St_Thomas' => '(GMT-04:00) Сент-Томас',
                'America/St_Vincent' => '(GMT-04:00) Сент-Винсент',
                'America/Thule' => '(GMT-04:00) Тули',
                'America/Tortola' => '(GMT-04:00) Тортола',
                'Antarctica/Palmer' => '(GMT-04:00) Палмер',
                'Atlantic/Bermuda' => '(GMT-04:00) Бермуды',
                'Atlantic/Stanley' => '(GMT-04:00) Стэнли',
                'America/St_Johns' => '(GMT-03:30) Ньюфаундлендское время – Сент-Джонс',
                'America/Araguaina' => '(GMT-03:00) Арагуайна',
                'America/Argentina/Buenos_Aires' => '(GMT-03:00) Буэнос-Айрес',
                'America/Bahia' => '(GMT-03:00) Сальвадор',
                'America/Belem' => '(GMT-03:00) Белен',
                'America/Cayenne' => '(GMT-03:00) Кайенна',
                'America/Fortaleza' => '(GMT-03:00) Форталеза',
                'America/Godthab' => '(GMT-03:00) Годхоб',
                'America/Maceio' => '(GMT-03:00) Масейо',
                'America/Miquelon' => '(GMT-03:00) Микелон',
                'America/Montevideo' => '(GMT-03:00) Монтевидео',
                'America/Paramaribo' => '(GMT-03:00) Парамарибо',
                'America/Recife' => '(GMT-03:00) Ресифи',
                'America/Sao_Paulo' => '(GMT-03:00) Сан-Пауло',
                'Antarctica/Rothera' => '(GMT-03:00) Ротера',
                'America/Noronha' => '(GMT-02:00) Норонха',
                'Atlantic/South_Georgia' => '(GMT-02:00) Южная Георгия',
                'America/Scoresbysund' => '(GMT-01:00) Скорсби',
                'Atlantic/Azores' => '(GMT-01:00) Азорские острова',
                'Atlantic/Cape_Verde' => '(GMT-01:00) острова Зеленого мыса',
                'Africa/Abidjan' => '(GMT+00:00) Абиджан',
                'Africa/Accra' => '(GMT+00:00) Аккра',
                'Africa/Bamako' => '(GMT+00:00) Бамако (Africa/Bamako)',
                'Africa/Banjul' => '(GMT+00:00) Банжул',
                'Africa/Bissau' => '(GMT+00:00) Бисау',
                'Africa/Casablanca' => '(GMT+00:00) Касабланка',
                'Africa/Conakry' => '(GMT+00:00) Конакри',
                'Africa/Dakar' => '(GMT+00:00) Дакар',
                'Africa/El_Aaiun' => '(GMT+00:00) Эль-Аюн',
                'Africa/Freetown' => '(GMT+00:00) Фритаун',
                'Africa/Lome' => '(GMT+00:00) Ломе',
                'Africa/Monrovia' => '(GMT+00:00) Монровия',
                'Africa/Nouakchott' => '(GMT+00:00) Нуакшот',
                'Africa/Ouagadougou' => '(GMT+00:00) Уагадугу',
                'Africa/Sao_Tome' => '(GMT+00:00) Сан-Томе',
                'America/Danmarkshavn' => '(GMT+00:00) Данмаркшавн',
                'Atlantic/Canary' => '(GMT+00:00) Канарские острова',
                'Atlantic/Faroe' => '(GMT+00:00) Фарерские острова',
                'Atlantic/Reykjavik' => '(GMT+00:00) Рейкьявик',
                'Atlantic/St_Helena' => '(GMT+00:00) остров Святой Елены',
                'Etc/GMT' => '(GMT+00:00) Время по Гринвичу (без перехода на летнее время)',
                'Europe/Dublin' => '(GMT+00:00) Дублин',
                'Europe/Lisbon' => '(GMT+00:00) Лиссабон',
                'Europe/London' => '(GMT+00:00) Лондон (Europe/London)',
                'Africa/Algiers' => '(GMT+01:00) Алжир',
                'Africa/Bangui' => '(GMT+01:00) Банги',
                'Africa/Brazzaville' => '(GMT+01:00) Браззавиль',
                'Africa/Ceuta' => '(GMT+01:00) Сеута',
                'Africa/Douala' => '(GMT+01:00) Дуала',
                'Africa/Kinshasa' => '(GMT+01:00) Киншаса',
                'Africa/Lagos' => '(GMT+01:00) Лагос',
                'Africa/Libreville' => '(GMT+01:00) Либревиль',
                'Africa/Luanda' => '(GMT+01:00) Луанда',
                'Africa/Malabo' => '(GMT+01:00) Малабо',
                'Africa/Ndjamena' => '(GMT+01:00) Нджамена',
                'Africa/Niamey' => '(GMT+01:00) Ниамей',
                'Africa/Porto-Novo' => '(GMT+01:00) Порто-Ново',
                'Africa/Tunis' => '(GMT+01:00) Тунис',
                'Africa/Windhoek' => '(GMT+01:00) Виндхук',
                'Europe/Amsterdam' => '(GMT+01:00) Амстердам',
                'Europe/Andorra' => '(GMT+01:00) Андорра',
                'Europe/Belgrade' => '(GMT+01:00) Центральноевропейское время (Europe/Belgrade)',
                'Europe/Berlin' => '(GMT+01:00) Берлин',
                'Europe/Brussels' => '(GMT+01:00) Брюссель',
                'Europe/Budapest' => '(GMT+01:00) Будапешт',
                'Europe/Copenhagen' => '(GMT+01:00) Копенгаген',
                'Europe/Gibraltar' => '(GMT+01:00) Гибралтар',
                'Europe/Luxembourg' => '(GMT+01:00) Люксембург',
                'Europe/Madrid' => '(GMT+01:00) Мадрид',
                'Europe/Malta' => '(GMT+01:00) Мальта',
                'Europe/Monaco' => '(GMT+01:00) Монако',
                'Europe/Oslo' => '(GMT+01:00) Осло (Europe/Oslo)',
                'Europe/Paris' => '(GMT+01:00) Париж',
                'Europe/Prague' => '(GMT+01:00) Центральноевропейское время (Europe/Prague)',
                'Europe/Rome' => '(GMT+01:00) Рим (Europe/Rome)',
                'Europe/Stockholm' => '(GMT+01:00) Стокгольм',
                'Europe/Tirane' => '(GMT+01:00) Тирана',
                'Europe/Vaduz' => '(GMT+01:00) Вадуц',
                'Europe/Vienna' => '(GMT+01:00) Вена',
                'Europe/Warsaw' => '(GMT+01:00) Варшава',
                'Europe/Zurich' => '(GMT+01:00) Цюрих',
                'Africa/Blantyre' => '(GMT+02:00) Блантайр',
                'Africa/Bujumbura' => '(GMT+02:00) Бужумбура',
                'Africa/Cairo' => '(GMT+02:00) Каир',
                'Africa/Gaborone' => '(GMT+02:00) Габороне',
                'Africa/Harare' => '(GMT+02:00) Хараре',
                'Africa/Johannesburg' => '(GMT+02:00) Йоханнесбург',
                'Africa/Kigali' => '(GMT+02:00) Кигали',
                'Africa/Lubumbashi' => '(GMT+02:00) Лубумбаши',
                'Africa/Lusaka' => '(GMT+02:00) Лусака',
                'Africa/Maputo' => '(GMT+02:00) Мапуту',
                'Africa/Maseru' => '(GMT+02:00) Масеру',
                'Africa/Mbabane' => '(GMT+02:00) Мбабане',
                'Africa/Tripoli' => '(GMT+02:00) Триполи',
                'Asia/Amman' => '(GMT+02:00) Амман',
                'Asia/Beirut' => '(GMT+02:00) Бейрут',
                'Asia/Damascus' => '(GMT+02:00) Дамаск',
                'Asia/Gaza' => '(GMT+02:00) Газа',
                'Asia/Jerusalem' => '(GMT+02:00) Тель-Авив',
                'Asia/Nicosia' => '(GMT+02:00) Никосия (Asia/Nicosia)',
                'Europe/Athens' => '(GMT+02:00) Афины',
                'Europe/Bucharest' => '(GMT+02:00) Бухарест',
                'Europe/Chisinau' => '(GMT+02:00) Кишинев',
                'Europe/Helsinki' => '(GMT+02:00) Хельсинки (Europe/Helsinki)',
                'Europe/Istanbul' => '(GMT+02:00) Стамбул (Europe/Istanbul)',
                'Europe/Kaliningrad' => '(GMT+02:00) Москва-01 – Калининград',
                'Europe/Kiev' => '(GMT+02:00) Киев',
                'Europe/Minsk' => '(GMT+02:00) Минск',
                'Europe/Riga' => '(GMT+02:00) Рига',
                'Europe/Sofia' => '(GMT+02:00) София',
                'Europe/Tallinn' => '(GMT+02:00) Таллинн',
                'Europe/Vilnius' => '(GMT+02:00) Вильнюс',
                'Africa/Addis_Ababa' => '(GMT+03:00) Аддис-Абеба',
                'Africa/Asmara' => '(GMT+03:00) Асмера',
                'Africa/Dar_es_Salaam' => '(GMT+03:00) Дар-эс-Салам',
                'Africa/Djibouti' => '(GMT+03:00) Джибути',
                'Africa/Kampala' => '(GMT+03:00) Кампала',
                'Africa/Khartoum' => '(GMT+03:00) Хартум',
                'Africa/Mogadishu' => '(GMT+03:00) Могадишо',
                'Africa/Nairobi' => '(GMT+03:00) Найроби',
                'Antarctica/Syowa' => '(GMT+03:00) Сиова',
                'Asia/Aden' => '(GMT+03:00) Аден',
                'Asia/Baghdad' => '(GMT+03:00) Багдад',
                'Asia/Bahrain' => '(GMT+03:00) Бахрейн',
                'Asia/Kuwait' => '(GMT+03:00) Кувейт',
                'Asia/Qatar' => '(GMT+03:00) Катар',
                'Asia/Riyadh' => '(GMT+03:00) Эр-Рияд',
                'Europe/Moscow' => '(GMT+03:00) Москва +00',
                'Indian/Antananarivo' => '(GMT+03:00) Антананариву',
                'Indian/Comoro' => '(GMT+03:00) Коморские острова',
                'Indian/Mayotte' => '(GMT+03:00) Майорка',
                'Asia/Tehran' => '(GMT+03:30) Тегеран',
                'Asia/Baku' => '(GMT+04:00) Баку',
                'Asia/Dubai' => '(GMT+04:00) Дубай',
                'Asia/Muscat' => '(GMT+04:00) Мускат',
                'Asia/Tbilisi' => '(GMT+04:00) Тбилиси',
                'Asia/Yerevan' => '(GMT+04:00) Ереван',
                'Europe/Samara' => '(GMT+04:00) Москва +01 – Самара',
                'Indian/Mahe' => '(GMT+04:00) Маэ',
                'Indian/Mauritius' => '(GMT+04:00) Маврикий',
                'Indian/Reunion' => '(GMT+04:00) Реюньон',
                'Asia/Kabul' => '(GMT+04:30) Кабул',
                'Asia/Aqtau' => '(GMT+05:00) Актау',
                'Asia/Aqtobe' => '(GMT+05:00) Актобе',
                'Asia/Ashgabat' => '(GMT+05:00) Ашгабат',
                'Asia/Dushanbe' => '(GMT+05:00) Душанбе',
                'Asia/Karachi' => '(GMT+05:00) Карачи',
                'Asia/Tashkent' => '(GMT+05:00) Ташкент',
                'Asia/Yekaterinburg' => '(GMT+05:00) Москва +02 – Екатеринбург',
                'Indian/Kerguelen' => '(GMT+05:00) Кергелен',
                'Indian/Maldives' => '(GMT+05:00) Мальдивы',
                'Asia/Calcutta' => '(GMT+05:30) Индийское время',
                'Asia/Colombo' => '(GMT+05:30) Коломбо',
                'Asia/Katmandu' => '(GMT+05:45) Катманду',
                'Antarctica/Mawson' => '(GMT+06:00) Моусон',
                'Antarctica/Vostok' => '(GMT+06:00) Восток',
                'Asia/Almaty' => '(GMT+06:00) Алматы',
                'Asia/Bishkek' => '(GMT+06:00) Бишкек',
                'Asia/Dhaka' => '(GMT+06:00) Дхака',
                'Asia/Omsk' => '(GMT+06:00) Москва +03 – Омск, Новосибирск',
                'Asia/Thimphu' => '(GMT+06:00) Тхимпху',
                'Indian/Chagos' => '(GMT+06:00) Чагос',
                'Asia/Rangoon' => '(GMT+06:30) Рангун',
                'Indian/Cocos' => '(GMT+06:30) Кокосовые острова',
                'Antarctica/Davis' => '(GMT+07:00) Davis',
                'Asia/Bangkok' => '(GMT+07:00) Бангкок',
                'Asia/Hovd' => '(GMT+07:00) Ховд',
                'Asia/Jakarta' => '(GMT+07:00) Джакарта',
                'Asia/Krasnoyarsk' => '(GMT+07:00) Москва +04 – Красноярск',
                'Asia/Phnom_Penh' => '(GMT+07:00) Пномпень',
                'Asia/Saigon' => '(GMT+07:00) Ханой',
                'Asia/Vientiane' => '(GMT+07:00) Вьентьян',
                'Indian/Christmas' => '(GMT+07:00) Рождественские острова',
                'Antarctica/Casey' => '(GMT+08:00) Кейси',
                'Asia/Brunei' => '(GMT+08:00) Бруней',
                'Asia/Choibalsan' => '(GMT+08:00) Чойбалсан',
                'Asia/Hong_Kong' => '(GMT+08:00) Гонконг',
                'Asia/Irkutsk' => '(GMT+08:00) Москва +05 – Иркутск',
                'Asia/Kuala_Lumpur' => '(GMT+08:00) Куала-Лумпур',
                'Asia/Macau' => '(GMT+08:00) Макау',
                'Asia/Makassar' => '(GMT+08:00) Макасар',
                'Asia/Manila' => '(GMT+08:00) Манила',
                'Asia/Shanghai' => '(GMT+08:00) Китайское время – Пекин',
                'Asia/Singapore' => '(GMT+08:00) Сингапур',
                'Asia/Taipei' => '(GMT+08:00) Тайбэй',
                'Asia/Ulaanbaatar' => '(GMT+08:00) Улан-Батор',
                'Australia/Perth' => '(GMT+08:00) Западное время – Перт',
                'Asia/Dili' => '(GMT+09:00) Дили',
                'Asia/Jayapura' => '(GMT+09:00) Джапура',
                'Asia/Pyongyang' => '(GMT+09:00) Пхеньян',
                'Asia/Seoul' => '(GMT+09:00) Сеул',
                'Asia/Tokyo' => '(GMT+09:00) Токио',
                'Asia/Yakutsk' => '(GMT+09:00) Москва +06 – Якутск',
                'Pacific/Palau' => '(GMT+09:00) Палау',
                'Australia/Adelaide' => '(GMT+09:30) Центральное время – Аделаида',
                'Australia/Darwin' => '(GMT+09:30) Центральное время – Дарвин',
                'Antarctica/DumontDUrville' => '(GMT+10:00) Дюмон-Дюрвиль',
                'Asia/Vladivostok' => '(GMT+10:00) Москва +07 – Южно-Сахалинск',
                'Australia/Brisbane' => '(GMT+10:00) Восточное время – Брисбен',
                'Australia/Hobart' => '(GMT+10:00) Восточное время – Хобарт',
                'Australia/Sydney' => '(GMT+10:00) Восточное время – Мельбурн, Сидней',
                'Pacific/Guam' => '(GMT+10:00) Гуам',
                'Pacific/Port_Moresby' => '(GMT+10:00) Порт-Морсби',
                'Pacific/Saipan' => '(GMT+10:00) Сайпан',
                'Pacific/Truk' => '(GMT+10:00) Трук (Pacific/Truk)',
                'Asia/Magadan' => '(GMT+11:00) Москва +08 – Магадан',
                'Pacific/Efate' => '(GMT+11:00) Эфате',
                'Pacific/Guadalcanal' => '(GMT+11:00) Гвадалканал',
                'Pacific/Kosrae' => '(GMT+11:00) Kosrae',
                'Pacific/Noumea' => '(GMT+11:00) Нумеа',
                'Pacific/Ponape' => '(GMT+11:00) Понапе',
                'Pacific/Norfolk' => '(GMT+11:30) Норфолк',
                'Asia/Kamchatka' => '(GMT+12:00) Москва +09 – Петропавловск-Камчатский',
                'Pacific/Auckland' => '(GMT+12:00) Оклэнд',
                'Pacific/Fiji' => '(GMT+12:00) Фиджи',
                'Pacific/Funafuti' => '(GMT+12:00) Фунафути',
                'Pacific/Kwajalein' => '(GMT+12:00) Кваджелейн',
                'Pacific/Majuro' => '(GMT+12:00) Маджуро',
                'Pacific/Nauru' => '(GMT+12:00) Науру',
                'Pacific/Tarawa' => '(GMT+12:00) Тарава',
                'Pacific/Wake' => '(GMT+12:00) остров Вэйк',
                'Pacific/Wallis' => '(GMT+12:00) Уоллис',
                'Pacific/Enderbury' => '(GMT+13:00) острова Эндербери',
                'Pacific/Tongatapu' => '(GMT+13:00) Тонгатапу',
                'Pacific/Kiritimati' => '(GMT+14:00) Киритимати',
            ], [
                'unselect' => 'Europe/Moscow',
            ])->label('Часовой пояс:') ?>

            <hr class="bleed-flush compact">
            <p><?= Html::submitButton('Сохранить настройки', ['class' => 'btn btn-primary']) ?></p>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>