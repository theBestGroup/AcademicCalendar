<?PHP

// New language structure
$lang_info = array (
	'name' => 'Latvian'
	,'nativename' => 'Latvie�u' // Language name in native language. E.g: 'Fran�ais' for 'French'
	,'locale' => array('lv','lat') // Standard locale alternatives for a specific language. For reference, go to: http://www.php.net/manual/en/function.setlocale.php
	,'charset' => 'windows-1257' // For reference, go to : http://www.w3.org/International/O-charset-lang.html
	,'direction' => 'ltr' // 'ltr' for Left to Right. 'rtl' for Right to Left languages such as Arabic.
	,'author' => 'M�rti�� un Ieva Zabarovski'
	,'author_email' => 'martins@zabarovski.lv'
	,'author_url' => 'http://www.zabarovski.lv'
	,'transdate' => '07/03/2004'
);

$lang_general = array (
	'yes' => 'J�'
	,'no' => 'N�'
	,'back' => 'Atpaka�'
	,'continue' => 'Turpin�t'
	,'close' => 'Aizv�rt'
	,'errors' => 'K��das'
	,'days' => 'Dienas'
	,'months' => 'M�ne�i'
	,'years' => 'Gadi'
	,'hours' => 'Stundas'
	,'minutes' => 'Min�tes'
	,'everyday' => 'Katru dienu'
	,'everymonth' => 'Katru m�nesi'
	,'everyyear' => 'Katru gadu'
);

// Date formats, For reference, go to : http://www.php.net/manual/en/function.strftime.php
$lang_date_format = array (
	'full_date' => '%A, %d. %B , %Y' // e.g. Tre�diena, 5. J�nijs, 2004
	,'full_date_time_24hour' => '%A, %d. %B, %Y Plkst. %H:%M' // e.g. Tre�diena, 5. J�nijs, 2004 Plkst. 22:10
	,'full_date_time_12hour' => '%A, %d. %B, %Y Plkst. %I:%M %p' // e.g. Tre�diena, 5. J�nijs, 2004 Plkst. 10:10 pm
	,'day_month_year' => '%d %m %Y'
	,'local_date' => '%c'
	,'mini_date' => '%a. %d. %b, %Y'
	,'month_year' => '%B %Y'
	,'day_of_week' => array('Sv�tdiena','Pirmdiena','Otrdiena','Tre�diena','Ceturtdiena','Piektdiena','Sestdiena')
	,'months' => array('Janv�ris','Febru�ris','Marts','Apr�lis','Maijs','J�nijs','J�lijs','Augusts','Septembris','Oktobris','Novembris','Decembris')
);

$lang_system = array (
	'system_caption' => 'Sist�mas pazi�ojums'
  ,'page_access_denied' => 'Tev nav at�auta pieeja �ai lapai.'
  ,'operation_denied' => 'Tev nav at�auts veikt �o oper�ciju.'
	,'section_disabled' => '�� sada�a �obr�d nav pieejama!'
  ,'non_exist_cat' => 'Izv�l�t� kategorija neeksist�!'
  ,'non_exist_event' => 'Izv�l�tais ieraksts neeksist�!'
  ,'param_missing' => 'Dati nav pareizi.'
  ,'no_events' => 'Nav ierakstu'
);


// ======================================================
// Add Event view
// ======================================================

$lang_add_event_view = array(
	'section_title' => 'Pievienot ierakstu'
	,'edit_event' => 'Labot ierakstu [id%d] \'%s\''
	,'update_event_button' => 'Apstiprin�t ieraksta labojumus'

// Event details
	,'event_details_label' => 'Ieraksta saturs'
	,'event_title' => 'Ieraksta Virsraksts'
	,'event_desc' => 'Ieraksta apraksts'
	,'event_cat' => 'Kategorija'
	,'choose_cat' => 'Izv�lies kategoriju'
	,'event_date' => 'Ieraksta datums'
	,'day_label' => 'Diena'
	,'month_label' => 'M�nesis'
	,'year_label' => 'Gads'
	,'start_date_label' => 'S�kuma laiks'
	,'start_time_label' => 'Plkst.'
	,'end_date_label' => 'L�dz'
	,'all_day_label' => 'Visu dienu'
// Contact details
	,'contact_details_label' => 'Kontaktpersonas dati'
	,'contact_info' => 'Kontaktpersona'
	,'contact_email' => 'Kontaktpersonas E-pasts'
	,'contact_url' => 'Kontaktpersonas M�jas lapa'
// Other details
	,'other_details_label' => 'P�r�jie dati'
	,'picture_file' => 'Att�la fails'
	,'file_upload_info' => '(%d KBaitu limits - at�autais form�ts : %s )' 
	,'del_picture' => 'Dz�st att�lu?'
// Administrative options
	,'admin_options_label' => 'Administrat�v�s funkcijas'
	,'auto_appr_event' => 'Ieraksta Autom�tiska apstiprin��ana'

// Error messages
	,'no_title' => 'Ierakstam tr�kst virsraksta!'
	,'no_desc' => 'Ierakstam nepiecie�ams apraksts!'
	,'no_cat' => 'Izv�lies ieraksta kategoriju no saraksta!'
	,'date_invalid' => 'Nepareizs datums!'
	,'end_days_invalid' => 'Ieraksts \'Dienas\' nepareizs!'
	,'end_hours_invalid' => 'Ieraksts \'Stundas\' nepareizs!'
	,'end_minutes_invalid' => 'Ieraksts \'Min�tes\' nepareizs!'

	,'file_too_large' => 'Pievienot� faila lielums p�rsniedz at�auto! (At�auts %d KBaitu)'
	,'file_invalid' => 'Faila form�ts nav pareizs! (At�autais form�ts: %s)'

// Misc. messages
	,'submit_event_pending' => 'Ieraksts gaida apstiprin�jumu. Paldies, ka to veici!'
	,'submit_event_approved' => 'Ieraksts ir autom�tiski apstiprin�ts. Paldies, ka to veici!'
);

// ======================================================
// Category Events view
// ======================================================

$lang_event_view = array(
	'section_title' => 'Ieraksts: \'%s\''
	,'cat_name' => 'Kategorija'
	,'event_start_date' => 'Datums'
	,'event_end_date' => 'L�dz'
	,'contact_info' => 'Kontaktpersona'
	,'contact_email' => 'E-pasts'
	,'contact_url' => 'M�jas lapa'
	,'no_event' => 'Nav ierakstu.'
	,'stats_string' => 'Pavisam <strong>%d</strong> ierakstu.'
);

// ======================================================
// Categories view
// ======================================================

$lang_cats_view = array(
	'section_title' => 'Kategoriju sadal�jums'
	,'cat_name' => 'Kategorijas nosaukums'
	,'total_events' => 'Pavisam ierakstu'
	,'upcoming_events' => 'Gaid�mie notikumi'
	,'no_cats' => 'Nav kategoriju.'
	,'stats_string' => '<strong>%d</strong> Ierakstu <strong>%d</strong> kategorij�s'
);

// ======================================================
// Category Events view
// ======================================================

$lang_cat_events_view = array(
	'section_title' => 'Ieraksti \'%s\''
	,'event_name' => 'Ieraksta nosaukums'
	,'event_date' => 'Datums'
	,'no_events' => '�aj� kategorij� nav ierakstu.'
	,'stats_string' => 'Pavisam <strong>%d</strong> ierakstu.'
);

// ======================================================
// theme.php
// ======================================================

// To Be Done

// ======================================================
// functions.inc.php
// ======================================================

// To Be Done

// ======================================================
// dblib.php
// ======================================================

// To Be Done

// ======================================================
// admin_events.php
// ======================================================

// To Be Done

// ======================================================
// admin_categories.php
// ======================================================

// To Be Done

// ======================================================
// settings.php
// ======================================================

if (defined('SETTINGS_PHP')) 

$lang_settings_data = array(
	'section_title' => 'Kalend�ra iestat�jumi'
// General Settings
	,'general_settings_label' => 'Pamatuzst�d�jumi'
	,'calendar_name' => 'Kalend�ra nosaukums'
	,'calendar_description' => 'Kalend�ra apraksts'
	,'calendar_admin_email' => 'Kalend�ra P�rzi�a E-pasts'
	,'cookie_name' => 'Skripta s�kdatnes nosaukums'
	,'cookie_path' => 'Skripta s�kdatnes ce��'
	,'debug_mode' => 'Iesl�gt l�go�anas re��mu'
// Environment Settings
	,'env_settings_label' => 'Vides uzst�d�jumi'
	,'lang' => 'Valoda'
		,'lang_name' => 'Valoda'
		,'lang_native_name' => 'Valodas ori�in�ls'
		,'lang_trans_date' => 'Tulkots'
		,'lang_author_name' => 'Autori'
		,'lang_author_email' => 'Autora e-pasts'
		,'lang_author_url' => 'M�jas lapa'
	,'charset' => 'Z�mju �ifr�jums'
	,'theme' => 'Mot�vs'
		,'theme_name' => 'Mot�va nosaukums'
		,'theme_date_made' => 'Izgatavots'
		,'theme_author_name' => 'Autors'
		,'theme_author_email' => 'E-pasts'
		,'theme_author_url' => 'M�jas lapa'
	,'timezone' => 'Laika zona'
	,'time_format' => 'Laika form�ts'
		,'24hours' => '24 stundu'
		,'12hours' => '12 stundu'
	,'auto_daylight_saving' => 'Autom�tiska p�reja uz vasaras laiku.'
	,'main_table_width' => 'Galven�s tabulas platums (Pikse�os vai %)'
	,'day_start' => 'Ned��as pirm� diena'
	,'default_view' => 'Noklus�juma iestat�jums'
	,'search_view' => 'At�aut mekl��anu'
	,'archive' => 'R�d�t pag�tnes notikumus'
	,'events_per_page' => 'Notikumu skaits lappus�'
// Event View
	,'event_view_label' => 'Ieraksta izskats'
	,'popup_event_mode' => 'Ieraksta pazi�ojums'
	,'popup_event_width' => 'Pazi�ojuma platums'
	,'popup_event_height' => 'Pazi�ojuma augstums'
// Add Event View
	,'add_event_view_label' => 'Pievienojam� ieraksta izskats'
	,'add_event_view' => 'Att�auts'
	,'addevent_allow_html' => 'At�aut lietot <b>BB Kodus</b> aprakst�'
	,'addevent_allow_contact' => 'At�aut pievienot kontaktpersonas'
	,'addevent_allow_email' => 'At�aut pievienot E-pastu'
	,'addevent_allow_url' => 'At�aut pievienot M�jas lapu'
	,'addevent_allow_picture' => 'At�aut ievietot att�lus'
	,'new_post_notification' => 'Jauna pazi�ojuma br�din�jums'
// Calendar View
	,'calendar_view_label' => 'Kalend�ra (M�ne�a) skats'
	,'monthly_view' => 'At�auts'
	,'cal_view_max_chars' => 'Maksim�lais z�mju skaits aprakst�'
// Flyer View
	,'flyer_view_label' => 'Lid�a skats'
	,'flyer_view' => 'At�auts'
	,'flyer_show_picture' => 'R�d�t att�lus lid�a skat�'
	,'flyer_view_max_chars' => 'Maksim�lais z�mju skaits aprakst�'
// Weekly View
	,'weekly_view_label' => 'Ned��as skats'
	,'weekly_view' => 'At�auts'
	,'weekly_view_max_chars' => 'Maksim�lais z�mju skaits aprakst�'
// Daily View
	,'daily_view_label' => 'Dienas skats'
	,'daily_view' => 'At�auts'
	,'daily_view_max_chars' => 'Maksim�lais z�mju skaits aprakst�'
// Categories View
	,'categories_view_label' => 'Kategoriju skats'
	,'cats_view' => 'At�auts'
	,'cats_view_max_chars' => 'Maksim�lais z�mju skaits aprakst�'
// Mini Calendar
	,'mini_cal_label' => 'Mini Kalend�rs'
	,'mini_cal_def_picture' => 'Noklus�tais att�ls'
	,'mini_cal_display_picture' => 'R�d�t att�lu'
	,'mini_cal_diplay_options' => array('Neviens','Noklus�tais Att�ls', 'Dienas Att�ls','Ned��as Att�ls','Izloz�tais Att�ls')
// Picture Settings
	,'picture_settings_label' => 'Att�lu iestat�jumi'
	,'max_upl_size' => 'Maksim�lais att�lu lielums (KBaitos)'
	,'allowed_file_extensions' => 'At�autie att�lu failu papla�in�jumi.'
// Form Buttons
	,'update_config' => 'Saglab�t Jaunos uzst�d�jumus'
	,'restore_config' => 'Atjaunot Pamatuzst�d�jumus'
);

// ======================================================
// cal_mini.inc.php
// ======================================================

$lang_mini_cal = array(
	'def_pic' => 'Noklus�tais Att�ls'
	,'daily_pic' => 'Dienas Att�ls (%s)'
	,'weekly_pic' => 'Ned��as Att�ls (%s)'
	,'rand_pic' => 'Izloz�tais Att�ls (%s)'
	,'post_event' => 'Veikt Jaunu ierakstu'
);

// ======================================================
// calendar.php
// ======================================================

// To Be Done

// ======================================================
// config.inc.php
// ======================================================

// To Be Done

// ======================================================
// install.php
// ======================================================

// To Be Done

// ======================================================
// login.php
// ======================================================

// To Be Done

// ======================================================
// logout.php
// ======================================================

// To Be Done

// ======================================================
// admin_events.php
// ======================================================

// To Be Done

// old structure	

$maand[0]="Katru m�nesi";
$maand[1]="Janv�r�";
$maand[2]="Febru�r�";
$maand[3]="Mart�";
$maand[4]="Apr�l�";
$maand[5]="Maij�";
$maand[6]="J�nij�";
$maand[7]="J�lij�";
$maand[8]="August�";
$maand[9]="Septembr�";
$maand[10]="Oktobr�";
$maand[11]="Novembr�";
$maand[12]="Decembr�";

$week[1]="Sv�tdien�";
$week[2]="Pirmdien�";
$week[3]="Otrdien�";
$week[4]="Tre�dien�";
$week[5]="Ceturtdien�";
$week[6]="Piektdien�";
$week[7]="Sestdien�";

function translate($word){

    switch ($word) {
        // Language parameters
        case "lang_name": $new = "Latvian";    break;
        case "lang_nativename": $new = "Latvie�u";    break;
        case "lang_charset": $new = "windows-1257";    break;
				// Translations
        case "yes": $new = "J�";    break;
        case "no": $new = "N�";    break;
        case "welcometo": $new = "Laipni l�dzam";    break;
        case "admin": $new = "Administr�cija";    break;
        case "adminoptions": $new = "P�rzi�a Funkcijas";    break;
        case "cate": $new = "Skat�t kategorijas"; break;
        case "day": $new = "Dienas Skats"; break;
        case "week": $new = "Ned��a"; break;
        case "weeklyview": $new = "Ned��as Skats"; break;
        case "cal": $new = "Kalend�ra Skats"; break;
        case "nocats": $new = "V�l nav Kategoriju"; break;
        case "addcat": $new = "Pievienot Kategoriju"; break;
        case "cats": $new = "Kategorijas"; break;
        case "addevent": $new = "Pievienot Ierakstu"; break;
        case "outof": $new = "Pag�ju�ie notikumi"; break;
        case "upcomingevents": $new = "Gaid�mie notikumi"; break;
        case "totalevents": $new = "Pavisam Ierakstu"; break;
        case "events": $new = "Ieraksti"; break;
        case "errors": $new = "K��das"; break;
        case "weeklyevents": $new = "Ned��as notikumi"; break;
        case "eventdetails": $new = "Ieraksta deta�as"; break;
        case "eventitle": $new = "Ieraksta virsraksts"; break;
        case "description": $new = "Notikuma apraksts"; break;
        case "choosecat": $new = "Izv�lies Kategoriju"; break;
        case "selectyear": $new = "Gads"; break;
        case "selectmonth": $new = "M�nesis"; break;
        case "selectday": $new = "Diena"; break;
        case "everyyear": $new = "Katru gadu"; break;
        case "everymonth": $new = "Katru m�nesi"; break;
        case "bdate": $new = "Datums"; break;
        case "notitle": $new = "Nor�di ieraksta nosaukumu!"; break;
        case "nodescription": $new = "Sniedz notikuma aprakstu"; break;
        case "noday": $new = "Izv�lies dienu!"; break;
        case "nomonth": $new = "Izv�lies m�nesi !"; break;
        case "noyear": $new = "Izv�lies gadu !"; break;
        case "nocat": $new = "Izv�lies kategoriju !"; break;
        case "novaliddate": $new = "Ievadi eksist�jo�u datumu !"; break;
        case "kblimit": $new = "KBaitu limits"; break;
        case "back": $new = "Atpaka�"; break;
        case "action": $new = "Notikums"; break;
        case "nononapproved": $new = "Nav neviena ieraksta, kas gaid�tu apstiprin��anu"; break;
        case "nonapproved": $new = "Ieraksti Apstiprin��anai"; break;
        case "autoapprove": $new = "Autom�tiski apstiprin�t ierakstu"; break;
        case "cat": $new = "Kategorija"; break;
        case "view": $new = "Skat�t ierakstu"; break;
        case "edit": $new = "Labot ierakstu"; break;
        case "updateevent": $new = "Apstiprin�t ieraksta izmai�as"; break;
        case "approve": $new = "Apstiprin�t ierakstu"; break;
        case "appreventok": $new = "Ieraksts apstiprin�ts"; break;
        case "cantapprevent": $new = "Ieraksts nevar tikt apstiprin�ts."; break;
        case "moreinfo": $new = "Papildus inform�cija"; break;
        case "editcat": $new = "Labot Kategoriju"; break;
        case "delcat": $new = "Dz�st Kategoriju"; break;
        case "edit": $new = "Labot"; break;
        case "del": $new = "Dz�st"; break;
        case "name": $new = "Nosaukums"; break;
        case "update": $new = "Izmain�t"; break;
        case "reallydelcat": $new = "Vai tie��m izdz�st �o kategoriju? Visi ieraksti, kas ietilpst �aj� kategorij� tiks piln�b� izdz�sti!"; break;
        case "noback": $new = "Ups, n�, atgriezies.!"; break;
        case "deleventok": $new = "Ieraksts izdz�sts"; break;
        case "cantdelevent": $new = "Ieraksts nevar tikt dz�sts"; break;
        case "surecat": $new = "J�, izdz�st!"; break;
        case "noevents": $new = "Nav ierakstu"; break;
        case "numbevents": $new = "Ieraksti "; break;
        case "upevent": $new = "Izmain�t Ierakstu"; break;
        case "delev": $new = "Dz�st ierakstu"; break;
        case "currentpic": $new = "Eso�ais Att�ls"; break;
        case "delpic": $new = "Dz�st �o att�lu"; break;
        case "nooutofdate": $new = "Nav pag�ju�o notikumu."; break;
        case "delalloodev": $new = "Dz�st visus pag�ju�os notikumus"; break;
        case "delevok": $new = "Vai tie��m esi p�rliecin�ts, ka gribi dz�st �o ierakstu?"; break;
        case "delalloodevok": $new = "Dz�st tos visus!"; break;
        case "prevm": $new = "Iepriek��jais m�nesis"; break;
        case "nextm": $new = "N�kamais m�nesis"; break;
        case "today": $new = "�odien"; break;
        case "eventstoday": $new = "�odienas notikumi"; break;
        case "readmore": $new = "Las�t vair�k"; break;
        case "nextday": $new = "N�kam� diena"; break;
        case "prevday": $new = "Iepriek��j� diena"; break;
        case "askedday": $new = "Izv�l�t� diena"; break;
        case "nextweek": $new = "N�kam� ned��a"; break;
        case "prevweek": $new = "Iepriek��j� ned��a"; break;
        case "weeknr": $new = "Ned��as k�rtas numurs"; break;
        case "eventsthisweek": $new = "Ieraksti no "; break;
        case "till": $new = "l�dz"; break;
        case "thankyou": $new = "Paldies par ieraksta veik�anu, tas b�s redzams p�c mirk�a!"; break;
        case "eventedited": $new = "Ieraksta izmai�as veiktas!"; break;
				case "op": $new = "Iesl�gt"; break;
       	# here start the new not yet translated language vars
        case "disabled": $new = "�� sada�a nav pieejama"; break;
       	case "searchbutton": $new = "S�kt mekl�t"; break;
       	case "searchtitle": $new = "Mekl�t"; break;
       	case "searchcaption": $new = "Ieraksti v�rdus p�c k� mekl�t"; break;
       	case "searchresults": $new = "Atrastie Ieraksti"; break;
       	case "searchagain": $new = "Mekl�t v�lreiz"; break;
      	case "onedate": $new = "Vien� datum�"; break;
        case "moredates": $new = "Vair�kos datumos"; break;
      	case "moredatesexplain": $new = "Vair�kos datumos: 'dd-mm-yyyy;dd-mm-yyyy' Ja datums viens, raksti 01, tas pats m�ne�iem! Bez beigu datuma-';' !"; break;
      	case "email": $new = "E-pasts"; break;
      	case "results": $new = "Rezult�ti"; break;
      	case "noresults": $new = "Nav atrastu ierakstu"; break;
        case "wronglogin": $new = "P�rbaudiet savu ieejas v�rdu un paroli, un m��iniet v�lreiz!"; break;
        case "userman": $new = "Lietot�ju vad�ba"; break;
        case "users": $new = "Lietot�ji"; break;
        case "logout": $new = "Iziet"; break;
        case "deluser": $new = "Dz�st lietot�ju"; break;
        case "addnewuser": $new = "Pievienot jaunu lietot�ju"; break;
        case "loginscreen": $new = "Ieejas Logs"; break;
        case "login": $new = "Ieejas v�rds"; break;
        case "password": $new = "Parole"; break;
        case "rememberme": $new = "Atceries mani"; break;
				case "loginmsg": $new = "Ieraksti Ieejas v�rdu un paroli"; break;
				case "nologinname": $new = "L�dzu Ieraksti savu ieejas v�rdu !"; break;
        case "userwarning": $new = "Atceries savu paroli! T� nevar tikt atjaunota !"; break;
        case "userdelok": $new = "Vai tie��m dz�st �o lietot�ju ?"; break;
        case "contact": $new = "Kontaktpersona"; break;
        case "contactinfo": $new = "Kontaktpersonas dati"; break;
        case "otherdetails": $new = "P�r�jie dati"; break;
        case "picture": $new = "Att�ls"; break;
        case "filetolarge": $new = "Pievienotais fails ir p�r�k liels !"; break;
        case "extensionnovalid": $new = "Faila papla�in�jums nav at�auts !"; break;
        case "flyerlink": $new = "Lid�a skats"; break;
        case "mailtitle": $new = "Griezies pie kalend�ra p�rzi�a nekav�joties!"; break;
        case "mailbody": $new = "K�ds veicis jaunu ierakstu !"; break;
        case "continuebutton": $new = "Uzklik��ini lai turpin�tu"; break;
        case "returnbutton": $new = "Atgrieztis m�jas lap�"; break;
        case "in": $new = "sokojo��"; break;
        case "uploadapplnk": $new = "Ierakstu Apstiprin��ana"; break;
        case "settingslnk": $new = "Iestat�jumi"; break;
        case "categorieslnk": $new = "Kategorijas"; break;
        case "userslnk": $new = "Lietot�ji"; break;
        case "groupslnk": $new = "Grupas"; break;
        case "myprofile": $new = "Mani Iestat�jumi"; break;
        case "status": $new = "Statuss"; break;
        case "options": $new = "Funkcijas"; break;
        case "autoappr": $new = "Aotom�tisk� Apstiprin��ana"; break;
        case "active": $new = "Akt�vs"; break;
        case "inactive": $new = "Neakt�vs"; break;
        case "admincats": $new = "Kategoriju P�rraudz�ba"; break;
        case "generalinfo": $new = "Pamatinform�cija"; break;
        case "catname": $new = "Kategorijas nosaukums"; break;
        case "catdesc": $new = "Kategorijas apraksts"; break;
        case "color": $new = "Kr�sa"; break;
        case "pickcolor": $new = "Izv�lies kr�su!"; break;
        case "autouserappr": $new = "Autom�tiski apstiprin�t lietot�ju ierakstus"; break;
        case "autoadminappr": $new = "Autom�tiski apstiprin�t p�rzi�a ierakstus"; break;
        case "nocatname": $new = "Ieraksti kategorijas nosaukumu!"; break;
        case "nocatdesc": $new = "Apraksti notikumu!"; break;
        case "nocolor": $new = "Izv�lies kr�su!"; break;
        case "total": $new = "Pavisam"; break;
        case "admins": $new = "P�rzi��"; break;
        case "updatecat": $new = "Izmain�t kategoriju"; break;
        case "catedited": $new = "Kategorija izmain�ta!"; break;
        case "delcatmoreevents": $new = "�aj� kategorij� ir %d ieraksts (i) un t�d�� t� nevar tikt dz�sta!<br>L�dzu izdz�s ierakstus �aj� kategorij� un tad m��ini v�lreiz!"; break;
        case "delcatok": $new = "Kategorija izdz�sta!"; break;
        
        default: $new = "<b>".$word."</b> J�tulko !";    break;

    }
    return $new;
}
?>