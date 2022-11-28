=begin
FDX V4.6

## FDX compliance  The Core Exchange API specifications are a subset of the Financial Data Exchange (FDX) API specification, the usage thereof (or any part thereof) constitutes acceptance of the FDX API License Agreement, which can be found at https://financialdataexchange.org/. The FDX API specification is distributed exclusively by FDX. Modifications to eliminate required or conditional elements prescribed in the FDX API Certification Use Cases will render any implementations using said modifications non-conformant with the FDX API Certification Use Cases. Please note that building the FDX-compliant Core Exchange API and permitting Plaid to call your build constitutes acceptance of the FDX end user license agreement, which can be found at https://financialdataexchange.org/. The full FDX API standard specification is distributed exclusively by FDX.  ## Download the specification  To view this specification and documentation as an openapi yaml file, see [the public Core Exchange Github repository](https://github.com/plaid/core-exchange/blob/main/dist/versions).  This specification contains the following endpoints:    - `/customer/current`    - `/accounts`    - `/accounts/{accountId}`    - `/accounts/{accountId}/payment-networks`    - `/accounts/{accountId}/contact`    - `/accounts/{accountId}/transactions` 

The version of the OpenAPI document: 4.6.0
Contact: dataconnectivity@plaid.com
Generated by: https://github.com/openapitools/openapi-generator.git

=end

class InitTables < ActiveRecord::Migration
  def change
    create_table "account_contact".pluralize.to_sym, id: false do |t|
      t.string :holders
      t.string :emails
      t.string :addresses
      t.string :telephones

      t.timestamps
    end

    create_table "account_descriptor".pluralize.to_sym, id: false do |t|
      t.string :account_id
      t.string :account_type
      t.string :account_number_display
      t.string :product_name
      t.string :nickname
      t.string :status
      t.string :currency

      t.timestamps
    end

    create_table "account_holder".pluralize.to_sym, id: false do |t|
      t.string :name
      t.string :relationship

      t.timestamps
    end

    create_table "account_holder_all_of".pluralize.to_sym, id: false do |t|
      t.string :relationship

      t.timestamps
    end

    create_table "account_holder_relationship".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "account_not_found".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "account_not_found_all_of".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "account_payment_network".pluralize.to_sym, id: false do |t|
      t.string :bank_id
      t.string :identifier
      t.string :type
      t.boolean :transfer_in
      t.boolean :transfer_out

      t.timestamps
    end

    create_table "account_payment_network_list".pluralize.to_sym, id: false do |t|
      t.string :page
      t.string :payment_networks

      t.timestamps
    end

    create_table "account_payment_network_list_all_of".pluralize.to_sym, id: false do |t|
      t.string :payment_networks

      t.timestamps
    end

    create_table "account_type".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "account_with_descriptor".pluralize.to_sym, id: false do |t|
      t.string :deposit_account
      t.string :loan_account
      t.string :loc_account
      t.string :investment_account
      t.string :insurance_account
      t.string :annuity_account

      t.timestamps
    end

    create_table "account_with_descriptor_one_of".pluralize.to_sym, id: false do |t|
      t.string :deposit_account

      t.timestamps
    end

    create_table "account_with_descriptor_one_of_1".pluralize.to_sym, id: false do |t|
      t.string :loan_account

      t.timestamps
    end

    create_table "account_with_descriptor_one_of_2".pluralize.to_sym, id: false do |t|
      t.string :loc_account

      t.timestamps
    end

    create_table "account_with_descriptor_one_of_3".pluralize.to_sym, id: false do |t|
      t.string :investment_account

      t.timestamps
    end

    create_table "account_with_descriptor_one_of_4".pluralize.to_sym, id: false do |t|
      t.string :insurance_account

      t.timestamps
    end

    create_table "account_with_descriptor_one_of_5".pluralize.to_sym, id: false do |t|
      t.string :annuity_account

      t.timestamps
    end

    create_table "account_with_details".pluralize.to_sym, id: false do |t|
      t.string :deposit_account
      t.string :loan_account
      t.string :loc_account

      t.timestamps
    end

    create_table "account_with_details_one_of".pluralize.to_sym, id: false do |t|
      t.string :deposit_account

      t.timestamps
    end

    create_table "account_with_details_one_of_1".pluralize.to_sym, id: false do |t|
      t.string :loan_account

      t.timestamps
    end

    create_table "account_with_details_one_of_2".pluralize.to_sym, id: false do |t|
      t.string :loc_account

      t.timestamps
    end

    create_table "accounts".pluralize.to_sym, id: false do |t|
      t.string :page
      t.string :accounts

      t.timestamps
    end

    create_table "accounts_all_of".pluralize.to_sym, id: false do |t|
      t.string :accounts

      t.timestamps
    end

    create_table "address".pluralize.to_sym, id: false do |t|
      t.string :line1
      t.string :line2
      t.string :line3
      t.string :city
      t.string :state
      t.string :postal_code
      t.string :country

      t.timestamps
    end

    create_table "currency".pluralize.to_sym, id: false do |t|
      t.string :currency_code

      t.timestamps
    end

    create_table "customer_name".pluralize.to_sym, id: false do |t|
      t.string :first
      t.string :middle
      t.string :last
      t.string :suffix
      t.string :prefix

      t.timestamps
    end

    create_table "customer_name_all_of".pluralize.to_sym, id: false do |t|
      t.string :prefix

      t.timestamps
    end

    create_table "customer_not_authorized".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "customer_not_authorized_all_of".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "customer_with_id".pluralize.to_sym, id: false do |t|
      t.string :customer_id

      t.timestamps
    end

    create_table "customer_with_name".pluralize.to_sym, id: false do |t|
      t.string :name

      t.timestamps
    end

    create_table "debit_credit_memo".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "delivery_address".pluralize.to_sym, id: false do |t|
      t.string :line1
      t.string :line2
      t.string :line3
      t.string :city
      t.string :state
      t.string :postal_code
      t.string :country

      t.timestamps
    end

    create_table "deposit_account".pluralize.to_sym, id: false do |t|
      t.string :account_id
      t.string :account_type
      t.string :account_number_display
      t.string :product_name
      t.string :nickname
      t.string :status
      t.string :currency
      t.Float :current_balance
      t.Float :available_balance

      t.timestamps
    end

    create_table "deposit_account_all_of".pluralize.to_sym, id: false do |t|
      t.Float :current_balance
      t.Float :available_balance

      t.timestamps
    end

    create_table "deposit_transaction".pluralize.to_sym, id: false do |t|
      t.string :transaction_id
      t.string :reference_transaction_id
      t.datetime :posted_timestamp
      t.datetime :transaction_timestamp
      t.string :description
      t.string :debit_credit_memo
      t.string :category
      t.string :sub_category
      t.string :status
      t.Float :amount
      t.Float :foreign_amount
      t.string :foreign_currency
      t.string :transaction_type
      t.string :payee
      t.integer :check_number

      t.timestamps
    end

    create_table "deposit_transaction_all_of".pluralize.to_sym, id: false do |t|
      t.string :transaction_type
      t.string :payee
      t.integer :check_number

      t.timestamps
    end

    create_table "deposit_transaction_type".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "error".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "individual_name".pluralize.to_sym, id: false do |t|
      t.string :first
      t.string :middle
      t.string :last
      t.string :suffix

      t.timestamps
    end

    create_table "interest_rate_type".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "internal_server_error".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "internal_server_error_all_of".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "invalid_date_range".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "invalid_date_range_all_of".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "invalid_input_error".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "invalid_input_error_all_of".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "invalid_input_errors".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "invalid_start_or_end_date".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "invalid_start_or_end_date_all_of".pluralize.to_sym, id: false do |t|
      t.string :code
      t.string :message

      t.timestamps
    end

    create_table "iso3166_country_code".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "iso4217_code".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "loan_account".pluralize.to_sym, id: false do |t|
      t.string :account_id
      t.string :account_type
      t.string :account_number_display
      t.string :product_name
      t.string :nickname
      t.string :status
      t.string :currency
      t.string :account_number
      t.Float :principal_balance
      t.Float :escrow_balance
      t.Float :original_principal
      t.datetime :originating_date
      t.integer :loan_term
      t.Float :next_payment_amount
      t.datetime :next_payment_date
      t.Float :last_payment_amount
      t.datetime :last_payment_date
      t.datetime :maturity_date
      t.Float :interest_paid_year_to_date
      t.Float :interest_rate
      t.string :interest_rate_type

      t.timestamps
    end

    create_table "loan_account_all_of".pluralize.to_sym, id: false do |t|
      t.string :account_number
      t.Float :principal_balance
      t.Float :escrow_balance
      t.Float :original_principal
      t.datetime :originating_date
      t.integer :loan_term
      t.Float :next_payment_amount
      t.datetime :next_payment_date
      t.Float :last_payment_amount
      t.datetime :last_payment_date
      t.datetime :maturity_date
      t.Float :interest_paid_year_to_date
      t.Float :interest_rate
      t.string :interest_rate_type

      t.timestamps
    end

    create_table "loan_transaction".pluralize.to_sym, id: false do |t|
      t.string :transaction_id
      t.string :reference_transaction_id
      t.datetime :posted_timestamp
      t.datetime :transaction_timestamp
      t.string :description
      t.string :debit_credit_memo
      t.string :category
      t.string :sub_category
      t.string :status
      t.Float :amount
      t.Float :foreign_amount
      t.string :foreign_currency
      t.string :transaction_type

      t.timestamps
    end

    create_table "loan_transaction_all_of".pluralize.to_sym, id: false do |t|
      t.string :transaction_type

      t.timestamps
    end

    create_table "loan_transaction_type".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "loc_account".pluralize.to_sym, id: false do |t|
      t.string :account_id
      t.string :account_type
      t.string :account_number_display
      t.string :product_name
      t.string :nickname
      t.string :status
      t.string :currency
      t.Float :credit_line
      t.Float :available_credit
      t.Float :next_payment_amount
      t.datetime :next_payment_date
      t.Float :principal_balance
      t.Float :current_balance
      t.Float :minimum_payment_amount
      t.Float :last_payment_amount
      t.datetime :last_payment_date
      t.Float :past_due_amount
      t.Float :last_stmt_balance
      t.datetime :last_stmt_date
      t.Float :purchases_apr
      t.Float :advances_apr

      t.timestamps
    end

    create_table "loc_account_all_of".pluralize.to_sym, id: false do |t|
      t.Float :credit_line
      t.Float :available_credit
      t.Float :next_payment_amount
      t.datetime :next_payment_date
      t.Float :principal_balance
      t.Float :current_balance
      t.Float :minimum_payment_amount
      t.Float :last_payment_amount
      t.datetime :last_payment_date
      t.Float :past_due_amount
      t.Float :last_stmt_balance
      t.datetime :last_stmt_date
      t.Float :purchases_apr
      t.Float :advances_apr

      t.timestamps
    end

    create_table "loc_transaction".pluralize.to_sym, id: false do |t|
      t.string :transaction_id
      t.string :reference_transaction_id
      t.datetime :posted_timestamp
      t.datetime :transaction_timestamp
      t.string :description
      t.string :debit_credit_memo
      t.string :category
      t.string :sub_category
      t.string :status
      t.Float :amount
      t.Float :foreign_amount
      t.string :foreign_currency
      t.string :transaction_type
      t.integer :check_number

      t.timestamps
    end

    create_table "loc_transaction_all_of".pluralize.to_sym, id: false do |t|
      t.string :transaction_type
      t.integer :check_number

      t.timestamps
    end

    create_table "loc_transaction_type".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "page_metadata".pluralize.to_sym, id: false do |t|
      t.string :next_offset

      t.timestamps
    end

    create_table "paginated_array".pluralize.to_sym, id: false do |t|
      t.string :page

      t.timestamps
    end

    create_table "payment_network_type".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "telephone_number".pluralize.to_sym, id: false do |t|
      t.string :type
      t.string :country
      t.string :number

      t.timestamps
    end

    create_table "telephone_number_type".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "transaction".pluralize.to_sym, id: false do |t|
      t.string :transaction_id
      t.string :reference_transaction_id
      t.datetime :posted_timestamp
      t.datetime :transaction_timestamp
      t.string :description
      t.string :debit_credit_memo
      t.string :category
      t.string :sub_category
      t.string :status
      t.Float :amount
      t.Float :foreign_amount
      t.string :foreign_currency

      t.timestamps
    end

    create_table "transaction_status".pluralize.to_sym, id: false do |t|

      t.timestamps
    end

    create_table "transactions".pluralize.to_sym, id: false do |t|
      t.string :page
      t.string :transactions

      t.timestamps
    end

    create_table "transactions_all_of".pluralize.to_sym, id: false do |t|
      t.string :transactions

      t.timestamps
    end

  end
end
