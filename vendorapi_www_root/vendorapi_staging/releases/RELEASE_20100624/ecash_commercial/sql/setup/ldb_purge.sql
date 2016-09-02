-- This script will wipe the data from an eCash ldb database
-- and leave it with just the reference data.
TRUNCATE ach;
TRUNCATE ach_batch;
TRUNCATE ach_company;
TRUNCATE ach_exception;
TRUNCATE ach_report;
TRUNCATE agent_affiliation;
TRUNCATE agent_affiliation_event_schedule;
TRUNCATE agent_action;
TRUNCATE application_flag;
TRUNCATE application_field;
TRUNCATE application_audit;
TRUNCATE application_tags;
TRUNCATE arrangement_history;
TRUNCATE api_payment;
TRUNCATE arrangement_history;
TRUNCATE bureau_inquiry;
TRUNCATE campaign_info;
TRUNCATE current_queue_status;
TRUNCATE comment;
TRUNCATE company_property;
TRUNCATE customer;
TRUNCATE document;
TRUNCATE dda_history;
TRUNCATE demographics;
TRUNCATE do_not_loan_audit;
TRUNCATE do_not_loan_flag;
TRUNCATE do_not_loan_flag_override;
TRUNCATE document_queue;
TRUNCATE debt_company_event_schedule;
TRUNCATE debt_company;
TRUNCATE email_queue_report;
TRUNCATE email_response_footer;
TRUNCATE event_amount;
TRUNCATE event_schedule;
TRUNCATE ext_collections_batch;
TRUNCATE ext_collections;
TRUNCATE ext_corrections;
TRUNCATE follow_up;
TRUNCATE fraud_application;
TRUNCATE fraud_condition;
TRUNCATE fraud_proposition;
TRUNCATE fraud_rule;
TRUNCATE incoming_email_queue;
TRUNCATE loan_action_history;
TRUNCATE n_escalated_queue_entry;
TRUNCATE n_queue_entry;
TRUNCATE n_queue_history;
TRUNCATE n_time_sensitive_queue_entry;
TRUNCATE open_advances_report;
TRUNCATE personal_reference;
TRUNCATE process_log;
TRUNCATE sreport;
TRUNCATE sreport_data;
TRUNCATE queue;
TRUNCATE queue_history;
TRUNCATE react_affiliation;
TRUNCATE request_log;
TRUNCATE reports_dda_history;
TRUNCATE resolve_flash_report;
TRUNCATE resolve_payments_due_report;
TRUNCATE resolve_daily_cash_report;
TRUNCATE resolve_ar_report;
TRUNCATE status_history;
TRUNCATE session;
TRUNCATE soap_log;
TRUNCATE site;
TRUNCATE sreport;
TRUNCATE sreport_data;
TRUNCATE sreport_send_status_history;
TRUNCATE sreport_status_history;
TRUNCATE standby;
TRUNCATE transaction_register;
TRUNCATE transaction_ledger;
TRUNCATE transaction_history;
TRUNCATE unassociated_incoming_email;
TRUNCATE vehicle;
DELETE FROM application;

-- NADA Tables 
TRUNCATE nada_accessory_body_include;
TRUNCATE nada_accessory_body_unavailable;
TRUNCATE nada_accessory_category;
TRUNCATE nada_accessory_description;
TRUNCATE nada_accessory_exclude;
TRUNCATE nada_accessory_include;
TRUNCATE nada_accessory_value;
TRUNCATE nada_accessory_vin;
TRUNCATE nada_attribute_type;
TRUNCATE nada_book_flag;
TRUNCATE nada_gvw_rating;
TRUNCATE nada_mileage;
TRUNCATE nada_region;
TRUNCATE nada_state;
TRUNCATE nada_ton_code;
TRUNCATE nada_truck_duty;
TRUNCATE nada_value_type;
TRUNCATE nada_vehicle_alternate;
TRUNCATE nada_vehicle_attribute;
TRUNCATE nada_vehicle_description;
TRUNCATE nada_vehicle_segment;
TRUNCATE nada_vehicle_value;
TRUNCATE nada_vehicle_vin;

-- show table status
