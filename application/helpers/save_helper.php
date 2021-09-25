<?php

function save($details, $final_pdf)
{
    $functionName = $details['data-table'];
    $result = $functionName($details, $final_pdf);
    return $result;

}

function pf_claim($details, $final_pdf)
{

    $pf_complaint_attachment = $_SESSION['pf_complaint_attachment'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $pf_claim = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'pf_office' => $details['pf_office'],
        'address_office' => $details['pf_office_address'],
        'pf_complaint' => $details['no_pf_complaint'],
        'communication_attachment' => $pf_complaint_attachment,
        'relief' => $details['relief'],
        'audio_file' => $audioFile,
    );

    return $pf_claim;

}

function esi_claim($details, $final_pdf)
{
    $communication_esi = $_SESSION['communication_esi'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $esi_claim = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'local_esi_office' => $details['esi_office'],
        'address_office' => $details['esi_office_address'],
        'esi_complaint' => $details['type_esi_complaint'],
        'communication_attachment' => $communication_esi,
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,
    );

    return $esi_claim;

}

function register($details)
{
    $register = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'password' => '123456',
        'dob' => $details['state'],
        'age' => $details['address'],
        'gender' => '',
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
    );

    return $register;

}

function abuse_power($details, $final_pdf)
{

    $employment_letter = $_SESSION['employment_letter'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $abuse_power = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_company' => $details['address_company'],
        'employment_letter' => $employment_letter,
        'person_excersing' => $details['person_excersing'],
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );
    return $abuse_power;
}

function salary_dues($details, $final_pdf)
{

    $salary_slip = $_SESSION['salary_slip'] ?? '';
    $complaint_harrashment = $_SESSION['complaint_harrashment'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $salary_dues = array(
        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_defendant' => $details['address_defendant'],
        'date_emp' => $details['date_emp'],
        'salary_slip' => $salary_slip,
        'communication_attachment' => $complaint_harrashment,
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,
    );

    return $salary_dues;

}

function harrashment($details, $final_pdf)
{
    $complaint_harrashment = $_SESSION['complaint_harrashment'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $harrashment = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_company' => $details['address_company'],
        'defendant_name' => $details['defendant_name'],
        'defendant_designation' => $details['defendant_designation'],
        'complaint_harrashment' => $complaint_harrashment,
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );

    return $harrashment;
}

function voilation_aggrement($details, $final_pdf)
{

    $aggrement_employment = $_SESSION['aggrement_employment'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $voilation_aggrement = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_company' => $details['address_company'],
        'date_employment' => $details['date_employment'],
        'aggrement_employment' => $aggrement_employment,
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );

    return $voilation_aggrement;
}

function gratuity_claim($details, $final_pdf)
{
    $employment_letter = $_SESSION['employment_letter'] ?? '';
    $relieving_letter = $_SESSION['relieving_letter'] ?? '';
    $communication_attachment = $_SESSION['communication_attachment'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $gratuity_claim = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_company' => $details['address_company'],
        'gratuity_calculation' => $details['gratuity_calculation'],
        'employment_letter' => $employment_letter,
        'relieving_letter' => $relieving_letter,
        'communication_attachment' => $communication_attachment,
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );

    return $gratuity_claim;
}

function wrongful_termination($details, $final_pdf)
{
    $employment_letter = $_SESSION['employment_letter'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $wrongful_termination = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_company' => $details['address_company'],
        'employment_letter' => $employment_letter,
        'ground_termination' => $details['ground_termination'],
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );

    return $wrongful_termination;

}

function non_payment_salary($details, $final_pdf)
{
    $employment_letter = $_SESSION['employment_letter'] ?? '';
    $bank_statement = $_SESSION['bank_statement'] ?? '';
    $communication = $_SESSION['communication'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $non_payment_salary = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_company' => $details['address_company'],
        'employment_letter' => $employment_letter,
        'bank_statement' => $bank_statement,
        'communication' => $communication,
        'information' => $details['information'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );

    return $non_payment_salary;

}

function misconduct_notice($details, $final_pdf)
{
    $employment_letter = $_SESSION['employment_letter'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $misconduct_notice = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'employee_name' => $details['employee_name'],
        'address_employee' => $details['address_employee'],
        'type_misconduct' => $details['type_misconduct'],
        'details_misconduct' => $details['detail_misconduct'],
        'employment_letter' => $employment_letter,
        'reprimand_advice' => $details['reprimand_advice'],
        'audio_file' => $audioFile,

    );

    return $misconduct_notice;

}

function suspension_notice($details, $final_pdf)
{
    $employment_letter = $_SESSION['employment_letter'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $suspension_notice = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'employee_name' => $details['employee_name'],
        'address_employee' => $details['address_employee'],
        'employment_letter' => $employment_letter,
        'duration_suspension' => $details['suspension_duration'],
        'reason_suspension' => $details['suspension_reason'],
        'reprimondent' => $details['reprimondent'],
        'audio_file' => $audioFile,

    );
    return $suspension_notice;
}

function termination_notice($details, $final_pdf)
{

    $employment_letter = $_SESSION['employment_letter'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $termination_notice = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'employee_name' => $details['employee_name'],
        'address_employee' => $details['address_employee'],
        'employment_letter' => $employment_letter,
        'reason_termination' => $details['reason_termination'],
        'date_termination' => $details['date_termination'],
        'item_handed' => $details['item_handed'],
        'audio_file' => $audioFile,
    );
    return $termination_notice;

}

function retrenchment_notice($details, $final_pdf)
{
    $employment_letter = $_SESSION['employment_letter'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $retrenchment_notice = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'employee_name' => $details['employee_name'],
        'address_employee' => $details['address_employee'],
        'employment_letter' => $employment_letter,
        'retrenchment_reason' => $details['retrenchment_reason'],
        'compensation' => $details['compensation_calculation'],
        'item_handed' => $details['item_handed'],
        'audio_file' => $audioFile,

    );

    return $retrenchment_notice;
}

function reply_to_bank($details, $final_pdf)
{

    $loan_notice_attachment = $_SESSION['loan_notice'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $reply_to_bank = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'bank_name' => $details['bank_name'],
        'address_bank' => $details['address_bank'],
        'loan_notice_attachment' => $loan_notice_attachment,
        'contand_notice' => $details['contand_notice'],
        'repayment_time' => $details['repayment_time'],
        'audio_file' => $audioFile,

    );

    return $reply_to_bank;

}

function sarfaesi_notice($details, $final_pdf)
{

    $sarfaesi_notice = $_SESSION['sarfaesi_notice'] ?? '';
    $reply_notices = $_SESSION['reply_notices'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $sarfaesi_notice = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'branch_name' => $details['branch_name'],
        'address_bank' => $details['address_bank'],
        'contention' => $details['contention'],
        'sarfaesi_notice' => $sarfaesi_notice,
        'reply_notices' => $reply_notices,
        'audio_file' => $audioFile,

    );

    return $sarfaesi_notice;

}

function title_deed($details, $final_pdf)
{

    $title_deed = $_SESSION['title_deed'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $title_deed = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'defendant_name' => $details['defendant_name'],
        'address_defendant' => $details['address_defendant'],
        'title_deed' => $title_deed,
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );

    return $title_deed;

}

function encroachment($details, $final_pdf)
{

    $title_deed = $_SESSION['title_deed'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $encroachment = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'defendant_name' => $details['defendant_name'],
        'address_defendant' => $details['address_defendant'],
        'propert_encroached' => $details['propert_encroached'],
        'title_deed' => $title_deed,
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );

    return $encroachment;

}

function trespassing($details, $final_pdf)
{

    $title_deed = $_SESSION['title_deed'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $trespassing = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'defendant_name' => $details['defendant_name'],
        'address_defendant' => $details['address_defendant'],
        'nature_trespassing' => $details['nature_trespassing'],
        'trespassing_occured' => $details['trespassing_occured'],
        'detail_trespassing' => $details['detail_trespassing'],
        'title_deed' => $title_deed,
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );

    return $trespassing;

}

function administration($details, $final_pdf)
{
    $communication = $_SESSION['communication'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $administration = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'department_name' => $details['department_name'],
        'address_department' => $details['address_department'],
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,
        'communication' => $communication,

    );
    return $administration;

}

function lessor_dispute($details, $final_pdf)
{
    $agreement_attachment = $_SESSION['agreement_attachment'] ?? '';
    $previous_notice = $_SESSION['previous_notice'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $lessor_dispute = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'complainant_basic' => '',
        'details_complainant_basic' => '',
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_defendant' => $details['address_defendant'],
        'complaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,
        'aggreement_attachment' => $agreement_attachment,
        'previous_attachment' => $previous_notice,

    );

    return $lessor_dispute;

}

function termination_rental($details, $final_pdf)
{

    $agreement_attachment = $_SESSION['agreement_attachment'] ?? '';
    $previous_notice = $_SESSION['previous_notice'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $termination_rental = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'first_party' => '',
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_defendant' => $details['address_defendant'],
        'attachment_agreement' => $agreement_attachment,
        'previous_notice' => $previous_notice,
        'reason_termination' => $details['reason_termination'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );
    return $termination_rental;
}

function arbitration_rental($details, $final_pdf)
{

    $agreement_attachment = $_SESSION['agreement_attachment'] ?? '';
    $previous_notice = $_SESSION['previous_notice'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $arbitration_rental = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'first_party' => '',
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_defendant' => $details['address_defendant'],
        'attachment_agreement' => $agreement_attachment,
        'previous_notice' => $previous_notice,
        'name' => $details['name'],
        'position' => $details['position'],
        'compaint' => $details['complaint'],
        'relief' => $details['relief'],
        'audio_file' => $audioFile,

    );
    return $arbitration_rental;
}

function delay_in_construction($details, $final_pdf)
{

    $agreement_attachment = $_SESSION['agreement_attachment'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $delay_in_construction = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'details_complainant' => '',
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_defendant' => $details['address_defendant'],
        'details_project' => $details['details_project'],
        'attachment_agreement' => $agreement_attachment,
        'complaint' => $details['complaint'],
        'audio_file' => $audioFile,
    );

    return $delay_in_construction;
}

function divorce_application($details, $final_pdf)
{

    $marriage = $_SESSION['marriage'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $divorce_application = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'name_spouse' => $details['name_spouse'],
        'address_spouse' => $details['address_spouse'],
        'reason_divorce' => $details['reason_divorce'],
        'claim_divorce' => $details['claim_divorce'],
        'relief' => $details['relief'],
        'marriage' => $marriage,
        'audio_file' => $audioFile,

    );
    return $divorce_application;
}

function agreement_draft($details, $final_pdf)
{

    $adhar_copy = $_SESSION['adhar_copy'] ?? '';
    $audioFile = $_SESSION['audioFile'] ?? '';

    $agreement_draft = array(

        'user_id' => $details['user_id'],
        'first_name' => $details['firstname'],
        'last_name' => $details['lastname'],
        'dob' => $details['dob'],
        'email' => $details['email'],
        'phone' => $details['phone'],
        'pincode' => $details['pincode'],
        'state' => $details['state'],
        'address' => $details['address'],
        'adhar_front' => $details['adhar_front'],
        'adhar_back' => $details['adhar_back'],
        'company_name' => $details['company_name'],
        'address_company' => $details['address_company'],
        'purpose_anement' => $details['purpose_anement'],
        'term_agreement' => $details['term_agreement'],
        'lock_period' => $details['lock_period'],
        'jurisdiction' => $details['jurisdiction'],
        'rent' => $details['rent'],
        'deposit' => $details['deposit'],
        'adhar_copy' => $adhar_copy,
        'audio_file' => $audioFile,

    );
    return $agreement_draft;

}
