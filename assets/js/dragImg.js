const defaultBtn = document.querySelector("#default-btn");
const dropArea = document.querySelector(".drag-area");
const dragText = document.querySelector("header");
const body = document.querySelector("body");

//styled btn function upload img   
     function defaultBtnActive(){
       defaultBtn.click();
     }
     function fileView(file)
     {
      let    view= '<table class="table mb-0">';
        Object.keys(file).forEach(function(key) {
          view += `
          <tr class='pip'>
                <td class="tb-val"><img class='imageThumb' src= "${URL.createObjectURL(file[key])}" title= "${file[key].name}" ></td>
                <td class="tb-val title" data-title="${file[key].name}" ><p>${file[key].name}</p></td>
                <td class='tb-val remove' id='child'><button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
            </tr>`; 
        })
        view+='</table>';
        document.getElementById("viewImg").innerHTML = view;
        
     }
     function fileFunction(file)
     {
      if(file){
        fileView(file);
        $(".remove").click(function(){
            const img = $(this).siblings(".title").attr("data-title");  
                var obj =[];      
                for (let i=j = 0; i < file.length; i++) {
                    var name =file[i].name;
                    if (img!=name) {
                        obj[j]=file[i];
                        j++; 
                    }
                }
                    file=obj;
                    const dataTransfer = new DataTransfer();
                   for(i=0;i<file.length;i++){
                        dataTransfer.items.add(file[i]);
                    }
                    defaultBtn.files = dataTransfer.files;
                    $(this).parent(".pip").remove();
                    if( obj=='')
                    {
                      dropArea.classList.remove("active");
                      dropArea.innerHTML = ` <div id="viewImg" class="drag-area text-center p-3 overflow-auto">
                      <h6>Drag & Drop to Upload Image<br>Or<br></h6>
                      <button class="btn btn-primary" onclick="defaultBtnActive()" id="files">Click Here</button>
                      <input type="file" accept="image/*" name="file[]" id="default-btn" multiple hidden>                            
                      </div>`;
                    
                    }
        });
        }
     }
     
//upload image function
     defaultBtn.addEventListener("change", function(){
       var file = this.files;
       dropArea.classList.add("active");
       fileFunction(file);
    }
    );
    body.ondragover = (event) => {
    event.preventDefault();
    dropArea.classList.add("active");
    dropArea.innerHTML = ` <div id="viewImg" class="drag-area text-center p-3 overflow-auto">
                      <h6>Release To Upload Your Image</h6>
                      <input type="file" name="file[]" id="default-btn" multiple hidden>                            
                      </div>`};

  //on drag leave
  body.ondragleave = () => {
    dropArea.classList.remove("active");
    dropArea.innerHTML = ` <div id="viewImg" class="drag-area text-center p-3 overflow-auto">
                      <h6>Drag & Drop to Upload Image<br>Or<br></h6>
                      <button class="btn btn-primary" onclick="defaultBtnActive()" id="files">Click Here</button>
                      <input type="file" accept="image/*" name="file[]" id="default-btn" multiple hidden>                            
                      </div>`};

  //on drop
  body.ondrop = (event) => {
    event.preventDefault();
    file = event.dataTransfer.files;
    const dataTransfer = new DataTransfer();
                   for(i=0;i<file.length;i++){
                        dataTransfer.items.add(file[i]);
                    }
    defaultBtn.files = dataTransfer.files;
                
    fileFunction(file);
  }; 
  
        
