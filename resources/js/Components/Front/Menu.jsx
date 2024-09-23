import { useState } from "react";
import Logo from "../Logo";

export default function () {
  const [isOpen, toggleMenu] = useState(false);
  return (
    <>
      <button onClick={() => toggleMenu(!isOpen)}>Menu</button>
      {isOpen && (
        <div className="fixed inset-0 w-screen h-screen bg-primary text-white z-50">
          <div className="h-20 flex justify-between items-center container">
            <div id="navbar-logo">
              <a href="/">
                <Logo className="h-12 text-white" />
              </a>
            </div>
            <button onClick={() => toggleMenu(!isOpen)}>Menu</button>
          </div>
        </div>
      )}
    </>
  );
}
