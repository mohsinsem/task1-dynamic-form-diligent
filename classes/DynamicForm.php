<?php
// Define a class
class DynamicForm
{
    // Constructor
    public function __construct($fields = [])
    {
        foreach ($fields as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * Generate form HTML based on the received data
     *
     * @param array $data
     * @return string
     */
    protected function generateForm($data)
    {
        $formHtml = '<form method="POST" action="submit_form.php">';

        foreach ($data as $field) {
            switch ($field['type']) {
                case 'text':
                    $formHtml .= '<label for="' . htmlspecialchars($field['name']) . '">' . htmlspecialchars($field['label']) . '</label>';
                    $formHtml .= '<input type="text" name="' . htmlspecialchars($field['name']) . '" id="' . htmlspecialchars($field['name']) . '" />';
                    break;
                case 'email':
                    $formHtml .= '<label for="' . htmlspecialchars($field['name']) . '">' . htmlspecialchars($field['label']) . '</label>';
                    $formHtml .= '<input type="email" name="' . htmlspecialchars($field['name']) . '" id="' . htmlspecialchars($field['name']) . '" />';
                    break;
                case 'select':
                    $formHtml .= '<label for="' . htmlspecialchars($field['name']) . '">' . htmlspecialchars($field['label']) . '</label>';
                    $formHtml .= '<select name="' . htmlspecialchars($field['name']) . '" id="' . htmlspecialchars($field['name']) . '">';
                    foreach ($field['options'] as $option) {
                        $formHtml .= '<option value="' . htmlspecialchars($option) . '">' . htmlspecialchars($option) . '</option>';
                    }
                    $formHtml .= '</select>';
                    break;
                    // Add more cases for different input types if needed
            }
            $formHtml .= '<br />';
        }

        $formHtml .= '<input type="submit" value="Submit" />';
        $formHtml .= '</form>';

        return $formHtml;
    }
}
?>
