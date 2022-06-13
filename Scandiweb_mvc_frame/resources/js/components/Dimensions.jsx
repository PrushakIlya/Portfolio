const Dimensions = () => {
  return(
    <div className="selected">
      <div>
        <label htmlFor="height">Height (CM)</label>
        <input type="text" name="height" autoFocus/>
      </div>
      <div>
        <label htmlFor="width">Width (CM)</label>
        <input type="text" name="width"/>
      </div>
      <div>
        <label fohtmlFor="length">Length (CM)</label>
        <input type="text" name="length"/>
      </div>
    </div>
  )
}

export default Dimensions