import ReactSvg from './../../img/react_svg'
const MainPageSection = () =>{
  return(
    <section className="mainPage">
      <div className="wrapper">
        <h1>Make your blog <span>online</span> </h1>
        <p>
          There is a blog about some really rediculus and not normal things but is get anourmas energy.
          There is a blog about some really rediculus and not normal things but is get anourmas energy.
          There is a blog about some really rediculus and not normal things but is get anourmas energy.
        </p>
        <form action="#">
          <button className="btn">Learn More</button>
        </form>
      </div>
      <div className="background">
        <ReactSvg/>
      </div>
    </section>
  )
}

export default MainPageSection