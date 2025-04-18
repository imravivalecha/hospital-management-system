<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert(
            [
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "dashamulrishtaya", 'name_english' => "දශමූලාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "draksharishtaya", 'name_english' => "ද්‍රාක්ෂාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "nimbarishtaya", 'name_english' => "නිම්බාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "balarishtaya", 'name_english' => "බලාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "musthakarishtaya", 'name_english' => "මුස්තකාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "abhayarishtaya", 'name_english' => "අභයාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "amurtharishtaya", 'name_english' => "අමෘතාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "ashwagandharishtaya", 'name_english' => "අශ්වගන්ධාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "ashokarishtaya", 'name_english' => "අශෝකාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "arjunarishtaya", 'name_english' => "අර්ජුනාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "badirarishtaya", 'name_english' => "බදිරාරිෂ්ටය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "aravindasawaya", 'name_english' => "අරවින්දාසවය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "chandanasawaya", 'name_english' => "චන්දනාසවය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "kanakasawaya", 'name_english' => "කනකාසවය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "lauhasawaya", 'name_english' => "ලෞහාසවය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "pippalyadyasawaya", 'name_english' => "පිප්පල්‍යාද්‍යාසවය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "punarnawasawaya", 'name_english' => "පූනර්ණවාසවය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "sharibhadsawaya", 'name_english' => "ශාරිභාද්සවය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "ushirasawaya", 'name_english' => "උශීරාසවය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "chirabilwa kwathaya", 'name_english' => "චිරබිල්ව ක්වාතය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cyrup',"type_sinhala"=>'සිරප්','name_english' => "wasaka sirap", 'name_english' => "වාසක සිරප්"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cyrup',"type_sinhala"=>'සිරප්','name_english' => "maduka kassa paniya", 'name_english' => "මධූකා කැස්ස පැණිය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cyrup',"type_sinhala"=>'සිරප්','name_english' => "sidhdhajiwa wartha", 'name_english' => "සිද්ධජීව වෘත"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "bhashkara lawana churnaya", 'name_english' => "භාෂ්කර ලවණ චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "dhathri churnaya", 'name_english' => "ධාත්‍රී චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "dashangalepa churnaya", 'name_english' => "දශාංගලේප චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "katphaladi churnaya", 'name_english' => "කට්ඵලාදී චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "hinguwashtaka churnaya", 'name_english' => "හිංගුවෂ්ටක චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "manibadhra churnaya", 'name_english' => "මානිභද්‍ර චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "manjanesruk (Toothpaste)", 'name_english' => "මාංජනේසෘක් (දත් බෙහෙත්)"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "pushyanunga churnaya", 'name_english' => "පුෂ්‍යනුග චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "sudarshana churnaya", 'name_english' => "සුදර්ශණ චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "thalisadi churnaya", 'name_english' => "තාලිසාදී චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "awipaththikara churnaya", 'name_english' => "අවිපත්තිකර චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "sithophaladi churnaya", 'name_english' => "සීතෝඵලාදී චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "wajrakshara churnaya", 'name_english' => "වජ්‍රක්ෂාර චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "thriphala churnaya", 'name_english' => "ත්‍රිඵලා චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "sukumara churnaya", 'name_english' => "සුකුමාර චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "chirabilwa churnaya", 'name_english' => "චිරබිල්ව චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "ashwagandha churnaya", 'name_english' => "අශ්වගන්ධ චූර්ණය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "chandraprabha wati", 'name_english' => "චන්ද්‍රප්‍රභා වටී"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "gokshuradi guggulu", 'name_english' => "ගෝක්ෂුරාදී ගුග්ගුළු"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "kaishoraka guggulu", 'name_english' => "කෛශෝරක ගුග්ගුළු"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "yogaraja guggulu", 'name_english' => "යෝගරාජ ගුග්ගුළු "],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "jiwananda wati", 'name_english' => "ජීවානන්ද වටී"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "sitharama wati", 'name_english' => "සීතාරාම වටී"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "suranchidura wati", 'name_english' => "සුරංචිදුර වටී"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "sarpagandha wati", 'name_english' => "සර්පගන්ධ වටී"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "krimghathani wati", 'name_english' => "ක්‍රීම්ඝාතනී වටී"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "arogya wardhana wati", 'name_english' => "ආරෝග්‍ය වර්ධන වටී"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "mruthunjaya rasa", 'name_english' => "මෘතුංජය රස"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "ramhana rasa", 'name_english' => "රාම්හාන රස"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "swasa kutara rasa", 'name_english' => "ස්වාස කුටාර රස"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "thribhuwana kirthi rasa", 'name_english' => "ත්‍රිභුවන කීර්ති රස"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "wathagajendrasinha rasa", 'name_english' => "වාතගජේන්ද්‍රසිංහ රස"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "somanatha rasa", 'name_english' => "සෝමනාත රස"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "punarnawadi wanpura rasa", 'name_english' => "පුණර්නවාදී වන්පුර රස"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "nithyananda rasa", 'name_english' => "නිත්‍යානන්ද රස"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'other',"type_sinhala"=>'වෙනත්','name_english' => "medaharani kwathaya", 'name_english' => "මේදහරණි ක්වාතය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'other',"type_sinhala"=>'වෙනත්','name_english' => "deniba debatu", 'name_english' => "දෙනිබ දෙබටු"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'other',"type_sinhala"=>'වෙනත්','name_english' => "madhumebha harani", 'name_english' => "මධුමේභ හරණි"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "budhdharaja kalkaya", 'name_english' => "බුද්ධරාජ කල්කය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "desadun kalkaya", 'name_english' => "දෙසදුන් කල්කය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "nawarathna kalkaya", 'name_english' => "නවරත්න කල්කය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "sharkaradi kalkaya", 'name_english' => "ශර්කරාදී කල්කය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "roganikash lepaya", 'name_english' => "රෝගානිකාෂ් ලේපය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "lakshadi lepaya", 'name_english' => "ලාක්ෂාදී ලේපය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "wachanaprasawaya lepaya", 'name_english' => "වචනප්‍රාසාවය ලේපය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "chandra kalkaya", 'name_english' => "චන්ද්‍ර කල්කය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "wasawa lepaya", 'name_english' => "වාසාව ලේපය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "kushmanda kawa lepaya 400g", 'name_english' => "කුෂ්මාණ්ඩ කාව ලේපය 400g"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "welwa chengayam 400g", 'name_english' => "වෙල්ව චෙන්ගායම් 400g"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "batu thailaya", 'name_english' => "බටු තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "kolasheleshmadi", 'name_english' => "කෝලශෙලෙෂ්මාදී"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "bhrunga malaka", 'name_english' => "භෘංගා මලක"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "narayana thailaya", 'name_english' => "නාරායන තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "nilyadi thailaya", 'name_english' => "නීල්‍යාදී තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "nirgundyadi", 'name_english' => "නිර්ගුන්ද්‍යාදී"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "pata thailaya", 'name_english' => "පාඨා තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "pinda thailaya", 'name_english' => "පින්ඩ තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "pinas thailaya", 'name_english' => "පීනස් තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "sarshapadi thailaya", 'name_english' => "සර්ෂපාදී තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "watha widuranga thailaya", 'name_english' => "වාත විදුරංග තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "wisharpahara thailaya", 'name_english' => "විෂර්පහර තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "thriphala thailaya", 'name_english' => "ත්‍රිඵලා තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "irimedadi thailaya", 'name_english' => "ඉරිමේදාදී තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "bakuchi thailaya", 'name_english' => "බාකුචි තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "sithodaka thailaya", 'name_english' => "සිතෝදක තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "sidhdhartha thailaya", 'name_english' => "සිද්ධාර්ථ තෛලය"],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "sarwawishadi thailaya", 'name_english' => "සර්වවිෂාදී තෛලය"],


        ]);
    }
}
