$(document).ready(function () {
    let budget = $("#budget-input");
    let budgetSubmit = $("#budget-submit");
    let budgetAmount = $("#budget-amount");
    let balanceAmount = $("#balance-amount");
    let budgetFeedback = $(".budget-feedback");
    let expenseInput = $("#expense-input");
    let amountInput = $("#amount-input");
    let expenseSubmit = $("#expense-submit");
    let expenseField = $("#expense-amount");
    let table = null;
    let expenses = {};
    let totalExp = 0;


    function calculateExpenses() {
        let currentBalance = parseFloat(budgetAmount.text());
        totalExp = 0;

        for (const expense in expenses) {
            totalExp += expenses[expense];
        }

        expenseField.text(totalExp);
        balanceAmount.text(currentBalance - totalExp);
    }

    budgetSubmit.click(function (event) {
        event.preventDefault();
        const budgetValue = parseFloat(budget.val());

        if (isNaN(budgetValue) || budgetValue <= 0) {
            budgetFeedback.text("Value cannot be empty or negative");
            budgetFeedback.show();
        } else {
            budgetFeedback.hide();
            budgetAmount.text(budgetValue);
            balanceAmount.text(budgetValue);
            calculateExpenses();
        }
    });

    budget.focus(function () {
        budgetFeedback.hide();
    });

    expenseSubmit.click(function (event) {
        event.preventDefault();

        let expenseName = expenseInput.val();
        let expenseValue = parseFloat(amountInput.val());

        if (expenseName === '' || isNaN(expenseValue) || expenseValue <= 0) {
            alert("Expense name and amount must be filled and valid.");
            return;
        }

        if (!table) {
            table = $("<table>").addClass("table");
            let tableHeader = $("<thead>");
            let tableBody = $("<tbody>");
            let tableHeaderRow = $("<tr>");
            tableHeaderRow.append($("<th>").text("Expense"));
            tableHeaderRow.append($("<th>").text("Amount"));
            tableHeaderRow.append($("<th>").text("Action"));
            tableHeader.append(tableHeaderRow);
            table.append(tableHeader);
            table.append(tableBody);
            $("#expenseTable").append(table);
        }

        if (expenses[expenseName]) {
            totalExp -= expenses[expenseName];
            $("tr:contains(" + expenseName + ")").remove();
        }

        expenses[expenseName] = expenseValue;
        totalExp += expenseValue;



        let newRow = $("<tr>");
        newRow.append($("<td>").text(expenseName));
        newRow.append($("<td>").text(expenseValue));
        let editIcon = $("<i>").addClass("fas fa-pen-to-square p-1 text-primary");
        let deleteIcon = $("<i>").addClass("fas fa-trash p-1 text-danger");
        let iconsContainer = $("<div>").append(editIcon).append(deleteIcon);
        newRow.append($("<td>").append(iconsContainer));

        table.find("tbody").append(newRow);
        calculateExpenses();

        expenseInput.val("");
        amountInput.val("");

        newRow.find(".fa-trash").click(function (event) {
            deleteExpense(newRow, expenseName, expenseValue);
        });

        function deleteExpense(rowToDelete, expenseName, expenseValue) {
            rowToDelete.remove();
            delete expenses[expenseName];
            totalExp -= expenseValue;
            calculateExpenses();
        }

        newRow.find(".fa-pen-to-square").click(function (event) {
            editExpense(newRow, expenseName, expenseValue);
        });

        function editExpense(rowToEdit, expenseName, expenseValue) {
            expenseInput.val(expenseName);
            amountInput.val(expenseValue);
            rowToEdit.remove();
            delete expenses[expenseName];
            totalExp -= expenseValue;
            calculateExpenses();
        }
    });
});


