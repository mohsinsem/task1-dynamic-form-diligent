<!-- Modal -->
<div class="modal fade d-example-modal-lg" id="dynamicFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content modal-lg">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Dynamic Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div id="form-builder">
               <h3>Dynamic Form Builder</h3>
               <div id="form-controls">
                  <button id="add-text" class="btn btn-info btn-sm">Add Text Input</button>
                  <button id="add-select" class="btn btn-info btn-sm">Add Select Box</button>
                  <button id="add-textarea" class="btn btn-info btn-sm">Add Textarea</button>
                  <button id="show-radio-form" class="btn btn-info btn-sm">Add Radio Buttons</button>
                  <button id="add-checkbox" class="btn btn-info btn-sm">Add Checkboxes</button>
               </div>
               <form id="dynamic-form" action="javascript:void(0)" method="POST">
                  <div id="form-elements"></div>

                  <div id="radio-form" style="display:none;">
                    <label for="group-label">Group Label:</label>
                    <input type="text" class="form-control" id="group-label" placeholder="Enter group label">
                    <br>
                
                    <label for="option-label">Option Label:</label>
                    <input type="text" class="form-control"  id="option-label" placeholder="Enter option label">
                    <button id="add-option" class="btn btn-info btn-sm">Add Option</button>
                    <br>
                
                    <ul id="option-list"></ul> <!-- This will display the added options -->
                
                    <button id="create-group" class="btn btn-info btn-sm">Create Radio Group</button>
                </div>
                
                <div id="radio-container"></div>
                <div id="checkbox-container"></div>

               </form>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>