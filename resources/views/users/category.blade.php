  <select data-placeholder="Select product" style="width:350px;" class="chosen-select" tabindex="5">
            <option value=""></option>
            @foreach ($divisions as $division)
                {{'<optgroup value="'.$division->id.'" label="'.$division->name.'">' }}
             @foreach ($districts as $district)   
                {{'<option>'.$district->name.'</option>'}}
             @endforeach                
              </optgroup>
            @endforeach
            </select>