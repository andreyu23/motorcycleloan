<?php

namespace App\Http\Controllers;

use App\Models\BroSisModel;
use App\Models\ComakerModel;
use App\Models\ComakerIncomeModel;
use App\Models\FamilyModel;
use App\Models\InformantModel;
use App\Models\ApplicantModel;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public static function comaker_index()
    {
        $comaker = ComakerModel::get();
        return view('pages.co-maker.co-maker-index')->with(['comaker' => $comaker]);
    }

    public static function comaker_store(Request $request)
    {
        $request->validate([
            'inp_fn' => 'required|string|max:255',
            'inp_mn' => 'required|string|max:255',
            'inp_ln' => 'required|string|max:255',
            'inp_age' => 'required|string|max:255',
            'inp_dob' => 'required|date|max:255',
            'inp_pob' => 'required|string|max:255',
            'inp_cp' => 'required|string|max:255',
            'inp_tp' => 'required|string|max:255',
            'inp_hns' => 'required|string|max:255',
            'inp_barangay' => 'required|string|max:255',
            'inp_tc' => 'required|string|max:255',
            'inp_prov' => 'required|string|max:255',
            'inp_zc' => 'required|string|max:255',
            'inp_los' => 'required|string|max:255',
            'inp_yrs' => 'required|string|max:255',
            'inp_mnth' => 'required|string|max:255',



        ]);

        ComakerModel::create([
            'comaker_first_name' => $request->inp_fn,
            'comaker_middle_name'=> $request->inp_mn,
            'comaker_last_name'=> $request->inp_ln,
            'comaker_age'=> $request->inp_age,
            'comaker_birthdate'=> $request->inp_dob,
            'comaker_place_of_birth'=> $request->inp_pob,
            'comaker_cellphone_number'=> $request->inp_cp,
            'comaker_telephone_number'=> $request->inp_tp,
            'comaker_house_number'=> $request->inp_hns,
            'comaker_barangay'=> $request->inp_barangay,
            'comaker_town'=> $request->inp_tc,
            'comaker_province'=> $request->inp_prov,
            'comaker_zip_code'=> $request->inp_zc,
            'comaker_length_service'=> $request->inp_los,
            'comaker_year'=> $request->inp_yrs,
            'comaker_month'=> $request->inp_mnth,


        ]);

        return redirect()->back()->with('success', 'Co-maker Background added successfully!');

    }


    public static function co_income_index()
    {
        $comakerincome = ComakerIncomeModel::get();
        return view('pages.co-maker-income.co-maker-income-index')->with(['comakerincome' => $comakerincome]);
    }

    public static function co_income_store(Request $request)
    {
        $request->validate([
            'inp_en' => 'required|string|max:255',
            'inp_add' => 'required|string|max:255',
            'inp_cp' => 'required|string|max:255',
            'inp_tp' => 'required|string|max:255',
            'inp_pos' => 'required|string|max:255',
            'inp_stat' => 'required|string|max:255',
            'inp_nosbp' => 'required|string|max:255',
            'inp_income' => 'required|string|max:255',
            'inp_lobp' => 'required|string|max:255',
            'inp_yrs' => 'required|string|max:255',
            'inp_mnth' => 'required|string|max:255',
            'inp_other_income' => 'required|string|max:255',



        ]);

        ComakerIncomeModel::create([
            'co_income_employer_name' => $request->inp_en,
            'co_income_address'=> $request->inp_add,
            'co_income_cellphone_number'=> $request->inp_cp,
            'co_income_telephone_number'=> $request->inp_tp,
            'co_income_position'=> $request->inp_pos,
            'co_income_emp_status'=> $request->inp_stat,
            'co_income_nature'=> $request->inp_nosbp,
            'co_income_income'=> $request->inp_income,
            'co_income_length'=> $request->inp_lobp,
            'co_income_year'=> $request->inp_yrs,
            'co_income_month'=> $request->inp_mnth,
            'co_income_other_income'=> $request->inp_other_income,


        ]);

        return redirect()->back()->with('success', 'Co-maker Source of Income added successfully!');

    }

    public static function informants_index()
    {
        $informants = InformantModel::get();
        return view('pages.informants.informants-index')->with(['informants' => $informants]);
    }

    public static function informants_store(Request $request)
    {
        $request->validate([
            'inp_name' => 'required|string|max:255',
            'inp_tcn' => 'required|string|max:255',
            'inp_ca' => 'required|string|max:255',
            'inp_qa' => 'required|string|max:255',
            'inp_res' => 'required|string|max:255',




        ]);

        InformantModel::create([
            'informants_name' => $request->inp_name,
            'informants_phone_number' => $request->inp_tcn,
            'informants_address'=> $request->inp_ca,
            'informants_questions'=> $request->inp_qa,
            'informants_response'=> $request->inp_res,


        ]);

        return redirect()->back()->with('success', 'Informants added successfully!');

    }


    public static function family_index()
    {
        $family = FamilyModel::get();
        return view('pages.family-bg.family-bg-index')->with(['family' => $family]);
    }

    public static function family_store(Request $request)
    {
        $request->validate([
            'inp_ffn' => 'required|string|max:255',
            'inp_fmn' => 'required|string|max:255',
            'inp_fln' => 'required|string|max:255',
            'inp_fa' => 'required|string|max:255',
            'inp_fage' => 'required|string|max:255',
            'inp_fdob' => 'required|date|max:255',
            'inp_mfn' => 'required|string|max:255',
            'inp_mmn' => 'required|string|max:255',
            'inp_mln' => 'required|string|max:255',
            'inp_ma' => 'required|string|max:255',
            'inp_mage' => 'required|string|max:255',
            'inp_mdob' => 'required|date|max:255',
            'inp_stat' => 'required|string|max:255',
            'inp_of' => 'required|string|max:255',
            'inp_om' => 'required|string|max:255',
            'inp_hns' => 'required|string|max:255',
            'inp_barangay' => 'required|string|max:255',
            'inp_tc' => 'required|string|max:255',
            'inp_prov' => 'required|string|max:255',
            'inp_zc' => 'required|string|max:255',
            'inp_los' => 'required|string|max:255',
            'inp_yrs' => 'required|string|max:255',
            'inp_mnth' => 'required|string|max:255',
            'inp_phns' => 'required|string|max:255',
            'inp_pbarangay' => 'required|string|max:255',
            'inp_ptc' => 'required|string|max:255',
            'inp_pprov' => 'required|string|max:255',
            'inp_pzc' => 'required|string|max:255',
            'inp_plos' => 'required|string|max:255',
            'inp_pyrs' => 'required|string|max:255',
            'inp_pmnth' => 'required|string|max:255',





        ]);

        FamilyModel::create([
            'family_father_first_name' => $request->inp_ffn,
            'family_father_middle_name'=> $request->inp_fmn,
            'family_father_last_name'=> $request->inp_fln,
            'family_father_alias'=> $request->inp_fa,
            'family_father_age'=> $request->inp_fage,
            'family_father_birthdate'=> $request->inp_fdob,
            'family_mother_first_name'=> $request->inp_mfn,
            'family_mother_middle_name'=> $request->inp_mmn,
            'family_mother_last_name'=> $request->inp_mln,
            'family_mother_alias'=> $request->inp_ma,
            'family_mother_age'=> $request->inp_mage,
            'family_mother_birthdate'=> $request->inp_mdob,
            'family_marriage_status'=> $request->inp_stat,
            'family_father_work'=> $request->inp_of,
            'family_mother_work'=> $request->inp_om,
            'family_present_add_house_number'=> $request->inp_hns,
            'family_present_add_barangay'=> $request->inp_barangay,
            'family_present_add_town'=> $request->inp_tc,
            'family_present_add_province'=> $request->inp_prov,
            'family_present_add_zip_code'=> $request->inp_zc,
            'family_present_add_length_service'=> $request->inp_los,
            'family_present_add_year'=> $request->inp_yrs,
            'family_present_add_month'=> $request->inp_mnth,
            'family_provincial_add_house_number'=> $request->inp_phns,
            'family_provincial_add_barangay'=> $request->inp_pbarangay,
            'family_provincial_add_town'=> $request->inp_ptc,
            'family_provincial_add_province'=> $request->inp_pprov,
            'family_provincial_add_zip_code'=> $request->inp_pzc,
            'family_provincial_add_length_service'=> $request->inp_plos,
            'family_provincial_add_year'=> $request->inp_pyrs,
            'family_provincial_add_month'=> $request->inp_pmnth,


        ]);

        return redirect()->back()->with('success', 'Family Background added successfully!');

    }


    public static function bro_sis_index()
    {
        $brosis = BroSisModel::get();
        return view('pages.family-bg.brother-sister-index')->with(['brosis' => $brosis]);
    }

    public static function bro_sis_store(Request $request)
    {
        $request->validate([
            'inp_bsn' => 'required|string|max:255',
            'inp_bsage' => 'required|string|max:255',
            'inp_bsadd' => 'required|string|max:255',
            'inp_bsocc' => 'required|string|max:255',
            'inp_bscom' => 'required|string|max:255',
            'inp_bslos' => 'required|string|max:255',




        ]);

        BroSisModel::create([
            'bro_sis_name' => $request->inp_bsn,
            'bro_sis_age' => $request->inp_bsage,
            'bro_sis_address'=> $request->inp_bsadd,
            'bro_sis_work'=> $request->inp_bsocc,
            'bro_sis_company'=> $request->inp_bscom,
            'bro_sis_length_service'=> $request->inp_bslos,


        ]);

        return redirect()->back()->with('success', 'Brothers/Sisters added successfully!');

    }


    public static function applicant_index()
    {
        $apply = ApplicantModel::get();
        return view('pages.apply.applicant-index')->with(['apply' => $apply]);
    }

    public static function applicant_store(Request $request)
    {
        $request->validate([
            'inp_fn' => 'required|string|max:255',
            'inp_mn' => 'required|string|max:255',
            'inp_ln' => 'required|string|max:255',
            'inp_alias' => 'required|string|max:255',
            'inp_dob' => 'required|date|max:255',
            'inp_pob' => 'required|string|max:255',
            'inp_cs' => 'required|string|max:255',
            'inp_gender' => 'required|string|max:255',
            'inp_pn' => 'required|string|max:255',
            'inp_tn' => 'required|string|max:255',
            'inp_dl' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'citymun' => 'required|string|max:255',
            'brgy' => 'required|string|max:255',
            'inp_pahns' => 'required|string|max:255',
            'inp_palos' => 'required|string|max:255',
            'inp_pazc' => 'required|string|max:255',
            'region_previous' => 'required|string|max:255',
            'province_previous' => 'required|string|max:255',
            'citymun_previous' => 'required|string|max:255',
            'brgy_previous' => 'required|string|max:255',
            'inp_prehns' => 'required|string|max:255',
            'inp_prelos' => 'required|string|max:255',
            'inp_prezc' => 'required|string|max:255',
            'region_provincial' => 'required|string|max:255',
            'province_provincial' => 'required|string|max:255',
            'citymun_provincial' => 'required|string|max:255',
            'brgy_provincial' => 'required|string|max:255',
            'inp_provhns' => 'required|string|max:255',
            'inp_provlos' => 'required|string|max:255',
            'inp_provzc' => 'required|string|max:255',
            'inp_relname' => 'required|string|max:255',
            'inp_reladd' => 'required|string|max:255',
            'inp_relrel' => 'required|string|max:255',
            'inp_relphone' => 'required|string|max:255',





        ]);

        ApplicantModel::create([
            'applicant_first_name' =>$request->inp_fn,
            'applicant_middle_name'=>$request->inp_mn,
            'applicant_last_name'=>$request->inp_ln,
            'applicant_alias'=>$request->inp_alias,
            'applicant_birthdate'=>$request->inp_dob,
            'applicant_birthplace'=>$request->inp_pob,
            'applicant_civil_status'=>$request->inp_cs,
            'applicant_gender'=>$request->inp_gender,
            'applicant_phone_number'=>$request->inp_pn,
            'applicant_telephone_number'=>$request->inp_tn,
            'applicant_license'=>$request->inp_dl,
            'applicant_present_add_region'=>$request->region,
            'applicant_present_add_province'=>$request->province,
            'applicant_present_add_municipal'=>$request->citymun,
            'applicant_present_add_barangay'=>$request->brgy,
            'applicant_present_add_house_number'=>$request->inp_pahns,
            'applicant_present_add_length_service'=>$request->inp_palos,
            'applicant_present_add_zip_code'=>$request->inp_pazc,
            'applicant_previous_add_region'=>$request->region_previous,
            'applicant_previous_add_province'=>$request->province_previous,
            'applicant_previous_add_municipal'=>$request->citymun_previous,
            'applicant_previous_add_barangay'=>$request->brgy_previous,
            'applicant_previous_add_house_number'=>$request->inp_prehns,
            'applicant_previous_add_length_service'=>$request->inp_prelos,
            'applicant_previous_add_zip_code'=>$request->inp_prezc,
            'applicant_provincial_add_region'=>$request->region_provincial,
            'applicant_provincial_add_province'=>$request->province_provincial,
            'applicant_provincial_add_municipal'=>$request->citymun_provincial,
            'applicant_provincial_add_barangay'=>$request->brgy_provincial,
            'applicant_provincial_add_house_number'=>$request->inp_provhns,
            'applicant_provincial_add_length_service'=>$request->inp_provlos,
            'applicant_provincial_add_zip_code'=>$request->inp_provzc,
            'applicant_relative_name'=>$request->inp_relname,
            'applicant_relative_address'=>$request->inp_reladd,
            'applicant_relative_relationship'=>$request->inp_relrel,
            'applicant_relative_phone_number'=>$request->inp_relphone,

        ]);

        return redirect()->back()->with('success', 'Family Background added successfully!');

    }


}
