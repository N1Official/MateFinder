using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MateFinder
{
    internal class GameRank
    {
        private int _rank_id;
        private int _game_id;
        private int _order;
        public int rank_id { get => _rank_id; set => _rank_id = value; }
        public int game_id { get => _game_id; set => _game_id = value; }
        public int order { get => _order; set => _order = value; }
    }
}
