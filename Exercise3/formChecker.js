document.addEventListener("DOMContentLoaded",() =>
{

  console.log('click');
  let email = document.querySelector("#email");
	let password = document.querySelector("#password");
  let minecraft = document.querySelector("#minecraft");
	let computerparts = document.querySelector("#Computerparts");
  let steam = document.getElementById("#steam");

  console.log('email',email);
  console.log('password',password);
  console.log('minecraft',minecraft);
  console.log('computerparts',computerparts);
  console.log('steam',steam);

  document.querySelector("#buttonfield").addEventListener("onsubmit",(e) =>
  {

    console.log('email',email);
    console.log('password',password);
    console.log('minecraft',minecraft);
    console.log('computerparts',computerparts);
    console.log('steam',steam);

    if (email.value == null)
    {
      alert("need a vaild email");
      exit();
    }
    else if (password.value == null)
    {
      alert("need a vaild password");
      exit();
    }
    else if (minecraft.value < 0)
    {
      alert("need a vaild minecraft");
      exit();
    }
    else if (computerparts.value < 0)
    {
      alert("need a vaild computer parts");
      exit();
    }
    else if (steam.value < 0)
    {
      alert("need a vaild steam");
      exit();
    }
    console.log('click');
  });
});
