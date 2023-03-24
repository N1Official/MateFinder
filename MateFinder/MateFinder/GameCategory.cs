using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MateFinder
{
    internal class GameCategory
    {
        private int _game_id;
        private int _category_id;
        public int game_id { get => _game_id; set => _game_id = value; }
        public int category_id { get => _category_id; set => _category_id = value; }
    }
}
