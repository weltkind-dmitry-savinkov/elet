var CreditCalculator = (function () {
    var months       = 12,
        currentYear  = new Date().getFullYear()
        currentMonth = new Date().getMonth(),
        monthsName   = [
            'Январь',
            'Февраль',
            'Март',
            'Апрель',
            'Май',
            'Июнь',
            'Илюль',
            'Август',
            'Сентябрь',
            'Октябрь',
            'Ноябрь',
            'Декабрь'
        ];

    var templates = {
        'table': [
            '<table class="table-modal">',
                '<thead>',
                    '<th>Дата платежа</th>',
                    '<th>Сумма платежа</th>',
                    '<th>В погошение основного долга</th>',
                    '<th>В погошение процентов</th>',
                    '<th>Остаток долга после платежа</th>',
                '</thead>',
                    '<tbody>',
                        '{0}',
                    '</tbody>',
            '</trable>'
                ],
        'row': [
            '<tr>',
                '<td>{0}</td>',
                '<td>{1}</td>',
                '<td>{2}</td>',
                '<td>{3}</td>',
                '<td>{4}</td>',
           '</tr>'
        ]
                };

    return {
        'calculation': [],

        'annuityPayment': function (amount, rate, maturity) {
            var principalAmount     = amount,
                monthlyPayments     = maturity,
                calculation         = {'paymentsInfo': [], 'totalInfo': {}},
                stepMonth           = currentMonth,
                stepYear            = currentYear,
                totalMonthPayment   = 0,
                totalPrecentPayment = 0,
                amountPayment, monthPayment, interestPayment,
                precentPayment, basicPayment, paymentInfo, m;

            rate          = rate / 100,
            monthPayment  = CreditCalculator.annuityMonthlyPayment(
                amount,
                rate,
                maturity
            );

            amountPayment   = monthPayment * (maturity);
            interestPayment = amountPayment - amount;

            for (m = 1; m <= monthlyPayments; m++) {
                precentPayment   = principalAmount * rate / months;
                basicPayment     = monthPayment - precentPayment;
                principalAmount -= basicPayment;

                paymentInfo = {
                    'month': monthsName[stepMonth] + '/' + stepYear,
                    'monthPayment': monthPayment,
                    'basicPayment': basicPayment,
                    'precentPayment': precentPayment,
                    'principalAmount': principalAmount
                };

                calculation.paymentsInfo.push(paymentInfo);

                totalMonthPayment   += monthPayment;
                totalPrecentPayment += precentPayment;

                if (stepMonth === 11) {
                    stepMonth = 0;
                    stepYear++;
                } else {
                    stepMonth++;
                }
            }

            calculation.totalInfo = {
                'totalMonthPayment': totalMonthPayment.toFixed(2),
                'totalPrecentPayment': totalPrecentPayment.toFixed(2)
            };

            return calculation;
        },

        'annuityMonthlyPayment': function (amount, rate, maturity) {
            var a = amount * (rate / months);
            var b = 1 - (1 / Math.pow(1 + rate / months, maturity));

            return a/b;
        },

        'differentialPayment': function (amount, rate, maturity) {
            var monthsLeft      = maturity,
                principalAmount = amount,
                stepMonth       = currentMonth,
                stepYear        = currentYear,
                totalMonthPayment   = 0,
                totalPrecentPayment = 0,
                calculation     = {'paymentsInfo': [], 'totalInfo': {}},
                precentPayment, payment, dept, paymentInfo, m;

            for (m = 1; m <= maturity; m++) {
                dept             = principalAmount / monthsLeft,
                precentPayment   = (principalAmount * rate) / (100 * months);
                monthlyPayment   = dept + precentPayment;
                principalAmount -= dept;;

                paymentInfo = {
                    'month': monthsName[stepMonth] + '/' + stepYear,
                    'monthPayment': monthlyPayment,
                    'basicPayment': dept,
                    'precentPayment': precentPayment,
                    'principalAmount': principalAmount
                };

                calculation.paymentsInfo.push(paymentInfo);

                totalMonthPayment   += monthlyPayment;
                totalPrecentPayment += precentPayment;

                if (stepMonth === 11) {
                    stepMonth = 0;
                    stepYear++;
                } else {
                    stepMonth++;
                }

                monthsLeft--;
            }

            calculation.totalInfo = {
                'totalMonthPayment': totalMonthPayment.toFixed(2),
                'totalPrecentPayment': totalPrecentPayment.toFixed(2)
            };

            return calculation;
        },

        'renderTable': function (calculation) {
            var length = calculation.length,
                tr     = '',
                i      = 0;

            if (!length) {
                return false;
            }

            for (i = 0; i <= length - 1; i++) {
                tr += Core.formatString(
                    templates.row.join(''),
                    calculation[i].month,
                    calculation[i].monthPayment.toFixed(2),
                    calculation[i].basicPayment.toFixed(2),
                    calculation[i].precentPayment.toFixed(2),
                    calculation[i].principalAmount.toFixed(2)
                );
            }

            return Core.formatString(templates.table.join(''), tr);
        }
    };
})();