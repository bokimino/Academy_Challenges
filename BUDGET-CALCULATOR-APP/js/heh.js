expenseSubmit.click(function (event) {
    event.preventDefault();

    let expenseName = expenseInput.val();
    let expenseValue = parseFloat(amountInput.val());

    if (!table) {
        // ... your existing table creation code ...
    }

    let newRow = $("<tr>");
    newRow.append($("<td>").text(expenseName));
    newRow.append($("<td>").text(expenseValue));
    newRow.append($("<button>").text('Edit').addClass("btn btn-success"));
    newRow.append($("<button>").text('Delete').addClass("btn btn-danger"));

    table.find("tbody").append(newRow);

    let currentBalance = parseFloat(balanceAmount.text());
    balanceAmount.text(currentBalance - expenseValue);

    // Update total expenses
    totalExpenses += expenseValue;
    expenseField.text(totalExpenses);

    expenseInput.val("");
    amountInput.val("");

    newRow.find(".btn-danger").click(function (event) {
        deleteExpense(newRow, expenseValue);
    });

    function deleteExpense(rowToDelete, expenseValue) {
        // Remove the rowToDelete from the table
        rowToDelete.remove();
        balanceAmount.text(currentBalance);
        // Deduct the deleted expense from the total expenses
        totalExpenses -= expenseValue;
        expenseField.text(totalExpenses);
    }

    newRow.find(".btn-success").click(function (event) {
        editExpense(newRow, expenseName, expenseValue);
    });

    function editExpense(rowToEdit, expenseName, expenseValue) {
        expenseInput.val(expenseName);
        amountInput.val(expenseValue);
        rowToEdit.remove();
        balanceAmount.text(currentBalance);
        // Deduct the edited expense from the total expenses
        totalExpenses -= expenseValue;
        expenseField.text(totalExpenses);
    }
});