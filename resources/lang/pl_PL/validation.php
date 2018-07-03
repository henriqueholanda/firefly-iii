<?php

/**
 * validation.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'iban'                           => 'To nie jest prawidłowy IBAN.',
    'source_equals_destination'      => 'The source account equals the destination account.',
    'unique_account_number_for_user' => 'Wygląda na to, że ten numer konta jest już w użyciu.',
    'unique_iban_for_user'           => 'Wygląda na to, że ten IBAN jest już w użyciu.',
    'deleted_user'                   => 'Ze względu na zabezpieczenia nie możesz się zarejestrować używając tego adresu e-mail.',
    'rule_trigger_value'             => 'Ta wartość jest nieprawidłowa dla wybranego wyzwalacza.',
    'rule_action_value'              => 'Ta wartość jest nieprawidłowa dla wybranej akcji.',
    'file_already_attached'          => 'Przesłany plik ":name" jest już dołączony do tego obiektu.',
    'file_attached'                  => 'Pomyślnie wgrano plik ":name".',
    'must_exist'                     => 'Identyfikator w polu :attribute nie istnieje w bazie danych.',
    'all_accounts_equal'             => 'Wszystkie konta w tym polu muszą być takie same.',
    'invalid_selection'              => 'Your selection is invalid.',
    'belongs_user'                   => 'Ta wartość jest nieprawidłowa dla tego pola.',
    'at_least_one_transaction'       => 'Wymaga co najmniej jednej transakcji.',
    'at_least_one_repetition'        => 'Need at least one repetition.',
    'require_repeat_until'           => 'Require either a number of repetitions, or an end date (repeat_until). Not both.',
    'require_currency_info'          => 'Treść tego pola jest nieprawidłowa bez informacji o walucie.',
    'equal_description'              => 'Opis transakcji nie powinien być równy globalnemu opisowi.',
    'file_invalid_mime'              => 'Plik ":name" jest typu ":mime", który nie jest akceptowany jako nowy plik do przekazania.',
    'file_too_large'                 => 'Plik ":name" jest zbyt duży.',
    'belongs_to_user'                => 'The value of :attribute is unknown.',
    'accepted'                       => ':attribute musi zostać zaakceptowany.',
    'bic'                            => 'To nie jest prawidłowy BIC.',
    'at_least_one_trigger'           => 'Rule must have at least one trigger.',
    'at_least_one_action'            => 'Rule must have at least one action.',
    'base64'                         => 'This is not valid base64 encoded data.',
    'model_id_invalid'               => 'The given ID seems invalid for this model.',
    'more'                           => ':attribute musi być większy od zera.',
    'active_url'                     => ':attribute nie jest prawidłowym adresem URL.',
    'after'                          => ':attribute musi być datą późniejszą od :date.',
    'alpha'                          => ':attribute może zawierać tylko litery.',
    'alpha_dash'                     => ':attribute może zawierać litery, cyfry oraz myślniki.',
    'alpha_num'                      => ':attribute może zawierać jedynie litery oraz cyfry.',
    'array'                          => ':attribute musi być tablicą.',
    'unique_for_user'                => 'Istnieje już wpis z tym :attribute.',
    'before'                         => ':attribute musi być wcześniejszą datą w stosunku do :date.',
    'unique_object_for_user'         => 'This name is already in use.',
    'unique_account_for_user'        => 'This account name is already in use.',
    'between.numeric'                => ':attribute musi się mieścić w zakresie pomiędzy :min a :max.',
    'between.file'                   => ':attribute musi się mieścić w zakresie pomiędzy :min oraz :max kilobajtów.',
    'between.string'                 => ':attribute musi zawierać pomiędzy :min a :max znaków.',
    'between.array'                  => ':attribute musi zawierać pomiędzy :min a :max elementów.',
    'boolean'                        => 'Pole :attribute musi być prawdą albo fałszem.',
    'confirmed'                      => 'Pole :attribute i jego potwierdzenie nie pasują do siebie.',
    'date'                           => ':attribute nie jest prawidłową datą.',
    'date_format'                    => ':attribute rożni się od formatu :format.',
    'different'                      => ':attribute oraz :other muszą się różnić.',
    'digits'                         => ':attribute musi składać się z :digits cyfr.',
    'digits_between'                 => ':attribute musi mieć od :min do :max cyfr.',
    'email'                          => ':attribute musi być prawidłowym adresem email.',
    'filled'                         => 'Pole :attribute jest wymagane.',
    'exists'                         => 'Wybrane :attribute są nieprawidłowe.',
    'image'                          => ':attribute musi być obrazkiem.',
    'in'                             => 'Wybrany :attribute jest nieprawidłowy.',
    'integer'                        => ':attribute musi być liczbą całkowitą.',
    'ip'                             => ':attribute musi być poprawnym adresem IP.',
    'json'                           => ':attribute musi być prawidłowym węzłem JSON.',
    'max.numeric'                    => ':attribute nie może być większy niż :max.',
    'max.file'                       => ':attribute nie może być większy niż :max kilobajtów.',
    'max.string'                     => ':attribute nie może być dłuższy od :max znaków.',
    'max.array'                      => ':attribute nie może zawierać więcej niż :max elementów.',
    'mimes'                          => ':attribute musi być plikiem typu :values.',
    'min.numeric'                    => ':attribute musi być przynajmniej :min.',
    'min.file'                       => ':attribute musi mieć przynajmniej :min kilobajtów.',
    'min.string'                     => ':attribute musi mieć co najmniej :min znaków.',
    'min.array'                      => ':attribute musi zawierać przynajmniej :min elementów.',
    'not_in'                         => 'Wybrany :attribute jest nieprawidłowy.',
    'numeric'                        => ':attribute musi byc liczbą.',
    'numeric_native'                 => 'The native amount must be a number.',
    'numeric_destination'            => 'The destination amount must be a number.',
    'numeric_source'                 => 'The source amount must be a number.',
    'regex'                          => 'Format :attribute jest nieprawidłowy.',
    'required'                       => 'Pole :attribute jest wymagane.',
    'required_if'                    => 'Pole :attribute jest wymagane gdy :other jest :value.',
    'required_unless'                => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with'                  => 'Pole :attribute jest wymagane gdy :values jest podana.',
    'required_with_all'              => 'Pole :attribute jest wymagane gdy :values jest podana.',
    'required_without'               => 'Pole :attribute jest wymagane gdy :values nie jest podana.',
    'required_without_all'           => ':attribute jest wymagane, gdy żadna z wartości :values nie jest podana.',
    'same'                           => 'Pole :attribute oraz :other muszą się zgadzać.',
    'size.numeric'                   => ':attribute musi być wielkości :size.',
    'amount_min_over_max'            => 'Minimalna kwota nie może być większa niż maksymalna kwota.',
    'size.file'                      => ':attribute musi mieć :size kilobajtów.',
    'size.string'                    => ':attribute musi mieć :size znaków.',
    'size.array'                     => ':attribute musi zawierać :size elementów.',
    'unique'                         => 'Taki :attribute już występuje.',
    'string'                         => ':attribute musi być ciągiem znaków.',
    'url'                            => 'Format :attribute jest nieprawidłowy.',
    'timezone'                       => ':attribute musi być prawidłową strefą.',
    '2fa_code'                       => 'Format :attribute jest nieprawidłowy.',
    'dimensions'                     => ':attribute ma nieprawidłowe wymiary obrazu.',
    'distinct'                       => 'Pole :attribute zawiera zduplikowaną wartość.',
    'file'                           => ':attribute musi być plikiem.',
    'in_array'                       => 'Pole :attribute nie istnieje w :other.',
    'present'                        => 'Pole :attribute musi być obecne.',
    'amount_zero'                    => 'The total amount cannot be zero.',
    'unique_piggy_bank_for_user'     => 'The name of the piggy bank must be unique.',
    'secure_password'                => 'This is not a secure password. Please try again. For more information, visit http://bit.ly/FF3-password-security.',
    'valid_recurrence_rep_type'      => 'Invalid repetition type for recurring transactions.',
    'valid_recurrence_rep_moment'    => 'Invalid repetition moment for this type of repetition.',
    'invalid_account_info'           => 'Invalid account information.',
    'attributes'                     => [
        'email'                   => 'adres e-mail',
        'description'             => 'opis',
        'amount'                  => 'kwota',
        'name'                    => 'nazwa',
        'piggy_bank_id'           => 'identyfikator skarbonki',
        'targetamount'            => 'kwota docelowa',
        'openingBalanceDate'      => 'data salda otwarcia',
        'openingBalance'          => 'bilans otwarcia',
        'match'                   => 'dopasowanie',
        'amount_min'              => 'minimalna kwota',
        'amount_max'              => 'maksymalna kwota',
        'title'                   => 'tytuł',
        'tag'                     => 'tag',
        'transaction_description' => 'opis transakcji',
        'rule-action-value.1'     => 'wartość akcji reguły #1',
        'rule-action-value.2'     => 'wartość akcji reguły #2',
        'rule-action-value.3'     => 'wartość akcji reguły #3',
        'rule-action-value.4'     => 'wartość akcji reguły #4',
        'rule-action-value.5'     => 'wartość akcji reguły #5',
        'rule-action.1'           => 'akcja reguły #1',
        'rule-action.2'           => 'akcja reguły #2',
        'rule-action.3'           => 'akcja reguły #3',
        'rule-action.4'           => 'akcja reguły #4',
        'rule-action.5'           => 'akcja reguły #5',
        'rule-trigger-value.1'    => 'wartość wyzwalacza reguły #1',
        'rule-trigger-value.2'    => 'wartość wyzwalacza reguły #2',
        'rule-trigger-value.3'    => 'wartość wyzwalacza reguły #3',
        'rule-trigger-value.4'    => 'wartość wyzwalacza reguły #4',
        'rule-trigger-value.5'    => 'wartość wyzwalacza reguły #5',
        'rule-trigger.1'          => 'wyzwalacz reguły #1',
        'rule-trigger.2'          => 'wyzwalacz reguły #2',
        'rule-trigger.3'          => 'wyzwalacz reguły #3',
        'rule-trigger.4'          => 'wyzwalacz reguły #4',
        'rule-trigger.5'          => 'wyzwalacz reguły #5',
    ],
];
