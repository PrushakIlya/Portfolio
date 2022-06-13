import React, { useState } from "react"
import Dimensions from "./Dimensions"
import Size from "./Size"
import Weight from "./Weight"
import "../sass/selected.sass"

const Selected = () => {
  const [switcher,setSwitcher] = useState("")

  function check(){
    switch(switcher){
      case 'size' : return <Size/> 
      case 'weight' : return <Weight/> 
      case 'dimensions' : return <Dimensions/> 
    }
  }

  return(
    <>
    <label htmlFor="type_switcher">Type Switcher: </label>
    <select name="type_switcher" onChange={e=>setSwitcher(e.target.value)}>
      <option value="type" disabled selected>Type Switcher</option>
      <option value="size">Size</option>
      <option value="weight">Weight</option>
      <option value="dimensions">Dimensions</option>
    </select>
    {check()}
    </>
  )
}

export default Selected