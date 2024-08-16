// script.js
$(document).ready(function() {
    let elementCount = 0;

    function addTextInput() {
        elementCount++;
        $('#form-elements').append(`
            <div class="form-element" data-id="${elementCount}">
                <label>Text Input ${elementCount}:</label>
                <input type="text" class="form-control" name="text${elementCount}" placeholder="Enter field name" />
                <button class="remove-element btn btn-danger">X</button>
            </div>
        `);
    }

    function addSelectBox() {
        elementCount++;
        $('#form-elements').append(`
            <div class="form-element" data-id="${elementCount}">
                <label>Select Box ${elementCount}:</label>
                <select class="form-control" name="select${elementCount}">
                    <option value="">Select an option</option>
                    
                </select>
                <button class="remove-element btn btn-danger">X</button>


                <div class="selectbox-options">
                    <label for="option-input">Option:</label>
                    <input type="text" id="option-input" placeholder="Enter new option">
                    
                    <button id="add-option" class="btn btn-info">Add Option</button>
                </div>
            </div>

        `);
    }

    function addTextarea() {
        elementCount++;
        $('#form-elements').append(`
            <div class="form-element" data-id="${elementCount}">
                <label>Textarea ${elementCount}:</label>
                <textarea class="form-control" name="textarea${elementCount}"></textarea>
                <button class="remove-element btn btn-danger">X</button>
            </div>
        `);
    }

    $('#add-text').click(function() {
        addTextInput();
    });

    $('#add-select').click(function() {
        addSelectBox();
    });

    $('#add-textarea').click(function() {
        addTextarea();
    });

    $(document).on('click', '.remove-element', function() {
        $(this).closest('.form-element').remove();
    });

    

    // dynamic ratdio buttons
    let options = [];
    let groupLabel = '';

    // Show the form when the button is clicked
    $('#show-radio-form').click(function() {
        $('#radio-form').toggle(); // Toggle the visibility of the form
        options = []; // Reset options array when the form is opened
        $('#option-list').empty(); // Clear the displayed options list
        $('#group-label').val(''); // Clear group label input field
        $('#option-label').val(''); // Clear option label input field
        groupLabel = ''; // Reset the current group label
    });

    // Set the group label when the input changes
    $('#group-label').on('input', function() {
        groupLabel = $(this).val();
    });

    // Add option to the list and array
    $('#add-option').click(function() {
        let optionLabel = $('#option-label').val();
        if (optionLabel) {
            options.push(optionLabel); // Add the option to the arrs    ay
            $('#option-list').append('<li>' + optionLabel + '</li>'); // Display added option
            $('#option-label').val(''); // Clear input field for next option
        }
    });

    // Create a new radio button group with a label and options
    $('#create-group').click(function() {
        if (groupLabel && options.length > 0) {
            let radioGroup = $('<div class="radio-group"></div>');
            radioGroup.append('<p>' + groupLabel + '</p>');

            // Create radio buttons with the added options
            options.forEach(function(option, index) {
                let optionId = groupLabel.toLowerCase().replace(/\s+/g, '-') + '-' + index;
                let radioOption = `
                    <label for="${optionId}">
                        <input type="radio" class="form-control" name="${groupLabel}" id="${optionId}" value="${option}">
                        ${option}
                    </label><br>
                `;
                radioGroup.append(radioOption);
            });

            // Append the group to the radio container
            $('#radio-container').append(radioGroup);
            options = []; // Reset options for the next group
            $('#option-list').empty(); // Clear the options display
            $('#radio-form').hide(); // Hide the form again
            $('#group-label').val(''); // Clear the group label input field
        } else {
            alert("Please enter a group label and at least one option.");
        }
    });


    //dynamic checkboxes
    var labelCount = 0;
    $('#add-checkbox').on('click', function() {
        labelCount++;
        var labelHtml = `
            <div class="checkbox-group">
                <label>Label ${labelCount}</label><br>
                <input type="text" class="form-control option-input-checkbox" placeholder="Add checkbox option"><br>
                <button class="add-option-checkbox btn btn-info btn-sm">Add Option</button>
                <div class="options-container"></div>
            </div>
        `;
        $('#checkbox-container').append(labelHtml);
    });

    $('#checkbox-container').on('click', '.add-option-checkbox', function() {
        var parent = $(this).closest('.checkbox-group');
        var optionValue = parent.find('.option-input-checkbox').val();
        if (optionValue.trim() !== '') {
            var checkboxHtml = `
                <label>
                    <input class="form-control" type="checkbox" name="${parent.find('label').text().trim()}">
                    ${optionValue}
                </label><br>
            `;
            parent.find('.options-container').append(checkboxHtml);
            parent.find('.option-input-checkbox').val('');
        }
    });

});

