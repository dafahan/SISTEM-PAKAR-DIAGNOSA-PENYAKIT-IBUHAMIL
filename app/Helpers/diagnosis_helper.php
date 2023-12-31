<?php 
// app/Helpers/diagnosis.php


if (!function_exists('diagnose')) {
    function diagnose($symptoms)
    {
        $ruleModel = new \App\Models\RulesModel();

        // Fetch all rules from the database
        $rules = $ruleModel->findAll();
        foreach ($rules as &$rule) {
            $rule['executed'] = false;
        }
        // Initialize an empty array to store diagnosed diseases
        $diagnosedDiseases;

        // Call the rule execution engine
        rule_execution_engine($symptoms, $rules, $diagnosedDiseases);

        return $diagnosedDiseases;
    }

    function rule_execution_engine($symptoms, &$rules, &$diagnosedDiseases)
    {
        // Iterate through the rules
        foreach ($rules as &$rule) {
            // Check if the rule has not been executed and all prerequisites are met
            if (!$rule['executed'] && are_all_symptoms_present($symptoms, explode(',', $rule['rule']))) {
                // Mark the rule as executed
                $rule['executed'] = true;
                $diagnosedDiseases = $rule['penyakit'];
                rule_execution_engine($symptoms, $rules, $diagnosedDiseases);
            }
        }
    }
    

    function are_all_symptoms_present($observedSymptoms, $requiredSymptoms)
    {
        // Check if all required symptoms are present in the observed symptoms
        return count(array_intersect($observedSymptoms, $requiredSymptoms)) === count($requiredSymptoms);
    }
}
